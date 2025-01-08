<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

include("connectionClass.php");
include("encryption.php");
include_once("php-mailer/PHPMailerAutoload.php");
include_once('../includes/universal.php');


   


$ctx = new database();
$query = $ctx->selectData("email",array('id', 'userid', 'briefid', 'paymentid,status'),"status='pending'");

if ( $query['status'] == true && count($query['data']) > 0 ) {
    $data = $query['data'];
    foreach ($data as $item) {
        if ($item['userid'] != "") {
            // echo $item['userid'];
            email($item['userid'], 'leads', $item['id']);
        } else if ($item['briefid'] != "") {
            // echo $item['briefid'];            
            email($item['briefid'], 'brief', $item['id']);
        } else if ($item['paymentid'] != "") {
            // echo $item['paymentid'];
            email($item['paymentid'], 'payments', $item['id']);
        }
    }
} else {
    echo 'No Emails Pending';
}

function email($id,$table,$emailId) {

    $params = new universal();
    $site = $params->params()['url'];
    
    $ctx = new database();
    $query = $ctx->selectData($table,array(),"id=".$id);
    $data = $query['data'];

    $enc = new encryption();
    // Storing String
    $string = $table.",".$id.",".$data[0]['uuid'];
    $url = $enc->encrypt($string);

    $url = $site."data/view.php?value=".$url;
    
    $html = file_get_contents('../templates/signup-email.html');
    

    if ($table == "leads") {
        // Company Email Data
        $title = $data[0]['name']." Signup ".date("d/m/Y");
        $notification = "Great! ".$data[0]['name']." just finished the Registration Process.<br />Click on the button below to view details.";
        $subtitle = "Email: ".$data[0]['email']."<br>Phone: ".$data[0]['phone'];

        // Customer Email Data
        $emailTitle = "Welcome ". $data[0]['name']."!";
        $customerTitle = "Welcome ". $data[0]['name']."!";
        $customerSubtitle = "Thank you for your interest in Design Vikings.";
        $customerNotification = "Great! You are just 2 steps away to activate the 70% Flat discount offer!<br>Please process the required brief.<br><br>OR<br><br>Call us now at Tollfree:<a style='text-decoration:none; color:red; font-weight:bold;' href='tel:+1 817 533 6583'> +1 817 533 6583</a>";
        
        SendCompany($title, $ctx, $subtitle, $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $data[0]['email']);  
        
    }

    if ($table == "brief") {
        // Company Email Data
        $tx = $ctx->selectData("leads",array("name","email"),"id=".$data[0]['userid']);
        $lead = $tx['data'][0];
        $title =  $lead['name']." Brief Submitted! ".date("d/m/Y");
        $subtitle = "Logo Type: ".$data[0]['type']."<br>Name on Logo: ".$data[0]['logo'];
        $notification = "Great! ".$lead['name']." just finished the Project Brief.<br />Click on the button below to view details.";

        $emailTitle = "Brief Recorded";
        $customerTitle = "Great ". $lead['name']."!";
        $customerSubtitle = "Your ".$data[0]['type']." ".$data[0]['logo']." logo requirements are recorded.";
        $customerNotification = "You are just a step away to activate your 70% discount offer.<br>Please process the payment";

        SendCompany($title, $ctx, $subtitle, $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $lead['email']);  
        
    }

    if ($table == "payments"){
        // Company Email Data
        $title = $data[0]['name']." Payment Recorder ".date("d/m/Y");
        $subtitle = "Package Activated.<br>Order# DV-000".$data[0]['id']."-75/".date("m")."/".date("Y");
        $notification = "Great! ".$data[0]['name']." just finished the Payment Process.<br>Click on the button below to view details.";

        // Customer Email Data
        $emailTitle = "Payment Recorded";
        $customerTitle = "Great ". $data[0]['name']."!";
        $customerSubtitle = "Offer Activated on your order!<br> Your Order# <b style='color:green;'>DV-000".$data[0]['id']."-75/".date("m")."/".date("Y")."</b>";
        $customerNotification = "Thank you for processing the payment.<br>Your Dedicated Account Manager will contact you shortly.<br><br>OR<br><br>Call us any time at Tollfree:<a style='text-decoration:none; color:red; font-weight:bold;' href='tel:+1 817 533 6583'> +1 817 533 6583</a>";

        SendCompany($title, $ctx, $subtitle, $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $data[0]['email']);  
        

    }
    
}

// function to send to company
function SendCompany($title, $ctx, $subtitle,  $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $email ) {


    $search  = Array( "%Email.Title%", "%Logo.URL%", "%Site.Name%", "%Business.Address%", "%Phone.Number%", "%Email.Address%", "%Subtitle%", "%Customer.ViewDetailsURL%", "%Notification.Message%" );
    
    $replace = Array( $title, "https://designvikings.us/logo-design-19/assets/images/logo.png", "Design Vikings", "3200 14th St, Ste 414, Plano, TX 75074", "+1 817 533 6583", "report@designvikings.us", $subtitle, $url, $notification );
    
    $content = ProcessHTML($html, $search, $replace);

    $mail = new PHPMailer;
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 465 
    $mail->Username = "sales@designvikings.us";
    $mail->Password = "DKU#%6172";
    $mail->setFrom('sales@designvikings.us', 'Design Vikings');
    $mail->addAddress('sales@designvikings.us');    // Add a recipient
    $mail->addCC('admin@designvikings.us');
    $mail->Subject = $title.' - Design Vikings';
    $mail->Body = $content;
    $mail->IsHTML(true);
    
    if($mail->send()) {
        SendCustomer($emailTitle,$customerTitle,$customerSubtitle,$customerNotification,$email,$emailId,$ctx);
    } else {
        $ctx->updateRow("email",array("message"=>$mail->ErrorInfo),array("id"=>$emailId));
        $ctx->updateRow("email",array("status"=>"failed"),array("id"=>$emailId));
    }   
    
    

}

//function to send to customer
function SendCustomer($emailTitle, $title, $subtitle, $notification, $email, $emailId, $ctx) {

    $html = file_get_contents('../templates/customer-email.html');

    $search  = Array( "%Email.Title%", "%Logo.URL%", "%Site.Name%", "%Business.Address%", "%Phone.Number%", "%Email.Address%", "%Subtitle%", "%Notification.Message%" );
    
    $replace = Array( $title, "https://designvikings.us/assets/images/logo/logo.png", "Design Vikings", "3200 14th St, Ste 414, Plano, TX 75074", "+1 817 533 6583", "report@designvikings.us", $subtitle, $notification );
    
    $content = ProcessHTML($html, $search, $replace);

    $mail = new PHPMailer;
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 465 
    $mail->Username = "sales@designvikings.us";
    $mail->Password = "DKU#%6172";
    $mail->setFrom('sales@designvikings.us', 'Design Vikings');
    $mail->addAddress($email);    // Add a recipient
    // $mail->addCC('');
    $mail->Subject = $emailTitle.' - Design Vikings';
    $mail->Body = $content;
    $mail->IsHTML(true);
        
    if($mail->send()) {
        $ctx->updateRow("email",array("status"=>"sent","date_sent"=>date("Y-m-d H:i:s")),array("id"=>$emailId));
    } else {
        $ctx->updateRow("email",array("message"=>$mail->ErrorInfo),array("id"=>$emailId));
        $ctx->updateRow("email",array("status"=>"failed"),array("id"=>$emailId));
    }

}

//function to add to your function definitions. 
function ProcessHTML($string,$search,$replace)
{ 
    $processed_string = str_replace($search, $replace , $string);
    return $processed_string;
}


?>
