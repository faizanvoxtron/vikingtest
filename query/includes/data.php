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

if ($_GET['package'] == "Logo Basic Package") {
    $package = "Logo Basic Package";
    $dprice = "$27";
    $price = "$90";
    $logo = "4 Original Logo Concepts";
    $designer = "2 Dedicated Logo Designer";
    $revisions = "4 Revisions";
    $fileformat = "JPEG Format";
    $time = "24 - 48 Hours Turn Around Time";
}

if ($_GET['package'] == "Logo Plus Package") {
    $package = "Logo Plus Package";
    $dprice = "$119";
    $price = "$399";
    $logo = "12 Original Logo Concepts";
    $designer = "4 Dedicated Logo Designer";
    $revisions = "Unlimited Revisions";
    $fileformat = "All Final File Format";
    $time = "24 -38 Hours Turn Around Time";
}

if ($_GET['package'] == "Logo Platinum Package") {
    $package = "Logo Platinum Package";
    $price = "$999";
    $dprice = "$299";
    $logo = "Unlimited Original Logo Concepts";
    $designer = "8 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = "All Icon Final File Format";
    $time = "24 Hours Turn Around Time";
}

if ($_GET['package'] == "Gold Package") {
    $package = "Gold Package";
    $price = "$1666";
    $dprice = "$499";
    $logo = "Unlimited Original Logo Concepts";
    $designer = "8 Dedicated Logo Designer (Industry Specific)";
    $revisions = "Unlimited Revisions";
    $fileformat = "All Icon Final File Format";
    $time = "24 Hours Turn Around Time";
}

if ($_GET['package'] == "Business Platinum Logo Package") {
    $package = "Business Platinum Logo Package";
    $price = "$3333";
    $dprice = "$999";
    $logo = "Unlimited Original Logo Concepts ";
    $designer = "12 Dedicated Logo Designer (Industry Specific) ";
    $revisions = "Unlimited Revisions";
    $fileformat = "All Icon Final File Format";
    $time = "24 Hours Turn Around Time";
}

// Packages Page Logo

if ($_GET['package'] == "Basic Logo Package") {
    $package = "Basic Logo Package";
    $dprice = "$349";
    $price = "$349";
    $logo = "3 Original Logo Concepts";
    $designer = "1 Dedicated Logo Designer";
    $revisions = "4 Revisions";
    $fileformat = "JPEG Format";
    $time = "48 to 72 hours TAT";
}

if ($_GET['package'] == "Professional Logo Package") {
    $package = "Professional Logo Package";
    $dprice = "$699";
    $price = "$699";
    $logo = "10 Original Logo Concepts";
    $designer = "4 Dedicated Logo Designer";
    $revisions = "Unlimited Revisions";
    $fileformat = "All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)";
    $time = "48 to 72 hours TAT";
}

if ($_GET['package'] == "Elite Logo Package") {
    $package = "Elite Logo Package";
    $dprice = "$999";
    $price = "$999";
    $logo = "10 Original Logo Concepts";
    $designer = "4 Dedicated Logo Designer";
    $revisions = "Unlimited Revisions";
    $fileformat = "All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)";
    $time = "48 to 72 hours TAT";
}

// Web Packages

if ($_GET['package'] == "Basic Website Package") {
    $package = "Basic Website Package";
    $price = "$499";
    $dprice = "$499";
    $logo = "3 Pages Website";
    $designer = "1 Banner Design";
    $revisions = "2 Stock Photos";
    $fileformat = "Complete Source Files";
    $time = "Website Initial Concepts in 48 Hours";
}

if ($_GET['package'] == "Startup Website Package") {
    $package = "Startup Website Package";
    $price = "$824";
    $dprice = "$824";
    $logo = "5 Pages Website";
    $designer = "3 Banner Design";
    $revisions = "5 Stock Photos";
    $fileformat = "Complete Source Files";
    $time = "Website Initial Concepts in 48 Hours";
}

if ($_GET['package'] == "Professional Website Package") {
    $package = "Professional Website Package";
    $price = "$1989";
    $dprice = "$1989";
    $logo = "Up to 10 Unique Pages Website";
    $designer = "CMS /Admin Panel Integration";
    $revisions = "5+ Stock Photos & Banner Designs";
    $fileformat = "Complete Source Files";
    $time = "Website Initial Concepts in 48 Hours";
}

