<?php
define("NITROPACK_HOME_URL", "https://designvikings.us/web-offer/"); 
define("NITROPACK_SITE_ID", "nkUaQKeaWNKQhJUbFkuAuxLjYxJPKARh"); 
define("NITROPACK_SITE_SECRET", "Owd210KMPrYqLZND13gYkL42kUXimKYgkGRF9drAo7PG5dQrl7goSHgqlWWgKy7T"); 
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
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
   <meta name="description" content="">
   <title>Design Vikings - World's #1 Website Design Company</title>
   <link rel="stylesheet" href="assets/css/layout.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/style.css?ver=1.1">
   <!-- CSS only -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
   <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>
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
   <style>
      .iti {
         width: 100%;
      }

      .phone-slider .iti--allow-dropdown {
         top: 24px;
         left: 22px;
         position: absolute;
      }

      .phone-slider .phone {
         padding-left: 60px !important;
      }

      .phone-slider .iti__country-list {
         max-width: 300px;
         width: 275px;
         color: black;
      }

      .phone-slider ul {
         font-size: 12px;
      }

      .loader {
         display: none;
         text-align: center;
      }

      .footer-form {
         position: relative;
      }

      .footer-form .iti--allow-dropdown {
         top: 32px;
         left: 2px;
         position: absolute;
      }

      .footer-form .fom1 {
         padding-left: 50px !important;
      }

      .phone-popup input[type="tel"] {
         font-family: 'Poppins';
         background: #ffffff;
         border: #dedede 2px solid;
         padding: 10px 10px 10px 50px;
         width: 100%;
         border-radius: 6px;
         font-size: 14px;
         color: #000;
         box-shadow: none !important;
         outline: none 0px !important;
      }

      .phone-popup .iti--allow-dropdown {
         top: 21px;
         left: 2px;
         position: absolute;
      }

      .phone-popup .iti__country-list {
         width: 180px;
      }

      .phone-banner {
         position: relative;
      }

      .phone-banner .phone {
         padding-left: 50px;
      }

      .phone-banner .iti--allow-dropdown {
         position: absolute;
         left: 0;
         top: 21px;
      }

      .phone-banner .iti__country-list {
         max-width: 330px;
         margin-top: 20px;
      }
   </style>
</head>

