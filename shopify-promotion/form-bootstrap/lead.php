<?php


$post_data = $_POST;

$response = submitLead($post_data);
if ($response->status) {
    // $brief_page_url = "../brief.php?lead_id=";
    $brief_page_url = "../query/brief.php?lead_id=" . $response->lead_id . "&package=" . urlencode($post_data['package']) . "&price=" . urlencode($post_data['price']);
    
    // $brief_page_url = "../thankyou.php";
    header("LOCATION: " . $brief_page_url);
} else {
    // CATCH ERRORS
    $lead_page_url = "../index.php";
    session_start();
    $_SESSION['error'] = $response->message;
    header("LOCATION: " . $lead_page_url);
}

return;

    
function submitLead(array $data_to_send)
{
    $url = "https://shopify.designvikings.us/api/leads";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authtoken:eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiTFAiLCJuYW1lIjoiTFAiLCJBUElfVElNRSI6MTcwNDMxMzI4Mn0.ZYK2gjgPb6DTBza4cHB7-dvMudSxlDVM5ysnIxiC5P4',
    ]);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data_to_send));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
    return $response;
}