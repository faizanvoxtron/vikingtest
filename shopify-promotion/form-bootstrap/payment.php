<?php
$lead_id = $_POST['lead_id'];
$items = [
    [
        "description" => $_POST['package'],
        "long_description" => "",
        "rate" =>  $_POST['price'], // package price
    ],

];

$lead_data = getLead($lead_id);
$customer_data = [
    "company" => $lead_data->name,
    "phonenumber" => $lead_data->phonenumber,
    "email" => $lead_data->email,
    "city" => $lead_data->city,
    "state" => $lead_data->state,
    "zip" => $lead_data->zip,
    "country" => $lead_data->country,
];
$customer_info = create_customer($customer_data);


// echo "Customer";
// print_r($customer_data);
// print_r($customer_info);
// echo "<br>";

// return;

// $contact_data = [
//     "customer_id" => $customer_info->customer_id,
//     "firstname" => $lead_data->name,
//     "email" => $lead_data->email,
//     "phonenumber" => $lead_data->phonenumber,
//     "send_set_password_email" => 1,
// ];
// $contact_info = create_contact($contact_data);


// echo "Customer";
// print_r($contact_data);
// print_r($contact_info);
// echo "<br>";


$invoice_data = [
    "clientid" => $customer_info->customer_id,
    "billing_street" => "",
    "duedate" => date('Y-m-d', strtotime(date('Y-m-d')  . ' +1 month')),
];
$newitems = [];
$subtotal = 0;
foreach ($items as $key => $item) {
    $subtotal += (int)$item['rate'];
    $newitems[$key] = [
        "description" => $item['description'],
        "long_description" => $item['long_description'],
        "rate" => $item['rate'],
        "order" => $key + 1,
        "unit" => '',
        "qty" => 1,
    ];
}

$invoice_data['subtotal'] = number_format($subtotal, 2);
$invoice_data['total'] = number_format($subtotal, 2);
$invoice_data['newitems'] = $newitems;

$invoice_info = create_invoice($invoice_data);

if ($invoice_info->status) {
    $inovice_url = "https://shopify.designvikings.us/invoice/" . $invoice_info->invoice->id . "/" . $invoice_info->invoice->hash;
    header("LOCATION: " . $inovice_url);
} else {
    // CATCH ERRORS
    $payment_page_url = "https://shopify.designvikings.us/checkout";
    session_start();
    $_SESSION['error'] = $invoice_info->message;
    header("LOCATION: " . $payment_page_url);
};

function getLead($lead_id)
{
    $url = "https://shopify.designvikings.us/api/leads/" . $lead_id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authtoken:eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiTFAiLCJuYW1lIjoiTFAiLCJBUElfVElNRSI6MTcwNDMxMzI4Mn0.ZYK2gjgPb6DTBza4cHB7-dvMudSxlDVM5ysnIxiC5P4',
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}

// CREATE CUSTOMER
function create_customer($data)
{
    $url = "https://shopify.designvikings.us/api/customers";
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
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}

// CREATE CONTACT
function create_contact($data)
{
    $url = "https://shopify.designvikings.us/api/contacts";
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
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}

// CREATE INVOICE
function create_invoice($data)
{
    $url = "https://shopify.designvikings.us/api/invoices";
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
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
    // return $response;
}
// MARK INVOICE AS PAID