if ($_GET['package'] == "Corporate Website Package") {
    $package = "Corporate Website Package";
    $price = "$849";
    $dprice = "$849";
    $logo = "Up to 15 Unique Pages Website";
    $designer = "Custom Made, Interactive & Dynamic Design";
    $revisions = "Up to 10 Custom Made Banner Designs";
    $fileformat = "Complete Source Files";
    $time = "Website Initial Concepts in 48 Hours";
}

if ($_GET['package'] == "Platinum Website Package") {
    $package = "Platinum Website Package";
    $price = "$1349";
    $dprice = "$1349";
    $logo = "Up to 20 Unique Pages Website";
    $designer = "Custom Made, Interactive, Dynamic & High-End Design";
    $revisions = "Up to 15 Custom Made Banner Designs";
    $fileformat = "Content Management System (CMS)";
    $time = "Website Initial Concepts in 48 Hours";
}

if ($_GET['package'] == "Customized Web Portal") {
    $package = "Customized Web Portal";
    $price = "$14499";
    $dprice = "$14499";
    $logo = "Complete Custom Design & Development";
    $designer = "Dating Portal, Job Portal, Professional Network Portal, Social Network Portal, Restaurant Portal, Medical Portal, Enterprise Portal (Any One)";
    $revisions = "Content Management System (CMS)";
    $fileformat = "Online Appointment/Scheduling/Online Ordering Integration (Optional)";
    $time = "Online Payment Integration (Optional)";
}

// Packages Page Web

if ($_GET['package'] == "E-commerce Website") {
    $package = "E-commerce Website";
    $price = "$2999";
    $dprice = "$2999";
    $logo = "Upto 15 Unique Pages Website";
    $designer = "Conceptual and Dynamic Website";
    $revisions = "Content Management System (CMS)";
    $fileformat = "Jquery Slider";
    $time = "Free Google Friendly Sitemap";
}


if ($_GET['package'] == "Business Pro Website Package") {
    $package = "Business Pro Website Package";
    $price = "$3649";
    $dprice = "$3649";
    $logo = "Custom Made, Interactive, Dynamic & High End Design";
    $designer = "Custom PHP Development";
    $revisions = "Unlimited Pages";
    $fileformat = "Easy Product Search";
    $time = "Website Initial Concepts in 48 Hours";
}

if ($_GET['package'] == "Silver Website Package") {
    $package = "Silver Website Package";
    $price = "$8999";
    $dprice = "$8999";
    $logo = "15 to 20 Pages Website";
    $designer = "Custom Made, Interactive, Dynamic & High End Design";
    $revisions = "Custom WP (or) Custom PHP Development";
    $fileformat = "Up to 10 Custom Made Banner Designs";
    $time = "Website Initial Concepts in 48 Hours";
}

if ($_GET['package'] == "Automated/Interactive Conferencing Portal") {
    $package = "Automated/Interactive Conferencing Portal";
    $price = "$14999";
    $dprice = "$14999";
    $logo = "Unlimited Page Website";
    $designer = "Custom Content Management System (CMS)";
    $revisions = "Unique Pages and UI Design";
    $fileformat = "Complete Custom Development";
    $time = "Process Automation Tools";
}

if ($_GET['package'] == "Automated/Interactive E-Commerce Website") {
    $package = "Automated/Interactive E-Commerce Website";
    $price = "$24999";
    $dprice = "$24999";
    $logo = "Unlimited Pages Website";
    $designer = "Conceptual and Dynamic Website";
    $revisions = "Online Reservation/Appointment Tool";
    $fileformat = "Content Management System";
    $time = "Custom Forms";
}

// Branding Packages

if ($_GET['package'] == "Budget Branding Package") {
    $package = "Budget Branding Package";
    $price = "$1749";
    $dprice = "$1749";
    $logo = "1 Stationery Design Set Concept";
    $designer = "1 Banner Design Concept (any size)";
    $revisions = "T-Shirt Design (2 Concepts)";
    $fileformat = "FREE Word Doc for Letterhead";
    $time = "Turn Around 48-72 Hours";
}

if ($_GET['package'] == "Best Branding Package") {
    $package = "Best Branding Package";
    $price = "$2499";
    $dprice = "$2499";
    $logo = "2 Stationery Design Set Concepts";
    $designer = "2 Banner Design Concepts (any size)";
    $revisions = "T-Shirt Design (3 Concepts)";
    $fileformat = "FREE Social Media Banners (any 5)";
    $time = "Turn Around 48-72 Hours";
}

