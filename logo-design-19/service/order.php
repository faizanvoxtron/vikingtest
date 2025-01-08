<?php
header('Content-Type: application/json; charset=utf-8');
define("RECAPTCHA_V3_SECRET_KEY", '6LdpP8okAAAAAJ5yuejiWa6RL4LFcfM2SXkFN3JV');
  
$token = $_POST['token'];
  
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
    $response = array(
        'status' => 'true',
        'message' => 'successs',
    );  
} else {
    $response = array(
        'status' => 'false',
        'message' => 'Google Captcha Verification Failed, Please try again.',
        'data' => $response
    );
}

echo json_encode($response);