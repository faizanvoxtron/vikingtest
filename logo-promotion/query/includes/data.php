<!--Landing Packages-->
<?php
$package = "Logo Special Package";
$dprice = "$35";
$price = "$117";
$logo = "4 Original Logo Concepts";
$designer = " 2 Dedicated Logo Designer";
$revisions = " 4 Revisions";
$fileformat = " With Grey Scale Format";
$time = " 24 - 48 Hours Turn Around Time";

if ($_GET['package'] == "Logo Special Package") {
    $package = "Logo Special Package";
    $dprice = "$35";
    $price = "$117";
    $logo = "4 Original Logo Concepts";
    $designer = " 2 Dedicated Logo Designer";
    $revisions = " 4 Revisions";
    $fileformat = " With Grey Scale Format";
    $time = " 24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Logo Plus Package") {
    $package = "Logo Plus Package";
    $price = "$119";
    $dprice = "$397";
    $logo = "  12 Original Logo Concepts";
    $designer = "  4 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = " With Grey Scale Format";
    $time = " 24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Logo Platinum Package") {
    $package = "Logo Platinum Package";
    $price = "$299";
    $dprice = "$997";
    $logo = "Unlimited Original Logo Concepts";
    $designer = "8 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = "With Grey Scale Format.";
    $time = "24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "The Boss Package") {
    $package = "The Boss Package";
    $price = "$599";
    $dprice = "$1996";
    $logo = "3D/Mascot/Animated Logo";
    $designer = "Unlimited Original Logo Concepts";
    $revisions = "8!Dedicated Logo Designer (Industry Specific)";
    $fileformat = "Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG";
    $time = "24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Logo Infinite Special") {
    $package = "Logo Infinite Special";
    $price = "$799";
    $dprice = "$2663";
    $logo = " Unlimited Original Logo Concepts";
    $designer = "8 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = "3 Page Basic Website";
    $time = " 24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Logo Combo Special") {
    $package = "Logo Combo Special";
    $price = "$999";
    $dprice = "$3110";
    $logo = " Unlimited Original Logo Concepts";
    $designer = "12 Dedicated Logo Designer (Industry Specific) ";
    $revisions = "Unlimited Revisions";
    $fileformat = "7 Page Informative Website";
    $time = " 24 - 48 Hours Turn Around Time";
}

$packages = array('Logo Special Package', 'Logo Plus Package', 'Logo Platinum Package', 'The Boss Package', 'Logo Infinite Special');

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