<body>
   <header>
      <div class="main-header">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-4 text-left">
                  <ul class="top-li">
                     <!--<li> <a href="index.php"><img src="assets/images/logo.webp" alt=""></a> </li>-->
                     <li class="first"> <a href="index.php"><img src="assets/images/logo.svg" alt=""></a><a href="index.php"><img src="assets/images/logo.svg" alt=""></a> </li>

                     <li class="border-l">
                        <p>Profits Generated for Clients</p>
                        <img src="assets/images/animation/counter.gif">
                     </li>
                  </ul>
               </div>
               <div class="col-md-1"></div>
               <div class="col-md-7 text-rights">
                  <ul class="gt-st">
                     <li><a href="tel: +1 817 533 6583" class="top-l"><i class="fas fa-phone-volume"></i> +1 817 533 6583</a></li>
                     <li><a href="javascript:$zopim.livechat.window.show()" class="top-l"><i class="fas fa-comment-alt-dots"></i> LIVE CHAT</a></li>
                     <li>
                        <div class="gt-start"> <a data-fancybox data-src="#popupform" href="javascript:void(0);" class="btn-a wavetw">Get Custom Quote</a> </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </header>

   <style>
      .banner-shape.shape-1 {
         top: 60px;
         left: 40px;
         transform: rotate(-10deg);
         animation: footer_ghost 8s infinite;
         animation-duration: 4s;
         -webkit-animation: footer_ghost 8s infinite;
      }

      .banner-shape.shape-2 {
         bottom: 0px;
         left: -20px;
         animation-name: scale-updown;
         animation-iteration-count: infinite;
         animation-direction: alternate;
         animation-duration: 1.5s;
      }

      .banner-shape.shape-5 {
         top: 60px;
         right: 40px;
         transform: rotate(-10deg);
         animation: footer_ghost 10s infinite;
         animation-duration: 4s;
         -webkit-animation: footer_ghost 10s infinite;
      }

      .banner-shape.shape-6 {
         bottom: 0px;
         right: -20px;
         animation-name: scale-updown;
         animation-iteration-count: infinite;
         animation-direction: alternate;
         animation-duration: 1.5s;
      }

      @keyframes scale-updown {
         from {
            transform: scale(.9);
         }

         to {
            scale: scale(1);
         }
      }

      @keyframes footer_ghost {
         0% {
            transform: rotate(-20deg) translate(0px, 0px);
         }

         50% {
            transform: rotate(0deg) translate(-30px, -0px);
         }

         100% {
            transform: rotate(-20deg) translate(0px, 0px);
         }
      }

      .bg-transparent-glass {
         position: relative;
         z-index: 999;
      }

      .banner-shape {
         position: absolute;
         width: auto !important;
      }
   </style>

   <!-- <section class="digitalagency20 custom-background">
      <div class="niwaxheroscroll">
         <img src="assets/images/shape-a.webp" class="niwax nxhs1" alt="icon" data-rellax-speed="4">
         <img src="assets/images/shape-b.webp" class="niwax nxhs2" alt="icon" data-rellax-speed="-3">
         <img src="assets/images/shape-f.webp" class="niwax nxhs3" alt="icon" data-rellax-speed="1">
         <img src="assets/images/shape-d.webp" class="niwax nxhs4" alt="icon" data-rellax-speed="-5">
         <img src="assets/images/shape-e.webp" class="niwax nxhs5" alt="icon" data-rellax-speed="-2">
      </div>
      <div class="gradient-bg"></div>
      <div class="hero-main-rp container-fluid">


         <div class="row">
            <div class="col-lg-5">
               <div class="hero-heading-sec">
                  <h2 class="wow fadeIn" data-wow-delay="0.3s">We Provide Flexible<br><span id="typed" style="white-space:pre;" class="typed">
                     </span><br> Solutions</h2>
                  <p class="wow fadeIn" data-wow-delay="0.6s"> We are a small company with big ideas and offer flexible solutions to suit your needs. Our websites include free domain name registration and hosting for the first year. </p>

                  <a name="35" data-fancybox="" data-src="#popupform" href="javascript:void(0);" href=" javascript:void(0);" class="btn-main various open_modal">Let's Get Started<i class="fas fa-chevron-right fa-ani"></i></a>


                  <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s">
                     <ul class="banner-feat-list-2">
                        <li class="first">
                           <a href="javascript:void(0);"><img loading="lazy" src="assets/images/l1.webp" alt="" class="stars"> </a>
                        </li>
                        <li>
                           <a href="javascript:void(0);"> <img loading="lazy" src="assets/images/l2.webp" alt="" class="stars logo2"> </a>
                        </li>
                        <li>
                           <a href="javascript:void(0);"> <img loading="lazy" src="assets/images/l3.png" alt="" class="stars logo2"> </a>
                        </li>
                        <li class="last"> <img loading="lazy" src="assets/images/l4.webp" alt="" class="stars"></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="hero-right-scmm">
                  <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                     <div class="baner-slide no-slides service-card-prb">
                        <div class="service-slide without-slide" data-tilt="" data-tilt-max="12" data-tilt-speed="1000">
                           <a href="website-development.php">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="assets/images/web-development-2.webp">
                                 </div>
                                 <div class="title-serv-c"><span>Website</span>Development</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide without-slide" data-tilt="" data-tilt-max="12" data-tilt-speed="1000">
                           <a href="javascript:void(0);">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="assets/images/mobile-app-2.webp">
                                 </div>
                                 <div class="title-serv-c"><span>Mobile Application</span>Development</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide without-slide" data-tilt="" data-tilt-max="12" data-tilt-speed="1000">
                           <a href="javascript:void(0);">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="assets/images/marketing-2.webp">
                                 </div>
                                 <div class="title-serv-c"><span>Digital</span>Marketing</div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide without-slide" data-tilt="" data-tilt-max="12" data-tilt-speed="1000">
                           <a href="ecommerce.php">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="assets/images/ecommerce-2.webp">
                                 </div>
                                 <div class="title-serv-c"><span>E-commerce</span>Development </div>
                              </div>
                           </a>
                        </div>
                        <div class="service-slide without-slide" data-tilt="" data-tilt-max="12" data-tilt-speed="1000">
                           <a href="logo-design.php">
                              <div class="service-card-hh">
                                 <div class="image-sr-mm">
                                    <img alt="custom-sport" src="assets/images/branding-2.webp">
                                 </div>
                                 <div class="title-serv-c"><span>Branding </span> Solution</div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <section class="banner">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <h1>Professional Website <span>Design & Development Services</span></h1>
               <h3>Pricing Starts from <span>AUD199</span> Only</h3>
               <ul class="yel-list">
                  <li>Free Website Mockup Design</li>
                  <li>Award-Winning Website Designer</li>
                  <li><span class="cl">100%</span> Ownership & Money Back Guarantee</li>
               </ul>
               <a href="javascript:;" data-package="Startup Website Package" name="199" data-fancybox="" data-src="#popupform" href="javascript:;" class="grad-btn bnr-btn various">Let's Get Started</a>
               <a href="javascript:$zopim.livechat.window.show()" class="chat">Live Chat</a>
               <img class="rating_icon" src="assets/images/ratingicon.png" alt="">
            </div>
            <div class="col-md-5">
               <div class="banner-form-main frm-brdr-grd">
                  <form id="bannerFormMain" method="POST" action="javascript:lead('bannerFormMain');" class="validate-banner-frm">
                     <input type="hidden" id="referer" name="referer" value="google">
                     <input type="hidden" id="price" name="price" value="$199">
                     <input type="hidden" id="title" name="package" value="Startup Website Package">
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
                     <h3>Limited Time Offer<span>
                           Get <strong>70%</strong> Discount</span></h3>
                     <div class="newlay">
                        <input type="text" class="required placeholder2" required="" placeholder="Name *" name="name" maxlength="35">
                        <input type="email" class="required email placeholder2" required="" placeholder="Email Address *" name="email">
                        <div class="phone-banner">
                           <input type="tel" class="required number phone" name="phone" id="phone03">
                           <input type="tel" class="hide" id="phone-hidden03">
                        </div>
                        <textarea name="message" class="required placeholder2" required="" placeholder="To help us understand better, enter a brief description about your project."></textarea>
                        <input type="submit" value="Get Free Consultancy">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

   </section>

   <section id="trust-sec">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <ul class="trusted-list">
                  <li>
                     <h2>trusted by</h2>
                  </li>
                  <li>
                     <ul class="awrd">
                        <li><img loading="lazy" src="assets/images/logo/01.webp"></li>
                        <li><img loading="lazy" src="assets/images/logo/02.webp"></li>
                        <li><img loading="lazy" src="assets/images/logo/03.webp"></li>
                        <li><img loading="lazy" src="assets/images/logo/04.png"></li>
                        <li><img loading="lazy" src="assets/images/logo/05.webp"></li>
                        <li><img loading="lazy" src="assets/images/logo/06.png"></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>

   <section id="trust-sec2">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <ul class="ser">
                  <li><img loading="lazy" src="assets/images/ser1.webp"></li>
                  <li><img loading="lazy" src="assets/images/ser2.webp"></li>
                  <li><img loading="lazy" src="assets/images/ser3.webp"></li>
                  <li><img loading="lazy" src="assets/images/ser4.webp"></li>
                  <li><img loading="lazy" src="assets/images/ser5.webp"></li>
               </ul>
            </div>
         </div>
      </div>
   </section>

   <section id="next-sec">
      <div class="next-wrap">
         <div class="container">
            <div class="nxt-title">
               <h2 class="sec-hd text-center">
                  Ready To Drive Your Business To The Next Level?
               </h2>
               <p> One of the aims of our web design business is that you not only have a professionally created website, which looks good and functions much better. </p>
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                     <div class="next-cont">

                        <h2>
                           Web Solutions we offer:
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-5 col-md-10 col-12">
                     <div class="" id="accordionExample">
                        <button class="accordion active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span></span>Custom Websites</button>
                        <div id="collapseOne" class="panel" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="display: block;">
                           <div class="accordion-body">
                              <p> Choosing a custom website will allow you to deliver your ideas through appealing pictures and content that will draw your audience. </p>
                           </div>
                        </div>
                        <button class="accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span></span>Responsive Websites</button>
                        <div id="collapseFour" class=" panel" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p> We are experts at creating high-quality web applications that are tailored to your needs. We aspire to provide you and your audience with individuality and a user-friendly experience. </p>
                           </div>
                        </div>

                        <button class="accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><span></span>Website Development</button>
                        <div id="collapseSix" class=" panel" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p> We provide a highly efficient, effective and technologically transformational experience, which is meant to be user-friendly, fully functional, safe and able to expand with the growth of your organization. </p>
                           </div>
                        </div>
                        <button class="accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span></span>E-commerce Web Solutions</button>
                        <div id="collapseFive" class=" panel" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p> We are ready to meet your expectations to ensure your e-commerce store has a pleasant experience with Design Vikings. Our service excellence promotes your brand image and ensures that every activity is effective. </p>
                           </div>
                        </div>
                        <button class="accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span></span>B2B and B2C Portals</button>
                        <div id="collapseThree" class=" panel" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p> The Business-to-Business (B2B) or Business-to-Consumer (B2C) sites must be clear and short, must be attractive and provide product or service. </p>
                           </div>
                        </div>
                        <button class="accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span></span>CMS Websites</button>
                        <div id="collapseTwo" class=" panel" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p> As the Best CMS Development Agency, we provide a fully personalized, branded style for CMS site designs, that can be handled easily and you can easily change your content yourself. </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="offset-lg-1 col-lg-6 col-md-6 col-12">
                     <div class="graph-area"> <img loading="lazy" src="assets/images/animation/Growth_Graph.gif" alt="" class="gr-1 gr"> <img loading="lazy" src="assets/images/animation/Graph.gif" alt="" class="gr-2 gr"> </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="pot-sec">
      <div class="container-fluid">
         <div class="container">
            <div class="step-h m1-h p1 m2-h pad-btm text-center">
               <h2 class="sec-hd">Exceptional Custom Website Services</h2>
               <p>Our success lies in changing the game for our clients' brands. By focusing on customer outcomes,
                  <br>we build beautiful, engaging experiences that drive real business results.
               </p>
               <div class="tab">
                  <button class="tablinks webtab" onclick="openCity(event, 'web')" id="defaultOpen">website</button>
                  <button class="tablinks" onclick="openCity(event, 'logos')">logo</button>
                  <button class="tablinks" onclick="openCity(event, 'brand')">branding</button>
                  <button class="tablinks" onclick="openCity(event, 'illus')">illustration</button>
                  <button class="tablinks" onclick="openCity(event, 'videos')">video</button>
               </div>
            </div>
         </div>
         <div class="row tabcontent" id="web">
            <div class="col-md-12">
               <ul class="port-lst">
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/1-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/1-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/2-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/2-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/3-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/3-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/4-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/4-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/5-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/5-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/6-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/6-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/7-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/7-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/8-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/8-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/9-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/9-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/10-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/10-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/11-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/11-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/12-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/12-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/13-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/13-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/14-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/14-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/15-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/15-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/16-min.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/back/16-full.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="row tabcontent" id="logos">
            <div class="col-md-12">
               <ul class="port-lst">
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l1.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l1.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l2.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l2.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l3.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l3.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l4.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l4.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l5.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l5.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l6.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l6.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l7.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l7.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/l8.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/l8.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>

               </ul>
            </div>
         </div>
         <div class="row tabcontent" id="brand">
            <div class="col-md-12">
               <ul class="port-lst">
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b1.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b1.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b2.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b2.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b3.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b3.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b4.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b4.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b5.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b5.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b6.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b6.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b7.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b7.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/b8.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/b8.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>

               </ul>
            </div>
         </div>
         <div class="row tabcontent" id="illus">
            <div class="col-md-12">
               <ul class="port-lst">
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i1.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i1.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i2.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i2.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i3.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i3.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i4.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i4.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i5.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i5.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i6.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i6.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i7.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i7.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/i8.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="assets/images/portfolio/i8.webp" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>

               </ul>
            </div>
         </div>
         <div class="row tabcontent" id="videos">
            <div class="col-md-12">
               <ul class="port-lst">
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v1.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/k6sESMwsEWw" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v2.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/eQQCGJtKuMU" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v3.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/epNr1clxG3Y" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v4.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/OB4C1AVd9qo" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v5.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/-0dfLT0UQjA" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v6.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/MfdnkFcsEbA" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v7.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/pB2Qmg40EDc" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="first">
                     <div class="port-box">
                        <img loading="lazy" src="assets/images/portfolio/v8.webp">
                        <div class="port-ctn">
                           <div>
                              <h5></h5>
                              <a href="https://youtu.be/v-rVRb84ZOo" data-fancybox="images"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                           </div>
                        </div>
                     </div>
                  </li>

               </ul>
            </div>
         </div>
      </div>
   </section>

   <!-- PRICING -->
   <section class="pricing-section">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-10">
               <div class="common-heading ptag">
                  <span>Our Pricing</span>
                  <h2>Our Premium and Affordable Packages</h2>
                  <p class="mb30">
                     Our Competitive Pricing Packages Are Meant To Suit The Varied Needs Of Our Clients. Take A Look!
                  </p>
               </div>
            </div>
         </div>

         <div class="tabs-layout">
            <!-- TOP NAV -->
            <!-- <ul class="nav nav-tabs" id="myTab1" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="home-ada-tab" data-bs-toggle="tab" data-bs-target="#websites-ada" type="button" role="tab" aria-controls="websites-ada" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="logo-ada-tab" data-bs-toggle="tab" data-bs-target="#logoos" type="button" role="tab" aria-controls="logoos" aria-selected="false">logoos</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="Ecommerce-ada-tab" data-bs-toggle="tab" data-bs-target="#Ecommerce-ada" type="button" role="tab" aria-controls="Ecommerce-ada" aria-selected="false">Ecommerce-ada</button>
            </li>

            <li class="nav-item" role="presentation">
               <button class="nav-link" id="marketing-ada-tab" data-bs-toggle="tab" data-bs-target="#Marketing-ada" type="button" role="tab" aria-controls="Marketing-ada" aria-selected="false">Marketing-ada</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="Branding-ada-tab" data-bs-toggle="tab" data-bs-target="#Branding-ada" type="button" role="tab" aria-controls="Branding-ada" aria-selected="false">Branding-ada</button>
            </li>

            <li class="nav-item" role="presentation">
               <button class="nav-link" id="Animation-ada-tab" data-bs-toggle="tab" data-bs-target="#Animation-ada" type="button" role="tab" aria-controls="Animation-ada" aria-selected="false">Animation-ada</button>
            </li>

            </ul> -->
            <!-- END TOP NAV -->

            <!-- TAB CONTENT -->
            <div class="tab-content" id="myTabContent1">
               <div class="tab-pane fade show active" id="websites-ada" role="tabpanel" aria-labelledby="home-ada-tab">
                  <div class="row">

                     <!-- STARTUP WEBSITE PACKAGE -->
                     <div class="col-md-4">
                        <div class="screen-splits">
                           <div class="nxpb-2">
                              <div class="niwaxpricingbox shadow">
                                 <div class="pricingheader custom-border">
                                    <h2>Startup <br>Website Package</h2>
                                    <p>Great For Small Business</p>
                                 </div>
                                 <div class="pricingrate">
                                    <div class="pricevalue">
                                       <h2><sup>$ </sup>199 <del> $399</del> </h2>
                                    </div>
                                    <div class="priceoffer">
                                       <h2>50% off</h2>
                                    </div>
                                 </div>
                                 <div class="pricingoffers">
                                    <ul class="list-ul ul-check">
                                       <li class="first">5 Stock Photos</li>
                                       <li>3 Page Website</li>
                                       <li>3 Banner Design</li>
                                       <li>1 jQuery Slider Banner</li>
                                       <li>FREE Google Friendly Sitemap</li>
                                       <li>Complete W3C Certified HTML</li>
                                       <li>48 to 72 hours TAT</li>
                                       <li>Facebook Page Design</li>
                                       <li>Twitter Page Design</li>
                                       <li>YouTube Page Design</li>
                                       <li>100% Satisfaction Guarantee</li>
                                       <li>100% Unique Design Guarantee</li>
                                       <li>100% Money Back Guarantee *</li>
                                       <li>Mobile Responsive will be Additional $99*</li>
                                       <li>CMS will be Additional $149*</li>
                                       <li><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Ownership Rights</b></li>
                                       <li class="last"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Unique Design Guaranteed</b></li>
                                    </ul>
                                 </div>
                                 <div class="priceodernow">
                                    <div class="priceoderbtn"><a data-fancybox="" data-src="#popupform" href="javascript:void(0);" class="niwax-btn3 various open_modal" onclick="priceChange('Startup Website Package','$199');">Place Order</a></div>
                                    <div class="priceaskwithus">
                                       <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-dark">
                                          <img src="assets/images/Icon ionic-ios-chatboxes.png">
                                          <div><span>Want to discuss</span> Live Chat Now </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="pricingfooter ">
                                    <div class="pfdiv1 text-dark"><a href="tel: +1 817 533 6583">Call Us: +1 817 533 6583</a></div>
                                    <div class="pfdiv2 text-dark"><a href="javascript:void(0);">Need Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END PACK -->

                     <!-- PROFESSIONAL WEBSITE PACKAGE -->
                     <div class="col-md-4">
                        <div class="screen-splits">
                           <div class="nxpb-2">
                              <div class="niwaxpricingbox shadow">
                                 <div class="pricingheader custom-border">
                                    <h2>Professional <br>Website Package</h2>
                                    <p>Great For Small Business</p>
                                 </div>
                                 <div class="pricingrate">
                                    <div class="pricevalue">
                                       <h2><sup>$ </sup>349 <del> $699</del> </h2>
                                    </div>
                                    <div class="priceoffer">
                                       <h2>50% off</h2>
                                    </div>
                                 </div>
                                 <div class="pricingoffers">
                                    <ul class="list-ul ul-check">
                                       <li class="first">5 Unique Pages Website</li>
                                       <li>CMS / Admin Panel Support</li>
                                       <li>8 Stock images</li>
                                       <li>5 Banner Designs</li>
                                       <li>1 jQuery Slider Banner</li>
                                       <li>FREE Google Friendly Sitemap</li>
                                       <li>Complete W3C Certified HTML</li>
                                       <li>48 to 72 hours TAT</li>
                                       <li>Facebook Page Design</li>
                                       <li>Twitter Page Design</li>
                                       <li>YouTube Page Design</li>
                                       <li>Complete Deployment</li>
                                       <li>100% Satisfaction Guarantee</li>
                                       <li>100% Unique Design Guarantee</li>
                                       <li>100% Money Back Guarantee *</li>
                                       <li>Mobile Responsive will be Additional $99*</li>
                                       <li><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Ownership Rights</b></li>
                                       <li class="last"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Unique Design Guaranteed</b></li>
                                    </ul>
                                 </div>
                                 <div class="priceodernow">
                                    <div class="priceoderbtn"><a data-fancybox="" data-src="#popupform" href="javascript:void(0);" class="niwax-btn3 various open_modal" onclick="priceChange('Professional Website Package','$349');">Place Order</a></div>
                                    <div class="priceaskwithus">
                                       <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-dark">
                                          <img src="assets/images/Icon ionic-ios-chatboxes.png">
                                          <div><span>Want to discuss</span> Live Chat Now </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="pricingfooter ">
                                    <div class="pfdiv1 text-dark"><a href="tel: +1 817 533 6583">Call Us: +1 817 533 6583</a></div>
                                    <div class="pfdiv2 text-dark"><a href="javascript:void(0);">Need Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END PACK -->

                     <!-- ELITE WEBSITE PACKAGE -->
                     <div class="col-md-4">
                        <div class="screen-splits">
                           <div class="nxpb-2">
                              <div class="niwaxpricingbox shadow">
                                 <div class="pricingheader custom-border">
                                    <h2>Elite <br>Website Package</h2>
                                    <p>Great For Small Business</p>
                                 </div>
                                 <div class="pricingrate">
                                    <div class="pricevalue">
                                       <h2><sup>$ </sup>599 <del> $1199</del> </h2>
                                    </div>
                                    <div class="priceoffer">
                                       <h2>50% off</h2>
                                    </div>
                                 </div>
                                 <div class="pricingoffers">
                                    <ul class="list-ul ul-check">
                                       <li class="first">Upto 10 Unique Pages Website</li>
                                       <li>Conceptual and Dynamic Website</li>
                                       <li>Mobile Responsive</li>
                                       <li>Online Reservation/Appointment Tool (Optional)</li>
                                       <!--<li>Online Payment Integration (Optional)</li>-->
                                       <li>Custom Forms</li>
                                       <li>Lead Capturing Forms (Optional)</li>
                                       <li>Striking Hover Effects</li>
                                       <li>Newsletter Subscription (Optional)</li>
                                       <li>Newsfeed Integration</li>
                                       <li>Social Media Integration</li>
                                       <li>Search Engine Submission</li>
                                       <li>5 Stock Photos</li>
                                       <li>3 Unique Banner Design</li>
                                       <li>1 jQuery Slider Banner</li>
                                       <li> Complete W3C Certified HTML</li>
                                       <li>48 to 72 hours TAT</li>
                                       <li>Facebook Page Design</li>
                                       <li>Twitter Page Design</li>
                                       <li>YouTube Page Design</li>
                                       <li>Complete Deployment</li>
                                       <li>100% Satisfaction Guarantee</li>
                                       <li>100% Unique Design Guarantee</li>
                                       <li>100% Money Back Guarantee *</li>
                                       <li><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Ownership Rights</b></li>
                                       <li class="last"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Unique Design Guaranteed</b></li>
                                    </ul>
                                 </div>
                                 <div class="priceodernow">
                                    <div class="priceoderbtn"><a data-fancybox="" data-src="#popupform" href="javascript:void(0);" class="niwax-btn3 various open_modal" onclick="priceChange('Elite Website Package','$599');">Place Order</a></div>
                                    <div class="priceaskwithus">
                                       <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-dark">
                                          <img src="assets/images/Icon ionic-ios-chatboxes.png">
                                          <div><span>Want to discuss</span> Live Chat Now </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="pricingfooter ">
                                    <div class="pfdiv1 text-dark"><a href="tel: +1 817 533 6583">Call Us: +1 817 533 6583</a></div>
                                    <div class="pfdiv2 text-dark"><a href="javascript:void(0);">Need Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END PACK -->

                     <!-- SILVER WEBSITE PACKAGE -->
                     <div class="col-md-4">
                        <div class="screen-splits">
                           <div class="nxpb-2">
                              <div class="niwaxpricingbox shadow">
                                 <div class="pricingheader custom-border">
                                    <h2>Silver <br>Website Package</h2>
                                    <p>Great For Small Business</p>
                                 </div>
                                 <div class="pricingrate">
                                    <div class="pricevalue">
                                       <h2><sup>$ </sup>1249 <del> $2499</del> </h2>
                                    </div>
                                    <div class="priceoffer">
                                       <h2>50% off</h2>
                                    </div>
                                 </div>
                                 <div class="pricingoffers">
                                    <ul class="list-ul ul-check">
                                       <li class="first">15 to 20 Pages Website</li>
                                       <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                                       <li>Custom WP</li>
                                       <li>1 jQuery Slider Banner</li>
                                       <li>Up to 10 Custom Made Banner Designs</li>
                                       <li>10 Stock Images</li>
                                       <li>Unlimited Revisions</li>
                                       <li>Special Hoover Effects</li>
                                       <li>Content Management System (CMS)</li>
                                       <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                                       <li>Online Payment Integration (Optional)</li>
                                       <li>Multi Lingual (Optional)</li>
                                       <li>Custom Dynamic Forms (Optional)</li>
                                       <li>Signup Area (For Newsletters, Offers etc.)</li>
                                       <li>Search Bar</li>
                                       <li>Live Feeds of Social Networks integration (Optional)</li>
                                       <li>Mobile Responsive</li>
                                       <li>FREE 5 Years Domain Name</li>
                                       <li>Free Google Friendly Sitemap</li>
                                       <li>Search Engine Submission</li>
                                       <li>Complete W3C Certified HTML</li>
                                       <li>Industry Specified Team of Expert Designers and Developers</li>
                                       <li>Complete Deployment</li>
                                       <li>Dedicated Accounts Manager</li>
                                       <li>Facebook Page Design</li>
                                       <li>Twitter Page Design</li>
                                       <li>YouTube Page Design</li>
                                       <li>100% Ownership Rights</li>
                                       <li>100% Satisfaction Guarantee</li>
                                       <li>100% Unique Design Guarantee</li>
                                       <li>100% Money Back Guarantee *</li>
                                       <li><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Ownership Rights</b></li>
                                       <li class="last"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Unique Design Guaranteed</b></li>
                                    </ul>
                                 </div>
                                 <div class="priceodernow">
                                    <div class="priceoderbtn"><a data-fancybox="" data-src="#popupform" href="javascript:void(0);" class="niwax-btn3 various open_modal" onclick="priceChange('Silver Website Package','$1249');">Place Order</a></div>
                                    <div class="priceaskwithus">
                                       <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-dark">
                                          <img src="assets/images/Icon ionic-ios-chatboxes.png">
                                          <div><span>Want to discuss</span> Live Chat Now </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="pricingfooter ">
                                    <div class="pfdiv1 text-dark"><a href="tel: +1 817 533 6583">Call Us: +1 817 533 6583</a></div>
                                    <div class="pfdiv2 text-dark"><a href="javascript:void(0);">Need Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END PACK -->

                     <!-- BUSINESS WEBSITE PACKAGE -->
                     <div class="col-md-4">
                        <div class="screen-splits">
                           <div class="nxpb-2">
                              <div class="niwaxpricingbox shadow">
                                 <div class="pricingheader custom-border">
                                    <h2>Business <br>Website Package</h2>
                                    <p>Great For Small Business</p>
                                 </div>
                                 <div class="pricingrate">
                                    <div class="pricevalue">
                                       <h2><sup>$ </sup>1949 <del> $3898</del> </h2>
                                    </div>
                                    <div class="priceoffer">
                                       <h2>50% off</h2>
                                    </div>
                                 </div>
                                 <div class="pricingoffers">
                                    <ul class="list-ul ul-check">
                                       <li class="first">20 to 25 Pages Website</li>
                                       <li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
                                       <li>Custom WP</li>
                                       <li>1 jQuery Slider Banner</li>
                                       <li>Up to 10 Custom Made Banner Designs</li>
                                       <li>10 Stock Images</li>
                                       <li>Unlimited Revisions</li>
                                       <li>Special Hoover Effects</li>
                                       <li>Content Management System (CMS)</li>
                                       <li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
                                       <li>Online Payment Integration (Optional)</li>
                                       <li>Multi Lingual (Optional)</li>
                                       <li>Custom Dynamic Forms (Optional)</li>
                                       <li>Signup Area (For Newsletters, Offers etc.)</li>
                                       <li>Search Bar</li>
                                       <li>Live Feeds of Social Networks integration (Optional)</li>
                                       <li>Mobile Responsive</li>
                                       <li>15 Seconds 2D Explainer Video</li>
                                       <li>Voice - Over &amp; Sound Effects</li>
                                       <li>Professional Script Writing</li>
                                       <li>Storyboard</li>
                                       <li>SEO Meta Tags</li>
                                       <li>FREE 5 Years Domain Name</li>
                                       <li>Free Google Friendly Sitemap</li>
                                       <li>Search Engine Submission</li>
                                       <li>Complete W3C Certified HTML</li>
                                       <li>Industry Specified Team of Expert Designers and Developers</li>
                                       <li>Complete Deployment</li>
                                       <li>Dedicated Accounts Manager</li>
                                       <li>100% Ownership Rights</li>
                                       <li>100% Satisfaction Guarantee</li>
                                       <li>100% Unique Design Guarantee</li>
                                       <li>100% Money Back Guarantee *</li>
                                       <li><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Ownership Rights</b></li>
                                       <li class="last"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Unique Design Guaranteed</b></li>
                                    </ul>
                                 </div>
                                 <div class="priceodernow">
                                    <div class="priceoderbtn"><a data-fancybox="" data-src="#popupform" href="javascript:void(0);" class="niwax-btn3 various open_modal" onclick="priceChange('Business Website Package','$1949');">Place Order</a></div>
                                    <div class="priceaskwithus">
                                       <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-dark">
                                          <img src="assets/images/Icon ionic-ios-chatboxes.png">
                                          <div><span>Want to discuss</span> Live Chat Now </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="pricingfooter ">
                                    <div class="pfdiv1 text-dark"><a href="tel: +1 817 533 6583">Call Us: +1 817 533 6583</a></div>
                                    <div class="pfdiv2 text-dark"><a href="javascript:void(0);">Need Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END PACK -->

                     <!-- AUTOMATED/INTERACTIVE CONFERENCING PORTAL -->
                     <div class="col-md-4">
                        <div class="screen-splits">
                           <div class="nxpb-2">
                              <div class="niwaxpricingbox shadow">
                                 <div class="pricingheader custom-border">
                                    <h2>Automated / Interactive <br>Conferencing Portal</h2>
                                    <p>Great For Small Business</p>
                                 </div>
                                 <div class="pricingrate">
                                    <div class="pricevalue">
                                       <h2><sup>$ </sup>2499 <del> $4999</del> </h2>
                                    </div>
                                    <div class="priceoffer">
                                       <h2>50% off</h2>
                                    </div>
                                 </div>
                                 <div class="pricingoffers">
                                    <ul class="list-ul ul-check">
                                       <li class="first">Unlimited Page Website</li>
                                       <li>Custom Content Management System (CMS)</li>
                                       <li>Unique Pages and UI Design</li>
                                       <li>Complete Custom Development</li>
                                       <li>Process Automation Tools</li>
                                       <li>Newsfeed Integration</li>
                                       <li>Social Media Plugins Integration</li>
                                       <li>Upto 40 Stock images</li>
                                       <li>10 Unique Banner Designs</li>
                                       <li>JQuery Slider</li>
                                       <li>Search Engine Submission</li>
                                       <li>Free Google Friendly Sitemap</li>
                                       <li>FREE 5 Years Hosting</li>
                                       <li>Custom Email Addresses</li>
                                       <li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>
                                       <li>Complete W3C Certified HTML</li>
                                       <li>Complete Deployment</li>
                                       <li>100% Satisfaction Guarantee</li>
                                       <li>100% Unique Design Guarantee</li>
                                       <li>Money Back Guarantee</li>
                                       <li><strong>Key features</strong></li>
                                       <li>Automated Course Creation</li>
                                       <li>Video Conferencing</li>
                                       <li>Skills/Certification Tracking</li>
                                       <li>Mobile Learning</li>
                                       <li>Asynchronous Learning</li>
                                       <li>CRM Features</li>
                                       <li>Gamification</li>
                                       <li>Social Learning/Message Boards</li>
                                       <li>Motivational Triggers</li>
                                       <li>Forums And Webinars</li>
                                       <li>E-commerce And Subscriptions</li>
                                       <li>Online Course Booking</li>
                                       <li>Excellent Reporting</li>
                                       <li>Invoicing Integration</li>
                                       <li>Financial Integrations</li>
                                       <li>Student Information management</li>
                                       <li>Automated communications</li>
                                       <li>Learning Management System</li>
                                       <li>Quick And Easy Course Scheduling</li>
                                       <li>Reporting And Data Analysis</li>
                                       <li>Assessment Management &amp; Live Feedback</li>
                                       <li>Gradebooks</li>
                                       <li>Quick User Integration</li>
                                       <li>Easy Payment Methods</li>
                                       <li>Online Communities &amp; Social Engagement</li>
                                       <li>Curation of Resources And Adding Own Resources</li>
                                       <li><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Ownership Rights</b></li>
                                       <li class="last"><i class="fa fa-check-circle" aria-hidden="true"></i> <b>100% Unique Design Guaranteed</b></li>
                                    </ul>
                                 </div>
                                 <div class="priceodernow">
                                    <div class="priceoderbtn"><a data-fancybox="" data-src="#popupform" href="javascript:void(0);" class="niwax-btn3 various open_modal" onclick="priceChange('Automated / Interactive Conferencing Portal','$2499');">Place Order</a></div>
                                    <div class="priceaskwithus">
                                       <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-dark">
                                          <img src="assets/images/Icon ionic-ios-chatboxes.png">
                                          <div><span>Want to discuss</span> Live Chat Now </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="pricingfooter ">
                                    <div class="pfdiv1 text-dark"><a href="tel: +1 817 533 6583">Call Us: +1 817 533 6583</a></div>
                                    <div class="pfdiv2 text-dark"><a href="javascript:void(0);">Need Support</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END PACK -->



                     <!-- PACK -->
                     <!-- <div class="col-md-4">
                     <div class="screen-splits">
                     <div class="nxpb-2">
                     <div class="niwaxpricingbox shadow reco selected-itm">
                     <div class="pricingheader" data-background="assets/images/3643948.svg" style="background-image: url('assets/images/3643948.svg');">
                     <h2>Professional<br>
                     Website Package</h2>
                     <p>Great For Small Business</p>
                     </div>
                     <div class="pricingrate">
                     <div class="pricevalue">
                     <h2><sup>$ </sup>1,639 <del> $2,049</del> </h2>
                     </div>
                     <div class="priceoffer">
                     <h2>20% off</h2>
                     </div>
                     </div>
                     <div class="pricingoffers text-light">
                     <ul class="list-ul ul-check">
                     <li class="feature">Up to 5 Pages Website Design</li>
                     <li class="feature">3 Stock Photos (You can provide us
                     more)</li>
                     <li class="feature">3 Banner Designs</li>
                     <li class="feature">Sliding Banner</li>
                     <li class="feature">Hover Effects</li>
                     <li class="feature">Content Management System
                     (WordPress)</li>
                     <li class="feature">5 Professional Email ID’s</li>
                     <li class="feature">Search Engine Submission</li>
                     <li class="feature">Unlimited Revisions</li>
                     <li class="feature">Complete W3C Certified HTML</li>
                     <li class="feature">Industry specified Team of Expert
                     Designers and Developers</li>
                     <li class="feature">Complete Deployment</li>
                     <li class="feature">– Value Added Services</li>
                     <li class="feature">Complete Source Files</li>
                     <li class="feature">Dedicated Project Manager</li>
                     <li class="feature">100% Ownership Rights</li>
                     <li class="feature">100% Satisfaction Guarantee</li>
                     <li class="feature">100% Money Back Guarantee</li>
                     <li class="feature">*NO MONTHLY OR ANY HIDDEN FEE*</li>
                     </ul>
                     </div>
                     <div class="priceodernow">
                     <div class="priceoderbtn"><a href="#offcanvasExample" data-bs-toggle="offcanvas" class="niwax-btn2">Order Now</a></div>
                     <div class="priceaskwithus">
                     <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-light">
                     <img src="assets/images/Icon ionic-ios-chatboxes.png">
                     <div><span>Click here to</span> Live Chat </div>
                     </a>
                     </div>
                     </div>
                     <div class="pricingfooter">
                     <div class="pfdiv1"><a href="tel: +1 817 533 6583">Call Us:  +1 817 533 6583</a>
                     </div>
                     <div class="pfdiv2"><a href="javascript:void(0);">Need Support</a></div>
                     </div>
                     </div>
                     </div>
                     </div>
                  </div> -->
                     <!-- END PACK -->
                  </div>
               </div>
               <div class="tab-pane fade" id="logoos" role="tabpanel" aria-labelledby="logo-ada-tab">...</div>
               <div class="tab-pane fade" id="Ecommerce-ada" role="tabpanel" aria-labelledby="Ecommerce-ada-tab">...</div>

               <div class="tab-pane fade" id="Marketing-ada" role="tabpanel" aria-labelledby="marketing-ada-tab">...</div>
               <div class="tab-pane fade" id="Branding-ada" role="tabpanel" aria-labelledby="Branding-ada-tab">...</div>

               <div class="tab-pane fade" id="Animation-ada" role="tabpanel" aria-labelledby="Animation-ada-tab">...</div>


            </div>
            <!-- TAB CONTENT -->
         </div>
      </div>
   </section>

   <!-- COMBO -->
   <section class="block-a1 pad-tb custom-background combo-background  digitalagency20 mt100">
      <div class="combo-bg-icon"></div>
      <div class="niwaxheroscroll">
         <img src="assets/images/shape-a.webp" class="niwax nxhs1" alt="icon" data-rellax-speed="4" style="transform: translate3d(0px, -1975px, 0px) translate3d(0px, -3973px, 0px);">
         <img src="assets/images/shape-b.webp" class="niwax nxhs2" alt="icon" data-rellax-speed="-3" style="transform: translate3d(0px, 1740px, 0px) translate3d(0px, 3853px, 0px);">
         <img src="assets/images/shape-f.webp" class="niwax nxhs3" alt="icon" data-rellax-speed="1" style="transform: translate3d(0px, -551px, 0px) translate3d(0px, -1181px, 0px);">
         <img src="assets/images/shape-d.webp" class="niwax nxhs4" alt="icon" data-rellax-speed="-5" style="transform: translate3d(0px, 2410px, 0px) translate3d(0px, 4791px, 0px);">
         <img src="assets/images/shape-e.webp" class="niwax nxhs5" alt="icon" data-rellax-speed="-2" style="transform: translate3d(0px, 924px, 0px) translate3d(0px, 1796px, 0px);">
      </div>
      <div class="gradient-bg">

      </div>
      <div class="container bg-transparent-glass pl--70 pr--70 pt70 pb70">
         <div class="row align-items__center mb30">
            <div class="col-lg-7">
               <div class=" ptag">
                  <h1 class="all-heading-1 text-light">All In One Combo</h1>
               </div>
            </div>
            <div class="row justify-content-center align-items__center com-sum">
               <div class="col-lg-7 col-md-6 col-sm-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="">
                           <div class="niwax-list">
                              <ul class="list-ul ul-circle custom-lists">
                                 <div class="table-header">
                                    <h4>Logo Design</h4>
                                 </div>
                                 <li>Unlimited Logo Design Concepts</li>
                                 <li>Unlimited Revisions</li>
                                 <li>Icon Design</li>
                                 <li>All Final File Formats</li>
                              </ul>
                              <ul class="list-ul ul-circle custom-lists">
                                 <div class="table-header">
                                    <h4>Website Design</h4>
                                 </div>
                                 <li>UNLIMITED Pages Website</li>
                                 <li>Content Management System (CMS)</li>
                                 <li>Mobile Responsive</li>
                                 <li>5 Stock Photos + 3 Banner Designs</li>
                                 <li>Any 3 Social Media Platforms</li>
                                 <li>Complete W3C Certified HTML</li>
                                 <li>Complete Deployment</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="">
                           <div class="niwax-list">
                              <ul class="list-ul ul-circle custom-lists">
                                 <div class="table-header">
                                    <h4>Stationery Design</h4>
                                 </div>
                                 <li>Business Card, Letterhead, Envelope</li>
                                 <li>MS Word Letterhead</li>
                              </ul>
                              <ul class="list-ul ul-circle custom-lists">
                                 <div class="table-header">
                                    <h4>Value Added Services</h4>
                                 </div>
                                 <li>Dedicated Account Manager</li>
                                 <li>100% Ownership Rights</li>
                                 <li>100% Money Back Guarantee</li>
                                 <li>Complete Deployment</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="combo-pricing-table best-plan">
                           <div class="niwaxpricingbox shadow reco selected-itm">
                              <div class="combo-pricingheader" data-background="assets/images/3643948.svg" style="background-image: url('assets/images/3643948.svg');">
                                 <h2>Mega Discount <br>
                                    Combo Package</h2>
                                 <p>Great For Small Business</p>
                              </div>
                              <div class="combo-pricingrate">
                                 <div class="pricevalue">
                                    <h2><sup>$ </sup>2,999 <del> $5,999</del> </h2>
                                 </div>
                              </div>
                              <div class="combo-priceoffer">
                                 <h2>50% OFF</h2>
                              </div>
                              <div class="combo-pricingoffers text-light">
                                 <p>Perfect Solution for Start-Ups and Evolving Businesses</p>
                              </div>
                              <div class="priceodernow">
                                 <a data-fancybox data-src="#popupform" href="javascript:void(0);" class="btn-main bg-btn lnk open_modal" onclick="priceChange('All In One Combo','$2999');">Let's Order Now <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
                                 <div class="priceaskwithus">
                                    <a href="javascript:$zopim.livechat.window.show();" class="livechatbtn d-flex gap10 v-center text-light">
                                       <img src="assets/images/Icon%20ionic-ios-chatboxes.png">
                                       <div><span>Click here to</span> Live Chat </div>
                                    </a>
                                 </div>
                              </div>
                              <div class="pricingfooter">
                                 <div class="pfdiv1"><a href="tel: +1 817 533 6583">Call Us: +1 817 533 6583</a></div>
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
   <!-- END COMBO -->

   <section id="brand-sec" class="no-dis" style="background-image:url(assets/images/banner/our-combo.webp); ">
      <div class="container text-center">
         <div class="row">
            <div class="col-md-7">
               <div class="brand-cont m2-h">
                  <h5> Grow Your Brand<br>And Make A Statement </h5>
                  <p> Discovering the potential of online marketing
                     <br>is easy if you have an organized, appealing digital look
                     <br>that can help you develop and get the right public.
                     <br>
                     <br> <span> Engage With Us Today </span>
                  </p>
                  <ul class="btn-lst">
                     <li class="first"><a name="35" data-fancybox="" title="Logo Basic For Only $35" data-src="#popupform" href="javascript:void(0);" class="various open_modal btn-a">Get Started! </a></li>
                     <li class="last"><a href="javascript:$zopim.livechat.window.show()" class="btn-a">Let's Chat </a></li>
                  </ul>
               </div>
            </div>
            <div class="col-md-5">
               <div class="bundle-img">
                  <div id="scene">
                     <div class="layer" data-depth="0.1"><img class="lazy" src="assets/images/main-combo-pack2.webp" data-src="assets/images/main-combo-pack2.webp" alt=""></div>
                     <div class="layer" data-depth="0.3"><img class="lazy" src="assets/images/combo-pack-1.webp" data-src="assets/images/combo-pack-1.webp" alt=""></div>
                     <div class="layer" data-depth="0.6"><img class="lazy" src="assets/images/combo-pack-2.webp" data-src="assets/images/combo-pack-2.webp" alt=""></div>
                     <div class="layer" data-depth="0.6"><img class="lazy" src="assets/images/combo-pack-4.webp" data-src="assets/images/combo-pack-4.webp" alt=""></div>
                     <div class="layer" data-depth="0.2"><img class="lazy" src="assets/images/combo-pack-5.webp" data-src="assets/images/combo-pack-5.webp" alt=""></div>
                     <!--<div class="layer" data-depth="0.1" data-aos="zoom-in" data-aos-duration="5000"><img src="assets/images/combo-price.html" alt=""></div>-->
                  </div>
                  <!--<img src="assets/images/combo-price.html" style="display:none;" class="mbimg" alt="">-->
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- CALL -->
   <section class="cta wow fadeInUp" style="padding-top: 100px;">
      <div class="container" style="background-image: url('assets/images/cta-bg.webp'); background-size: contain; background-repeat: no-repeat;">
         <div class="cta-content">
            <div class="cta-heading">
               <h2 class="wow fadeInUp" data-wow-delay="0.3s">
                  Climb the Ladder of Success with Design Vikings</h2>
               <p class="wow fadeInUp" data-wow-delay="0.4s">Let's Start a Conversation Today <span> <a href="tel: +1 817 533 6583" style="color: #fff;"> +1 817 533 6583</a> </span></p>
            </div>
            <div class="cta-para">
               <p class="wow fadeInDown" data-wow-delay="0.5s">Best Service, Right Time, Right People
               </p>
               <a href="javascript:$zopim.livechat.window.show();" class="btn-main bg-btn lnk wow fadeIn re-color" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">Start Live Chat <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
            </div>
            <div class="cta-img">
               <img class="wow fadeIn" data-wow-delay="0.6s" alt="custom-sport" src="assets/images/blub.png">

            </div>
         </div>
      </div>
   </section>
   <!-- END CALL -->

   <section class="who-we-are">
      <div class="container">

         <div class="row">
            <div class="col-md-6">
               <div class="who-blk">
                  <h5>Who We Are</h5>
                  <h2>Web Development and Design Tailored To Your Specifications</h2>
                  <p>Design Vikings is committed to assisting businesses in expanding through unique web design and development strategies using cutting-edge web development technology. We are a group of young, passionate professionals with extensive experience in Information Technology. We pride ourselves on our ability to deliver high-quality work promptly.</p>
                  <p>As we have well-known web designers and developers available with us, you can be assured that we will ensure that your business website looks professional and make it easy for your customers to navigate around different pages without any hassle.</p>
               </div>
            </div>

            <div class="col-md-6">
               <div class="are-img">
                  <img src="assets/images/about.png" alt="">
               </div>
            </div>
         </div>


         <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 mt30">
               <div class="itm-media-object mt40 tilt-3d">
                  <div class="media">
                     <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><img src="assets/images/project.png" alt="icon" class="layer"></div>
                     <div class="media-body">
                        <h4>Web Presence on the Internet</h4>
                        <p>
                           We adopt a holistic approach to website development. Each project is tailored specifically to its client's individual requirements.</p>
                     </div>
                  </div>
                  <div class="media mt40">
                     <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><img src="assets/images/teams.png" alt="icon" class="layer"></div>
                     <div class="media-body">
                        <h4>Website That Is Up To Date</h4>
                        <p>All of our websites use up-to-date technology and modern web standards. This ensures that your website will remain compatible.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mt30">
               <div class="itm-media-object mt40 tilt-3d">
                  <div class="media">
                     <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><img src="assets/images/think.png" alt="icon" class="layer"></div>
                     <div class="media-body">
                        <h4>Strong Foundation for Web Design</h4>
                        <p>Our team has years of experience in website design and can help you get started without worrying about the basics. </p>
                     </div>
                  </div>
                  <div class="media mt40">
                     <div class="img-ab- base" data-tilt="" data-tilt-max="20" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><img src="assets/images/idea.png" alt="icon" class="layer"></div>
                     <div class="media-body">
                        <h4>A Great User Experience</h4>
                        <p>When visitors land on your site, they seen an intuitive user interface, we ensure that's exactly what happens!</p>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>
   </section>
   <section class="reviews sec-rev padd90 padtop0 coloredbackground">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12" aos="fade-down" aos-delay="200">
               <!--<h5 class="subheading coloredtext">Testimonials</h5>-->
               <h3 class="secondheading">Learn <span class="coloredtext">First-Hand</span> from Our Clients</h3>
            </div>
         </div>
      </div>
      <div class="reviewsdata">
         <div class="container-fluid nopad">
            <div class="row">
               <div class="col-md-12" aos="fade-down" aos-delay="200">
                  <ul class="review-list">



                     <li>

                        <div class="review-box">

                           <a href="javascript:void(0);">

                              <div>

                                 <img class="review-image lazy" src="assets/images/kimberly-dennard.webp" alt="">

                                 <div class="spacer"><br></div>

                                 <!-- <p><a href="">Website review</a></p> -->

                                 <!--<h3>Website review</h3>-->

                                 <p>I’ve been working with them to do my website and so far it’s been a good creative experience to collaborate on ideas and suggestions to make it happen. The communication is excellent and the person I’m working with is very responsive to my needs in designing the overall look of the website.</p>

                                 <div class="row align-items-center review-tppp">

                                    <h6>Kimberly Denard<span><img class="lazy" src="assets/images/rev-star.webp"></span></h6>

                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6 text-right ">

                                       <a href="javascript:void(0);"><img src="assets/images/rev-trust.webp" class="ml-auto d-block lazy"></a>

                                    </div>

                                 </div>

                              </div>

                           </a>

                        </div>

                     </li>

                     <li>

                        <div class="review-box">

                           <a href="javascript:void(0);">

                              <div>

                                 <img class="review-image lazy" src="assets/images/chad-shapiro.webp" alt="">

                                 <div class="spacer"><br></div>

                                 <!-- <p><a href="">It was enjoyable to work with them…</a></p> -->

                                 <!--<h3>It was enjoyable to work with them…</h3>-->

                                 <p>It was enjoyable to work with Amy, Isaac, and Design Vikings. They quickly understood the concept behind the website and executed the vision with good follow-up and responsiveness. I look forward to working with them on no next project as well!</p>

                                 <div class="row align-items-center review-tppp">

                                    <h6>Chad Shapiro <span><img class="lazy" src="assets/images/rev-star.webp"></span></h6>

                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6 text-right">

                                       <a href="javascript:void(0);"><img src="assets/images/rev-trust.webp" class="ml-auto d-block lazy"></a>

                                    </div>

                                 </div>

                              </div>

                           </a>

                        </div>

                     </li>



                     <li>

                        <div class="review-box">

                           <a href="javascript:void(0);">

                              <div>

                                 <img class="review-image lazy" src="assets/images/eric-adorno.webp" alt="">

                                 <div class="spacer"><br></div>

                                 <!-- <p><a href=""> I Hired them to do a Boutique website…</a></p> -->

                                 <!--<h3>I Hired them to do a Boutique website…</h3>-->

                                 <p>I Hired them to do a Boutique website for my startup business. Jeff Heflin knows what he is doing, guided me through the process.</p>

                                 <p>Isaac was my project manager, helped me completing the website with Perfection, got FREE LOGO and WHATSAPP integration as well.</p>

                                 <p>I love their work</p>

                                 <div class="row align-items-center review-tppp">

                                    <h6>Eric Adorno<span><img class="lazy" src="assets/images/rev-star.webp"></span></h6>

                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6 text-right">

                                       <a href="javascript:void(0);"><img src="assets/images/rev-trust.webp" class="ml-auto d-block lazy"></a>

                                    </div>

                                 </div>

                              </div>

                           </a>

                        </div>

                     </li>

                     <li>

                        <div class="review-box">

                           <a href="javascript:void(0);">

                              <div>

                                 <img class="review-image lazy" src="assets/images/jasmyne-mcEntire.webp" alt="">

                                 <div class="spacer"><br></div>

                                 <!-- <p><a href="">I have worked with Bill and the…</a></p> -->

                                 <!--<h3>I have worked with Bill and the…</h3>-->

                                 <p> I have worked with Bill and Design Vikings team for several years. Unflinchingly reliable, professional, and proactive from a technology and security standpoint. Over the years, Design Vikings has streamlined our communications so that any of our website updates or other needs are handled seamlessly </p>

                                 <div class="row align-items-center review-tppp">

                                    <h6>Jasmyne<span><img class="lazy" src="assets/images/rev-star.webp"></span></h6>

                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6 text-right">

                                       <a href="javascript:void(0);"><img src="assets/images/rev-trust.webp" class="ml-auto d-block lazy"></a>

                                    </div>

                                 </div>

                              </div>

                           </a>

                        </div>

                     </li>



                     <li>

                        <div class="review-box">

                           <a href="javascript:void(0);">

                              <div>

                                 <img class="review-image lazy" src="assets/images/larry-e.webp" alt="">

                                 <div class="spacer"><br></div>



                                 <p>Team of Design Vikings is so experienced patience and understanding they first discussed the complete scope of my website and delivered with exactly what i was looking for, most important was timeline because i had short timeline and they really hit the nail.</p>

                                 <div class="row align-items-center review-tppp">

                                    <h6>Larry E <span><img class="lazy" src="assets/images/rev-star.webp"></span></h6>

                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6 text-right">

                                       <a href="javascript:void(0);"><img src="assets/images/rev-trust.webp" class="ml-auto d-block lazy"></a>

                                    </div>

                                 </div>

                              </div>

                           </a>

                        </div>

                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- CTA SALE -->
   <section class="cta wow fadeInLeft" data-wow-delay="0.2s">
      <div class="container" style="background-image: url('assets/images/cta-bg.webp'); background-size: contain; background-repeat: no-repeat;">
         <div class="row">
            <div class="cta-content col-lg-12 v-center">
               <div class="cta-heading">
                  <h2 class="wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s;">Create Your eStore Today and
                     Save $50 eCommerce Website.</h2>
                  <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.4s;">Contact us now to start the conversation. <span> <a href="tel: +1 817 533 6583" style="color: #fff;"> +1 817 533 6583</a> </span></p>
               </div>
               <div class="cta-para">
                  <p class="wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-name: fadeInDown; animation-delay: 0.5s;">Best Service, Right Time, Right People
                  </p>
                  <a href="javascript:$zopim.livechat.window.show();" class="btn-main bg-btn lnk wow fadeIn re-color" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">Start Live Chat <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
               </div>
               <div class="cta-img new">
                  <img class="wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.6s;" alt="custom-sport" src="assets/images/sale.png">
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="step-sec pad-tb">
      <div class="container">
         <div class="step-h m1-h p1 m2-h pad-btm text-center">
            <h2 class="sec-hd">Our Step by Step Web Design & Development Process</h2>
            <p>Working with a firm that knows how to get things done is critical when it comes to web design and development. We use a methodical approach that allows us to work with you at your own speed while also encouraging you to participate in the process.</p>
         </div>
         <div class="st-wrp">
            <img loading="lazy" src="assets/images/fav-icons/li1.webp" class="li1 lli"> <img loading="lazy" src="assets/images/fav-icons/li2.webp" class="li2 lli"> <img loading="lazy" src="assets/images/fav-icons/li3.webp" class="li3 lli">
            <div class="row">
               <div class="col-md-12">
                  <ul class="st-lst">
                     <li>
                        <div class="st-bx p1">
                           <div class="st-pic"> <img loading="lazy" class="st1" src="assets/images/icon/st1.webp"> <img loading="lazy" class="st2" src="assets/images/icon/st01.webp"> </div>
                           <h5>Intial Brief </h5>
                           <hr>
                           <p>We want to know all there is to know about you! Completing a brief form, asking a lot of questions about your business or organization, telling us about sites you like, sites you used, and more are all part of our onboarding process. After that, we'll set up a kickoff call to go through everything you've provided.</p>
                        </div>
                     </li>
                     <li>
                        <div class="st-bx p1">
                           <div class="st-pic"> <img loading="lazy" class="st1" src="assets/images/icon/st2.webp"> <img loading="lazy" class="st2" src="assets/images/icon/st02.webp"> </div>
                           <h5>Website<br>Prototype</h5>
                           <hr>
                           <p>This is where the fun really starts! We will strive to build a customized design for you based on the information you provided throughout our research and onboarding process. A color, font, and device responsiveness style guide will be supplied, as well as a full-page first idea of the home page for your inspection and input. </p>
                        </div>
                     </li>
                     <li>
                        <div class="st-bx p1">
                           <div class="st-pic"> <img loading="lazy" class="st1" src="assets/images/icon/st3.webp"> <img loading="lazy" class="st2" src="assets/images/icon/st03.webp"> </div>
                           <h5>Development</h5>
                           <hr>
                           <p>It's time to start building when you've approved your design. We'll take your finished idea and turn it into a functional website. We'll provide you a private URL to see and test your new site once it's finished. This allows you to test it on all of your devices, double-check that all of the links and buttons function, and ensure that the pictures and content arrangement are to your liking.</p>
                        </div>
                     </li>
                     <li>
                        <div class="st-bx p1">
                           <div class="st-pic"> <img loading="lazy" class="st1" src="assets/images/icon/st4.webp"> <img loading="lazy" class="st2" src="assets/images/icon/st04.webp"> </div>
                           <h5>Testing</h5>
                           <hr>
                           <p>It’s time that you've tested, and are ready to go live with your website to the rest of the world. We'll handle all of the technical aspects of this process, including loading it into your server, putting it live, and any necessary troubleshooting. </p>
                        </div>
                     </li>
                     <li>
                        <div class="stt st-bx p1">
                           <span><img loading="lazy" src="assets/images/icon/live.webp"></span>
                           <h5>Going Live</h5>
                           <hr>
                           <p>The website is launched after thorough speed and optimization tests. We continue to monitor the website for a few days after it goes online to ensure that it functions properly.</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- END What We Do ? -->

   <!-- INDUSTRIES -->
   <section class="work-category pad-tb">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="common-heading ptag">
                  <span>Industries We Serve</span>
                  <h2>Our Team Has Served Numerous Industries </h2>
               </div>
            </div>
            <div class="paragraph">
               <p>We've delivered customized digital marketing solutions to hundreds of clients worldwide. Here are some of the industries we've served:
               </p>
            </div>
         </div>
         <div class="row mt30">
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s">
               <div class="industry-workfor hoshd"><img src="assets/images/state.png" alt="img">
                  <p>Real estate</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="industry-workfor hoshd"><img src="assets/images/tour.png" alt="img">
                  <p>Tour &amp; Travels</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s">
               <div class="industry-workfor hoshd"><img src="assets/images/eductaion.png" alt="img">
                  <p>Education</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.4s">
               <div class="industry-workfor hoshd"><img src="assets/images/car.png" alt="img">
                  <p>Transport</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s">
               <div class="industry-workfor hoshd"><img src="assets/images/event.png" alt="img">
                  <p>Event</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.6s">
               <div class="industry-workfor hoshd"><img src="assets/images/ecom-01.png" alt="img">
                  <p>eCommerce</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s">
               <div class="industry-workfor hoshd"><img src="assets/images/games.png" alt="img">
                  <p>Game</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.8s">
               <div class="industry-workfor hoshd"><img src="assets/images/care.png" alt="img">
                  <p>Healthcare</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s">
               <div class="industry-workfor hoshd"><img src="assets/images/finance.png" alt="img">
                  <p>Finance</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1s">
               <div class="industry-workfor hoshd"><img src="assets/images/restuarent.png" alt="img">
                  <p>Restaurant</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s">
               <div class="industry-workfor hoshd"><img src="assets/images/demand.png" alt="img">
                  <p>On-Demand</p>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.2s">
               <div class="industry-workfor hoshd"><img src="assets/images/grocery.png" alt="img">
                  <p>Grocery</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- END INDUSTRIES -->

   <section class="why-niwax-section">
      <div class="container">

         <div class="row justify-content-center mt80">
            <div class="col-lg-12">
               <div class="awards">
                  <div class="awardbgwithtext wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.5s;">
                     <img src="assets/images/star.png" alt="">
                     <p>10+<span>YEARS Experience</span></p>
                  </div>
                  <div class="awardbgwithtext wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.6s;">
                     <img src="assets/images/star.png" alt="">
                     <p>4.2k<span>Projects
                           Completed</span></p>
                  </div>
                  <div class="awardbgwithtext wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.7s;">
                     <img src="assets/images/star.png" alt="">
                     <p>3.9k<span>Happy <br>
                           Clients</span></p>
                  </div>
                  <div class="awardbgwithtext wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.8s;">
                     <img src="assets/images/star.png" alt="">
                     <p>10+<span>Award <br>
                           Won</span></p>
                  </div>
               </div>
            </div>
         </div>



         <div class="service-footer">
            <div class="single-content">
               <h3>Achieve Long-Lasting Success with Design Vikings</h3>
            </div>
            <div class="single-btn">
               <a href="#footer-form" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">Let's Work Together <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
            </div>
         </div>


      </div>
   </section>

   <section class="prom-brand">
      <div class="container">
         <div class="prom-title">
            <h2>Promoting Innumerable Brands across the Globe</h2>
            <p>We don't just design brands; we build them. Our team of experts can help you increase your business's awareness and encourage people to buy from you. We work with you to create a strong brand identity and care for everything else.</p>
         </div>



         <div class="brand-slide">
            <div><img src="assets/images/new-cc-01.svg" alt=""></div>
            <div><img src="assets/images/new-cc-02.svg" alt=""></div>
            <div><img src="assets/images/new-cc-03.svg" alt=""></div>
            <div><img src="assets/images/new-cc-04.svg" alt=""></div>
            <div><img src="assets/images/new-cc-05.svg" alt=""></div>
            <div><img src="assets/images/new-cc-06.svg" alt=""></div>
         </div>

      </div>
   </section>

   <section id="customer-sec">
      <div class="container">
         <div class="customer text-center">
            <h2 class="sec-hd">
               Customers are precious!
            </h2>
         </div>
         <div class="customer-slider-wrap">
            <ul class="customer-slider customer-sliders">
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p1.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Aaron Davis</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> So I found them on google, discussed the idea for a portal to be used by my employees for insurance claims. The design specialist there proposed us the complete plan to bring my idea into life. </p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p2.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Claria Jacob</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> I have a youtube channel, I needed someone who can get me thumbnails (clickbaits) and edit my videos every week. I hired them and having great experience so far, it's been almost 3 months I am going creative website services.</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p4.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Fabiola</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> Good and smooth job with my company's logo</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p3.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Todd Drummond</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> Exceptional Services.. 100% recommend! </p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p5.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4> Viella Lindsey</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> They have been looking after the SEO part of my business/website for good 4 months now. I am seeing great improvements on weekly basis.</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p6.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Latoya</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> We needed a website for trucking business, contacted 4 different companies and finally decided to hire Design Vikings because of their better exposure, affordable and competitive pricing.</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p7.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Greg Wison</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> Hired them to do an explainer video for my non-profit. The 90 seconds video turned out to be great! I am getting very positive feedbacks on the video. </p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p8.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Stevenson Oaks</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p>This agency did my restaurant's website. The website looks great (sleak and professional) as I asked them. It was a pleasure working with this company</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p9.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Crystal Lozoway</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> I Hired them to do a Boutique website for my startup business. Jeff Heflin knows what he is doing, guided me through the process.</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p10.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Kera Hoyte</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> I have worked with Bill and Design Vikings team for several years. Unflinchingly reliable, professional, and proactive from a technology and security standpoint. Over the years, Design Vikings has streamlined our communications so that any of our website updates or other needs are handled seamlessly</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p11.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Claria Jacob</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p> I like their design approach, my website looks great after a full revamp done by these guys. </p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
               <li>
                  <div class="customer-box">
                     <img loading="lazy" src="assets/images/fav-icons/p12.webp" alt="" class="customer-img loading=" lazy "">
                     <div class="customer-cont">
                        <h4>Henry Kyle</h4>
                        <div class="sep"></div>
                        <img loading="lazy" src="assets/images/star-cli.webp" alt="" class='stars-client'>
                        <p>Team of Design Vikings is so experienced patience and understanding they first discussed the complete scope of my website and delivered with exactly what i was looking for, most important was timeline because i had short timeline and they really hit the nail.</p>
                     </div>
                     <img loading="lazy" src="assets/images/qoute.webp" alt="" class="qoute-img loading=" lazy "">
                  </div>
               </li>
            </ul>
            <img loading="lazy" src="assets/images/star-f.webp" alt="" class="fd-star">
         </div>
      </div>
   </section>

   <section id="rating-sec">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <ul class="rating-list">
                  <li> <span>
                        Ratings
                     </span>
                  </li>
                  <li> <img loading="lazy" src="assets/images/rating-a.webp" alt="" class="rat-logo"> </li>
                  <li> <img loading="lazy" src="assets/images/rating-b.webp" alt="" class="rat-logo"> </li>
                  <li> <img loading="lazy" src="assets/images/rating-c.webp" alt="" class="rat-logo"> </li>
                  <li> <img loading="lazy" src="assets/images/rating-d.webp" alt="" class="rat-logo"> </li>
                  <li> <img loading="lazy" src="assets/images/rating-e.webp" alt="" class="rat-logo"> </li>
                  <li> <img loading="lazy" src="assets/images/rating-f.webp" alt="" class="rat-logo"> </li>
               </ul>
            </div>
         </div>
      </div>
   </section>

   <div class="floatbutton">
      <div class="btns_wrap">
         <a href="javascript:$zopim.livechat.window.show()" class="chat_wrap">
            <span class="icoo"><i class="fa fa-comment"></i></span>
            <span>Chat With Us</span>
         </a>
         <a href="tel:+18004697961" class="call_wrap">
            <span class="icoo"><i class="fa fa-phone"></i></span>
            <span> +1 (800) 469-7961</span>
         </a>
      </div>
      <div class="clickbutton">
         <div class="crossplus"> LET’S GET STARTED</div>
      </div>
      <div class="banner-form">
         <h3>Sign Up Now &amp; <br><strong>Let’s Get Started</strong></h3>
         <div class="banform">
            <div class="container">
               <div class="row">
                  <div class="ban-form">
                     <form class="cmxform" id="floatForm" method="POST" action="javascript:lead('floatForm');">
                        <input type="hidden" id="referer" name="referer" value="google">
                        <input type="hidden" id="price" name="price" value="$199">
                        <input type="hidden" id="title" name="package" value="Startup Website Package">
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
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <input id="username" name="Name" minlength="2" type="text" placeholder="Enter your name" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <input id="cemail" type="email" name="Email" placeholder="Enter email here" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset phone-slider">
                                 <input id="phone" class="phone number required" type="tel" name="phone">`
                                 <input type="tel" class="hide" id="phone-hidden">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <textarea name="Message" required="" placeholder="Enter message here"></textarea>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="fldset">
                                 <input class="main-btn" type="submit" value="Submit">
                                 <div class="loader">
                                    <img src="assets/images/Pinwheel.gif" />
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

   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="widget">
                  <a href="index.php"><img class="ma4" src="assets/images/logo.svg"></a>
                  <p>Our web development firm is a one-stop shop that consists of highly skilled and creative developers, marketers, and designers that work together to provide the finest possible solutions that satisfy all of the client's needs.</p>
                  <hr>
                  <ul class="footer-detials">
                     <li><i class="fa fa-map-marker" aria-hidden="true"></i> 3200 14th Street Ste 414, Plano, TX 75074</li>
                     <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel: +1 817 533 6583"> +1 817 533 6583</a></li>
                     <li><i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:sales@designvikings.us"> <span class="__cf_email__" data-cfemail="">sales@designvikings.us</span></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
               <div class="widget w-f" id="footer-form">
                  <ul class="req-call">
                     <li><img src="assets/images/discount.png" class="discun"></li>
                     <li>
                        <h1>Request a call back</h1>
                        <hr>
                     </li>
                  </ul>
                  <form id="bottomForm" method="POST" action="javascript:lead('bottomForm');">
                     <input type="hidden" id="referer" name="referer" value="google">
                     <input type="hidden" id="price" name="price" value="$199">
                     <input type="hidden" id="title" name="package" value="Startup Website Package">
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
                     <input type="text" class="fom1" name="name" placeholder="Your Name" required>
                     <input type="email" class="fom1" name="email" placeholder="Email Address" required>
                     <div class="footer-form">
                        <input type="tel" id="phone02" class="fom1 phone" name="phone" required>
                        <input type="tel" class="hide" id="phone-hidden02">
                     </div>
                     <input type="text" class="fom1" name="message" placeholder="Your Message" required>
                     <input type="submit" name='submit' class="sub-btn" value="Submit">
                     <div class="loader">
                        <img src="assets/images/Pinwheel.gif" />
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-4">
               <!--<div class="ma4">-->
               <!--   <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>-->
               <!--   <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>-->
               <!--   <a href="#" class="social-icon"><i class="fab fa-twitter" aria-hidden="true"></i></a>-->
               <!--   <a href="#" class="social-icon"><i class="fab fa-pinterest" aria-hidden="true"></i></a>-->
               <!--   <a href="#" class="social-icon"><i class="fab fa-linkedin" aria-hidden="true"></i></a>-->
               <!--   <a href="#" class="social-icon"><i class="fab fa-youtube" aria-hidden="true"></i></a>-->
               <!--</div>-->
            </div>
         </div>
      </div>
   </footer>

   <div class="min-ft">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-5 ">
               <p>©2023. All Rights Reserved By Design Vikings</p>
            </div>
            <div class="col-md-4">
               <p><a href="../terms-conditions.php" target="_blank">Terms & Conditions</a> | <a href="../privacy-policy.php" target="_blank">Privacy Policy</a></p>
            </div>
            <div class="col-md-3 text-center"> <img src="assets/images/cards.webp" class="pay"> </div>
         </div>
      </div>
   </div>
   <a href="javascript:void(0);" rel="nofollow" hreflang="en" class="floating_widget_link trest-h">
      <div class="floating_widget">
         <div class="numbers"> <span class="number_big">4.9</span> <span class="number_small"> / 5</span> </div>
         <div class="ratingStars"> <img src="assets/images/icon/rate_star.webp" alt="Rating Stars"> </div>
         <div class="subheading">
            <div class="subheading_small">Verified</div>
            <div class="subheading_big">Customer Feedback</div>
         </div>
         <div class="floating_footer">
            <div class="reviewsLogo">
               <div class="reviewsLogo_star"> <img src="assets/images/icon/trust_star.webp" alt="Trust Star"> </div>
               <div class="reviewsLogo_text"> Reviews </div>
            </div>
         </div>
      </div>
   </a>
   <div style="display: none;" class="popupform" id="popupform">

      <h2>We are here to help!</h2>

      <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>

      <form id="popupForm" method="POST" action="javascript:lead('popupForm');">
         <input type="hidden" id="referer" name="referer" value="google">
         <input type="hidden" id="price" name="price" value="$199">
         <input type="hidden" id="title" name="package" value="Startup Website Package">
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
         <div class="row">
            <div class="col-md-12">
               <ul>
                  <li class="pop">
                     <i class="fa fa-user" aria-hidden="true"></i>

                     <input type="text" class="required" required placeholder="Full Name *" name="name">
                  </li>
               </ul>
            </div>
            <div class="col-md-12">
               <ul>
                  <li class="pop">
                     <i class="fa fa-envelope-o" aria-hidden="true"></i>
                     <input type="email" class="email" placeholder="Email Address *" name="email">
                  </li>
               </ul>
            </div>
            <div class="col-md-12">
               <ul>
                  <li class="phone-popup pop">
                     <!--<i class="fa fa-phone" aria-hidden="true"></i>-->
                     <!--<input type="hidden" name="country_code" class="country_code">-->
                     <input type="tel" name="phone" class="phone" placeholder="Phone number">
                     <input type="tel" class="hide" id="phone-hidden01">
                  </li>
               </ul>
            </div>
            <div class="col-md-12">
               <ul>
                  <li class="pop">
                     <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                     <textarea name="message" placeholder="To help us understand better, enter a brief description about your project."></textarea>
                  </li>
               </ul>
            </div>
            <div class="col-md-12">
               <ul>
                  <li class="pop">
                     <input type="submit" value="Submit">
                     <div class="loader">
                        <img src="assets/images/Pinwheel.gif" />
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </form>
   </div>

   <!--Header Popup Start-->
   <div class="modal fade show" id="myModals">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <button type="button" class="close" id="btnclose" data-dismiss="modal">×</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body mb-0 pb-0 mt-0">
               <div class="container ">
                  <!-- custom radio button -->
                  <div class="holder">
                     <div class="row mb-1">
                        <div class="col">
                           <h2 id="changetopic">What is your web design requirement?</h2>
                        </div>
                     </div>
                     <form method="POST" class="customRadio customCheckbox m-0 p-0" action="">
                        <div class="">
                           <div class="row justify-content-start">
                              <div class="col-12 mar-top-pls" id="form1">
                                 <div class="row align-items-center">
                                    <input type="radio" name="f1" id="q1" value="Create a new website" checked="">
                                    <label for="q1"> Create a new website </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f1" value="Major changes to my website" id="q2">
                                    <label for="q2"> Major changes to my website </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f1" value="Minor changes to my website" id="q3">
                                    <label for="q3"> Minor changes to my website </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f1" value="other1" id="q100">
                                    <label for="q100">
                                       <input type="text" name="other1" id="" class="fm-c form-control" placeholder="Other"> </label>
                                 </div>
                              </div>
                              <div class="col-12 mar-top-pls" id="form2" style="display: none;">
                                 <div class="row align-items-center">
                                    <input type="radio" name="f2" value="To advertise my business/services" id="q4" checked="">
                                    <label for="q4"> To advertise my business/services </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f2" value="To sell products/services e.g. e-commerce" id="q5">
                                    <label for="q5">To sell products/services e.g. e-commerce</label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f2" value="To offer bespoke functionality e.g. logins, forums, CRM" id="q6">
                                    <label for="q6">To offer bespoke functionality e.g. logins, forums, CRM </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f2" id="q7" value="other2">
                                    <label for="q7">
                                       <input type="text" name="other2" id="" class="fm-c form-control" placeholder="Other">
                                    </label>
                                 </div>
                              </div>
                              <div class="col-12 mar-top-pls" id="form3" style="display: none;">
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q8" value="Personal project" checked="">
                                    <label for="q8">Personal project</label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q9" value="Sole trader/self-employed">
                                    <label for="q9">Sole trader/self-employed</label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q10" value="Small business (1 - 9 employees)">
                                    <label for="q10"> Small business (1 - 9 employees) </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q11" value="Medium business (10 - 29 employees)">
                                    <label for="q11"> Medium business (10 - 29 employees) </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q12" value="Large business (30 - 99 employees)">
                                    <label for="q12"> Large business (30 - 99 employees) </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q13" value="Extra large business (100 or more employees)">
                                    <label for="q13"> Extra large business (100 or more employees) </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q14" value="Charity/non-profit">
                                    <label for="q14"> Charity/non-profit </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f3" id="q15" value="other3">
                                    <label for="q15">
                                       <input type="text" name="other3" id="" class="fm-c form-control" placeholder="Other"> </label>
                                 </div>
                              </div>
                              <div class="col-12 mar-top-pls" id="form4" style="display: none;">
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q16" value="Business services" checked="">
                                    <label for="q16">Business services</label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q17" value="Creative industries">
                                    <label for="q17">Creative industries</label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q18" value="Entertainment &amp; events">
                                    <label for="q18"> Entertainment &amp; events </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q19" value="Financial services">
                                    <label for="q19"> Financial services </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q20" value="Health &amp; fitness">
                                    <label for="q20"> Health &amp; fitness </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q21" value="Home services">
                                    <label for="q21"> Home services </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q22" value="Restaurant/food">
                                    <label for="q22"> Restaurant/food </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q23" value="Retail/consumer goods">
                                    <label for="q23"> Retail/consumer goods </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q24" value="Technology/software">
                                    <label for="q24"> Technology/software </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f4" id="q25" value="other4">
                                    <label for="q25">
                                       <input type="text" name="other4" id="" class="fm-c form-control" placeholder="Other"> </label>
                                 </div>
                              </div>
                              <div class="col-12 mar-top-pls" id="form5" style="display: none;">
                                 <div class="row align-items-center">
                                    <input type="radio" name="f5" id="q26" value="Less than $500" checked="">
                                    <label for="q26">Less than $500</label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f5" id="q27" value="$500 - $999">
                                    <label for="q27">$500 - $999</label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f5" id="q28" value="$1,000 - $1,999">
                                    <label for="q28"> $1,000 - $1,999 </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f5" id="q29" value="$1,000 - $1,999">
                                    <label for="q29"> $1,000 - $1,999 </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f5" id="q30" value="$3,000 - $4,999">
                                    <label for="q30"> $3,000 - $4,999 </label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="radio" name="f5" id="q31" value="$5,000 or more">
                                    <label for="q31"> $5,000 or more </label>
                                 </div>
                              </div>
                              <div class="col-12 mar-top-pls" id="form6" style="display: none;">
                                 <div class="row align-items-center">
                                    <input type="text" name="Name" id="32" placeholder="Name" required="" class="form-control formtext">
                                    <label for="32"></label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="email" name="Email" id="33" placeholder="Email" required="" class="form-control formtext">
                                    <label for="33"></label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="text" name="Number" id="34" placeholder="Number" required="" class="form-control formtext">
                                    <label for="34"></label>
                                 </div>
                                 <div class="row align-items-center">
                                    <input type="submit" id="submitdata" name="submit" placeholder="Number" class="form-control formtext btn-success">
                                    <label for=""></label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row mt-0 ml-4"> </div>
                        <div class="row mt-4"></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Header Popup End-->
   <script src="assets/js/jquery.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput-jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.min.js"></script>
   <script src="assets/js/custom.js"></script>
   <script src="assets/js/script.js"></script>

   <script>
      $('.various').click(function() {
         var leadprice = $(this).attr('name');
         $(".popupform .leadprice").val(leadprice)

      });

      $("#typed").typed({
         strings: ["Branding", "Web Design", "Ecommerce"],
         typeSpeed: 100,
         startDelay: 0,
         backSpeed: 60,
         backDelay: 2000,
         loop: true,
         cursorChar: "|",
         contentType: 'html'
      });

      (function($) {
         // function that uses intl-tel-input format as jQuery-Mask
         function initMasking(formatterInput, maskedInput) {
            // get the format fromt intl-tel-input placeholder
            var format = $(formatterInput).attr('placeholder');

            // use the format as placeholder to jQuery-Mask input
            $(maskedInput).attr('placeholder', format);

            // replace all digits to zero and use is as the mask
            $(maskedInput).mask(format.replace(/[1-9]/g, 0));
         }

         // initialize intl-tel-input
         $("#phone-hidden").intlTelInput({
            initialCountry: "us",
            autoPlaceholder: "aggressive",
            geoIpLookup: function(callback) {
               $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                  var countryCode = (resp && resp.country) ? resp.country : "";
                  callback(countryCode);
               });
            }
         });

         // initialize the mask
         initMasking("#phone-hidden", "#phone");

         // update the mask format when changing country
         $("#phone-hidden").on("countrychange", function(e, countryData) {
            $(this).val('');
            $("#phone").val('');

            // update the mask
            initMasking(this, "#phone");
         });
      })(jQuery);

      (function($) {
         // function that uses intl-tel-input format as jQuery-Mask
         function initMasking(formatterInput, maskedInput) {
            // get the format fromt intl-tel-input placeholder
            var format = $(formatterInput).attr('placeholder');

            // use the format as placeholder to jQuery-Mask input
            $(maskedInput).attr('placeholder', format);

            // replace all digits to zero and use is as the mask
            $(maskedInput).mask(format.replace(/[1-9]/g, 0));
         }

         // initialize intl-tel-input
         $("#phone-hidden01").intlTelInput({
            initialCountry: "us",
            autoPlaceholder: "aggressive",
            geoIpLookup: function(callback) {
               $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                  var countryCode = (resp && resp.country) ? resp.country : "";
                  callback(countryCode);
               });
            }
         });

         // initialize the mask
         initMasking("#phone-hidden01", "#phone01");

         // update the mask format when changing country
         $("#phone-hidden01").on("countrychange", function(e, countryData) {
            $(this).val('');
            $("#phone01").val('');

            // update the mask
            initMasking(this, "#phone01");
         });
      })(jQuery);

      (function($) {
         // function that uses intl-tel-input format as jQuery-Mask
         function initMasking(formatterInput, maskedInput) {
            // get the format fromt intl-tel-input placeholder
            var format = $(formatterInput).attr('placeholder');

            // use the format as placeholder to jQuery-Mask input
            $(maskedInput).attr('placeholder', format);

            // replace all digits to zero and use is as the mask
            $(maskedInput).mask(format.replace(/[1-9]/g, 0));
         }

         // initialize intl-tel-input
         $("#phone-hidden02").intlTelInput({
            initialCountry: "us",
            autoPlaceholder: "aggressive",
            geoIpLookup: function(callback) {
               $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                  var countryCode = (resp && resp.country) ? resp.country : "";
                  callback(countryCode);
               });
            }
         });

         // initialize the mask
         initMasking("#phone-hidden02", "#phone02");

         // update the mask format when changing country
         $("#phone-hidden02").on("countrychange", function(e, countryData) {
            $(this).val('');
            $("#phone02").val('');

            // update the mask
            initMasking(this, "#phone02");
         });
      })(jQuery);
      (function($) {
         // function that uses intl-tel-input format as jQuery-Mask
         function initMasking(formatterInput, maskedInput) {
            // get the format fromt intl-tel-input placeholder
            var format = $(formatterInput).attr('placeholder');

            // use the format as placeholder to jQuery-Mask input
            $(maskedInput).attr('placeholder', format);

            // replace all digits to zero and use is as the mask
            $(maskedInput).mask(format.replace(/[1-9]/g, 0));
         }

         // initialize intl-tel-input
         $("#phone-hidden03").intlTelInput({
            initialCountry: "us",
            autoPlaceholder: "aggressive",
            geoIpLookup: function(callback) {
               $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                  var countryCode = (resp && resp.country) ? resp.country : "";
                  callback(countryCode);
               });
            }
         });

         // initialize the mask
         initMasking("#phone-hidden03", "#phone03");

         // update the mask format when changing country
         $("#phone-hidden03").on("countrychange", function(e, countryData) {
            $(this).val('');
            $("#phone03").val('');

            // update the mask
            initMasking(this, "#phone03");
         });
      })(jQuery);
      
      $(window).load(function(){
    setTimeout(function(){
        jQuery('.gt-start a').click()
    },5000)
     });
   </script>
   <!-- recaptcha script -->
   <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/custom-validation.js?v=2.5"></script>

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