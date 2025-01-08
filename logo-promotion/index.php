<?php
define("NITROPACK_HOME_URL", "https://designvikings.us/logo-promotion/"); 
define("NITROPACK_SITE_ID", "LKuVzzjVYNwFaaseGZikRNXCoTWbwUMd"); 
define("NITROPACK_SITE_SECRET", "iOiMMHrLQGiAErlzQjvGhaBkWOA3IoQWWIkg9l9hEE0Ah89U03sTd0FVy2IRFe11"); 
include_once "nitropack-sdk/bootstrap.php";

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
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Logo Design Services | Design Vikings</title>
  <meta name="description" content="Get unique logo design. Contact us now to hire a freelance logo design expert at 70% discount and get your logo project done and delivered remotely online.">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">

  <!-- All Plugin Css -->
  <link rel="stylesheet" type="text/css" href="css/plugin.css">
  <!-- All Plugin Css -->



  <!--Main CDN-->
  <link rel="stylesheet" type="text/css" href="css/style.css?v=2.8">
  <link rel="stylesheet" type="text/css" href="css/responsive.css?v=2.5">
  <!--Main CDN-->

<!-- Start of  Zendesk Widget script--> 
     <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script> 
     <!-- End of  Zendesk Widget script--->
     
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
  <!--Header start-->
  <header class="header_area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-4 col-md-3 col-sm-5 col-4" data-aos="fade-down" data-aos-duration="500">
          <div class="logo">
            <a href="javascript:void()"> <img data-src="query/assets/images/logo.svg" class="img-fluid lazyload" alt=""></a>
          </div>
        </div>
        <div class="col-xl-8 col-md-9 col-sm-7 col-8" data-aos="fade-up" data-aos-duration="700">
          <div class="header-right">
            <div class="con_detatil">
              <div class="icon_head">
                <a href="mailto:sales@designvikings.us">
                  <i class="fas fa-envelope-open-text"></i>
                  <h6>sales@designvikings.us</h6>
                </a>
              </div>
              <div class="icon_head">
                <a href="tel:+1 817 533 6583">
                  <i class="fas fa-phone"></i>
                  <h6>Call Us: +1 817 533 6583</h6>
                </a>
              </div>

            </div>
            <div class="get_chat">
              <a class="chat" href="javascript:;">
                <i class="sprite sprite-chat"></i>
                <!-- <img data-src="img/chat.png" class="img-fluid lazyload" alt=""> -->
                <div class="chat_span">
                  <span>24/7 Avalaible</span>
                  <br>
                  <span>Live Chat</span>
                </div>
              </a>
            </div>
            <div class="get_quotes hvr-pulse-grow">
              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="bt-red">
                <span>Let’s Get Started</span>
                <img data-src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Header-->

  <!-- Banner -->

  <section class="new-banner">
    <div class="container-fluid h-100">
      <img src="img/banner-logo-1.webp" alt="logo" class="banner-log-1">
      <img src="img/banner-logo-2.webp" alt="logo" class="banner-log-2">
      <img src="img/banner-logo-3.webp" alt="logo" class="banner-log-3">
      <!--<img src="img/banner-logo-4.webp" alt="logo" class="banner-log-4" data-aos="fade-up" data-aos-duration="1500">-->
      <img src="img/banner-mob.webp" alt="logo" class="banner-mob img-fluid">
      <div class="banner-slogon-cont">
        <img src="img/banner-slogon.webp" alt="logo" class="banner-slogon">
        <!-- <h1 class="ml6"> <span class="letters">Designed In Just $35</span> </h1> -->
        <h1 class="ml6">
          <span class="text-wrapper">
            <span class="letters">Designed In Just $35</span>
          </span>
        </h1>
      </div>
 
      <div class="row h-100 justify-content-end align-items-center align-items-lg-end">
        <div class="col-lg-12">
          <div class="banner-form-wrap" data-form-type="ordernow_form">
              
              <div class="form-wrap" data-form-type="ordernow_form">
                    <form id="regForm" class="sign_up_form signupForm form-poup" method="post" enctype="multipart/form-data" action="javascript:lead('regForm');">
                    
                     <!--hidden required values-->
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
                
                    <div class="mm-field namefield">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Enter Your Name" name="name" id="m1" data-validation="required" required="" pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="mm-field emailfield">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" class="email" id="email-val" value="" placeholder="Email address*" data-validation="required" required="">
                    </div>
                    <div class="mm-field pnfields">
                    <i class="fa fa-phone"></i>
                    <input type="text" class="number" minlength="10" maxlength="10" placeholder="Phone Number" name="phone" data-validation="required" required="" onkeyup="if (!window.__cfRLUnblockHandlers) return false; javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                    </div>
                    <div class="banFormBtt">
                    <div class="sumbit-btn">
                    <button type="submit" name="signupForm" aria-label="signupForm" id="signupBtn" value="1" class="learn-more-tab">SUBMIT</button>
                    </div>
                    </div>
                    <div id="formResult" class="popFormResult"></div>
                    </form>
            </div>
              
            <!--<form id="regForm" class="sign_up_form signupForm form-poup" method="post" enctype="multipart/form-data" method="POST" action="javascript:lead('regForm');">-->
              <!--hidden required values-->
            <!--  <input type="hidden" id="referer" name="referer" value="google">-->
            <!--  <input type="hidden" id="price" name="price" value="$35">-->
            <!--  <input type="hidden" id="title" name="package" value="Logo Special Package">-->
            <!--  <input type="hidden" name="page" value="<?php echo $website . $pageurl; ?>">-->
            <!--  <input type="hidden" name="ip" value="<?php echo $ip; ?>">-->
            <!--  <input type="hidden" name="realip" value="<?php echo $clientIP; ?>">-->
            <!--  <input type="hidden" name="org" value="<?php echo $organization; ?>">-->
            <!--  <input type="hidden" name="country" value="<?php echo $country; ?>">-->
            <!--  <input type="hidden" name="region" value="<?php echo $region; ?>">-->
            <!--  <input type="hidden" name="city" value="<?php echo $city; ?>">-->
            <!--  <input type="hidden" name="latitude" value="<?php echo $latitude; ?>">-->
            <!--  <input type="hidden" name="longitude" value="<?php echo $longitude; ?>">-->
            <!--  <input type="hidden" name="timezone" value="<?php echo $timezone; ?>">-->
            <!--  <input type="hidden" name="postal" value="<?php echo $postal; ?>">-->
            <!--  <div class="row  no-gutters justify-content-start align-items-center banner-frm-row">-->
            <!--    <div class="col-xl-8">-->
            <!--      <div class="form-group side-form-group tab name-field name-field-1 has-error" style="display: block;">-->
            <!--        <input type="text" id="m3" class="form-control error text-val" name="name" placeholder=" Name" data-validation="required" style="border-color: rgb(185, 74, 72);" required> -->
            <!--      </div>-->
            <!--      <div class="form-group side-form-group tab name-field name-field-2">-->
            <!--        <input type="email" class="form-control" placeholder=" E-mail" name="email" data-validation="required" required id="email-val" required>-->
            <!--      </div>-->
            <!--      <div class="form-group side-form-group tab name-field name-field-3">-->
            <!--        <input type="number" class="form-control" placeholder="Phone no" name="phone" maxlength="11" data-validation="required" required>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--    <div class=" col-xl-4 text-center">-->
            <!--      <div class="cta-form-btn d-flex justify-content-end">-->
            <!--        <button class="btn-1" type="button" id="prevBtn" onclick="nextPrev(-1)" style="display: none;">-->
            <!--          <i class="fas fa-arrow-left"></i>-->

            <!--        </button>-->
            <!--        <button class="btn-1" type="button" id="nextBtn" onclick="nextPrev(1)" style="display: inline;">-->
            <!--          <i class="fas fa-arrow-right"></i>-->

            <!--        </button>-->
            <!--        <button type="submit" class="learn-more-tab btn-1" id="signupBtn" value="1" name="signupForm" style="display: none;">-->
            <!--          <i class="fas fa-arrow-right"></i>-->

            <!--        </button>-->

            <!--      </div>-->
            <!--      <div id="formResult" class="popFormResult"></div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</form>-->
            <div class="banner-form-txt">
              <!--<img src="img/bnr-from-arrow.png" class="img-fluid">-->
              <!--<img src="img/get-std.png" class="get-std img-fluid">-->
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>

  <!-- Banner -->

  <section class="main-work" id="portfolio">
    <div class="container">
      <div class="heading portfolio-hdg">
        <h3>Our Latest WORK </h3>
      </div>
      <div class="tab-ul-port">
        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal" id="myTab" role="tablist">
          <li class="nav-item">
            <a class=" active" href="#tab3" data-toggle="tab" aria-selected="false" role="tab">Iconic</a>
          </li>
          <li class="bdr-rem nav-item">
            <a href="#tab5" data-toggle="tab" aria-selected="false" role="tab">Symbolic</a>
          </li>
          <li class="bdr-rem nav-item">
            <a href="#tab6" data-toggle="tab" aria-selected="false" role="tab">Typographic</a>
          </li>
          <li class="bdr-rem nav-item">
            <a href="#tab4" data-toggle="tab" aria-selected="false" role="tab">Illustrative</a>
          </li>
          <li class="nav-item">
            <a href="#tab2" data-toggle="tab" aria-selected="false" role="tab">3D Logos</a>
          </li>
          <li class="nav-item">
            <a href="#tab1" data-toggle="tab" aria-selected="true" role="tab">Animated Logo</a>
          </li>
        </ul>
      </div>

      <div class="port-tab-st">
        <div class="tab-content" id="myTabContent">

          <div role="tabpanel" class="tab-pane  fade show active" id="tab3">
            <div class="col-sm-12 p0">
              <div class="row portfolio-tab-slider">
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/01.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/01.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/02.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/02.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/03.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/03.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/04.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/04.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/05.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/05.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/06.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/06.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/07.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/07.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/08.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/08.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/09.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/09.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/10.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/10.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/11.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/11.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/iconic/12.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/iconic/12.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>

              </div>


            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="tab1">
            <div class="col-sm-12 p0">
              <div class="row portfolio-tab-slider">
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/2d/1.gif" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/2d/1.gif" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/2d/2.gif" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/2d/2.gif" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/2d/3.gif" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/2d/3.gif" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/2d/4.gif" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/2d/4.gif" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/2d/5.gif" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/2d/5.gif" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/2d/6.gif" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/2d/6.gif" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="tab2">
            <div class="col-sm-12 p0">
              <div class="row portfolio-tab-slider">
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/3d/01.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/3d/01.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/3d/02.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/3d/02.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/3d/03.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/3d/03.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/3d/04.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/3d/04.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/3d/05.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/3d/05.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/3d/06.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/3d/06.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <!-- <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/3d/07.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/3d/07.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/3d/08.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/3d/08.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/3d/09.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/3d/09.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/3d/10.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/3d/10.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/3d/11.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/3d/11.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/3d/12.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/3d/12.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>                       -->
              </div>

            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="tab4">
            <div class="col-sm-12 p0">
              <div class="row portfolio-tab-slider">
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/illustrative/01.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/illustrative/01.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/illustrative/02.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/illustrative/02.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/illustrative/03.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/illustrative/03.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/illustrative/04.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/illustrative/04.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/illustrative/05.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/illustrative/05.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/illustrative/06.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/illustrative/06.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <!-- <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/illustrative/07.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/illustrative/07.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/illustrative/08.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/illustrative/08.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/illustrative/09.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/illustrative/09.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/illustrative/10.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/illustrative/10.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/illustrative/11.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/illustrative/11.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/illustrative/12.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/illustrative/12.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div> -->

              </div>

            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="tab5">
            <div class="col-sm-12 p0">
              <div class="row portfolio-tab-slider">
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/symbolic/01.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/symbolic/01.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/symbolic/02.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/symbolic/02.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/symbolic/03.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/symbolic/03.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/symbolic/04.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/symbolic/04.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/symbolic/05.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/symbolic/05.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/symbolic/06.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/symbolic/06.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <!-- <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/symbolic/07.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/symbolic/07.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/symbolic/08.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/symbolic/08.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/symbolic/09.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/symbolic/09.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/symbolic/10.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/symbolic/10.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/symbolic/11.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/symbolic/11.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/symbolic/12.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/symbolic/12.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div> -->
              </div>

            </div>
          </div>

          <div role="tabpanel" class="tab-pane" id="tab6">
            <div class="col-sm-12 p0">
              <div class="row portfolio-tab-slider">
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/typographic/01.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/typographic/01.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/typographic/02.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/typographic/02.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/typographic/03.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/typographic/03.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/typographic/04.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/typographic/04.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/typographic/05.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/typographic/05.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="port-box">
                    <a data-fancybox="allportfolio" href="img/port/typographic/06.webp" tabindex="0" class="fancybox fancybox.iframe">
                      <img data-src="img/port/typographic/06.webp" class="img-fluid lazyload">
                    </a>
                  </div>
                </div>
                <!-- <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/typographic/07.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/typographic/07.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/typographic/08.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/typographic/08.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/typographic/09.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/typographic/09.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/typographic/10.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/typographic/10.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/typographic/11.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/typographic/11.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="port-box">
                              <a data-fancybox="allportfolio" href="img/port/typographic/12.webp" tabindex="0" class="fancybox fancybox.iframe"> 
                                  <img data-src="img/port/typographic/12.webp" class="img-fluid lazyload">
                              </a>
                            </div>
                        </div> -->
              </div>


            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="our_fetures">
    <!-- <div class="before-img">
      <img src="img/cta-before.webp" alt="">
    </div> -->
    <div class="container set_festure_before">
      <div class="row justify-content-between">
        <div class="col-xl-4 col-md-4 col-lg-2">
          <div class="feat_heding" data-aos="fade-down" data-aos-duration="500">
            <h2>Other Features</h2>
          </div>
        </div>
        <div class="col-xl-8 col-md-8 col-lg-10" data-aos="fade-left" data-aos-duration="500">
          <div class="featurs_inner">
            <ul class="service-responsive-slider">
              <li>
                <i class="sprite sprite-features1"></i>
                <!-- <img data-src="img/features1.png" class="img-fluid lazyload" alt=""> -->
                <span>Fastest <br> Turn-Around</span>
              </li>
              <li>
                <i class="sprite sprite-features2"></i>
                <!-- <img data-src="img/features2.png" class="img-fluid lazyload" alt=""> -->
                <span>Money Back <br> Guarantee</span>
              </li>
              <li>
                <i class="sprite sprite-features3"></i>
                <!-- <img data-src="img/features3.png" class="img-fluid lazyload" alt=""> -->
                <span>Award <br> winning Team</span>
              </li>
              <li>
                <i class="sprite sprite-features4"></i>
                <!-- <img data-src="img/features4.png" class="img-fluid lazyload" alt=""> -->
                <span>Unique Design <br> Guarantee</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="after-img">
      <img class="lazyload" data-src="img/cta-after.webp" alt="">
    </div> -->
  </section>

  <!--Best Seller package-->
  <section class="best_seller_cerousel">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="sec_headings">
            <h2 class="set_head" data-aos="fade-down" data-aos-duration="500">Award-winning logo design services in affordable pricing </h2>
            <p class="set_paras" data-aos="fade-down" data-aos-duration="1000">Unlike other logo designs agencies, we don’t over-charge our customers with hidden prices. We make sure that our customers are offered high quality services at affordable rates so there is no confusion. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div id="owl-demo" class="owl-carousel owl-theme">
          <div class="item">
            <div class="best_seller_area" data-package-box>
              <div class="productSku" style="display: none;">LOGO_SPECIAL</div>
              <h2> Logo Special</h2>
              <h4> Logo Special</h4>
              <div class="best_price">
                <span> <small> $</small>35</span>
                <span><del>$117</del> <br>70% </span>
              </div>
              <div data-package-scroll>
                <div class="bets_seller_list">
                  <ul>
                    <li>4 Original Logo Concepts</li>
                    <li> 2 Dedicated Logo Designer</li>
                    <li> 4 Revisions</li>
                    <li> With Grey Scale Format</li>
                    <li> Free Icon Design</li>
                    <li> Formats: JPEG Only</li>
                    <li> 24 - 48 Hours Turn Around Time</li>
                    <li class="features">MORE FEATURES</li>
                    <li> 100% Satisfaction</li>
                    <li> 100% Ownership Rights</li>
                    <li> Money Back Guarantee</li>
                    <li> Dedicated Account Manager</li>
                  </ul>
                </div>
              </div>

              <a  class="seller_order btn-order" data-target="#popup_form" data-toggle="modal" href="javascript:;" onclick="priceChange('Logo Special Package','35');">Order Now</a>



              <div class="tal_to_us live_chatt">
                <a class="chat" href="javascript:;">
                  <img class="img-fluid" src="img/chat_or.png" alt="">
                  <span> Talk To Us</span>
                </a>
                <a href="tel:+1 817 533 6583">
                  <i class="fas fa-phone-alt"></i>
                  <span> +1 817 533 6583</span>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="best_seller_area" data-package-box>
              <div class="productSku" style="display: none;">LOGO_LOGO_PLUS</div>
              <h2> Logo Plus</h2>
              <h4> Logo Plus</h4>
              <div class="best_price">
                <span> <small> $</small>119</span>
                <span><del>$397</del> <br>70% </span>
              </div>
              <div data-package-scroll>
                <div class="bets_seller_list">
                  <ul>
                    <li> 12 Original Logo Concepts</li>
                    <li> 4 Dedicated Logo Designer (Industry Specific)</li>
                    <li> Unlimited Revisions</li>
                    <li> Stationery Design (Business Card, Letterhead, Envelope)</li>
                    <li> Email Signature Design</li>
                    <li> With Grey Scale Format</li>
                    <li> Free Icon Design</li>
                    <li> Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                    <li> 24 - 48 Hours Turn Around Time</li>
                    <li class="features">MORE FEATURES</li>
                    <li> 100% Satisfaction</li>
                    <li> 100% Ownership Rights</li>
                    <li> Money Back Guarantee</li>
                    <li> Dedicated Account Manager</li>
                  </ul>
                </div>
              </div>

              <a class="seller_order btn-order" data-target="#popup_form" data-toggle="modal" href="javascript:;" onclick="priceChange('Logo Plus Package','119');">Order Now</a>



              <div class="tal_to_us live_chatt">
                <a class="chat" href="javascript:;">
                  <img class="img-fluid" src="img/chat_or.png" alt="">
                  <span> Talk To Us</span>
                </a>
                <a href="tel:+1 817 533 6583">
                  <i class="fas fa-phone-alt"></i>
                  <span> +1 817 533 6583</span>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="best_seller_area" data-package-box>
              <div class="productSku" style="display: none;">LOGO_LOGO_PLATINUM</div>
              <h2> Logo Platinum</h2>
              <h4> Logo Platinum</h4>
              <div class="best_price">
                <span> <small> $</small>299</span>
                <span><del>$997</del> <br>70% </span>
              </div>
              <div data-package-scroll>
                <div class="bets_seller_list">
                  <ul>
                    <li>Unlimited Original Logo Concepts</li>
                    <li>8 Dedicated Logo Designer (Industry Specific)</li>
                    <li>Unlimited Revisions</li>
                    <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                    <li>500 Business Cards </li>
                    <li>Email Signature Design</li>
                    <li>With Grey Scale Format</li>
                    <li>Free Icon Design</li>
                    <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                    <li>24 - 48 Hours Turn Around Time</li>
                    <li class="features">MORE FEATURES</li>
                    <li>100% Satisfaction</li>
                    <li>Money Back Guarantee</li>
                    <li>Dedicated Account Manager</li>
                  </ul>
                </div>
              </div>

              <a class="seller_order btn-order" data-target="#popup_form" data-toggle="modal" href="javascript:;" onclick="priceChange('Logo Platinum Package','299');">Order Now</a>



              <div class="tal_to_us live_chatt">
                <a class="chat" href="javascript:;">
                  <img class="img-fluid" src="img/chat_or.png" alt="">
                  <span> Talk To Us</span>
                </a>
                <a href="tel:+1 817 533 6583">
                  <i class="fas fa-phone-alt"></i>
                  <span> +1 817 533 6583</span>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="best_seller_area" data-package-box>
              <div class="productSku" style="display: none;">LOGO_THE_BOSS</div>
              <h2> The Boss</h2>
              <h4> The Boss</h4>
              <div class="best_price">
                <span> <small> $</small>599</span>
                <span><del>$1996.67</del> <br> </span>
              </div>
              <div data-package-scroll>
                <div class="bets_seller_list">
                  <ul>
                    <li>3D/Mascot/Animated Logo</li>
                    <li>Unlimited Original Logo Concepts</li>
                    <li>8 Dedicated Logo Designer (Industry Specific)</li>
                    <li> Unlimited Revisions</li>
                    <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                    <li>500 Business Cards</li>
                    <li>Email Signature Design</li>
                    <li>With Grey Scale Format</li>
                    <li>Free Icon Design</li>
                    <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                    <li>24 - 48 Hours Turn Around Time</li>
                    <li>MORE FEATURES</li>
                  </ul>
                </div>
              </div>

              <a class="seller_order btn-order"data-target="#popup_form" data-toggle="modal" href="javascript:;" onclick="priceChange('The Boss Package','599');">Order Now</a>



              <div class="tal_to_us live_chatt">
                <a class="chat" href="javascript:;">
                  <img class="img-fluid" src="img/chat_or.png" alt="">
                  <span> Talk To Us</span>
                </a>
                <a href="tel:+1 817 533 6583">
                  <i class="fas fa-phone-alt"></i>
                  <span> +1 817 533 6583</span>
                </a>
              </div>
            </div>
          </div>

        </div>
        <!--owl-carousel-->
      </div>
      <!--Row-->
      <!--Row-->
    </div>
    <!--Container-->
  </section>
  <!--Cerousel-->
  <!--Best Seller package-->

  <!-- Awards -->
  <section class="awards_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <div class="sec_headings">
            <h2 class="set_head" data-aos="fade-down" data-aos-duration="500">Awards</span></h2>
          </div>
        </div>
        <div class="col-xl-10">
          <div class="row logo-responsive-slider">
            <div class="col-xl-2 col-lg-2" data-aos="fade-down" data-aos-duration="500">
              <div class="award_box">
                <img class="img-fluid lazyload" data-src="img/award1.webp" alt="">
              </div>
            </div>
            <div class="col-xl-2 col-lg-2" data-aos="fade-down" data-aos-duration="800">
              <div class="award_box">
                <img class="img-fluid lazyload" data-src="img/award2.webp" alt="">
              </div>
            </div>
            <div class="col-xl-2 col-lg-2" data-aos="fade-down" data-aos-duration="1100">
              <div class="award_box">
                <img class="img-fluid lazyload" data-src="img/award3.webp" alt="">
              </div>
            </div>
            <div class="col-xl-2 col-lg-2" data-aos="fade-down" data-aos-duration="1400">
              <div class="award_box">
                <img class="img-fluid lazyload" data-src="img/award4.webp" alt="">
              </div>
            </div>
            <div class="col-xl-2 col-lg-2" data-aos="fade-down" data-aos-duration="1700">
              <div class="award_box">
                <img class="img-fluid lazyload" data-src="img/award5.webp" alt="">
              </div>
            </div>
            <div class="col-xl-2 col-lg-2" data-aos="fade-down" data-aos-duration="2000">
              <div class="award_box">
                <img class="img-fluid lazyload" data-src="img/award6.webp" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Awards -->

  <section class="budget pad-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-packages">
            <div class="combo-slider owl-carousel owl-theme">
              <div class="item">

                <div class="bg-secondary" data-package-box>
                  <div class="productSku" style="display: none;">LOGO_INFINITE_LOGO</div>
                  <div class="row align-items-center">
                    <div class="col-md-6 break_col">
                      <h4 class="mn-h1">
                        <span>Logo Infinite SPECIAL PACKAGE</span> Crafting your brand to completion!
                      </h4>
                      <div class="combo-list-style" data-package-scroll>
                        <ul>
                          <li> Unlimited Original Logo Concepts</li>
                          <li> 8 Dedicated Logo Designer (Industry Specific)</li>
                          <li> Unlimited Revisions</li>
                          <li> 3 Page Basic Website</li>
                          <li> Stationery Design (Business Card, Letterhead, Envelope)</li>
                          <li> Brand Book</li>
                          <li> 500 Business Cards </li>
                          <li> 500 Letterheads</li>
                          <li> Email Signature Design</li>
                          <li> Social Media Designs (Facebook, Twitter, Instagram)</li>
                          <li> 2 Sided Flyer OR Bi-Fold Brochure Design</li>
                          <li> With Grey Scale Format</li>
                          <li> Free Icon Design</li>
                          <li> Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                          <li> 24 - 48 Hours Turn Around Time</li>
                          <li class="features">MORE FEATURES</li>
                          <li> 100% Satisfaction</li>
                          <li> 100% Ownership Rights</li>
                          <li> Money Back Guarantee</li>
                          <li> Dedicated Account Manager</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6 break_col">
                      <figure>
                        <img class="m-auto hvr-pulse-grow lazyload" src="img/packagecombo1.png" alt="">
                      </figure>
                      <div class="final">
                        <a class="hvr-bounce-to-bottom btn-default seller_order" data-target="#popup_form" data-toggle="modal" href="javascript:;" onclick="priceChange('Logo Infinite Special','799');">Order Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">

                <div class="bg-secondary" data-package-box>
                  <div class="productSku" style="display: none;">LOGO_COMBO</div>
                  <div class="row align-items-center">
                    <div class="col-md-6 break_col">
                      <h4 class="mn-h1">
                        <span>Logo Combo SPECIAL PACKAGE</span> Crafting your brand to completion!
                      </h4>
                      <div class="combo-list-style" data-package-scroll>
                        <ul>
                          <li>Unlimited Original Logo Concepts </li>
                          <li>12 Dedicated Logo Designer (Industry Specific) </li>
                          <li>Unlimited Revisions </li>
                          <li>7 Page Informative Website </li>
                          <li>Stationery Design (Business Card, Letterhead, Envelope) </li>
                          <li>Brand Book</li>
                          <li>500 Business Cards</li>
                          <li>500 Letterheads</li>
                          <li>Email Signature Design</li>
                          <li>Social Media Designs (Facebook, Twitter, Instagram)</li>
                          <li>2 Sided Flyer OR Bi-Fold Brochure Design</li>
                          <li>With Grey Scale Format </li>
                          <li>Free Icon Design </li>
                          <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                          <li>24 - 48 Hours Turn Around Time</li>
                          <li><span>MORE FEATURES</span></li>
                          <li>100% Satisfaction </li>
                          <li>100% Ownership Rights </li>
                          <li>Money Back Guarantee </li>
                          <li>Dedicated Account Manager </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6 break_col">
                      <figure>
                        <img class="m-auto hvr-pulse-grow lazyload" src="img/packagecombo2.png" alt="">
                      </figure>
                      <div class="final">
                        <a class="hvr-bounce-to-bottom btn-default seller_order"data-target="#popup_form" data-toggle="modal" href="javascript:;" onclick="priceChange('Logo Combo Special','999');">Order Now</a>
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
  </section>

  <!-- work_process -->
  <section class="work_process">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="sec_headings">
            <h2 class="set_head" data-aos="fade-down" data-aos-duration="500">Our Work Process</h2>
            <p class="set_paras" data-aos="fade-down" data-aos-duration="1000">Design Vikings is loved and chosen by its clients because of the creative, aesthetically-pleasing and crisp design. All the design ninjas at our company are industry-experienced and out of the box thinkers.</p>
          </div>
        </div>
        <div class="col-xl-6 col-md-12">
          <div class="row justify-content-center work-responsive-slider">
            <div class="col-xl-6 col-lg-6 p-0 prcess-box-column">
              <div class="prcess_box">
                <span class="numbers">1</span>
                <h2>Design Brief</h2>
                <p>A brand is all about planning & inspiration. We understand your project from
                  the client and we plan it really well. </p>
                <span class="icon"><i class="fas fa-angle-right"></i></span>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 p-0 prcess-box-column">
              <div class="prcess_box">
                <span class="numbers">2</span>
                <h2>Get Custom Designs</h2>
                <p>Design Vikings with concern. We come up with the strategies that
                  are in comparable with other identities as well. </p>
                <span class="icon"><i class="fas fa-angle-right"></i></span>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 p-0 prcess-box-column" data-aos="zoom-in" data-aos-duration="1500">
              <div class="prcess_box">
                <span class="numbers">3</span>
                <h2>Unlimited Revisions</h2>
                <p>After getting the draft done, we review the design after getting your feedback from our QA department. </p>
                <span class="icon"><i class="fas fa-angle-right"></i></span>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 p-0 prcess-box-column" data-aos="zoom-in" data-aos-duration="2000">
              <div class="prcess_box">
                <span class="numbers">4</span>
                <h2>Final Delivery</h2>
                <p>After reviewing the design, final logo design is delivered to the client after all the changes.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12" data-aos="zoom-in" data-aos-duration="2500">
          <div class="work_right">
            <img class="img-fluid lazyload" data-src="img/work_rights.webp" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- work_process -->

  <!-- CTA -->
  <!-- register custom logo -->
  <section class="regis_cus_logo">
    <div class="cta2-left-img">
      <img src="img/cta-left-img.png" alt="" class="img-fluid">
    </div>
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-xl-11" data-aos="fade-left" data-aos-duration="500">
          <div class="rigister_content">
            <h2>Register now and get your logo delivered in just one hour</h2>
            <h1> Get Custom Logo for <span>$35.00</span> </h1>

          </div>
        </div>
      </div>
    </div>
    <div class="cta2-right-img">
      <img src="img/cta-right-img.png" alt="" class="img-fluid">
    </div>
  </section>
  <!-- register custom logo -->

  <!-- ready-work-contact -->
  <section class="ready-work-contact">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-xl-9 col-sm-6 col-lg-10">
          <div class="cta-contact">
            <ul>
              <li data-aos="zoom-out" data-aos-duration="500">
                <a href="tel:+1 817 533 6583">
                  <i class="fas fa-phone"></i>
                  <p>Toll Free Number<br> <span>+1 817 533 6583</span></p>

                </a>
              </li>
              <li data-aos="zoom-out" data-aos-duration="700">
                <a href="javascript:;" class="chatt">
                  <i class="fas fa-comments"></i>
                  <p>Talk to Us <br><span>LIVE CHAT</span></p>
                </a>
              </li>
              <li data-aos="zoom-out" data-aos-duration="1000">
                <a href="mailto:sales@designvikings.us">
                  <i class="fas fa-envelope-open-text"></i>
                  <p>Email us at <br> <span>sales@designvikings.us</span></p>
                </a>
              </li>
            </ul>

          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-lg-2" data-aos="zoom-out" data-aos-duration="1200">
          <div class="cta_btn hvr-pulse-grow">
            <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="bt-red ">
              <span>Get Started</span>
              <img src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">

            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ready-work-contact --> <!-- CTA -->

  <section class="main-service-wrap inner-service-wrap">
    <div class="container">
      <div class="service-heading">
        <h2 data-aos="fade-down" data-aos-duration="800">Create memorable logos, which will give everlasting</h2>
        <h3 data-aos="fade-up" data-aos-duration="1000">impression on your target audience</h3>
        <p data-aos="fade-up" data-aos-duration="1300" data-aos-delay="100">Design Vikings is platform to get your custom company logo design, our logo maker will display ideas into logo designs which speaks for your (business or company) nature so we could say that we are the premier logo design company in providing business logo design or company logo design, that is why, it should be important for you to hire a top logo design firm like us, because our designs are going to connect you with your customers. Our in-house team of professional logo designers will finalise creative logo designs for your prestigious business, we have best business Logo Designers. Our affordable logo designing service make us the best logo design company in the US.</p>
      </div>
      <div class="service-wrap">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="service-tab-wrap">
              <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="">
                  <a class="nav-item nav-link active" id="nav-custom-tab" data-toggle="tab" href="#nav-custom" role="tab" aria-controls="nav-custom" aria-selected="true">
                    <div class="service-text-wrap">
                      <svg id="Capa_1" enable-background="new 0 0 510.95 510.95" height="512" viewBox="0 0 510.95 510.95" width="512" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g>
                            <path d="m342.528 459.558-267.661-.088c-41.24.012-74.825-33.646-74.867-75.066-.002-19.973 7.813-38.852 22.029-52.989 14.183-14.087 33.007-21.848 53.05-21.873l88.148.074c3.215.006 6.332 1.034 8.918 2.946l146.5 108.418c3.196 2.47 7.112 4.575 11.323 6.068 4.473 1.587 8.803 2.439 12.878 2.517 10.201.207 17.245 10.362 13.822 20.011-2.066 5.825-7.617 9.995-14.14 9.982z" fill="#f03800" />
                          </g>
                          <g>
                            <circle cx="75.013" cy="384.492" fill="#e3e7ea" r="15" />
                          </g>
                          <g>
                            <path d="m320.028 440.71c4.77-6.266 3.719-15.869-2.83-20.739-6.913-5.635-12.459-13.331-15.507-22.689l-42.231-138.487-10.71-35.312c-.894-2.864-2.737-5.746-5.546-7.697l-70.358-52.016c-16.09-12.072-36.018-16.915-55.809-14.067-19.79 2.848-37.263 13.521-49.237 29.328-2.336 2.991-4.103 6.184-5.973 9.659-16.44 31.092-9.031 70.327 18.807 93.252.93.967 1.961 1.652 2.991 2.336l215.282 159.445c6.83 4.97 15.97 3.436 21.121-3.013z" fill="#fdbf00" />
                          </g>
                          <g>
                            <g>
                              <g>
                                <path d="m290.956 414.08c-7.854 2.25-16.076-2.221-18.461-10.046l-77.905-255.787c-5.964-19.073-4.04-39.264 5.4-57.069 9.458-17.768 25.254-30.707 44.289-36.389 19.068-5.95 39.343-4.043 57.069 5.4 17.781 9.463 30.721 25.259 36.416 44.345l25.909 83.998c.956 3.09.883 6.406-.195 9.443l-60.877 171.617c-3.08 8.684-3.513 17.747-1.275 26.204 2.127 7.91-2.518 16.031-10.37 18.284z" fill="#00a66c" />
                              </g>
                            </g>
                            <g>
                              <circle cx="266.211" cy="126.393" fill="#fff5f5" r="15" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <g>
                                <g>
                                  <path d="m348.807 459.469-6.59.087c-7.285-.144-14.782-1.575-22.278-4.235-7.193-2.551-13.998-6.24-21.225-11.85-11.645-9.104-20.419-21.745-25.385-36.577-.096-.298-.9-3.07-.978-3.378-3.821-14.334-3.142-29.527 1.976-43.953l90.933-256.35c13.825-38.973 56.785-59.436 95.758-45.611s59.436 56.785 45.611 95.758l-90.933 256.35c-9.935 28.012-36.55 48.009-66.889 49.759z" fill="#4086f4" />
                                </g>
                              </g>
                            </g>
                          </g>
                          <path d="m348.807 459.469c30.339-1.75 56.954-21.747 66.89-49.759l90.933-256.35c13.825-38.973-6.638-81.933-45.611-95.758l-141.08 397.719c7.496 2.659 14.993 4.091 22.278 4.234z" fill="#4175df" />
                          <g>
                            <circle cx="345.012" cy="384.637" fill="#e3e7ea" r="15" />
                          </g>
                          <path d="m359.149 389.652c2.77-7.808-1.315-16.382-9.122-19.152l-10.029 28.274c7.807 2.77 16.382-1.314 19.151-9.122z" fill="#e3e7ea" />
                          <g>
                            <circle cx="435.946" cy="128.288" fill="#fff5f5" r="15" />
                          </g>
                          <g>
                            <path d="m140.119 232.696c3.602-4.77 3.912-11.027.873-15.925-.629-1.814-2.207-3.648-3.986-4.915-4.305-3.118-9.795-3.793-14.391-1.604-2.581.994-4.697 2.472-6.448 4.715-5.254 6.732-3.82 16.154 3.012 21.123 6.55 4.871 15.969 3.438 20.94-3.394z" fill="#fff5f5" />
                          </g>
                          <g fill="#e3e7ea">
                            <path d="m140.119 232.696c3.602-4.77 3.912-11.027.873-15.925l-18.377-6.519c-2.581.994-4.697 2.472-6.448 4.715-5.254 6.732-3.82 16.154 3.012 21.123 6.55 4.871 15.969 3.438 20.94-3.394z" />
                            <path d="m450.083 133.302c2.77-7.808-1.315-16.382-9.122-19.152l-10.029 28.274c7.807 2.77 16.381-1.314 19.151-9.122z" />
                          </g>
                        </g>
                      </svg>
                      <div class="service-text">
                        <span>ICONIC</span>
                        <h3>LOGO DESIGN</h3>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-item nav-link" id="nav-web-tab" data-toggle="tab" href="#nav-web" role="tab" aria-controls="nav-web" aria-selected="false">
                    <div class="service-text-wrap">

                      <svg height="512pt" viewBox="0 0 512.00001 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                        <path d="m245 22c-135.308594 0-245 109.691406-245 245 0 33.253906 6.636719 64.953125 18.640625 93.867188l42.007813 67.484374c44.90625 51.265626 110.84375 83.648438 184.351562 83.648438 135.308594 0 245-109.691406 245-245s-109.691406-245-245-245zm0 0" fill="#1d3ba8" />
                        <path d="m422.390625 408.964844-166.367187-378.9375c-17.554688-40-74.546876-40.070313-92.132813-.003906l-145.25 330.84375c10.304687 24.816406 24.566406 47.574218 42.007813 67.484374l46.933593-106.902343c.898438-2.050781 2.925781-3.375 5.164063-3.375h194.421875c2.238281 0 4.265625 1.324219 5.164062 3.375l49.996094 113.882812c7.214844 16.429688 26.378906 24.082031 42.988281 16.9375 5.734375-4.964843 11.226563-10.195312 16.472656-15.664062 4.109376-8.375 4.644532-18.429688.601563-27.640625zm-148.972656-156.480469h-126.921875c-4.070313 0-6.800782-4.179687-5.164063-7.910156l63.460938-144.546875c1.972656-4.5 8.355469-4.5 10.328125 0l63.464844 144.546875c1.632812 3.726562-1.097657 7.910156-5.167969 7.910156zm0 0" fill="#ef4a8a" />
                        <path d="m511.921875 426.113281c-1.082031-13.429687-1.5-27.933593-1.5-42.652343v-106.4375c0-57.039063-21.171875-116.433594-108.203125-116.433594-27.832031 0-54.601562 6.019531-76.191406 15.859375-9.933594 4.527343-20.703125 13.15625-17.152344 27.09375 4.238281 12.429687 18.996094 18.035156 29.226562 12.199219 16.769532-9.566407 35.789063-16.929688 56.472657-16.929688 58.21875 0 59.222656 42.339844 59.222656 65.863281 0 3.230469-2.609375 5.863281-5.84375 5.886719-106.289063.757812-159.8125 38.269531-159.8125 105.84375 0 41.164062 29.398437 81.738281 87.03125 81.738281 36.027344 0 64.167969-15.769531 81.140625-34.949219 2.9375-3.320312 8.316406-1.613281 8.8125 2.71875l.59375 5.175782c1.410156 12.269531 12.207031 21.394531 24.722656 20.527344 12.953125-.894532 22.527344-12.5625 21.480469-25.503907zm-56.953125-70.292969c0 26.085938-19.355469 61.914063-66.273438 61.914063-26.464843 0-48.808593-16.871094-48.808593-47.210937 0-53.371094 54.289062-64.53125 109.226562-64.175782 3.238281.019532 5.855469 2.652344 5.855469 5.894532zm0 0" fill="#06daf7" />
                        <path d="m338.101562 215.742188c16.769532-9.566407 35.789063-16.929688 56.472657-16.929688 3.617187 0 7.007812.164062 10.195312.476562-6.132812-3.925781-10.199219-10.789062-10.199219-18.609374 0-8.855469 5.210938-16.488282 12.730469-20.011719-1.671875-.046875-3.359375-.078125-5.082031-.078125-27.832031 0-54.605469 6.019531-76.191406 15.859375-9.9375 4.53125-20.707032 13.15625-17.152344 27.09375 4.234375 12.429687 18.992188 18.035156 29.226562 12.199219zm0 0" fill="#05b8e2" />
                        <path d="m419.050781 421.398438c0-4.234376 1.269531-8.171876 3.4375-11.464844-9.125 4.832031-20.316406 7.800781-33.792969 7.800781-26.460937 0-48.808593-16.871094-48.808593-47.210937 0-38.894532 28.832031-55.367188 65.734375-61.308594-6.605469-3.816406-11.050782-10.949219-11.050782-19.128906 0-6.5625 2.863282-12.453126 7.410157-16.5-75.742188 10.195312-113.84375 45.808593-113.84375 102.816406 0 41.164062 29.402343 81.742187 87.03125 81.742187 23.417969 0 43.492187-6.664062 59.34375-16.589843-8.902344-2.394532-15.460938-10.496094-15.460938-20.15625zm0 0" fill="#05b8e2" />
                        <path d="m200.078125 252.484375h-53.582031c-4.070313 0-6.800782-4.183594-5.164063-7.910156l63.460938-144.546875c1.164062-2.65625 3.863281-3.734375 6.289062-3.25-3.011719-5.503906-4.726562-11.820313-4.726562-18.535156 0-28.671876 30.117187-47.183594 55.585937-34.738282l-5.917968-13.476562c-17.554688-40-74.546876-40.070313-92.132813-.003906l-145.25 330.84375c10.304687 24.816406 24.566406 47.574218 42.007813 67.484374l46.933593-106.902343c.898438-2.050781 2.925781-3.375 5.164063-3.375h90.242187c-25.027343-14.078125-26.5-49.417969-2.910156-65.589844zm0 0" fill="#e5387f" />
                      </svg>
                      <div class="service-text">
                        <span>TYPOGRAPHIC</span>
                        <h3>LOGO DESIGN</h3>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-item nav-link" id="nav-stationery-tab" data-toggle="tab" href="#nav-stationery" role="tab" aria-controls="nav-stationery" aria-selected="false">
                    <div class="service-text-wrap">

                      <svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="m340.212 432.821 125.404-38.922c22.456-37.013 35.386-80.447 35.386-126.901 0-135.311-109.691-245.002-245.002-245.002s-245.002 109.691-245.002 245.002c0 63.962 24.52 122.191 64.661 165.823z" fill="#4fabf7" />
                          <path d="m322.499 53.725c.571-10.227 10.857-17.687 20.896-14.776 1.747.507 3.616-.09 4.729-1.529 5.474-7.075 14.046-11.632 23.684-11.632 13.317 0 24.596 8.699 28.479 20.724.643 1.992 2.63 3.168 4.71 2.931 7.064-.805 13.912 2.646 17.54 8.6 1.234 2.025 3.84 2.658 5.914 1.508 2.459-1.363 5.373-2.003 8.459-1.629 6.317.765 11.392 5.894 12.094 12.218.933 8.4-5.617 15.511-13.829 15.511h-117.37c-7.792 0-14.388-6.376-14.255-14.167.138-8.102 7.017-13.986 14.499-13.666 2.337.102 4.319-1.756 4.45-4.093z" fill="#73c3f9" />
                          <path d="m253.792 118.185c.881-15.778 16.749-27.287 32.237-22.795 2.695.782 5.579-.14 7.296-2.359 8.445-10.915 21.669-17.945 36.538-17.945 20.545 0 37.945 13.421 43.936 31.972.992 3.073 4.057 4.887 7.266 4.522 10.897-1.242 21.462 4.082 27.059 13.268 1.904 3.125 5.924 4.101 9.124 2.327 3.793-2.103 8.289-3.09 13.05-2.513 9.746 1.18 17.574 9.092 18.658 18.849 1.44 12.959-8.666 23.93-21.334 23.93h-181.072c-12.02 0-22.197-9.837-21.992-21.855.214-12.5 10.826-21.577 22.367-21.083 3.608.152 6.666-2.714 6.867-6.318z" fill="#9bd8f9" />
                          <path d="m203.345 244.499c-1.084-9.757-8.913-17.669-18.658-18.849-4.762-.577-9.257.41-13.05 2.513-3.2 1.774-7.22.798-9.124-2.327-5.597-9.186-16.162-14.51-27.059-13.268-3.209.366-6.273-1.449-7.266-4.522-5.991-18.551-23.391-31.972-43.936-31.972-14.869 0-28.093 7.03-36.538 17.945-1.717 2.219-4.601 3.14-7.296 2.359-7.022-2.037-14.118-.776-19.865 2.673-6.215 21.576-9.554 44.37-9.554 67.946 0 .478.014.953.017 1.431h170.997c12.666.001 22.772-10.97 21.332-23.929z" fill="#73c3f9" />
                          <path d="m371.932 373.021h-1.528v110.664c39.699-21.004 72.931-52.59 95.936-91.01v-177.076l-155.194-73.876v206.844h60.787c6.742 0 12.227 5.485 12.227 12.227s-5.486 12.227-12.228 12.227z" fill="#3c58a0" />
                          <path d="m311.146 348.567h60.787c.014 0 .028.002.043.002v-1.531c-12.191-3.628-11.476-17.038-11.476-17.038s0-123.5 0-137.5 12.381-12.941 12.381-12.941l-1.508-9.167-60.226-28.669v206.844z" fill="#2a428c" />
                          <path d="m74.728 431.821c37.923 41.683 90.03 70.222 148.691 78.018v-136.309h.001 57.548v-138.582h-206.24z" fill="#dae2fe" />
                          <path d="m128.756 273.321c0-21.193 17.18-38.373 38.373-38.373h-92.401v196.873c15.744 17.305 33.94 32.335 54.028 44.566z" fill="#bec8f7" />
                          <path d="m97.843 121.263h160.01v114.704h-160.01z" fill="#dae2fe" />
                          <path d="m140.871 208.849v-60.468c0-14.977 12.141-27.118 27.118-27.118h-70.146v114.704h70.146c-14.977 0-27.118-12.141-27.118-27.118z" fill="#bec8f7" />
                          <g>
                            <path d="m177.848 46.835c-4.22 0-7.642-3.421-7.642-7.642v-31.551c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v31.551c-.001 4.22-3.422 7.642-7.642 7.642z" fill="#dae2fe" />
                          </g>
                          <g fill="#a8b7ef">
                            <path d="m105.292 261.422c-4.22 0-7.642 3.421-7.642 7.642v184.871c4.932 4.182 10.028 8.174 15.284 11.961v-196.832c0-4.22-3.421-7.642-7.642-7.642z" />
                            <path d="m134.314 261.422c-4.22 0-7.642 3.421-7.642 7.642v206.04c4.978 3.1 10.075 6.026 15.284 8.771v-214.81c0-4.221-3.421-7.643-7.642-7.643z" />
                            <path d="m163.337 261.422c-4.22 0-7.642 3.421-7.642 7.642v221.522c5.007 2.25 10.105 4.334 15.284 6.25v-227.772c0-4.22-3.422-7.642-7.642-7.642z" />
                            <path d="m192.359 261.422c-4.22 0-7.642 3.421-7.642 7.642v232.389c5.029 1.527 10.123 2.903 15.284 4.11v-236.499c-.001-4.22-3.422-7.642-7.642-7.642z" />
                          </g>
                          <g>
                            <path d="m221.38 337.868c-4.22 0-7.642-3.421-7.642-7.642v-61.162c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v61.162c0 4.221-3.421 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <g>
                            <path d="m134.315 217.627c-4.22 0-7.642-3.421-7.642-7.642v-60.851c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v60.851c-.001 4.22-3.422 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <g>
                            <path d="m163.337 217.627c-4.22 0-7.642-3.421-7.642-7.642v-60.851c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v60.851c-.001 4.22-3.422 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <g>
                            <path d="m192.359 217.627c-4.22 0-7.642-3.421-7.642-7.642v-60.851c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v60.851c-.001 4.22-3.422 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <g>
                            <path d="m221.381 217.627c-4.22 0-7.642-3.421-7.642-7.642v-60.851c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v60.851c0 4.22-3.422 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <g>
                            <path d="m221.38 217.627c-4.22 0-7.642-3.421-7.642-7.642v-60.851c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v60.851c0 4.22-3.421 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <g>
                            <path d="m250.403 337.868c-4.22 0-7.642-3.421-7.642-7.642v-61.162c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v61.162c0 4.221-3.422 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <path d="m135.937 44.867h83.822v76.396h-83.822z" fill="#dae2fe" />
                          <path d="m170.965 98.145v-30.16c0-12.768 10.35-23.118 23.118-23.118h-58.146v76.396h58.146c-12.768 0-23.118-10.35-23.118-23.118z" fill="#bec8f7" />
                          <path d="m221.381 373.53v136.024c11.312 1.6 22.866 2.446 34.619 2.446 41.959 0 81.45-10.556 115.975-29.145v-109.325z" fill="#ffc839" />
                          <path d="m275.556 477.455v-69.383c0-19.078 15.465-34.543 34.543-34.543h-88.718v136.024c11.312 1.601 22.866 2.447 34.619 2.447 13.453 0 26.651-1.091 39.514-3.178-11.792-5.489-19.958-17.511-19.958-31.367z" fill="#ffb332" />
                          <g>
                            <path d="m433.157 255.206h-89.845c-4.22 0-7.642-3.421-7.642-7.642 0-4.22 3.421-7.642 7.642-7.642h89.845c4.221 0 7.642 3.421 7.642 7.642-.001 4.221-3.422 7.642-7.642 7.642z" fill="#73c3f9" />
                          </g>
                          <g>
                            <path d="m433.157 287.405h-89.845c-4.22 0-7.642-3.421-7.642-7.642 0-4.22 3.421-7.642 7.642-7.642h89.845c4.221 0 7.642 3.421 7.642 7.642-.001 4.221-3.422 7.642-7.642 7.642z" fill="#73c3f9" />
                          </g>
                          <g>
                            <path d="m433.157 319.605h-89.845c-4.22 0-7.642-3.421-7.642-7.642s3.421-7.642 7.642-7.642h89.845c4.221 0 7.642 3.421 7.642 7.642s-3.422 7.642-7.642 7.642z" fill="#73c3f9" />
                          </g>
                          <g>
                            <path d="m433.157 351.804h-29.591c-4.22 0-7.642-3.421-7.642-7.642s3.421-7.642 7.642-7.642h29.591c4.221 0 7.642 3.421 7.642 7.642s-3.422 7.642-7.642 7.642z" fill="#73c3f9" />
                          </g>
                          <g>
                            <path d="m433.157 384.003h-29.591c-4.22 0-7.642-3.421-7.642-7.642s3.421-7.642 7.642-7.642h29.591c4.221 0 7.642 3.421 7.642 7.642s-3.422 7.642-7.642 7.642z" fill="#73c3f9" />
                          </g>
                          <g>
                            <path d="m433.157 416.203h-35.704c-4.22 0-7.642-3.421-7.642-7.642 0-4.22 3.421-7.642 7.642-7.642h35.704c4.221 0 7.642 3.421 7.642 7.642-.001 4.22-3.422 7.642-7.642 7.642z" fill="#73c3f9" />
                          </g>
                          <path d="m433.157 433.118h-35.705c-4.22 0-7.642 3.421-7.642 7.642s3.421 7.642 7.642 7.642h23.227c5.209-4.731 10.201-9.695 14.986-14.854-.787-.274-1.629-.43-2.508-.43z" fill="#73c3f9" />
                          <g>
                            <path d="m467.265 223.707c-1.102 0-2.22-.239-3.281-.745l-157.858-75.206c-3.811-1.815-5.427-6.376-3.612-10.186s6.376-5.428 10.186-3.612l157.858 75.206c3.81 1.815 5.427 6.376 3.612 10.186-1.311 2.749-4.05 4.357-6.905 4.357z" fill="#4f71b6" />
                          </g>
                          <g>
                            <path d="m253.145 420.607c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v9.322c0 4.22-3.422 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m282.167 420.607c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v9.322c0 4.22-3.421 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m311.189 420.607c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v9.322c0 4.22-3.421 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m340.212 420.607c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v9.322c-.001 4.22-3.422 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m253.145 460.137c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v9.322c0 4.221-3.422 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m282.167 460.137c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v9.322c0 4.221-3.421 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m311.189 460.137c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v9.322c0 4.221-3.421 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m340.212 460.137c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v9.322c-.001 4.221-3.422 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m253.145 499.668c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642 4.22 0 7.642 3.421 7.642 7.642v9.322c0 4.22-3.422 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m282.167 499.668c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v9.322c0 4.22-3.421 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <g>
                            <path d="m311.189 499.668c-4.22 0-7.642-3.421-7.642-7.642v-9.322c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v9.322c0 4.22-3.421 7.642-7.642 7.642z" fill="#ff9100" />
                          </g>
                          <path d="m340.212 475.062c-4.22 0-7.642 3.421-7.642 7.642v9.322c0 2.762 1.471 5.175 3.667 6.517 3.798-1.316 7.553-2.722 11.263-4.217.229-.726.354-1.498.354-2.3v-9.322c-.001-4.221-3.422-7.642-7.642-7.642z" fill="#ff9100" />
                          <g>
                            <path d="m371.976 374.549h-150.595c-7.597 0-13.755-6.158-13.755-13.755s6.158-13.755 13.755-13.755h150.594c7.597 0 13.755 6.158 13.755 13.755.001 7.597-6.157 13.755-13.754 13.755z" fill="#ffdd40" />
                          </g>
                          <path d="m283.828 360.794c0-7.597 6.158-13.755 13.755-13.755h-76.202c-7.597 0-13.755 6.158-13.755 13.755s6.158 13.755 13.755 13.755h76.202c-7.597 0-13.755-6.158-13.755-13.755z" fill="#ffc839" />
                          <g>
                            <path d="m219.759 52.508h-83.822c-4.22 0-7.642-3.421-7.642-7.642s3.421-7.642 7.642-7.642h83.822c4.22 0 7.642 3.421 7.642 7.642s-3.422 7.642-7.642 7.642z" fill="#e9efff" />
                          </g>
                          <g>
                            <path d="m257.853 128.905h-160.01c-4.22 0-7.642-3.421-7.642-7.642 0-4.22 3.421-7.642 7.642-7.642h160.01c4.22 0 7.642 3.421 7.642 7.642 0 4.22-3.422 7.642-7.642 7.642z" fill="#e9efff" />
                          </g>
                          <g>
                            <path d="m280.967 242.59h-206.239c-4.22 0-7.642-3.421-7.642-7.642 0-4.22 3.421-7.642 7.642-7.642h206.239c4.22 0 7.642 3.421 7.642 7.642 0 4.22-3.421 7.642-7.642 7.642z" fill="#e9efff" />
                          </g>
                          <g>
                            <path d="m163.337 100.599c-4.22 0-7.642-3.421-7.642-7.642v-21.477c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v21.477c0 4.22-3.422 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                          <g>
                            <path d="m192.359 100.599c-4.22 0-7.642-3.421-7.642-7.642v-21.477c0-4.22 3.421-7.642 7.642-7.642s7.642 3.421 7.642 7.642v21.477c0 4.22-3.422 7.642-7.642 7.642z" fill="#a8b7ef" />
                          </g>
                        </g>
                      </svg>
                      <div class="service-text">
                        <span>ILLUSTRATIVE</span>
                        <h3>LOGO DESIGN</h3>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-item nav-link" id="nav-seo-tab" data-toggle="tab" href="#nav-seo" role="tab" aria-controls="nav-seo" aria-selected="false">
                    <div class="service-text-wrap">

                      <svg id="Capa_1" enable-background="new 0 0 512.132 512.132" height="512" viewBox="0 0 512.132 512.132" width="512" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g>
                            <path d="m285.84 328.357h-60.197c-19.743 0-35.806 16.063-35.806 35.806v112.164c0 19.743 16.063 35.806 35.806 35.806h60.197c19.743 0 35.806-16.063 35.806-35.806v-112.164c-.001-19.743-16.063-35.806-35.806-35.806z" fill="#d9f2ff" />
                          </g>
                          <path d="m255.741 122.305c-73.9 0-134.023 62.033-134.023 138.281 0 43.362 19.604 83.904 52.817 110.016v26.007c0 27.607 21.916 50.066 48.855 50.066h17.351 30 17.35c26.939 0 48.855-22.459 48.855-50.066v-26.007c33.213-26.112 52.817-66.654 52.817-110.016.001-76.249-60.122-138.281-134.022-138.281z" fill="#fed843" />
                          <path d="m255.741 122.305c-73.9 0-134.023 62.033-134.023 138.281 0 43.362 19.604 83.904 52.817 110.016v26.007c0 27.607 21.916 50.066 48.855 50.066h17.351l15-20 15 20h17.35c26.939 0 48.855-22.459 48.855-50.066v-26.007c33.213-26.112 52.817-66.654 52.817-110.016.001-76.249-60.122-138.281-134.022-138.281z" fill="#fed843" />
                          <path d="m119.471 139.828c-3.839 0-7.678-1.464-10.606-4.394l-34.992-34.992c-5.858-5.858-5.858-15.355 0-21.213 5.857-5.858 15.355-5.858 21.213 0l34.992 34.992c5.858 5.858 5.858 15.355 0 21.213-2.929 2.929-6.768 4.394-10.607 4.394z" fill="#f69" />
                          <path d="m390.059 137.227c-3.839 0-7.678-1.464-10.606-4.394-5.858-5.857-5.858-15.355 0-21.213l34.992-34.993c5.857-5.858 15.355-5.858 21.213 0 5.858 5.857 5.858 15.355 0 21.213l-34.992 34.993c-2.929 2.929-6.768 4.394-10.607 4.394z" fill="#e62e6b" />
                          <path d="m64.732 281.661h-49.487c-8.284 0-15-6.716-15-15s6.716-15 15-15h49.487c8.284 0 15 6.716 15 15s-6.716 15-15 15z" fill="#f69" />
                          <path d="m285.84 328.357h-15.098l-15 118.318v65.457h30.099c19.743 0 35.806-16.063 35.806-35.806v-112.163c-.002-19.743-16.064-35.806-35.807-35.806z" fill="#c4e1ff" />
                          <path d="m496.887 277.981h-49.486c-8.284 0-15-6.716-15-15s6.716-15 15-15h49.486c8.284 0 15 6.716 15 15s-6.715 15-15 15z" fill="#e62e6b" />
                          <g>
                            <path d="m291.65 232.867c-8.284 0-15 6.716-15 15 0 11.529-9.38 20.909-20.909 20.909s-20.909-9.379-20.909-20.909c0-8.284-6.716-15-15-15s-15 6.716-15 15c0 22.852 15.136 42.233 35.909 48.651v150.158h30v-150.158c20.773-6.418 35.909-25.799 35.909-48.651 0-8.284-6.716-15-15-15z" fill="#ff8856" />
                          </g>
                          <g>
                            <path d="m291.65 232.867c-8.284 0-15 6.716-15 15 0 11.529-9.38 20.909-20.909 20.909s-20.909-9.379-20.909-20.909c0-8.284-6.716-15-15-15s-15 6.716-15 15c0 22.852 15.136 42.233 35.909 48.651v150.158h30v-150.158c20.773-6.418 35.909-25.799 35.909-48.651 0-8.284-6.716-15-15-15z" fill="#f69" />
                          </g>
                          <g>
                            <path d="m255.741 79.486c-8.284 0-15-6.716-15-15v-49.486c0-8.284 6.716-15 15-15s15 6.716 15 15v49.486c0 8.285-6.716 15-15 15z" fill="#f69" />
                            <path d="m256.495.038v79.41c7.932-.395 14.246-6.932 14.246-14.962v-49.486c0-8.03-6.314-14.567-14.246-14.962z" fill="#e62e6b" />
                          </g>
                          <path d="m270.741 446.675h17.35c26.939 0 48.855-22.459 48.855-50.066v-26.007c33.213-26.112 52.817-66.654 52.817-110.016 0-76.249-60.123-138.281-134.023-138.281v146.47z" fill="#fabe2c" />
                          <path d="m270.741 446.675v-150.158c20.773-6.418 35.909-25.799 35.909-48.651 0-8.284-6.716-15-15-15s-15 6.716-15 15c0 11.529-9.38 20.909-20.909 20.909v177.9z" fill="#e62e6b" />
                        </g>
                      </svg>
                      <div class="service-text">
                        <span>ANIMATED</span>
                        <h3>LOGO DESIGN</h3>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-item nav-link" id="nav-3d-tab" data-toggle="tab" href="#nav-3d" role="tab" aria-controls="nav-3d" aria-selected="false">
                    <div class="service-text-wrap">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <polygon style="fill:#1DE8F1;" points="136,346 27.074,321.537 16,286 136,226 256,286 243.497,322.251 " />
                        <polygon style="fill:#00D0FF;" points="136,512 16,452 16,286 136,346 166,390.154 166,468.889 " />
                        <polygon style="fill:#00BBFF;" points="256,452 136,512 136,346 256,286 " />
                        <polygon style="fill:#FF0B69;" points="376,346 267.074,321.537 256,286 376,226 496,286 483.497,322.251 " />
                        <polygon style="fill:#DD025B;" points="376,512 256,452 256,286 376,346 406,390.154 406,468.889 " />
                        <polygon style="fill:#9E0A48;" points="496,452 376,512 376,346 496,286 " />
                        <polygon style="fill:#7986E8;" points="256,120 147.074,95.537 136,60 256,0 376,60 363.497,96.251 " />
                        <polygon style="fill:#6E77E5;" points="256,286 136,226 136,60 256,120 286,163.154 286,242.889 " />
                        <polygon style="fill:#4C5CE1;" points="376,226 256,286 256,120 376,60 " />
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                      <div class="service-text">
                        <span>3D</span>
                        <h3>LOGO DESIGN</h3>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="nav-item nav-link" id="nav-word-tab" data-toggle="tab" href="#nav-word" role="tab" aria-controls="nav-word" aria-selected="false">
                    <div class="service-text-wrap">

                      <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="m420.7 450.7c-44.4 37.5-101.999 61.3-164.7 61.3-93.3 0-175.201-51.4-219.6-126.4l16.622-76.622 73.678-13.678c17.1 55.199 68.699 95.7 129.3 95.7 29.399 0 56.7-9.3 79.2-25.8l70.8 10.8z" fill="#59c36a" />
                          <path d="m420.7 450.7-14.7-74.7-70.8-10.8c-22.5 16.5-49.801 25.8-79.2 25.8v121c62.701 0 120.3-23.8 164.7-61.3z" fill="#00a66c" />
                          <g id="Connected_Home_1_">
                            <g>
                              <g>
                                <g>
                                  <path d="m121 256c0 13.799 2.1 26.999 5.7 39.3l-90.3 90.3c-22.5-37.8-36.4-82.201-36.4-129.6 0-47.401 13.9-91.8 36.4-129.6l72.473 12.473 17.827 77.827c-3.6 12.299-5.7 25.499-5.7 39.3z" fill="#ffda2d" />
                                </g>
                              </g>
                            </g>
                          </g>
                          <path d="m512 256c0 77.999-36.099 147.9-91.3 194.7l-85.5-85.5c17.399-12.601 32.1-29.401 41.7-49.2h-120.9c-8.401 0-15-6.601-15-15v-90c0-8.401 6.599-15 15-15h236.8c7.2 0 13.5 5.099 14.7 12.299 3 15.601 4.5 31.8 4.5 47.701z" fill="#4086f4" />
                          <path d="m376.901 316c-9.6 19.799-24.302 36.599-41.7 49.2l85.499 85.5c55.201-46.8 91.3-116.7 91.3-194.7 0-15.901-1.5-32.1-4.501-47.701-1.199-7.2-7.5-12.299-14.7-12.299h-236.799v120z" fill="#4175df" />
                          <path d="m424.9 71.499c.3 4.2-1.5 8.101-4.2 11.1l-64.2 63.9c-5.099 5.4-13.499 6-19.499 1.5-23.702-17.699-51.602-26.999-81.001-26.999-60.601 0-112.2 40.499-129.3 95.7l-90.3-90.3c44.399-75 126.3-126.4 219.6-126.4 59.7 0 117.9 22 163.5 60.399 3.3 2.701 5.1 6.9 5.4 11.1z" fill="#ff641a" />
                          <path d="m337 147.999c6 4.501 14.399 3.9 19.499-1.5l64.2-63.9c2.701-2.999 4.501-6.899 4.2-11.1s-2.1-8.399-5.4-11.1c-45.599-38.399-103.799-60.399-163.499-60.399v121c29.399 0 57.299 9.3 81 26.999z" fill="#f03800" />
                        </g>
                      </svg>
                      <div class="service-text">
                        <span>WORDMARK</span>
                        <h3>LOGO DESIGN</h3>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-9 col-md-12">
            <div class="tab-content-wrap">
              <div class="tab-content inner-tab-content" id="nav-tabContent">

                <div class="tab-pane fade in active show" id="nav-custom" role="tabpanel" aria-labelledby="nav-custom-tab">
                  <div class="service-box-wrap">
                    <div class="col-lg-12">
                      <div class="service-tab-content-wrap">
                        <h3>ICONIC LOGO</h3>
                        <p>Iconic logos are known for their simplicity. They are not complex images, rather they are simple elements used in the manner to represent a story. The imagery used depicts the abstract representation of the organization. The elements used can be either straight text or very plain elements.</p>
                        <div class="inner-service-logo-box ">
                          <!-- <div class="logo-box-wrap">
                                        <div class="logo-box-img">
                                          <i class="sprite sprite-logo-1"></i>
                                            <img data-src="img/logo/logo-1.webp">
                                        </div>
                                        <div class="logo-box-img">
                                          <i class="sprite sprite-logo-2"></i>
                                            <img data-src="img/logo/logo-2.webp">
                                        </div>
                                        <div class="logo-box-img">
                                          <i class="sprite sprite-logo-3"></i>
                                            <img data-src="img/logo/logo-3.webp">
                                        </div>
                                        <div class="logo-box-img">
                                          <i class="sprite sprite-logo-4"></i>
                                            <img data-src="img/logo/logo-4.webp">
                                        </div>
                                        <div class="logo-box-img">
                                          <i class="sprite sprite-logo-5"></i>
                                            <img data-src="img/logo/logo-5.webp">
                                        </div>
                                    </div> -->
                          <h3>ICONIC LOGO</h3>
                        </div>
                        <div class="service-cta inner-service-cta">
                          <ul>
                            <li>
                              <a href="javascript:;" class="service-chat chatt">
                                <span>Click here to</span>
                                <h3>Live Chat</h3>
                              </a>
                            </li>
                            <li>
                              <a href="tel:(833) 564 8380" class="service-chat">
                                <span>Call Us At</span>
                                <h3>+1 817 533 6583</h3>
                              </a>
                            </li>
                            <li class="last">
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="service-order popup-open hvr-pulse-grow">
                                ORDER NOW
                                <img data-src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
                  <div class="service-box-wrap">
                    <div class="col-lg-12">
                      <div class="service-tab-content-wrap">
                        <h3>TYPOGRAPHIC LOGO</h3>
                        <p>Typographic logos are extremely simple logos, plain in structure and very subtle looking. Appealing to look at, these logos are made with a professional and creative approach and are usually easy to remember and trusted and loved by masses.</p>
                        <div class="inner-service-logo-box ">
                          <!-- <div class="logo-box-wrap">
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-6.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-7.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-8.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-9.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-10.webp">
                                        </div>
                                    </div> -->
                          <h3>TYPOGRAPHIC LOGO</h3>
                        </div>
                        <div class="service-cta inner-service-cta">
                          <ul>
                            <li>
                              <a href="javascript:;" class="service-chat chatt">
                                <span>Click here to</span>
                                <h3>Live Chat</h3>
                              </a>
                            </li>
                            <li>
                              <a href="tel:(833) 564 8380" class="service-chat">
                                <span>Call Us At</span>
                                <h3>+1 817 533 6583</h3>
                              </a>
                            </li>
                            <li class="last">
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="service-order popup-open hvr-pulse-grow">
                                ORDER NOW
                                <img data-src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-stationery" role="tabpanel" aria-labelledby="nav-stationery-tab">
                  <div class="service-box-wrap">
                    <div class="col-lg-12">
                      <div class="service-tab-content-wrap">
                        <h3>ILLUSTRATIVE LOGO</h3>
                        <p>Illustrative logos comprise of pictures depicting a range of meaning. While, some represent a product or service, others illustrate a concept loosely related to the organization’s mission. They tell a story and usually contain hand-drawn images, a mascot or a scenery.</p>
                        <div class="inner-service-logo-box ">
                          <!-- <div class="logo-box-wrap">
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-11.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-12.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-13.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-14.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-15.webp">
                                        </div>
                                    </div> -->
                          <h3>ILLUSTRATIVE LOGO</h3>
                        </div>
                        <div class="service-cta inner-service-cta">
                          <ul>
                            <li>
                              <a href="javascript:;" class="service-chat chatt">
                                <span>Click here to</span>
                                <h3>Live Chat</h3>
                              </a>
                            </li>
                            <li>
                              <a href="tel:(833) 564 8380" class="service-chat">
                                <span>Call Us At</span>
                                <h3>+1 817 533 6583</h3>
                              </a>
                            </li>
                            <li class="last">
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="service-order popup-open hvr-pulse-grow">
                                ORDER NOW
                                <img data-src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
                  <div class="service-box-wrap">
                    <div class="col-lg-12">
                      <div class="service-tab-content-wrap">
                        <h3>ANIMATED LOGO</h3>
                        <p>Animated logos are the key to grabbing the attention of your potential customer. Our designers make sure to create a unique & creative animated logo design that describes your brand. Once you approve the custom animated logo design our team of logo animators analyze the logo elements & develop a custom 3D animated logo.</p>
                        <div class="inner-service-logo-box ">
                          <div class="logo-box-wrap">
                            <div class="logo-box-img">
                              <img src="img/1.gif" alt="">
                            </div>
                            <div class="logo-box-img">
                              <img src="img/2.gif" alt="">
                            </div>
                            <div class="logo-box-img">
                              <img src="img/3.gif" alt="">
                            </div>
                            <div class="logo-box-img">
                              <img src="img/4.gif" alt="">
                            </div>
                          </div>
                          <h3>ANIMATED LOGO</h3>
                        </div>
                        <div class="service-cta inner-service-cta">
                          <ul>
                            <li>
                              <a href="javascript:;" class="service-chat chatt">
                                <span>Click here to</span>
                                <h3>Live Chat</h3>
                              </a>
                            </li>
                            <li>
                              <a href="tel:(833) 564 8380" class="service-chat">
                                <span>Call Us At</span>
                                <h3>+1 817 533 6583</h3>
                              </a>
                            </li>
                            <li class="last">
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="service-order popup-open hvr-pulse-grow">
                                ORDER NOW
                                <img data-src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-3d" role="tabpanel" aria-labelledby="nav-3d-tab">
                  <div class="service-box-wrap">
                    <div class="col-lg-12">
                      <div class="service-tab-content-wrap">
                        <h3>3D LOGO</h3>
                        <p>A 3D logo design gives a logo the detail and feeling that a simple logo fails to give, a 3 Dimensional logo design gives life to a simple logo. We can convert your current company logo to 3D format & it will be shown in a completely different angle/format.</p>
                        <div class="inner-service-logo-box ">
                          <!-- <div class="logo-box-wrap">
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-21.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-22.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-23.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-24.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-25.webp">
                                        </div>
                                    </div> -->
                          <h3>3D LOGO</h3>
                        </div>
                        <div class="service-cta inner-service-cta">
                          <ul>
                            <li>
                              <a href="javascript:;" class="service-chat chatt">
                                <span>Click here to</span>
                                <h3>Live Chat</h3>
                              </a>
                            </li>
                            <li>
                              <a href="tel:(833) 564 8380" class="service-chat">
                                <span>Call Us At</span>
                                <h3>+1 817 533 6583</h3>
                              </a>
                            </li>
                            <li class="last">
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="service-order popup-open hvr-pulse-grow">
                                ORDER NOW
                                <img data-src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-word" role="tabpanel" aria-labelledby="nav-word-tab">
                  <div class="service-box-wrap">
                    <div class="col-lg-12">
                      <div class="service-tab-content-wrap">
                        <h3>WORDMARK LOGO</h3>
                        <p>Wordmark logos are font-based logos that focuses on a business name alone. Wordmark logos work really well when a company has a succinct and distinct name. The name is catchy and memorable so the designers combine it with strong typography, wordmark logo helps create strong brand recognition.</p>
                        <div class="inner-service-logo-box ">
                          <!-- <div class="logo-box-wrap">
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-26.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-27.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-28.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-29.webp">
                                        </div>
                                        <div class="logo-box-img">
                                            <img data-src="img/logo/logo-30.webp">
                                        </div>
                                    </div> -->
                          <h3>WORDMARK LOGO</h3>
                        </div>
                        <div class="service-cta inner-service-cta">
                          <ul>
                            <li>
                              <a href="javascript:;" class="service-chat chatt">
                                <span>Click here to</span>
                                <h3>Live Chat</h3>
                              </a>
                            </li>
                            <li>
                              <a href="tel:(833) 564 8380" class="service-chat">
                                <span>Call Us At</span>
                                <h3>+1 817 533 6583</h3>
                              </a>
                            </li>
                            <li class="last">
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="service-order popup-open hvr-pulse-grow">
                                ORDER NOW
                                <img data-src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">
                              </a>
                            </li>
                          </ul>
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
    </div>
  </section>

  <!-- CTA -->
  <!-- register custom logo -->
  <section class="regis_cus_logo">
    <div class="cta2-left-img">
      <img src="img/cta-left-img.png" alt="" class="img-fluid">
    </div>
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-xl-11" data-aos="fade-left" data-aos-duration="500">
          <div class="rigister_content">
            <h2>Register now and get your logo delivered in just one hour</h2>
            <h1> Get Custom Logo for <span>$35.00</span> </h1>

          </div>
        </div>
      </div>
    </div>
    <div class="cta2-right-img">
      <img src="img/cta-right-img.png" alt="" class="img-fluid">
    </div>
  </section>
  <!-- register custom logo -->

  <!-- ready-work-contact -->
  <section class="ready-work-contact">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-xl-9 col-sm-6 col-lg-10">
          <div class="cta-contact">
            <ul>
              <li data-aos="zoom-out" data-aos-duration="500">
                <a href="tel:+1 817 533 6583">
                  <i class="fas fa-phone"></i>
                  <p>Toll Free Number<br> <span>+1 817 533 6583</span></p>

                </a>
              </li>
              <li data-aos="zoom-out" data-aos-duration="700">
                <a href="javascript:;" class="chatt">
                  <i class="fas fa-comments"></i>
                  <p>Talk to Us <br><span>LIVE CHAT</span></p>
                </a>
              </li>
              <li data-aos="zoom-out" data-aos-duration="1000">
                <a href="mailto:sales@designvikings.us">
                  <i class="fas fa-envelope-open-text"></i>
                  <p>Email us at <br> <span>sales@designvikings.us</span></p>
                </a>
              </li>
            </ul>

          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-lg-2" data-aos="zoom-out" data-aos-duration="1200">
          <div class="cta_btn hvr-pulse-grow">
            <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="bt-red ">
              <span>Get Started</span>
              <img src="img/service-arrow-btn.webp" alt="" class="img-fluid lazyload">

            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ready-work-contact --> <!-- CTA -->

  <footer>
    <div class="copy_main">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-12 col-sm-12 col-md-12 col-lg-12 copy_sec">
            <div class="copyright">
              <p>Copyright 2023 Design Vikings | All Rights Reserved. </p>
            </div>
            <div class="copy_right_img">
              <img class="img-fluid lazyload" data-src="img/card.png" alt="">
            </div>
          </div>
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--copy_main-->
    <div class="copy_content_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-12 col-sm-12 col-md-12 col-lg-12 disclaimer_content">
            <p><strong>Disclaimer:</strong> The logo, name and graphics of Design Vikings and its products &amp; services are the trademarks of Design Vikings. All other company names, brand names, trademarks and logos mentioned on this website are the property of their respective owners and do not constitute or imply endorsement, sponsorship or recommendation thereof by Design Vikings and do not constitute or imply endorsement, sponsorship or recommendation of Design Vikings by the respective trademark owner.</p>
          </div>
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--copy_content_area-->
  </footer>

  <!--form Modal Popup-->
  <div class="modal fade" id="popup_form">
    <div class="modal-dialog modal-dialog-centered">
      <div class="entry-box" data-form-type="ordernow_form">
        <form class="offr-frm form-poup" id="popupLead" method="post" enctype="multipart/form-data" method="POST" action="javascript:lead('popupLead');">
          <!--hidden required values-->
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
          <div class="col-sm-12 entry-left">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h1>up to 70% Discount</h1>
          </div>
          <div class="col-sm-12 entry-right">
            <div class="text">
              <h2><span>70% off </span> till midnight</h2>
              <p>Fill out this brief form to get your <strong>Discount reserved.</strong></p>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" >
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address" >
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" class="form-control" name="phone"  placeholder="Phone" >
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group mb-0 mt-4">
                <div id="formResult" class="slideformResult"></div>
                <button type="submit" class="entery-submit" name="signupForm" id="signupBtn" value="1">
                  Place your order
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--form Modal Popup-->
  <!--Plugin js CDN-->
  <script src="js/plugin.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
  <!--Main Js-->
  <script src="js/main.js"></script>
  <!--Main Js-->

  <!-- Service Js -->
  <script src="js/script.js"></script>
  <!-- Service Js -->


  <script>
    $('.chat, .chatt, .live_chatt').click(function() {
      $zopim.livechat.window.toggle();
    });
    zE(function() {
      zE.activate();
    });
    zE(function() {
      $zopim(function() {
        $zopim.livechat.setOnUnreadMsgs(unread);

        function unread(number) {
          if (number >= 1) {
            $zopim.livechat.window.show();
          }
        }
      });
    });
  </script>


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
      background: rgba(242, 222, 222, 0.5);
    }
  </style> <!-- Forms validation -->

  <script>
    zE(function() {
      zE.activate();
    });
    zE(function() {
      $zopim(function() {
        $zopim.livechat.setOnUnreadMsgs(unread);

        function unread(number) {
          if (number >= 1) {
            $zopim.livechat.window.show();
          }
        }
      });
    });
  </script>

  <script>
    $('.chat, .live_chatt, .chatt').click(function() {
      $zopim.livechat.window.toggle();
      return false;
    });
    
    setTimeout(function(){
        $('.modal').addClass('show').css('display','block')
    },3000)
    
    $('button.close').click(function(){
         $('.modal').removeClass('show').css('display','none')
    })
    
    
    
     $(document).ready(function() {
      $('#m3').on('input', function() {
        $(this).val(function(_, val) {
          return val.replace(/[^a-zA-Z\s]/g, '');
        });
      });
    });
    
    jQuery(document).ready(function() {
  jQuery('.form-poup').submit(function(event) {
    var email = jQuery('#popup-mail-form').val();
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}jQuery/;

    if (!emailRegex.test(email)) {
      event.preventDefault(); // Prevent form submission
    }
  });
});
    
  </script>
  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/custom-validation.js?v=1.7"></script>

  <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>
  
  
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