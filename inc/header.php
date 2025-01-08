<?php
define("NITROPACK_HOME_URL", "https://designvikings.us/"); 
define("NITROPACK_SITE_ID", "RfQvuzMuOjIPoMUPjpfDiHNUysKgfUiN"); 
define("NITROPACK_SITE_SECRET", "M5zE4K5CLYRuZXvUrJGbBv2wx1ADJBFBYpGWykz7ukbHsDOvN12fmdsrKUScqtmU"); 
include_once "../nitropack-sdk/bootstrap.php";

?>

<?php
require_once('ip/getIpInfo.php');
$ipdetails = getInfo();
$pageurl = $_SERVER['REQUEST_URI'];
$website = $_SERVER['HTTP_HOST'];
$ip = $ipdetails['ip'];
$city = $ipdetails['city'];
$region = $ipdetails['region'];
$country = $ipdetails['country'];
$organization = $ipdetails['organization'];
$latitude = $ipdetails['latitude'];
$longitude = $ipdetails['longitude'];
$timezone = $ipdetails['timezone'];
$postal = $ipdetails['postal_code'];
$clientIP = $_SERVER['HTTP_CLIENT_IP']
    ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
    ?? $_SERVER['HTTP_X_FORWARDED']
    ?? $_SERVER['HTTP_X_FORWARDED_FOR']
    ?? $_SERVER['HTTP_FORWARDED']
    ?? $_SERVER['HTTP_FORWARDED_FOR']
    ?? $_SERVER['REMOTE_ADDR']
    ?? '0.0.0.0';

include('inc/dynamic_meta_tags.php');

?>

<?php
if (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') {
    header('Location: https://designvikings.us' . $_SERVER['REQUEST_URI'], true, 301);
    exit;
}
// rest of your PHP code goes here
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="<?= $metaDescription ?>">
    <meta name="keywords" content="<?= $metakeyword ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://designvikings.us/assets/icons/ms-icon-144x144.png">
    <meta name="google-site-verification" content="nqGpndbJx-Po-5F56fEfALvAbXZGT2CCq0h5oI1QF9M" />
    <meta name="theme-color" content="#ffffff">
    <meta property="og:site_name" content="Design Vikings">
    <meta property="og:url" content="https://designvikings.us/">
    <meta property="og:image" content="https://designvikings.us/assets/icons/vx_icon_325x325.png">
    
   
    <title><?= $metaTitle ?></title>
    <link rel="canonical" href="<?= $currentUrl ?>" />
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="favIcon.png" type="image/png">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css?v=2.6">
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css?v=0.16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
            <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ProfessionalService",
          "name": "Design Vikings US",
          "image": "https://designvikings.us/assets/images/logo.svg?v=59",
          "@id": "",
          "url": "https://designvikings.us/",
          "telephone": "+1 817-533-6583",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "3210 14th St",
            "addressLocality": "Plano",
            "addressRegion": "TX",
            "postalCode": "75074",
            "addressCountry": "US"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 33.014373035049196,
            "longitude": -96.66978740709669
          } ,
          "sameAs": [
            "https://www.facebook.com/designvikingsusa",
            "",
            "https://designvikings.us/"
          ] 
        }
        </script>
    <style>
        /*.footer-logo img {*/
        /*    width: 100%;*/
        /*    height: 135px;*/
        /*}*/
        .site-branding .brand-logo .logo-icon {
            /*width: 225px;*/
            /*height: 85px;*/
            display: inline-block;
        }

        .site-branding .brand-logo h3 {
            display: inline-block;
            vertical-align: middle;
            margin: 0;
            color: #000;
            font-size: 28px;
            line-height: 26px;
            letter-spacing: 0;
            font-weight: 800;
        }

        .site-branding .brand-logo h3 span {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 7.4px;
        }

        .header-navigation.sticky img.logo-icon {
            width: 174px;
            height: 66px;
            display: inline-block;
        }

        .header-navigation.sticky img.logo-icon h3 {
            font-size: 28px;
            line-height: 21px;
            color: #000;
        }

        .header-navigation.sticky .brand-logo h3 span {
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 8.4px;
        }
    /*    .iti {*/
    /*  width: 100%;*/
    /*}*/

    /*.phone-box {*/
    /*  position: relative;*/
    /*}*/

    /*.phone-box .iti--allow-dropdown {*/
    /*  top: 24px;*/
    /*  left: 8px;*/
    /*  position: absolute;*/
    /*}*/

    /*.phone-top .iti--allow-dropdown {*/
    /*  top: 20px;*/
    /*}*/

    /*.phone-box .phone {*/
    /*  padding-left: 60px !important;*/
    /*}*/

    /*.phone-box .iti__country-list {*/
    /*  max-width: 300px;*/
    /*  width: 275px;*/
    /*  color: black;*/
    /*}*/
    </style>
    <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-K0SPX56B3V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K0SPX56B3V');