if ($_GET['package'] == "Ultimate Branding Package") {
    $package = "Ultimate Branding Package";
    $price = "$3249";
    $dprice = "$3249";
    $logo = "4 Stationery Design Set Concepts";
    $designer = "3 Banner Design Concepts (any size)";
    $revisions = "T-Shirt Design (4 Concepts)";
    $fileformat = "Unlimited Revisions";
    $time = "Turn Around 48-72 Hours";
}

// Video Animation Packages

if ($_GET['package'] == "Startup Video Package") {
    $package = "Startup Video Package";
    $price = "$1599";
    $dprice = "$1599";
    $logo = "30 Seconds Video";
    $designer = "Professional Script";
    $revisions = "Animation";
    $fileformat = "Unlimited Revisions";
    $time = "4 weeks Delivery";
}

if ($_GET['package'] == "Classic Video Package") {
    $package = "Classic Video Package";
    $price = "$2199";
    $dprice = "$2199";
    $logo = "60 Seconds Video";
    $designer = "Sample Theme";
    $revisions = "Animation";
    $fileformat = "Voice - Over & Sound Effects";
    $time = "5 weeks Delivery";
}

if ($_GET['package'] == "Premium Video Package") {
    $package = "Premium Video Package";
    $price = "$3999";
    $dprice = "$3999";
    $logo = "90 Seconds Video";
    $designer = "Sample Theme";
    $revisions = "Animation";
    $fileformat = "Voice - Over & Sound Effects";
    $time = "6 weeks Delivery";
}

if ($_GET['package'] == "Unlimited Video Package") {
    $package = "Unlimited Video Package";
    $price = "$4599";
    $dprice = "$4599";
    $logo = "120 Seconds Video";
    $designer = "Sample Theme";
    $revisions = "Storyboard";
    $fileformat = "Voice - Over & Sound Effects";
    $time = "8 weeks Delivery";
}

// Creative Copywriting Packages

if ($_GET['package'] == "Web Content Basic Package") {
    $package = "Web Content Basic Package";
    $price = "$399";
    $dprice = "$399";
    $logo = "1 Page Professional Copywriting Service";
    $designer = "Creative & Well-Written by 1 Professional Copywriter";
    $revisions = "300 Words Per Page";
    $fileformat = "5 Revisions";
    $time = "3 to 4 Business Days Rotation";
}

if ($_GET['package'] == "Web Content Starter Package") {
    $package = "Web Content Starter Package";
    $price = "$1199";
    $dprice = "$1199";
    $logo = "5 Pages Professional Copywriting Service";
    $designer = "Creative & Well-Written by 1 Professional Copywriter";
    $revisions = "300 Words Per Page";
    $fileformat = "10 Revisions";
    $time = "5 to 7 Business Days Rotation";
}

if ($_GET['package'] == "Web Content Professional Package") {
    $package = "Web Content Professional Package";
    $price = "$2199";
    $dprice = "$2199";
    $logo = "10 Pages Professional Copywriting Service";
    $designer = "Creative & Well-Written by 1 Professional Copywriter";
    $revisions = "300 Words Per Page";
    $fileformat = "SEO friendly – Your keyword(s) will be placed in the title, the first & last paragraphs and throughout the web copy in a natural and fluent manner";
    $time = "7 to 10 Business Days Rotation";
}

if ($_GET['package'] == "Web Content Identity Package") {
    $package = "Web Content Identity Package";
    $price = "$4599";
    $dprice = "$4599";
    $logo = "Up to 20 Pages Professional Copywriting Service";
    $designer = "Creative & Well-Written by 1 Professional Copywriter";
    $revisions = "300 Words Per Page";
    $fileformat = "SEO friendly – Your keyword(s) will be placed in the title, the first & last paragraphs and throughout the web copy in a natural and fluent manner";
    $time = "7 to 10 Business Days Rotation";
}

if ($_GET['package'] == "Article Writing Package") {
    $package = "Article Writing Package";
    $price = "$249";
    $dprice = "$249";
    $logo = "1 Creative, Fresh & Well-Written Article";
    $designer = "By 1 Professional Copywriter";
    $revisions = "400 Words Per Page";
    $fileformat = "5 Revisions";
    $time = "3 to 5 Business Days Rotation";
}

