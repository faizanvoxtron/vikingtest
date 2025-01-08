<?php
header('Content-Type: application/json; charset=utf-8');
define("RECAPTCHA_V3_SECRET_KEY", '6LdpP8okAAAAAJ5yuejiWa6RL4LFcfM2SXkFN3JV');

include_once('connectionClass.php');
$ctx = new database();

$token = $_POST['token'];
$date_created = date("Y-m-d H:i:s");
$_POST['date_created'] = $date_created;
  
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

if($arrResponse["success"] == '1' && $arrResponse["score"] >= 0.1) {
    unset($_POST['token']);
    $query = $ctx->insertRow('brief',$_POST);
    if( $query['status'] == true && $query['id'] != 0 ) {
        $tx = $ctx->insertRow('email',array( 'briefid' => $query['id'], 'status' => 'pending', 'date_created' => $date_created ));
        if( $tx['status'] == true && $tx['id'] != 0 ) {
            $response = array(
                'status' => 'true',
                'message' => 'successs',
                'data' => array (
                    'briefid' => $query['id'],
                    'email' => $tx['id']
                ),
            );
        } else {
            $response = array(
                'status' => 'false',
                'message' => $tx['message'],
            );
        }    
    } else {
        $response = array(
            'status' => 'false',
            'message' => $query['message'],
        );
    }
} else {
    $response = array(
        'status' => 'false',
        'message' => 'Google Captcha Verification Failed, Please try again.',
    );
}

echo json_encode($response);