<!--Landing Packages-->
<?php
$package = "Logo Special Package";
$dprice = "$35";
$price = "$119";
$logo = "4 Original Logo Concepts";
$designer = "2 Dedicated Logo Designer";
$revisions = "4 Revisions";
$fileformat = "JPEG Format";
$time = "24 - 48 Hours Turn Around Time";


if ($_GET['package'] == "Logo Special Package") {
    $package = "Special Package";
    $price = "$119";
    $dprice = "$35";
    $logo = "4 Original Logo Concepts";
    $designer = "2 Dedicated Logo Designer";
    $revisions = "Unlimited Revisions";
    $fileformat = "JPEG Format";
    $time = "24 - 48 Hours Turn Around Time";
}


if ($_GET['package'] == "Logo Plus Package") {
    $package = "Plus Package";
    $price = "$399";
    $dprice = "$119";
    $logo = "12 Original Logo Concepts";
    $designer = "4 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = "Final File Formats";
    $time = "24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Logo Platinum Package") {
    $package = "Platinum Package";
    $price = "$999";
    $dprice = "$299";
    $logo = "Unlimited Logo Concepts";
    $designer = "8 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = "Final File Formats";
    $time = "24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Gold Logo Plan") {
    $package = "Gold Logo Plan";
    $price = "$1666";
    $dprice = "$499";
    $logo = "Unlimited Original Logo Concepts";
    $designer = "8 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = "Formats: PNG, PDF, JPEG, PSD, EPS, AI, PNG, TIFF";
    $time = "24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Basic Animated Logo Plan") {
    $package = "Basic Animated Logo Plan";
    $price = "$499";
    $dprice = "$199";
    $logo = "1 Animated Logo Design Concept";
    $designer = "1 Dedicated Logo Designer";
    $revisions = "3 Revisions";
    $fileformat = "100% Satisfaction Guarantee";
    $time = "Turn Around 24-48 hrs";
}

// Branding Packages

if ($_GET['package'] == "Basic Animated Logo Plan") {
    $package = "Basic Animated Logo Plan";
    $price = "$999";
    $dprice = "$399";
    $logo = "3 Animated Logo Design Concepts";
    $designer = "3 Dedicated Logo Designer";
    $revisions = "Unlimited Revisions";
    $fileformat = "100% Satisfaction Guarantee";
    $time = "Turn Around 24-48 hrs";
}

if ($_GET['package'] == "3D Logo Plan") {
    $package = "3D Logo Plan";
    $price = "$1813";
    $dprice = "$544";
    $logo = "3 Unique 3D Logo Concepts";
    $designer = "By 3 Award Winning Designers";
    $revisions = "UNLIMITED Revisions";
    $fileformat = "Multiple 3D Angles";
    $time = "72 hours Turnaround Time";
}

if ($_GET['package'] == "NFT LABS LITE") {
    $package = "NFT LABS LITE";
    $price = "$599";
    $dprice = "$499";
    $logo = "Base Character Creation";
    $designer = "3 Traits/Accessories";
    $revisions = "2 revisions included";
    $fileformat = "Sourcefile";
    $time = "Fully refundable until revision call";
}

if ($_GET['package'] == "NFT ENTREPRENEUR") {
    $package = "NFT ENTREPRENEUR";
    $price = "$4,800";
    $dprice = "$3,999";
    $logo = "Base Character Creation";
    $designer = "30 Traits/Accessories";
    $revisions = "2 revisions included";
    $fileformat = "Sourcefile";
    $time = "Fully refundable until revision call";
}

if ($_GET['package'] == "NFT MOONSHOT") {
    $package = "NFT MOONSHOT";
    $price = "$6,999";
    $dprice = "$9,998";
    $logo = "Base Character Creation";
    $designer = "70 Traits/Accessories";
    $revisions = "2 revisions included";
    $fileformat = "Sourcefile";
    $time = "Fully refundable until revision call";
}



$packages = array ("Logo Special Package,Logo Plus Package,Logo Platinum Package,Gold Logo Plan,Basic Animated Logo Plan,Basic Animated Logo Plan,3D Logo Plan,NFT LABS LITE,NFT ENTREPRENEUR,NFT MOONSHOT");



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