</script>
<!-- End of  Zendesk Widget script -->

<!-- Meta Pixel Code -->

<script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window, document,'script',

'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1789833644779487');

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=1789833644779487&ev=PageView&noscript=1"

/></noscript>

<!-- End Meta Pixel Code -->
</head>

<body>
    <?php $activePage = basename($_SERVER['PHP_SELF'], ""); ?>

    <!--====== Start Preloader ======-->
    <!-- <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div> -->
    <!--====== End Preloader ======-->
    <!--====== Start Header Section ======-->
    <header class="theme-header transparent-header">
        <!-- header Navigation -->
        <div class="header-navigation navigation-style-v3">
            <div class="nav-overlay"></div>
            <div class="container-fluid">
                <div class="primary-menu">
                    <div class="site-branding">
                        <a href="https://designvikings.us/" class="brand-logo">
                           <img class="logo-icon" src="assets/images/logo.svg?v=59" alt="Design Vikings" width="200" height="100px">
                            <!--<h3><span>Design</span><br>Vikings</h3>-->
                        </a>
                    </div>
                    <div class="nav-menu">
                        <!-- Navbar Close -->
                        <div class="navbar-close"><i class="far fa-times"></i></div>
                        <!-- Nav Search -->
                        <!-- <div class="nav-search">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div> -->
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item"><a href="https://designvikings.us/" class="nav-link  <?= ($activePage == 'https://designvikings.us/') ? 'active' : ''; ?>">Home</a>
                                </li>
                                <li class="menu-item"><a href="about" class="nav-link  <?= ($activePage == 'about') ? 'active' : ''; ?>">About</a>
                                </li>
                                <li class="menu-item has-children"><a href="services" class="nav-link  <?= ($activePage == 'services') ? 'active' : ''; ?>">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="logo-designs" class="<?= ($activePage == 'logo-designs') ? 'active' : ''; ?>">Logo Design</a></li>
                                        <li><a href="website-development" class="<?= ($activePage == 'website-development') ? 'active' : ''; ?>">Website Development</a></li>
                                        <li><a href="https://designvikings.us/shopify-promotion/">Shopify Solutions</a></li>
                                        <!-- <li><a href="ecommerce-web-solutions">Ecommerce Web Solutions</a></li> -->
                                        <li><a href="branding-solutions" class="<?= ($activePage == 'branding-solutions') ? 'active' : ''; ?>">Branding Solutions</a></li>
                                        <!-- <li><a href="motion-graphics">Motion Graphics</a></li> -->
                                        <li><a href="video-animation" class="<?= ($activePage == 'video-animation') ? 'active' : ''; ?>">Video Animation</a></li>
                                        <li><a href="app-design-development" class="<?= ($activePage == 'app-design-development') ? 'active' : ''; ?>">App Design & Development</a></li>
                                        <li><a href="creative-copywriting" class="<?= ($activePage == 'creative-copywriting') ? 'active' : ''; ?>">Creative Copywriting</a></li>
                                        <li><a href="digital-marketing" class="<?= ($activePage == 'digital-marketing') ? 'active' : ''; ?>">Digital Marketing</a></li>
                                        <li><a href="illustration-design" class="<?= ($activePage == 'illustration-design') ? 'active' : ''; ?>">Illustration Design</a></li>
                                        <!-- <li><a href="marketing-collateral">Marketing Colleteral</a></li> -->
                                        <li><a href="seo-services" class="<?= ($activePage == 'seo-services') ? 'active' : ''; ?>">SEO Services</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="packages" class="nav-link  <?= ($activePage == 'packages') ? 'active' : ''; ?>">Packages</a>
                                </li>
                                <li class="menu-item"><a href="combo-package" class="nav-link  <?= ($activePage == 'combo-package') ? 'active' : ''; ?>">Combo Package</a>
                                </li>
                                <li class="menu-item"><a href="showcase" class="nav-link  <?= ($activePage == 'showcase') ? 'active' : ''; ?>">Showcase</a>
                                </li>
                                <li class="menu-item"><a href="testimonials" class="nav-link  <?= ($activePage == 'testimonials') ? 'active' : ''; ?>">Testimonials</a>
                                </li>
                                <li class="menu-item"><a href="contact" class="nav-link  <?= ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right-nav">
                        <ul>
                            <a href="#_" class="main-btn arrow-btn wow fadeInUp topStartedBTN" data-wow-delay=".5s" data-toggle="modal" data-target="#popupLead">Get Started</a>
                            <!--<li class="bar-item"><a href="#"><img src="assets/images/dot.png" alt="dot"></a></li>-->
                            <li class="navbar-toggle-btn">
                                <div class="navbar-toggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== End Header Section ======-->