if ($_GET['package'] == "Blog Writing Package") {
    $package = "Blog Writing Package";
    $price = "$449";
    $dprice = "$449";
    $logo = "1 Creative, Fresh & Well-Written Article";
    $designer = "Written on Your Specified Topic/Keyword";
    $revisions = "400 Words Per Page";
    $fileformat = "FREE Submission on any article marketing directories /blog (If required)";
    $time = "3 to 5 Business Days Rotation";
}

// Digital Marketing Packages

if ($_GET['package'] == "Startup Social Package") {
    $package = "Startup Social Package";
    $price = "$199";
    $dprice = "$199";
    $logo = "Cover Photo Design";
    $designer = "Profile Picture Design";
    $revisions = "Welcome Page Design";
    $fileformat = "Unlimited Revisions";
    $time = "100% Satisfaction Guarantee";
}

if ($_GET['package'] == "Classic Social Package") {
    $package = "Classic Social Package";
    $price = "$349";
    $dprice = "$349";
    $logo = "Cover Photo Design";
    $designer = "Profile Picture Design";
    $revisions = "Welcome Page Design";
    $fileformat = "Twitter Page Design";
    $time = "Unlimited Revisions";
}

if ($_GET['package'] == "Premium Social Package") {
    $package = "Premium Social Package";
    $price = "$599";
    $dprice = "$599";
    $logo = "Cover Photo Design";
    $designer = "Profile Picture Design";
    $revisions = "Welcome Page Design";
    $fileformat = "Twitter Page Design";
    $time = "YouTube Page Design";
}

if ($_GET['package'] == "Unlimited Social Package") {
    $package = "Unlimited Social Package";
    $price = "$999";
    $dprice = "$999";
    $logo = "2 Cover Photo Design";
    $designer = "Profile Picture Design";
    $revisions = "Google+ Page Design";
    $fileformat = "Twitter Page Design";
    $time = "YouTube Page Design";
}

// Illustration Design Packages

if ($_GET['package'] == "Basic Illustrative Logo Package") {
    $package = "Basic Illustrative Logo Package";
    $price = "$499";
    $dprice = "$499";
    $logo = "3 Custom Logo Design Concepts";
    $designer = "By 2 Designers";
    $revisions = "UNLIMITED Revisions";
    $fileformat = "All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)";
    $time = "48 to 72 hours TAT";
}

if ($_GET['package'] == "Startup Illustrative Logo Package") {
    $package = "Startup Illustrative Logo Package";
    $price = "$849";
    $dprice = "$849";
    $logo = "4 Custom Logo Design Concepts";
    $designer = "By 3 Designers";
    $revisions = "UNLIMITED Revisions";
    $fileformat = "All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)";
    $time = "48 to 72 hours TAT";
}

if ($_GET['package'] == "Professional Illustrative Package") {
    $package = "Professional Illustrative Package";
    $price = "$1249";
    $dprice = "$1249";
    $logo = "UNLIMITED Logo Design Concepts";
    $designer = "By 4 Designers";
    $revisions = "UNLIMITED Revisions";
    $fileformat = "All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)";
    $time = "48 to 72 hours TAT";
}

if ($_GET['package'] == "3D Logo Package") {
    $package = "3D Logo Package";
    $price = "$1649";
    $dprice = "$1649";
    $logo = "3 Unique 3D Logo Concepts";
    $designer = "Light Effects and VFX";
    $revisions = "Multiple 3D Angles";
    $fileformat = "By 3 Award Winning Designers)";
    $time = "72 hours Turnaround Time";
}

// SEO Services Packages

if ($_GET['package'] == "Startup SEO Package") {
    $package = "Startup SEO Package";
    $price = "$1949";
    $dprice = "$1949";
    $logo = "5 Keywords";
    $designer = "Guaranteed Ranking on Google";
    $revisions = "Off-site Optimization";
    $fileformat = "On-site Optimization)";
    $time = "Link Building";
}

if ($_GET['package'] == "SEO Identity Package") {
    $package = "SEO Identity Package";
    $price = "$3499";
    $dprice = "$3499";
    $logo = "10 Keywords";
    $designer = "Guaranteed Ranking on Google";
    $revisions = "Off-site Optimization";
    $fileformat = "On-site Optimization)";
    $time = "Link Building";
}

