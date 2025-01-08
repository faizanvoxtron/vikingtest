<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once("connectionClass.php");
require_once("encryption.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require_once('universal.php');



$ctx = new database();
$query = $ctx->selectData("email", array('id', 'userid', 'briefid', 'paymentid', 'status'), array('status="pending"'));

if ($query['status'] == true && count($query['data']) > 0) {
    $data = $query['data'];
    foreach ($data as $item) {
        if ($item['userid'] != "") {
            // echo $item['userid'];
            email($item['userid'], 'leads', $item['id']);
        } else if ($item['briefid'] != "") {
            // echo $item['briefid'];            
            email($item['briefid'], 'briefs', $item['id']);
        } else if ($item['paymentid'] != "") {
            // echo $item['paymentid'];
            email($item['paymentid'], 'payments', $item['id']);
        }
    }
} else {
    echo 'No Emails Pending';
}

function email($id, $table, $emailId)
{

    $params = new universal();
    $site = $params->params()['url'];

    $ctx = new database();
    $query = $ctx->selectData($table, array(), array("id=" . $id));
    $data = $query['data'];

    $enc = new encryption();
    // Storing String
    $string = $table . "," . $id;
    $url = $enc->encrypt($string);

    $url = $site . "shopify-promotion/data/view.php?value=" . $url;

    $html = file_get_contents('templates/signup-email.html');


    if ($table == "leads") {
        // Company Email Data
        $title = $data[0]['name'] . " Signup " . date("d/m/Y");
        $notification = "Great! " . $data[0]['name'] . " just finished the Registration Process.<br />Click on the button below to view details.";
        $subtitle = "Email: " . $data[0]['email'] . "<br>Phone: " . $data[0]['phone'];

        // Customer Email Data
        $emailTitle = "Welcome " . $data[0]['name'] . "!";
        $customerTitle = "Welcome " . $data[0]['name'] . "!";
        $customerSubtitle = "Thank you for your interest in Design Vikings.";
        $customerNotification = "Great! You are just 2 steps away to activate the 70% Flat discount offer!<br>Please process the required brief.<br><br>OR<br><br>Call us now at:<a style='text-decoration:none; color:red; font-weight:bold;' href='tel:+1 817 533 6583'> +1 817 533 6583</a>";

        SendCompany($title, $ctx, $subtitle, $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $data[0]['email']);
    }

    if ($table == "briefs") {
        // Company Email Data
        $tx = $ctx->selectData("leads", array("name", "email"), array('id=' . $data[0]['UserId']));
        $lead = $tx['data'][0];
        $title =  $lead['name'] . " Brief Submitted! " . date("d/m/Y");
        $subtitle = "Company: " . $data[0]['company'];
        $notification = "Great! " . $lead['name'] . " just finished the Project Brief.<br />Click on the button below to view details.";

        $emailTitle = "Brief Recorded";
        $customerTitle = "Great " . $lead['name'] . "!";
        $customerSubtitle = "Your " . $data[0]['company'] . " shopify store requirements are recorded.";
        $customerNotification = "You are just a step away to activate your 70% discount offer.<br>Please process the payment";

        SendCompany($title, $ctx, $subtitle, $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $lead['email']);
    }

    if ($table == "payments") {
        // Company Email Data
        $title = $data[0]['name'] . " Payment Recorder " . date("d/m/Y");
        $subtitle = "Package Activated.<br>Order# DV-000" . $data[0]['id'] . "-75/" . date("m") . "/" . date("Y");
        $notification = "Great! " . $data[0]['name'] . " just finished the Payment Process.<br>Click on the button below to view details.";

        // Customer Email Data
        $emailTitle = "Payment Recorded";
        $customerTitle = "Great " . $data[0]['name'] . "!";
        $customerSubtitle = "Offer Activated on your order!<br> Your Order# <b style='color:green;'>DV-000" . $data[0]['id'] . "-75/" . date("m") . "/" . date("Y") . "</b>";
        $customerNotification = "Thank you for processing the payment.<br>Your Dedicated Account Manager will contact you shortly.<br><br>OR<br><br>Call us any time at:<a style='text-decoration:none; color:red; font-weight:bold;' href='tel:+1 817 533 6583'> +1 817 533 6583</a>";

        SendCompany($title, $ctx, $subtitle, $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $data[0]['email']);
    }
}

// function to send to company
function SendCompany($title, $ctx, $subtitle,  $url, $notification, $html, $emailId, $emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $email)
{


    $search  = array("%Email.Title%", "%Logo.URL%", "%Site.Name%", "%Business.Address%", "%Phone.Number%", "%Email.Address%", "%Subtitle%", "%Customer.ViewDetailsURL%", "%Notification.Message%");

    $replace = array($title, "https://designvikings.us/query/assets/images/email-logo.png", "Design Vikings", "3210 14th St, Plano, TX 75074", "+1 817 533 6583", "support@designvikings.us", $subtitle, $url, $notification);

    $content = ProcessHTML($html, $search, $replace);

    $mail = new PHPMailer(true);
    try {

        $mail->SMTPDebug = 0;
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = "tls"; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 465 
        $mail->Username = "sales@designvikings.us";
        $mail->Password = 'DKU#%6172';
        $mail->setFrom('sales@designvikings.us', 'Design Vikings');
        $mail->addAddress('sales@designvikings.us');     // Add a recipient
        // $mail->addCC('admin@designvikings.us');
        $mail->Subject = $title . ' - Design Vikings';
        $mail->Body = $content;
        $mail->IsHTML(true);


        $mail->Subject = $title . ' - Design Vikings';
        $mail->Body = $content;
        $mail->IsHTML(true);

        if ($mail->send()) {
            SendCustomer($emailTitle, $customerTitle, $customerSubtitle, $customerNotification, $email, $emailId, $ctx);
        } else {
            // Log the error and stop further attempts by marking the email as "failed" in the database.
            $ctx->updateRow("email", array("message" => $mail->ErrorInfo, "status" => "failed"), array("id=" . $emailId));
        }
        //     else {
        //     $ctx->updateRow("email",array("message"=>$mail->ErrorInfo),array("id=".$emailId));
        // }  

    } catch (Exception $e) {
        $ctx->updateRow("email", array("message" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"), array("id=" . $emailId));
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

//function to send to customer
function SendCustomer($emailTitle, $title, $subtitle, $notification, $email, $emailId, $ctx)
{

    $html = file_get_contents('templates/customer-email.html');

    $search  = array("%Email.Title%", "%Logo.URL%", "%Site.Name%", "%Business.Address%", "%Phone.Number%", "%Email.Address%", "%Subtitle%", "%Notification.Message%");

    $replace = array($title, "https://designvikings.us/query/assets/images/email-logo.png", "Design Vikings", "3210 14th St, Plano, TX 75074", "+1 817 533 6583", "support@designvikigns.us", $subtitle, $notification);

    $content = ProcessHTML($html, $search, $replace);

    $mail = new PHPMailer(true);

    try {

        $mail->SMTPDebug = 0;
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = "tls"; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 465 
        $mail->Username = "sales@designvikings.us";
        $mail->Password = 'DKU#%6172';
        $mail->setFrom('sales@designvikings.us', 'Design Vikings');
        $mail->addAddress($email);
        $mail->Subject = $emailTitle . ' - Design Vikings';
        $mail->Body = $content;
        $mail->IsHTML(true);

        if ($mail->send()) {
            var_dump($ctx->updateRow("email", array("status" => "sent", "date_sent" => date("Y-m-d H:i:s")), array("id=" . $emailId)));
        } else {
            $ctx->updateRow("email", array("message" => $mail->ErrorInfo, "status" => "failed"), array("id=" . $emailId));
        }
    } catch (Exception $e) {
        $ctx->updateRow("email", array("message" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"), array("id=" . $emailId));
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

//function to add to your function definitions. 
function ProcessHTML($string, $search, $replace)
{
    $processed_string = str_replace($search, $replace, $string);
    return $processed_string;
}
