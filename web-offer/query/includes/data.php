<?php
$package = "Startup Website Package";
$dprice = "$199";
$price = "$399";
$pages = "3 Page Website";
$stockphotos = "5 Stock Photos";
$banner = "1 jQuery Slider Banner";
$type = "FREE Google Friendly Sitemap";
$time = "48 to 72 hours TAT";

if ($_GET['package'] == "Startup Website Package") {
    $package = "Startup Website Package";
    $dprice = "$199";
    $price = "$399";
    $pages = "3 Page Website";
    $stockphotos = "5 Stock Photos";
    $banner = "1 jQuery Slider Banner";
    $type = "FREE Google Friendly Sitemap";
    $time = "48 to 72 hours TAT";
}
if ($_GET['package'] == "Professional Website Package") {
    $package = "Professional Website Package";
    $dprice = "$349";
    $price = "$699";
    $pages = "5 Unique Pages Website";
    $stockphotos = "8 Stock images";
    $banner = "5 Banner Designs";
    $type = "CMS / Admin Panel Support";
    $time = "48 to 72 hours TAT";
}
if ($_GET['package'] == "Elite Website Package") {
    $package = "Elite Website Package";
    $dprice = "$599";
    $price = "$1199";
    $pages = "Upto 10 Unique Pages Website";
    $stockphotos = "Online Reservation/Appointment Tool (Optional)";
    $banner = "Custom Forms";
    $type = "Conceptual and Dynamic Website";
    $time = "48 to 72 hours TAT";
}
if ($_GET['package'] == "Silver Website Package") {
    $package = "Silver Website Package";
    $dprice = "$1249";
    $price = "$2499";
    $pages = "15 to 20 Pages Website";
    $stockphotos = "Custom Made, Interactive, Dynamic & High End Design";
    $banner = "Custom WP";
    $type = "Up to 10 Custom Made Banner Designs";
    $time = "48 to 72 hours TAT";
}
if ($_GET['package'] == "Business Website Package") {
    $package = "Business Website Package";
    $dprice = "$1949";
    $price = "$3898";
    $pages = "25 to 25 Pages Website";
    $stockphotos = "15 Seconds 2D Explainer Video";
    $banner = "Voice - Over & Sound Effects";
    $type = "SEO Meta Tags";
    $time = "48 to 72 hours TAT";
}
if ($_GET['package'] == "Automated / Interactive Conferencing Portal") {
    $package = "Automated / Interactive Conferencing Portal";
    $dprice = "$2499";
    $price = "$4999";
    $pages = "Unlimited Page Website";
    $stockphotos = "Unique Pages and UI Design";
    $banner = "Custom Content Management System (CMS)";
    $type = "Online Communities & Social Engagement";
    $time = "48 to 72 hours TAT";
}
if ($_GET['package'] == "All In One Combo") {
    $package = "All In One Combo";
    $dprice = "$2999";
    $price = "$3748";
    $pages = "Unlimited Logo Design Concepts";
    $stockphotos = "UNLIMITED Pages Website";
    $banner = "Mobile Responsive";
    $type = "Business Card, Letterhead, Envelope";
    $time = "Complete Deployment";
}

$packages = array('Startup Website Package', 'Professional Website Package', 'Elite Website Package', 'Silver Website Package', 'Business Website Package', 'Automated / Interactive Conferencing Portal', 'All In One Combo');

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
