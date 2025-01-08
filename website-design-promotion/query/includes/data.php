<?php
$package = "Starter Package";
$dprice = "$499";
$price = "$999";
$pages = "3 Custom designed inner pages";
$stockphotos = "3 Premium Stock Photos";
$banner = "1 Custom Banner Design";
$type = "simple";
$time = "48-72 Hours Turnaround Time";

if ($_GET['package'] == "Starter Package") {
    $package = "Starter Package";
    $dprice = "$449";
    $price = "$999";
    $pages = "3 Custom designed inner pages";
    $stockphotos = "3 Premium Stock Photos";
    $banner = "1 Custom Banner Design";
    $type = "simple";
    $time = "48-72 Hours Turnaround Time";
}
if ($_GET['package'] == "Professional Package") {
    $package = "Professional Package";
    $dprice = "$999";
    $price = "$1999";
    $pages = "5 Custom designed inner pages";
    $stockphotos = "5 Premium Stock Photos";
    $banner = "3 Custom Banner Design";
    $type = "simple";
    $time = "48-72 Hours Turnaround Time";
}
if ($_GET['package'] == "Business Web Package") {
    $package = "Business Web Package";
    $dprice = "$2449";
    $price = "$4899";
    $pages = "10 Custom designed inner pages";
    $stockphotos = "8 Premium Stock Photos";
    $banner = "5 Custom Banner Design";
    $type = "CMS";
    $time = "48-72 Hours Turnaround Time";
}
if ($_GET['package'] == "Corporate Package") {
    $package = "Corporate Package";
    $dprice = "$3999";
    $price = "$7999";
    $pages = "15 Custom designed inner pages";
    $stockphotos = "12 Premium Stock Photos";
    $banner = "8 Custom Banner Design";
    $type = "Dynamic";
    $time = "48-72 Hours Turnaround Time";
}
if ($_GET['package'] == "Enterprise Package") {
    $package = "Enterprise Package";
    $dprice = "$5999";
    $price = "$11999";
    $pages = "20 Custom designed inner pages";
    $stockphotos = "15 Premium Stock Photos";
    $banner = "10 Custom Banner Design";
    $type = "Custom Wordpress/PHP Development";
    $time = "48-72 Hours Turnaround Time";
}
if ($_GET['package'] == "Enterprise Plus Package") {
    $package = "Enterprise Plus Package";
    $dprice = "$9999";
    $price = "$19999";
    $pages = "Unlimited Custom designed Inner pages";
    $stockphotos = "Unlimited Premium Stock Photos";
    $banner = "Unlimited Custom Banner Designs";
    $type = "Custom Coding & Development";
    $time = "48-72 Hours Turnaround Time";
}
$packages = array ('Starter Package','Professional Package','Business Web Package','Corporate Package','Enterprise Package','Enterprise Plus Package');

$states = array(
    // 'ACT' => 'Australian Capital Territory',
    // 'NSW' => 'New South Wales',
    // 'NT' => 'Northern Territory',
    // 'QLD' => 'Queensland',
    // 'SA' => 'South Australia',
    // 'TAS' => 'Tasmania',
    // 'VIC' => 'Victoria',
    // 'WA' => 'Western Australia',
    'AL' => 'Alabama',
    'AK' => 'Alaska',
    'AZ' => 'Arizona',
    'AR' => 'Arkansas',
    'CA' => 'California',
    'CO' => 'Colorado',
    'CT' => 'Connecticut',
    'DE' => 'Delaware',
    'DC' => 'District Of Columbia',
    'FL' => 'Florida',
    'GA' => 'Georgia',
    'HI' => 'Hawaii',
    'ID' => 'Idaho',
    'IL' => 'Illinois',
    'IN' => 'Indiana',
    'IA' => 'Iowa',
    'KS' => 'Kansas',
    'KY' => 'Kentucky',
    'LA' => 'Louisiana',
    'ME' => 'Maine',
    'MD' => 'Maryland',
    'MA' => 'Massachusetts',
    'MI' => 'Michigan',
    'MN' => 'Minnesota',
    'MS' => 'Mississippi',
    'MO' => 'Missouri',
    'MT' => 'Montana',
    'NE' => 'Nebraska',
    'NV' => 'Nevada',
    'NH' => 'New Hampshire',
    'NJ' => 'New Jersey',
    'NM' => 'New Mexico',
    'NY' => 'New York',
    'NC' => 'North Carolina',
    'ND' => 'North Dakota',
    'OH' => 'Ohio',
    'OK' => 'Oklahoma',
    'OR' => 'Oregon',
    'PA' => 'Pennsylvania',
    'RI' => 'Rhode Island',
    'SC' => 'South Carolina',
    'SD' => 'South Dakota',
    'TN' => 'Tennessee',
    'TX' => 'Texas',
    'UT' => 'Utah',
    'VT' => 'Vermont',
    'VA' => 'Virginia',
    'WA' => 'Washington',
    'WV' => 'West Virginia',
    'WI' => 'Wisconsin',
    'WY' => 'Wyoming',
  ); 

?>