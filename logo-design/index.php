<?php
define("NITROPACK_HOME_URL", "https://designvikings.us/logo-design/"); 
define("NITROPACK_SITE_ID", "QjJPZqOOvlKVbJUjhpWHYETuXHVHIWoB"); 
define("NITROPACK_SITE_SECRET", "zBmwGzeU5itSSYQdZkGdf99DVvOg7DMMsIKQX9Osb4aNSs7HivcdUuFGjFIzC5Le"); 
include_once "nitropack-sdk/bootstrap.php";

?>

<?php
   require_once('ip/getIpInfo.php'); 
   $pageurl = $_SERVER['REQUEST_URI'];
	$website = $_SERVER['HTTP_HOST'];
	$ip = $ipdetails['ip'];
	$city = $ipdetails['city_name'];
	$region = $ipdetails['region_name'];
	$country = $ipdetails['country_name'];
	$organization = $ipdetails['as'];
	$latitude = $ipdetails['latitude'];
	$longitude = $ipdetails['longitude'];
	$timezone = $ipdetails['time_zone'];
	$postal = $ipdetails['zip_code'];
    $clientIP = $_SERVER['HTTP_CLIENT_IP']
    ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
    ?? $_SERVER['HTTP_X_FORWARDED']
    ?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
    ?? $_SERVER['HTTP_FORWARDED']
    ?? $_SERVER['HTTP_FORWARDED_FOR']
    ?? $_SERVER['REMOTE_ADDR']
    ?? '0.0.0.0';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Custom Logo Design Agency </title>
    <meta name="description"
        content="Logo Design Vikings is one of the most renowned digital agency in US for its top-class services in the field of Designing and Marketing. We are willing to help you grow your business through the best tips and techniques.">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="./favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/plugin.css">


    <!-- End TrustBox script -->
    
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
    <!-- <span class="formOverlaySide"></span> -->
    <div class="header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-5 col-6 pr-lg-0">
                    <div class="logo-img">
                        <a href="index.php"><img src="images/bld-logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-7 col-6 pl-lg-5">
                    <div class="wrap-menu">
                        <div class="top-header" data-aos="fade-down" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="soical-icon">
                                        <ul>
                                            <li><a href="https://www.facebook.com/logodesignvikingsOfficial"
                                                    target="blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.linkedin.com/company/logodesignvikings"
                                                    target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="https://www.pinterest.com/logodesignvikings" target="blank"><i
                                                        class="fab fa-pinterest"></i></a></li>
                                            <li><a href="https://www.instagram.com/logodesignvikingsofficial"
                                                    target="blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="top-contact">
                                        <ul>
                                            <li><a href="javascript:;" class="chat"><i
                                                        class="fas fa-comments"></i><span>Live Chat</span></a></li>
                                            <li><a href="tel:+1 817 533 6583"><i class="fas fa-phone"></i><span> +1 817 533 6583</span></a></li>
                                            <li class="last"><a href="javascript:;" class="popupBox"><i
                                                        class="fas fa-edit"></i><span>Request a Quote</span></a></li>
                                        </ul>
                                        <!-- <div class="navicon">
                                       <a class="nav-toggle" href="javascript:;"><span></span></a>
                                       </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </header>
    <!-- <div class="main_banner">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="custom_logo_design_area text-center">
                     <h1>Custom <span> Logo Designs</span><br> Made With Perfection</h1>
                     <p>Highly-professional logo designs services poured with passion<br> and proficiency</p>
                     <div class="row justify-content-center">
                        <div class="col-xl-10">
                           <div class="form_area">
                              <form class="sign_up_form form_submission" id="regForm" method="POST">
                                 Custom Fields
                                 <input type="hidden" name="url" value='https://www.logodesignvikings.co.uk/logo-design/'>
                                 <input type="hidden" name="domain" value="www.logodesignvikings.co.uk">
                                 <input type="hidden" name="subject" value="Signup Form (www.logodesignvikings.co.uk)">
                                 <input type="hidden" name="source" value="">
                                 <div class="row justify-content-center">
                                    <div class="col-xl-7 col-md-7">
                                       <div class="form-group side-form-group tab-1" style="display: block;">
                                          <i class="fas fa-edit"></i>
                                          <input type="text" class="form-control" name="name" placeholder="Enter Your Business Name" required>
                                       </div>
                                       <div class="form-group side-form-group tab-2" style="display: none;">
                                          <i class="fas fa-edit"></i>
                                          <input type="email" class="form-control" placeholder="Your E-mail" name="email" required>
                                       </div>
                                       <div class="form-group side-form-group tab-3" style="display: none;">
                                          <i class="fas fa-edit"></i>
                                          <input type="number" minlength="10" maxlength="12" pattern="\d{12}" class="form-control" placeholder="Phone Number" name="phone" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4">
                                       <div class="cta-form-btn">
                                          <button class="tab-1-btn sbt_set next" type="button" onclick="nextPrev(1)" style="display: inline;">Next</button>
                                          <button class="tab-2-btn sbt_set prev" type="button" onclick="nextPrev(2)" style="display: none;">Previous</button>
                                          <button class="tab-2-btn sbt_set next" type="button" onclick="nextPrev(3)" style="display: none;">Next</button>
                                          <button class="tab-3-btn sbt_set prev" type="button" onclick="nextPrev(4)" style="display: none;">Previous</button>
                                          <button class="tab-3-btn sbt_set submit" type="submit" class="learn-more-tab" id="signupBtn" value="1" name="signupForm" style="display: none;">Submit</button>
                                          <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                          <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                                          <div class="loader" style="display: none">
                                             <img alt="loader" src="loader.gif">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
    <div class="main_banner">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="custom_logo_design_area">
                        <h1>Custom <br> <span> Logo Designs <br></span> Made With Perfection</h1>
                        <p>Highly-professional logo designs services poured with passion and proficiency</p>
                        <!-- <div class="row justify-content-center">
                        <div class="col-xl-10">
                           <div class="form_area">
                              <form class="sign_up_form form_submission" id="regForm" method="POST">
                                 Custom Fields
                                 <input type="hidden" name="url" value='https://www.logodesignvikings.co.uk/logo-design/'>
                                 <input type="hidden" name="domain" value="www.logodesignvikings.co.uk">
                                 <input type="hidden" name="subject" value="Signup Form (www.logodesignvikings.co.uk)">
                                 <input type="hidden" name="source" value="">
                                 <div class="row justify-content-center">
                                    <div class="col-xl-7 col-md-7">
                                       <div class="form-group side-form-group tab-1" style="display: block;">
                                          <i class="fas fa-edit"></i>
                                          <input type="text" class="form-control" name="name" placeholder="Enter Your Business Name" required>
                                       </div>
                                       <div class="form-group side-form-group tab-2" style="display: none;">
                                          <i class="fas fa-edit"></i>
                                          <input type="email" class="form-control" placeholder="Your E-mail" name="email" required>
                                       </div>
                                       <div class="form-group side-form-group tab-3" style="display: none;">
                                          <i class="fas fa-edit"></i>
                                          <input type="number" minlength="10" maxlength="12" pattern="\d{12}" class="form-control" placeholder="Phone Number" name="phone" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4">
                                       <div class="cta-form-btn">
                                          <button class="tab-1-btn sbt_set next" type="button" onclick="nextPrev(1)" style="display: inline;">Next</button>
                                          <button class="tab-2-btn sbt_set prev" type="button" onclick="nextPrev(2)" style="display: none;">Previous</button>
                                          <button class="tab-2-btn sbt_set next" type="button" onclick="nextPrev(3)" style="display: none;">Next</button>
                                          <button class="tab-3-btn sbt_set prev" type="button" onclick="nextPrev(4)" style="display: none;">Previous</button>
                                          <button class="tab-3-btn sbt_set submit" type="submit" class="learn-more-tab" id="signupBtn" value="1" name="signupForm" style="display: none;">Submit</button>
                                          <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                          <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                                          <div class="loader" style="display: none">
                                             <img alt="loader" src="loader.gif">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div> -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="banner-right">
                        <div class="bannerForm" data-aos="fade-up" data-aos-duration="700">
                            <div class="tooltp montfont">
                                <h2>Sign Up Now</h2>
                            </div>
                            <div class="banFormTp">
                                <h2 class="montfont">
                                    <span>
                                        Up To
                                        <p>50%</p>
                                    </span>
                                </h2>
                                <h3 class="montfont">Discount <br> Today ON</h3>
                            </div>
                            <div class="banFormBt fixedform">
                                <div class="barforms"></div>
                                <div class="getdiscount">
                                    <form class="offr-frm form_submission" id="bannerForm" method="POST"
                                        action="javascript:lead('bannerForm');">
                                        <!-- Custom Fields -->
                                        <input type="hidden" id="referer" name="referer" value="google">
                                        <input type="hidden" id="price" name="price" value="AUD35.99">
                                        <input type="hidden" id="title" name="package" value="Logo Special Package">
                                        <input type="hidden" name="page" value="<?php echo $website . $pageurl; ?>">
                                        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
                                        <input type="hidden" name="realip" value="<?php echo $clientIP; ?>">
                                        <input type="hidden" name="org" value="<?php echo $organization; ?>">
                                        <input type="hidden" name="country" value="<?php echo $country; ?>">
                                        <input type="hidden" name="region" value="<?php echo $region; ?>">
                                        <input type="hidden" name="city" value="<?php echo $city; ?>">
                                        <input type="hidden" name="latitude" value="<?php echo $latitude; ?>">
                                        <input type="hidden" name="longitude" value="<?php echo $longitude; ?>">
                                        <input type="hidden" name="timezone" value="<?php echo $timezone; ?>">
                                        <input type="hidden" name="postal" value="<?php echo $postal; ?>">

                                        <div class="mm-field namefield">
                                            <i class="fa fa-user"></i>
                                            <input type="text" placeholder="Enter Your Name" name="name"
                                                >
                                        </div>
                                        <div class="mm-field emailfield">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email Address" class="email"
                                                >
                                        </div>
                                        <div class="mm-field pnfields">
                                            <i class="fa fa-phone"></i>
                                            <input type="text" class="number" 
                                                placeholder="Phone Number" name="phone" >
                                        </div>
                                        <div class="banFormBtt">
                                            <div class="sumbit-btn">
                                                <button type="submit" name="signupForm" aria-label="signupForm"
                                                    id="signupBtn" value="1" class="learn-more-tab">Reserve this
                                                    discount</button>
                                                <div class="error mt-3 alert alert-danger text-left mb-0"
                                                    style="display: none"></div>
                                                <div class="success mt-3 alert alert-success text-left mb-0"
                                                    style="display: none"></div>
                                                <div class="loader" style="display: none">
                                                    <img alt="loader" src="loader.gif">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <p class="regist_anch popupBox"><a href="javascript:;">Register Now</a> - It's a
                                        Limited Time Offer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="client-counter categ slidesmms">
        <div class="container-fluid">
            <div class="client-carousel">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="client-text">
                                <h3>Now proudly <br> working with</h3>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div
                                class="row slidstopbar align-items-center justify-content-between counter-responsive-slider">
                                <div class="slidestrip d-flex">
                                    <div class="">
                                        <img style="width: 100%;" src="images/logobar1.png" alt="">
                                    </div>
                                </div>
                                <div class="slidestrip d-flex">
                                    <div class="">
                                        <img src="images/logobar2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12">
                            <div class="counter-btn">
                                <a href="#portfolio" class="view-btn">View Our Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- types_of_logos -->
    <section class="types_of_logo">
        <div class="container">
            <div class="head_set">
                <div class="head_set_ty">
                    <h2>We Create All <br> Types Of Logo Design</h2>
                </div>
                <p>Through our custom logo designs, we just don't give your brand an identity, but we make sure it
                    leaves an everlasting stamp on your visitors and customers. Our team of industry leading designers
                    make sure that you get the logo and NFT that makes your brand stand out among the competitors.
                </p>
            </div>
            <div class="row industrie-number-responsive-slider">
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon1.webp" alt="">
                        <h4>Iconic Logo</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon2.webp" alt="">
                        <h4>Typographic Logo</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon3.webp" alt="">
                        <h4>Illustrative Logo</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon4.webp" alt="">
                        <h4>Animated Logo</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon5.webp" alt="">
                        <h4>3D Logo</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon6.webp" alt="">
                        <h4>Non-Fungible Token</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon7.webp" alt="">
                        <h4>Emblem Logo</h4>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="box_set">
                        <img src="images/webp/icon8.webp" alt="">
                        <h4>2D Logo</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- types_of_logos -->
    <section class="main-ready-work">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-2 col-md-2 col-md-2 ready-work-img">
                    <img src="images/webp/ready-work-img.webp" alt="" class="img-fluid">
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="ready-text aos-init aos-animate" data-aos="zoom-in-left" data-aos-duration="2000">
                        <h3>Get the best logo for your business in less than 24 hours</h3>
                        <p>Speak with one of our Design Consultants about your custom logo design project or general
                            inquiries. Get in touch with us and one of our consultants will be with you shortly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ready-work-contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-md-12 col-sm-12">
                    <div class="cta-contact aos-init aos-animate" data-aos="zoom-in-left" data-aos-duration="1000">
                        <ul>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+1 817 533 6583">
                                    <p>Toll Free Number</p>
                                    <span>+1 817 533 6583</span>
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-comments"></i>
                                <a href="javascript:;" class="chat">
                                    <p>Talk to Us</p>
                                    <span>LIVE CHAT</span>
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-edit"></i>
                                <a href="mailto:info@logodesignvikings.co.uk">
                                    <p>Email us at</p>
                                    <span>info@logodesignvikings.co.uk</span>
                                </a>
                            </li>
                        </ul>
                        <div class="ready-btn">
                            <a href="javascript:;" class="portfolio-btn-2 popupBox"> Lets Get Started <img
                                    src="images/webp/cta-1-btn-arrow.webp" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-portfolio" id="portfolio">
        <h3>Logo Design Portfolio</h3>
        <h2>Our Clientele Across <br> Various Industries</h2>
        <p>Logo Design Vikings’s portfolio reflects its team commitment to deliver the best designs that makes your
            brand standout in the market. We have tailored designs <br> that are in line with your business’ core
            services.</p>
        <span class="jellyanimation"></span>
        <div class="container">
            <div class="row no-gutters justify-content-center">
                <div class="CategoriesSec">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">ALL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">3D DESIGN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">ANIMATED</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="flat-tab" data-toggle="tab" href="#flat" role="tab"
                                aria-controls="flat" aria-selected="false">FLAT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="iconic-tab" data-toggle="tab" href="#iconic" role="tab"
                                aria-controls="iconic" aria-selected="false">ICONIC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="illus-tab" data-toggle="tab" href="#illus" role="tab"
                                aria-controls="illus" aria-selected="false">ILLUSTRATIVE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="abstract-tab" data-toggle="tab" href="#abstract" role="tab"
                                aria-controls="abstract" aria-selected="false">ABSTRACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mascot-tab" data-toggle="tab" href="#mascot" role="tab"
                                aria-controls="mascot" aria-selected="false">MASCOT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="typo-tab" data-toggle="tab" href="#typo" role="tab"
                                aria-controls="typo" aria-selected="false">TYPOGRAPHY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nft-tab" data-toggle="tab" href="#nft" role="tab"
                                aria-controls="nft" aria-selected="false">NFT Design</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active MainGallerSec row" id="home" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="gallery_product row MGallery filter aa portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/34.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/38.webp">
                                <div class="proj-img">
                                    <img src="images/webp/38.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/39.webp">
                                <div class="proj-img">
                                    <img src="images/webp/39.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab12.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3 aos-init aos-animate" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3 aos-init aos-animate" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t7.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="gallery_product row MGallery filter 3d portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/31.webp">
                                <div class="proj-img">
                                    <img src="images/webp/31.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/32.webp">
                                <div class="proj-img">
                                    <img src="images/webp/32.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/34.webp">
                                <div class="proj-img">
                                    <img src="images/webp/34.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/35.webp">
                                <div class="proj-img">
                                    <img src="images/webp/35.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/36.webp">
                                <div class="proj-img">
                                    <img src="images/webp/36.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/37.webp">
                                <div class="proj-img">
                                    <img src="images/webp/37.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/38.webp">
                                <div class="proj-img">
                                    <img src="images/webp/38.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/39.webp">
                                <div class="proj-img">
                                    <img src="images/webp/39.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/310.webp">
                                <div class="proj-img">
                                    <img src="images/webp/310.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/311.webp">
                                <div class="proj-img">
                                    <img src="images/webp/311.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="gallery_product row MGallery filter ani portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- <div class="ftr-proj col-md-3" data-aos="flip-up">
                        <a data-fancybox="" href="images/webp/a6.webp">
                        <div class="proj-img">
                        <img src="images/webp/a6.webp" alt="">
                        </div>
                        </a>
                        </div> -->
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a9.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a9.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- <div class="ftr-proj col-md-3" data-aos="flip-up">
                        <a data-fancybox="" href="images/webp/a10.webp">
                        <div class="proj-img">
                        <img src="images/webp/a10.webp" alt="">
                        </div>
                        </a>
                        </div> -->
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a11.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/a12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/a12.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="flat" role="tabpanel" aria-labelledby="flat-tab">
                    <div class="gallery_product row MGallery filter animated portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f9.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f9.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f10.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f10.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f11.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/f12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/f12.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="iconic" role="tabpanel" aria-labelledby="iconic-tab">
                    <div class="gallery_product row MGallery filter ico portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i9.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i9.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i10.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i10.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i11.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/i12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/i12.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="illus" role="tabpanel" aria-labelledby="illus-tab">
                    <div class="gallery_product row MGallery filter illus portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il9.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il9.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il10.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il10.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il11.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/il12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/il12.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="abstract" role="tabpanel" aria-labelledby="abstract-tab">
                    <div class="gallery_product row MGallery filter abstract portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab9.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab9.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab10.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab10.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab11.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/ab12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/ab12.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mascot" role="tabpanel" aria-labelledby="mascot-tab">
                    <div class="gallery_product row MGallery filter mas portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m9.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m9.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m10.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m10.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m11.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/m12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/m12.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="typo" role="tabpanel" aria-labelledby="typo-tab">
                    <div class="gallery_product row MGallery filter type portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t8.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t9.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t9.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t10.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t10.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t11.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t11.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/t12.webp">
                                <div class="proj-img">
                                    <img src="images/webp/t12.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nft" role="tabpanel" aria-labelledby="nft-tab">
                    <div class="gallery_product row MGallery filter type portfolio-responsive-slider">
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft1.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft1.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft2.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft2.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft3.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft3.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft4.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft4.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft5.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft5.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft6.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft6.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft7.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft7.webp" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="ftr-proj col-md-3" data-aos="flip-up">
                            <a data-fancybox="" href="images/webp/nft8.webp">
                                <div class="proj-img">
                                    <img src="images/webp/nft8.webp" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="port-btn-wrapp">
                <a href="javascript:;" class="chat port-btn">Live Chat</a>
                <a href="javascript:;" class="popupBox pop-btn">Lets Get Started <img src="images/webp/black-arrow.webp"
                        alt=""></a>
            </div>
        </div>
    </section>

    <!-- Packages -->
    <section class="packages-sec">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-lg-6 pckg-clr-hd">
                    <h3>Packages And Pricing</h3>
                    <h4>For Business Of All Sizes!</h4>
                </div>
                <div class="col-lg-6 pckg-clr-para">
                    <p>We have categorized our logo, NFT, branding & website packages. Select the one that is most
                        suited to your business needs or discuss now about any surprise discounts.</p>
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="logo-tab" data-toggle="tab" href="#logo-price" role="tab"
                        aria-controls="logo-tab" aria-selected="true">Logo Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="logo-nft-tab" data-toggle="tab" href="#logo-nft-price" role="tab"
                        aria-controls="logo-nft-tab" aria-selected="false">NFT Design</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="logo-price" role="tabpanel" aria-labelledby="logo-tab">
                    <div class="row justify-content-center packages-responsive-slider">

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">Logo <span>Special Package</span></h2>
                                        <p class="pkge-prce three-wrds">$35</p>
                                        <span class="old-price">$119</span>
                                    </div>
                                    <hr>
                                    <div class="list">

                                        <ul class="ticklist2 slim-scroll">
                                            <li> 4 Original Logo Concepts</li>
                                            <li> 2 Dedicated Logo Designer</li>
                                            <li> Unlimited Revisions</li>
                                            <li> JPEG Format</li>
                                            <li> 24 - 48 Hours Turn Around Time</li>
                                            <li class="features">MORE FEATURES</li>
                                            <li> 100% Satisfaction</li>
                                            <li> Money Back Guarantee</li>
                                            <li> Dedicated Account Manager</li>
                                        </ul>

                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('Logo Special Package','$35');">Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">Logo <span>Plus Package</span></h2>
                                        <p class="pkge-prce three-wrds">$119</p>
                                        <span class="old-price">$399</span>
                                    </div>
                                    <hr>
                                    <div class="list">

                                        <ul class="ticklist2 slim-scroll">
                                            <li> 12 Original Logo Concepts</li>
                                            <li> 4 Dedicated Logo Designer (Industry Specific)</li>
                                            <li> Unlimited Revisions</li>
                                            <li> Stationery Design (Business Card, Letterhead, Envelope)</li>
                                            <li> Free Icon Design</li>
                                            <li> Final File Formats</li>
                                            <li> 24 - 48 Hours Turn Around Time</li>
                                            <li class="features">MORE FEATURES</li>
                                            <li> 100% Satisfaction</li>
                                            <li> 100% Ownership Price</li>
                                            <li> Money Back Guarantee</li>
                                            <li> Dedicated Account Manager</li>
                                        </ul>


                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('Logo Plus Package','$119');" >Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">Logo<span>Platinum Package</span></h2>
                                        <p class="pkge-prce three-wrds">$299</p>
                                        <span class="old-price">$999</span>
                                    </div>
                                    <hr>
                                    <div class="list">

                                        <ul class="ticklist2 slim-scroll">
                                            <li>Unlimited Logo Concepts</li>
                                            <li>8 Dedicated Logo Designer (Industry Specific)</li>
                                            <li>Unlimited Revisions</li>
                                            <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                            <li>500 Business Cards Print</li>
                                            <li>With Grey Scale Format</li>
                                            <li>Free Icon Design</li>
                                            <li>Final File Formats</li>
                                            <li>24 - 48 Hours Turn Around Time</li>
                                            <li class="features">MORE FEATURES</li>
                                            <li>100% Satisfaction</li>
                                            <li>Money Back Guarantee</li>
                                            <li>Dedicated Account Manager</li>
                                        </ul>

                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('Logo Platinum Package','$299');">Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">Gold <span>Logo Plan</span></h2>
                                        <p class="pkge-prce three-wrds">$499</p>
                                        <span class="old-price">$1666</span>
                                    </div>
                                    <hr>
                                    <div class="list">

                                        <ul class="ticklist2 slim-scroll">
                                            <li>Unlimited Original Logo Concepts</li>
                                            <li>8 Dedicated Logo Designer (Industry Specific)</li>
                                            <li> Unlimited Revisions</li>
                                            <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                                            <li>Social Media Design On Two Platforms</li>
                                            <li>1000 Business Cards</li>
                                            <li>Email Signature Design</li>
                                            <li>With Grey Scale Format</li>
                                            <li>Free Icon Design</li>
                                            <li>Formats: PNG, PDF, JPEG, PSD, EPS, AI, PNG, TIFF</li>
                                            <li>24 - 48 Hours Turn Around Time</li>
                                            <li class="features">MORE FEATURES</li>
                                            <li>100% Satisfaction</li>
                                            <li>Money Back Guarantee</li>
                                            <li>Dedicated Account Manager</li>
                                        </ul>




                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('Gold Logo Plan','$499');"  >Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">Basic Animated<span>Logo Plan</span></h2>
                                        <p class="pkge-prce three-wrds">$199</p>
                                        <span class="old-price">$499</span>
                                    </div>
                                    <hr>
                                    <div class="list">
                                        <ul class="ticklist2 slim-scroll">
                                            <li>1 Animated Logo Design Concept</li>
                                            <li>1 Dedicated Logo Designer</li>
                                            <li>3 Revisions</li>
                                            <li>Turn Around 24-48 hrs</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>100% Unique Design Guarantee</li>
                                            <li>100% Money Back Guarantee *</li>
                                        </ul>

                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('Basic Animated Logo Plan','$199');" >Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">Basic Animated<span>Logo Plan</span></h2>
                                        <p class="pkge-prce three-wrds">$399</p>
                                        <span class="old-price">$999</span>
                                    </div>
                                    <hr>
                                    <div class="list">
                                        <ul class="ticklist2 slim-scroll">
                                            <li>3 Animated Logo Design Concepts</li>
                                            <li>3 Dedicated Logo Designer</li>
                                            <li>Unlimited Revisions</li>
                                            <li>Turn Around 24-48 hrs</li>
                                            <li>100% Ownership Rights</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>100% Unique Design Guarantee</li>
                                            <li>100% Money Back Guarantee *</li>
                                        </ul>



                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox"  onclick="priceChange('Basic Animated Logo Plan','$399');">Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">3D<span>Logo Plan</span></h2>
                                        <p class="pkge-prce three-wrds">$544</p>
                                        <span class="old-price">$1813</span>
                                    </div>
                                    <hr>
                                    <div class="list">
                                        <ul class="ticklist2 slim-scroll">
                                            <li>3 Unique 3D Logo Concepts</li>
                                            <li>Light Effects and VFX</li>
                                            <li>Fully Rendered</li>
                                            <li>Multiple 3D Angles</li>
                                            <li>By 3 Award Winning Designers</li>
                                            <li>72 hours Turnaround Time</li>
                                            <li>UNLIMITED Revisions</li>
                                            <li>100% Ownership Rights</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>100% Unique Design Guarantee</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>100% Money Back Guarantee *</li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('3D Logo Plan','$544');">Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="logo-nft-price" role="tabpanel" aria-labelledby="logo-nft-tab">
                    <div class="row justify-content-center packages-responsive-slider">
                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">NFT<span>LABS LITE</span></h2>
                                        <p class="pkge-prce three-wrds">$499</p>
                                        <span class="old-price">$599</span>
                                    </div>
                                    <hr>
                                    <div class="list">
                                        <ul class="ticklist2 slim-scroll">
                                            <li>Base Character Creation</li>
                                            <li>3 Traits/Accessories</li>
                                            <li>2 revisions included</li>
                                            <li>Sourcefile</li>
                                            <li>Fully refundable until revision call</li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('NFT LABS LITE','$499');">Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">NFT<span>ENTREPRENEUR</span></h2>
                                        <p class="pkge-prce three-wrds">$3,999</p>
                                        <span class="old-price">$4,800</span>
                                    </div>
                                    <hr>
                                    <div class="list">
                                        <ul class="ticklist2 slim-scroll">
                                            <li>Base Character</li>
                                            <li>30 Traits/Accessories</li>
                                            <li>1,000 Variations</li>
                                            <li>Collection Generation</li>
                                            <li>Metadata</li>
                                            <li>Source Files</li>
                                            <li>2 Revisions included</li>
                                            <li>Fully refundable until revision call</li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('NFT ENTREPRENEUR','$3,999');" >Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="package-wrapper">
                                <div class="package-item">
                                    <div class="packg-heading">
                                        <h2 class="pkge-name">NFT<span>MOONSHOT</span></h2>
                                        <p class="pkge-prce three-wrds">$6,999</p>
                                        <span class="old-price">$9,998</span>
                                    </div>
                                    <hr>
                                    <div class="list">
                                        <ul class="ticklist2 slim-scroll">
                                            <li>Base Character</li>
                                            <li>70 Traits/Accessories</li>
                                            <li>10,000 Variations</li>
                                            <li>Collection Generation</li>
                                            <li>Metadata</li>
                                            <li>Source Files</li>
                                            <li>3 Revisions included</li>
                                            <li>Fully refundable until revision call</li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="chat-con">
                                        <ul>
                                            <li class="pkge-ordr">
                                                <a href="javascript:;" class="popupBox" onclick="priceChange('NFT MOONSHOT','$6,999');">Start Project</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:;" class="chat chat-btn">
                                        <span>Click here to <i class="fas fa-comment-dots"></i></span>
                                        <h5 class="montfont">Live Chat</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-transforming">
        <span></span>
        <div class="container">
            <div class="transforming-heading" data-aos="fade-down" data-aos-duration="1000">
                <h2>TRANSFORMING YOUR</h2>
                <h3>Vision Into Reality</h3>
                <p>From the initial conceptualization, till the final delivery of the designs, we make sure each and
                    every step is smooth,<br> transparent & flawless.We take our work seriously and that is why we use
                    top-quality designs for our clients in all types <br>of design services we provide</p>
            </div>
            <!-- Nav tabs -->
            <div class="transforming-tab" data-aos="fade-down" data-aos-duration="1000">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu4"><i
                                class="sprite-home sprite-transforming-icon-1"></i> <span>CREATIVE <br>BRIEF</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1"><i
                                class="sprite-home sprite-transforming-icon-2"></i> <span>INITIAL
                                <br>CONCEPTS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2"><i
                                class="sprite-home sprite-transforming-icon-3"></i> <span>FEEDBACK/
                                <br>REVISION</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3"><i
                                class="sprite-home sprite-transforming-icon-4"></i> <span>FINAL <br>DELIVERY</span></a>
                    </li>
                </ul>
            </div>
            <div class="transforming-tab-content">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="menu4">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12" data-aos="fade-right" data-aos-duration="1000">
                                <div class="transforming-tab-text">
                                    <h3>CREATIVE BRIEF</h3>
                                    <p>Once you purchase a logo package, we will provide you a logo brief form that you
                                        would have to fill online. The brief will help us to understand the concept you
                                        have in your mind for your logo.</p>
                                    <a href="javascript:;" class="popupBox" class="portfolio-btn-2"> Lets Get Started
                                        <img src="images/webp/black-arrow.webp" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                                <div class="transforming-tab-img">
                                    <img src="images/webp/transforming-tab-img-1.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="menu1">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="transforming-tab-text">
                                    <h3>INITIAL CONCEPTS</h3>
                                    <p>Once we reach the verdict about what your requirements and must-haves are, our
                                        designers will make a concept and make a draft to begin the collaborative design
                                        process. Our team communicates back and forth until the final concepts are made
                                        which best reflects your business.</p>
                                    <a href="javascript:;" class="popupBox" class="portfolio-btn-2"> Lets Get Started
                                    </a>
                                    <img src="images/webp/black-arrow.webp" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="transforming-tab-img">
                                    <img src="images/webp/transforming-tab-img-2.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="menu2">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="transforming-tab-text">
                                    <h3>FEEDBACK/REVISION</h3>
                                    <p>Once you make up your mind and select the final designs, our team starts the work
                                        on other package items and will revise the design in order to get the perfect
                                        design for your brand.</p>
                                    <a href="javascript:;" class="popupBox" class="portfolio-btn-2"> Lets Get
                                        Started</a>
                                    <img src="images/webp/black-arrow.webp" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="transforming-tab-img">
                                    <img src="images/webp/transforming-tab-img-3.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="menu3">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="transforming-tab-text">
                                    <h3>FINAL DELIVERY</h3>
                                    <p>After confirmation and your approval, we will send the final files of your
                                        designs to you. After having the files reviewed and after having the errors
                                        removed, we deliver the project and all the necessary format files.</p>
                                    <a href="javascript:;" class="popupBox" class="portfolio-btn-2"> Lets Get
                                        Started</a>
                                    <img src="images/webp/black-arrow.webp" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="transforming-tab-img">
                                    <img src="images/webp/transforming-tab-img-4.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="read_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-3 p-0">
                    <div class="ready">
                        <h1>READ <span>Y</span></h1>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="wit_us">
                        <h2>TO WORK WITH US?</h2>
                        <p>Contact us to discuss your logo design or general inquiries</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 with_us_content">
                    <div class="call_us">
                        <div class="icon">
                            <img src="images/webp/tele_icon.webp" alt="">
                        </div>
                        <div class="icondetai">
                            <p>Call Us Anytime</p>
                            <h5> <a href="tel:+1 817 533 6583"> +1 817 533 6583</a></h5>
                        </div>
                    </div>
                    <div class="call_us">
                        <div class="icon">
                            <img src="images/webp/chat_icon.webp" alt="">
                        </div>
                        <div class="icondetai">
                            <p>Talk To Us Now To</p>
                            <h5> <a href="javascript:;" class="chat"> Discuss Your Project</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="main-footer">
        <div class="container " data-aos="fade-up" data-aos-duration="1000">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-contact">
                        <img src="images/bld-logo.png">
                        <div class="copyright-left">
                            <p>Copyright © 2023, Logo Design Vikings All Rights Reserved. </p>
                        </div>
                        <div class="copyright-left">
                            <ul>
                                <li class="first"><a href="../terms.php">Terms Of Use</a></li>
                                <li class="last"><a href="../privacy.php">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="main-copyright">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="copyright-left">
                        <h2>Disclaimer: </h2>
                        <p>Logo, portfolio, images and content are sole property of Logo Design Vikings. All third
                            party company names, brand names, trademarks displayed on this website are the property of
                            their respective owners. Furthermore, Logo Design Vikings has no influence over the third
                            party material that is being displayed on the website. Therefore, we are also not
                            responsible for any resemblance with any other material on the web. These portfolios and
                            case studies are actual but exemplary (for better understanding); the actual names, designs,
                            functionality, content and stats/facts may differ from the actual projects. This is due to
                            the strict NDA policy that Logo Design Vikings adheres to.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--form Modal Popup-->
    <div class="modal fade" id="popup_form">
        <div class="modal-dialog modal-dialog-centered">
            <div class="entry-box">
                <form class="offr-frm form_submission" id="popupLead" method="POST" action="javascript:lead('popupLead');">
                    <!-- Custom Fields -->
                    <input type="hidden" id="referer" name="referer" value="google">
                    <input type="hidden" id="price" name="price" value="$35">
                    <input type="hidden" id="title" name="package" value="Logo Special Package">
                    <input type="hidden" name="page" value="<?php echo $website . $pageurl; ?>">
                    <input type="hidden" name="ip" value="<?php echo $ip; ?>">
                    <input type="hidden" name="realip" value="<?php echo $clientIP; ?>">
                    <input type="hidden" name="org" value="<?php echo $organization; ?>">
                    <input type="hidden" name="country" value="<?php echo $country; ?>">
                    <input type="hidden" name="region" value="<?php echo $region; ?>">
                    <input type="hidden" name="city" value="<?php echo $city; ?>">
                    <input type="hidden" name="latitude" value="<?php echo $latitude; ?>">
                    <input type="hidden" name="longitude" value="<?php echo $longitude; ?>">
                    <input type="hidden" name="timezone" value="<?php echo $timezone; ?>">
                    <input type="hidden" name="postal" value="<?php echo $postal; ?>">

                    <div class="row h-100 justify-content-center">
                        <div class="col-lg-5 col-md-5 col-sm-5 popup_top pr-0">
                            <div class="text">
                                <h2>Get Jaw-dropping</h2>
                                <h1>Designs<br> at</h1>
                            </div>
                            <div class="text_dis">
                                <div class="text_dis_in">
                                    <h2>UPTO</h2>
                                    <h1>50% OFF</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-10 entry-right">
                            <div class="col-sm-12 p-0">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="text_topfr">
                                    <h2>Hold it? Looking for an</h2>
                                    <h4>Out of the Box Design?</h4>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text set_inp_gr"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name"
                                        >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text set_inp_gr"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email"
                                        >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text set_inp_gr"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control number" name="phone"  placeholder="Phone Number" >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-0 mt-4">
                                    <button type="submit" class="entery-submit" name="signupForm" id="signupBtn"
                                        value="1">
                                        Get In Touch
                                    </button>
                                    <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none">
                                    </div>
                                    <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
                                    </div>
                                    <div class="loader" style="display: none">
                                        <img alt="loader" src="loader.gif">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--form Modal Popup-->

    <!-- TrustBox widget - Micro Review Count -->
    <div class="trustpilot-widget" data-locale="en-US" data-template-id="5419b6a8b0d04a076446a9ad"
        data-businessunit-id="616f3c92bb7a98bd7c13a3a7" data-style-height="24px" data-style-width="100%"
        data-theme="light" data-stars="1,2,3,4,5" data-no-reviews="hide" data-scroll-to-list="true"
        data-allow-robots="true" data-min-review-count="10">
        <a href="https://www.trustpilot.com/review/logodesignvikings.us" target="_blank" rel="noopener">Trustpilot</a>
    </div>
    <!-- End TrustBox widget -->


    <!-- <script> (function(w,d,t,r,u) { var f,n,i; w[u]=w[u]||[],f=function() { var o={ti:"137026701"}; o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad") }, n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function() { var s=this.readyState; s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null) }, i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i) }) (window,document,"script","//bat.bing.com/bat.js","uetq"); </script> -->
    <!-- TrustBox script -->
    <!-- <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> -->

    <script src="js/plugin.js" type="text/javascript"></script>

    <script src="js/custom.js" type="text/javascript"></script>
    <!--Main Js-->
    <!-- Chat Code -->

    <!-- Mouse Flow -->

    <style>
    .customalert {
        position: fixed;
        padding: 15px 20px;
        min-width: 180px;
        z-index: 99999;
        left: -35px;
        top: 50%;
        transform: rotate(270deg) translateY(-50%);
        text-align: center;
        background: rgba(242, 222, 222, 0.5)
    }
    </style>

    <!-- Forms validation -->
    <!-- <script src="../js/form_validator.min.js"></script> -->

    <!-- Main Requests Helper -->
    <!-- <script src="../js/core/ajaxHelper.js"></script> -->

    <!-- General Functions -->
    <!-- <script src="../js/core/generalHelper.js"></script> -->

    <!-- Sweet Alert -->
    <!-- <link rel="stylesheet" type="text/css" href="../js/alert/sweetalert.css"> -->
    <!-- <script src="../js/alert/sweetalert.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js"
        integrity="sha512-zdfH1XdRONkxXKLQxCI2Ak3c9wNymTiPh5cU4OsUavFDATDbUzLR+SYWWz0RkhDmBDT0gNSUe4xrQXx8D89JIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    $(document).ready(function() {
        $(".email").inputmask("email");
    });
    </script>

    <!--====== Main js ======-->
    <script src="js/script.js?v=1.1"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/custom-validation.js?v=1.2"></script>

    <!-- <script src="js/plugin.js"></script> -->
    <!-- <script src="js/custom-mini.js"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <!-- <script src="../assets/js/jquery.validate.min.js"></script> -->
    <!-- <script src="../assets/js/form-submit.js"></script> -->
    <script>
    $('.chat, .chatt').click(function() {
        $zopim.livechat.window.toggle();
    });
    </script>
    <script>
    jQuery(document).ready(function(){

setTimeout(function(){

     //var tag_new = jQuery("template").eq(38).attr("id");
     var tag_new = jQuery("template").last().attr("id");
     console.log(tag_new);

     //alert(tag_new);
     jQuery("#" + tag_new).css("display", "none");
     jQuery("#" + tag_new).next().next().css("display", "none");
}, 100);

});
</script>


</body>

</html>