if ($_GET['package'] == "Elite SEO Package") {
    $package = "Elite SEO Package";
    $price = "$6999";
    $dprice = "$6999";
    $logo = "20 Keywords";
    $designer = "Guaranteed Ranking on Google";
    $revisions = "Off-site Optimization";
    $fileformat = "On-site Optimization)";
    $time = "Link Building";
}

// Combo Packages

if ($_GET['package'] == "Basic Combo Package") {
    $package = "Basic Combo Package";
    $price = "$1499";
    $dprice = "$1499";
    $logo = "– Logo Design";
    $designer = "5 Custom Logo Design Concepts";
    $revisions = "By 2 Designers";
    $fileformat = "All Final File Formats)";
    $time = "5 Pages Website";
}

if ($_GET['package'] == "Startup Combo Package") {
    $package = "Startup Combo Package";
    $price = "$2549";
    $dprice = "$2549";
    $logo = "– Logo Design";
    $designer = "Unlimited Logo Design Concepts";
    $revisions = "Unlimited Revisions";
    $fileformat = "UNLIMITED Pages Website)";
    $time = "Content Management System (CMS)";
}

if ($_GET['package'] == "Professional Combo Package") {
    $package = "Professional Combo Package";
    $price = "$3249";
    $dprice = "$3249";
    $logo = "– Logo Design";
    $designer = "Unlimited Logo Design Concepts";
    $revisions = "8 Dedicated Designers";
    $fileformat = "Conceptual and Dynamic Liquid Website)";
    $time = "WordPress OR Custom PHP";
}

if ($_GET['package'] == "Identity Combo Package") {
    $package = "Identity Combo Package";
    $price = "$5499";
    $dprice = "$5499";
    $logo = "– Logo Design";
    $designer = "9 Logo Design Idea(s)";
    $revisions = "Unique 5 Pages Website Design";
    $fileformat = "Custom, Interactive, Dynamic & High-End Web Design)";
    $time = "Custom WordPress Development";
}

if ($_GET['package'] == "Corporate Combo Package") {
    $package = "Corporate Combo Package";
    $price = "$8499";
    $dprice = "$8499";
    $logo = "– Logo Design";
    $designer = "Unlimited Logo Design Idea(s)";
    $revisions = "Unlimited Pages Website";
    $fileformat = "Conceptual and Dynamic Website)";
    $time = "WordPress OR Custom PHP";
}

if ($_GET['package'] == "Elite Combo Package") {
    $package = "Elite Combo Package";
    $price = "$12499";
    $dprice = "$12499";
    $logo = "– Logo Design";
    $designer = "Complete Custom Design & Development";
    $revisions = "Any One: Dating Portal, Job Portal, Professional Network, Social Network, Medical Portal, Restaurant Portal, Medical Portal, News Portal, Enterprise Portal";
    $fileformat = "Unique, User Friendly, Interactive, Dynamic, High End UI Design)";
    $time = "Content Management System (CMS)";
}

if ($_GET['package'] == "Advance Combo") {
    $package = "Advance Combo";
    $price = "$14049";
    $dprice = "$14049";
    $logo = "– Logo Design";
    $designer = "Unlimited Pages Website Designt";
    $revisions = "Custom Made, Interactive, Dynamic & High End Design";
    $fileformat = "Customized WordPress & PHP Development)";
    $time = "Complete Deployment";
}

$packages = array ('Logo Basic Package','Logo Special Package','Logo Plus Package','Logo Platinum Package','Gold Package','Business Platinum Logo Package', 'Basic Website Package', 'Startup Website Package', 'Professional Website Package', 'Corporate Website Package', 'Platinum Website Package', 'Customized Web Portal', 'Budget Branding Package', 'Best Branding Package', 'Ultimate Branding Package', 'Startup Video Package', 'Classic Video Package', 'Premium Video Package', 'Unlimited Video Package', 'Web Content Basic Package', 'Web Content Starter Package', 'Web Content Professional Package', 'Web Content Identity Package', 'Article Writing Package', 'Blog Writing Package', 'Startup Social Package', 'Classic Social Package', 'Premium Social Package', 'Unlimited Social Package', 'Basic Illustrative Logo Package', 'Startup Illustrative Logo Package', 'Professional Illustrative Package', '3D Logo Package', 'Startup SEO Package', 'SEO Identity Package', 'Elite SEO Package', 'Basic Combo Package', 'Startup Combo Package', 'Professional Combo Package', 'Identity Combo Package', 'Corporate Combo Package', 'Elite Combo Package', 'Advance Combo');



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
