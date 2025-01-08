<?php
define("NITROPACK_HOME_URL", "https://designvikings.us/logo-offer/"); 
define("NITROPACK_SITE_ID", "JyZaHWgEJVceraFUyyvXXSrThZpVDzbZ"); 
define("NITROPACK_SITE_SECRET", "Xo6EQwMkdyP8Ta4WuXBH5gx2XKw0QfPJvfRQzgvw1eZETwzIkkpsxdlvctVggYyS"); 
include_once "nitropack-sdk/bootstrap.php";

?>


<?php

 require_once('ip/getIpInfo.php');
 $ipdetails = getInfo();
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
   <meta charset="UTF-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="ie=edge" http-equiv="X-UA-Compatible">
   <title>Best Custom logo design services | Design Vikings</title>
   <meta name="description" content="Get your custom logos designed today starting from $27 only at Design Vikings. We are offering straight 70% off on our logo design service.">
   <link rel="shortcut icon" href="../favIcon.png" type="image/png">
   <link href="css/plugin.css?1" rel="stylesheet import preload" as="style" async>
   <link href="css/custom.css?7" rel="stylesheet" as="style">
   <link href="css/responsive.css?v=0.4" rel="stylesheet import preload" as="style" async>
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet import preload" async>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>
<!-- End of  Zendesk Widget script -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11113265190"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11113265190');
</script>

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
   <!-- header -->
   <header>
      <div class="top-header">
         <div class="container">
            <div class="row d-flex">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <a href="https://designvikings.us" class="logo_area">
                     <!--<h3 class="logo-txt">Design Vikings</h3>-->
                     <img class="main-logo" src="images/logo.svg?v=0.5" alt="Design Vikings" width="100px" height="100px">
                     <!--<h3><span>Design</span><br>Vikings</h3>-->
                  </a>
               </div>
               <div class="col-md-8 col-xs-12 header-cta">
                  <div class="cta-main"> <a target="_self" href="javascript:;" class="chat live_chatt"><i class="fa fa-comments" aria-hidden="true"></i> <span> Live chat </span></a>
                     <a href="tel:+1 817 533 6583" class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <span>
                           Call Us: +1 817 533 6583</span></a>
                     <a class="various get_a_quote inquirybtncta" data-fancybox="" data-src="#popupform" href="javascript:;"> Get A Free Quote</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bottom-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 header-content">
                  <div class="banner_content">
                     <p>Specialized <span class="txt-yellow banner-txt-md">Logo Design</span> service in just</p>
                     <h1>$ <span>27</span></h1>
                     <!--<h1>in just <span class="txt-red">AUD 49</span> +20% OFF on your future orders*</h1>-->
                     <p class="banner-cub-txt"><span>+20% OFF</span> on your future orders*</p>
                     <p style="margin-top: 19px;">Affordable & Professional Logo Designing <br />Services by Industry’s Leading Designers</p>
                     <ul>
                        <li>4 Custom Logo Concepts </li>
                        <li>FREE Revisions </li>
                        <li>FREE File Formats</li>
                        <li>100% Money Back Guarantee</li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-7  col-xs-12">
                  <div class="logo-card-cover">
                     <div class="logo-cards clearfix">
                        <div>
                           <div class="logo-card">
                              <div class="front"><img src="images/flip/flip1.webp" alt="" /></div>
                              <div class="back"><img src="images/flip/flip1-bk.webp" alt="" /></div>
                           </div>
                        </div>
                        <div>
                           <div class="logo-card">
                              <div class="front"><img src="images/flip/flip2.webp" alt="" /></div>
                              <div class="back"><img src="images/flip/flip11.webp" alt="" /></div>
                           </div>
                        </div>
                        <div>
                           <div class="logo-card">
                              <div class="front"><img src="images/flip/flip3.webp" alt="" /></div>
                              <div class="back"><img src="images/flip/flip3-bk.webp" alt="" /></div>
                           </div>
                        </div>
                        <div>
                           <div class="logo-card">
                              <div class="front"><img src="images/flip/4.webp" alt="" /></div>
                              <div class="back"><img src="images/flip/flip4-bk.webp" alt="" /></div>
                           </div>
                        </div>
                        <div>
                           <div class="logo-card">
                              <div class="front"><img src="images/flip/flip5.webp" alt="" /></div>
                              <div class="back"><img src="images/flip/flip5-bk.webp" alt="" /></div>
                           </div>
                        </div>
                        <div>
                           <div class="logo-card">
                              <div class="front"><img src="images/flip/flip6.webp" alt="" /></div>
                              <div class="back"><img src="images/flip/flip6-bk.webp" alt="" /></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 col-xs-12 header-content">
                  <div class="slideform">
                     <h2>Activate Your <span class="color_cl">70%</span></h2>
                     <h3><span> Discount Coupon Now</span> </h3>
                     <i class="dtag"><img src="images/70-off.svg" alt=""></i>
                     <div class="form-flied" data-form-type="ordernow_form">
                        <form class="leadFormWithOrder" id="bannerForm" method="POST" action="javascript:lead('bannerForm');">
                           <input type="hidden" id="referer" name="referer" value="google">
                           <input type="hidden" id="price" name="price" value="$27">
                           <input type="hidden" id="title" name="package" value="Logo Basic Package">
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
                           <div class="row fld-ipt ">
                              <div class="name col-md-6 form-group">
                                 <input type="text" class="form-control" name="name" placeholder="Full Name *" data-validation="required" required>
                              </div>
                              <div class="col-md-6 form-group">
                                 <input type="text" class="form-control" name="email" placeholder="Email Address *" data-validation="required" pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$" required>
                              </div>
                              <div class=" col-md-12 form-group">
                                 <!--<input type="text" class="form-control" name="phone" placeholder="Phone No. *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" data-validation="required" required>-->
                                 <input type="hidden" name="country_code" class="country_code" id="country_code">
                                 <input type="text" class="form-control phone" id="phone" name="phone" placeholder="Phone No. *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" data-validation="required" required>
                                 <input type="tel" class="hide" id="phone-hidden">
                              </div>
                              <div class="textarea col-md-12 form-group">
                                 <textarea name="message" required placeholder="To help us understand better, enter a brief description about your project." class="iecn  required  placeholder1" data-validation="required" required></textarea>
                              </div>
                              <div class="slide_btn col-md-12">
                                 <button class=" btn" type="submit" id="signupBtn" name="signupForm">Activate your
                                    Coupon</button>
                              </div>
                              <p class="any_con">Any Confusion? <a class="chat" href="javascript:;">Why not discuss your
                                    idea?</a></p>
                              <div id="formResult" class="sidebarformResult"></div>
                           </div>
                        </form>
                     </div>
   </header>
   <!-- end header -->
   <!-- clinet logos -->
   <section class="social-counts-sec">
      <div class="social-counts">
         <div class="container">
            <div class="social-left">
               <ul class="bxslider1">
                  <li>Over 10 Years of Experience in the Online Design Industry </li>
                  <li>Appreciated Across the Globe for Quality Design Services </li>
                  <li>100% Satisfaction Guarantee!</li>
               </ul>
            </div>
            <div class="social-right">
               <ul class="bxslider1">
                  <li><img class="lazy img-responsive" data-src="images/stats.webp" /></li>
                  <li><img class="lazy img-responsive" data-src="images/brands.webp" /></li>
                  <li> <a href="javascript:;"><img class="lazy img-responsive" data-src="images/stats.webp" alt="Clients" width="" height="114" data-cycle-desc="Appreciated Across the Globe for Quality Design Services"></a></li>
               </ul>
            </div>
            <div class="clear"></div>
         </div>
      </div>
   </section>
   <!-- clinet logos -->
   <!-- WHAT TYPE -->
   <section class="types-of-logo">
      <div class="container">
         <h2>What Type Is Your Logo?</h2>
         <div class="row">
            <div id="logos-type" class="owl-carousel">
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>3D Logo Design</h3>
                     <p>Images that incorporate an additional element can make a brand more noticeable and perform exceptionally well on digital platforms. Compared to traditional 2D logos, 3D logo designs stand out more and are easier to remember. They are also an excellent starting point for animation.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/silder.webp" alt="3D Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Animated Logo Design</h3>
                     <p>Animated logos are a modern way to gain an advantage in the competitive world of branding. This art form involves creating special effects and designs that can be used in various forms of media, including video games, movies, and even social media posts. From simple effects to full visual presentations, animated logos are an effective way to make your brand stand out.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/an-sliderlogo.webp" alt="Animated Logo design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Flat Logo Design</h3>
                     <p>A flat logo design is a simple 2D image with a silhouette that often doesn't include highlights, shadows, or intricate details. This type of design is popular when the focus is on typography and conveying a meaningful message with minimal elements.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/flat.webp" alt="Flat Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Icon Based Logo</h3>
                     <p>A brand mark or logo symbol is a pictorial or iconic representation of a real entity that can be the first image that comes to mind when thinking of a logo. This graphic emphasizes your brand and creates a lasting identity.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/silder1.webp" alt="Iconic Logo design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Illustrative Logo Design</h3>
                     <p>An illustrative logo design is composed of intricate design elements, such as diagrams or drawings, that effectively communicate what the company does and tell its story. This type of logo focuses on the overall look, incorporating colors, fonts, and layouts to create a unique and original image. Illustrators are particularly skilled at creating specific images that convey a sense of originality.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/illustrative.webp" alt="Illustrative Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Abstract Logo Design</h3>
                     <p>An abstract logo design is a symbol or image that may not be immediately recognizable, but rather a complex design that conveys your brand in a more theoretical way. This category has the ability to incorporate layers of meaning into an image, making it a memorable and thought-provoking design that can spark discussion.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn popup_open btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/abstract.webp" alt="Abstract Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Mascot Logo Design</h3>
                     <p>A mascot logo design is an image that represents a recognizable ambassador of a brand, often in the form of a relatable cartoon character that helps audiences easily connect and understand the company or brand. This type of logo design originated from the sports industry and tends to be more noticeable and memorable.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn popup_open btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/mascot-logo.webp" alt="Mascot Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Typography Logo Design</h3>
                     <p>Typography logo design is a form of text-based imagery that may incorporate symbols or codes as well. This type of logo is a simple and affordable option for new startups looking to establish their identity. It's worth noting that many typography designs have a great deal of design expertise behind them.</strong></p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/typo.webp" alt="Typography Logo Design" class="lazy"> </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <section class="sec-4 cta-center ">
      <div class="container">
         <div class="row justify-content-center">
            <h3 class="mb-4"><strong>SHOW-OFF</strong> your <strong>Brand’s Persona</strong> and <br />transform into a <strong>Revenue Multiplying Entity</strong></h2>
               <div class="cta-main-center "> <a href="tel:+1 817 533 6583" class="phone-center "><span>Call Toll
                        Free</span> +1 817 533 6583 </a>
                  <a href="javascript:;" class="chat-center live_chatt chat"><span>Need Help?</span> Live chat</a>
                  <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn sec4-btn various inquirybtncta">Let's Start</a>
               </div>
         </div>
      </div>
   </section>
   <!-- WHAT TYPE -->
   <!--portfolio -->
   <section class="sec-3 portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-12 heading-area">
               <h2>Explore our <strong>Decades</strong> Long <strong>Collection</strong></h2>
            </div>
            <div class="ui-group rightfilter">
               <div id="filters" class="button-group">
                  <button class="button filter-enb is-checked" data-filter=".3d">3D Design</button>
                  <button class="button" data-filter=".mascot">Mascot</button>
                  <button class="button" data-filter=".animated">Animated </button>
                  <button class="button" data-filter=".flat">Flat </button>
                  <button class="button" data-filter=".iconic">Iconic </button>
                  <button class="button" data-filter=".illustrative">Illustrative</button>
                  <button class="button" data-filter=".abstract">Abstract</button>
                  <button class="button" data-filter=".typography">Typography</button>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row ">
            <div class="col-md-12 filters ">
               <div class="isotope">
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/2.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/3.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/4.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg iconic" data-category="logo iconic" style="display:none">
                     <figure>
                        <a href="images/portfolio/iconic/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/iconic/12.webp" alt=""></a>
                     </figure>
                  </div>
                  <!-- 3D -->
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/2.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/3.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/4.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/12.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/13.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/13.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/15.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/15.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/16.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/16.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/17.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/17.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/18.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/18.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/19.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/19.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/20.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/20.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/21.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/21.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/22.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/22.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/23.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/23.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/24.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/24.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/25.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/25.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/26.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/26.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/27.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/27.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/28.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/28.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/29.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/29.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/30.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/30.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/31.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/31.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/32.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/32.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/33.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/33.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/34.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/34.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/35.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/35.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/36.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/36.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/37.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/37.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/38.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/38.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/39.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/39.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/40.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/40.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/41.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/41.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/42.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/42.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/43.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/43.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/44.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/44.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/45.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/45.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/46.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/46.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/47.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/47.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/48.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/48.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg  3d" data-category="logo 3d" style="display:block">
                     <figure>
                        <a href="images/portfolio/3d-logos/49.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/3d-logos/49.webp" alt=""></a>
                     </figure>
                  </div>

                  <!-- -->
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/2.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/3.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio//animated/4.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio//animated/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/animated/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg animated" data-category="logo animated" style="display:none">
                     <figure>
                        <a href="images/portfolio/animated/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio//animated/12.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/2.webp">
                        </a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/3.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/4.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg mascot" data-category="logo mascot" style="display:none">
                     <figure>
                        <a href="images/portfolio/mascot/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/mascot/12.webp" alt=""></a>
                     </figure>
                  </div>
                  <!-- ABSTRACT -->
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/13.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/13.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/14.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/14.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/15.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/15.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/16.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/16.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/17.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/17.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/18.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/18.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/19.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/19.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/20.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/20.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/21.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/21.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/22.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/22.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/23.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/23.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/24.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/24.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/25.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/24.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/26.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/26.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/27.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/27.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/28.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/28.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/29.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/29.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/30.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/30.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/31.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/31.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/32.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/32.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/33.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/33.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/34.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/34.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/35.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/35.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/36.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/36.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/2.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/3.webp" alt="">
                        </a>
                     </figure>
                  </div>
                  <div class=" pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/4.webp" alt="">
                        </a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo abstract" data-category="logo abstract" style="display:none">
                     <figure>
                        <a href="images/portfolio/abstract/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/abstract/12.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/2.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/3.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/4.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo typography" data-category="logo typography" style="display:none">
                     <figure>
                        <a href="images/portfolio/typography/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/typography/12.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/2.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/3.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/4.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo flat" data-category="logo  flat" style="display:none">
                     <figure>
                        <a href="images/portfolio/flat/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/flat/12.webp" alt=""></a>
                     </figure>
                  </div>
                  <!-- ILLUSTRATION -->
                  <div class="pfimg illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/13.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/13.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/14.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/14.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/15.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/15.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/16.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/16.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/17.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/17.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/18.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/18.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/1.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/1.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/2.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/2.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/3.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/3.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/4.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/4.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/5.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/5.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/6.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/6.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/7.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/7.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/8.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/8.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/9.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/9.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/10.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/10.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/11.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/11.webp" alt=""></a>
                     </figure>
                  </div>
                  <div class="pfimg logo illustrative" data-category="logo  illustrative" style="display:none">
                     <figure>
                        <a href="images/portfolio/illustrative/12.webp" data-fancybox="images"><img class="lazy" src="data:image/webp;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="images/portfolio/illustrative/12.webp" alt=""></a>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--portfolio -->
   <!-- packages -->
   <section class="pricing-sec ">
      <div class="container">
         <div class="col-lg-12">
            <h2>Affordable & Professional <strong>Logo Designing</strong> Packages</h2>
            <p>Let’s get started and define parameters yourself we don’t want to limit the <strong>Creative Work.</strong></p>
         </div>
         <div class="packages-inner-container">
            <div class="packages-slider owl-carousel owl-theme">
               <!-- package break from here -->
               <div class="price-box-main pricing-box" data-package-box>
                  <div class="productSku" style="display: none;"> Logo Basic Package</div>
                  <div class="price-title">
                     <h3>Logo Basic Package</h3>
                     <h4><span> $90 <cc class="percent">70% off!</cc></span> $27</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
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
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> +1 817 533 6583</a>
                  </div>
                  <div class="order-btn">
                     <button class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Logo Basic Package','27');">
                        Order now
                     </button>
                     <a href="javascript:;" class="price-btns pack-cht chat">Chat Now</a>
                  </div>
               </div>
               <div class="price-box-main pricing-box" data-package-box>
                  <div class="productSku" style="display: none;">Logo Plus Package</div>
                  <div class="price-title">
                     <h3>Logo Plus Package</h3>
                     <h4><span> $399<cc class="percent">70% off!</cc></span> $119</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
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
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> +1 817 533 6583</a>
                  </div>
                  <div class="order-btn">
                     <a class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Logo Plus Package','119');">
                        Order now
                     </a>
                     <a href="javascript:;" class="price-btns pack-cht chat">Chat Now</a>
                  </div>
               </div>
               <div class="price-box-main pricing-box" data-package-box>
                  <div class="productSku" style="display: none;">Logo Platinum Package</div>
                  <div class="price-title">
                     <h3>Logo Platinum Package</h3>
                     <h4><span> $999<cc class="percent">70% off!</cc> </span> $299</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
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
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> +1 817 533 6583</a>
                  </div>
                  <div class="order-btn">
                     <button class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Logo Platinum Package','299');">
                        Order now
                     </button>
                     <a href="javascript:;" class="price-btns pack-cht chat">Chat Now</a>
                  </div>
               </div>
               <div class="price-box-main pricing-box" data-package-box>
                  <!-- <div class="productSku" style="display: none;">LOGO_INFINITE_LOGO</div> -->
                  <div class="price-title">
                     <h3>Gold Package</h3>
                     <h4><span> $1666 <cc class="percent">70% off!</cc></span> $499</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
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
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> +1 817 533 6583</a>
                  </div>
                  <div class="order-btn">
                     <button class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Gold Package','499');">
                        Order now
                     </button>
                     <a href="javascript:;" class="price-btns pack-cht chat">Chat Now</a>
                  </div>
               </div>
               <!--<div class="price-box-main pricing-box" data-package-box>-->
               <!-- <div class="productSku" style="display: none;">LOGO_INFINITE_LOGO</div> -->
               <!--   <div class="price-title">-->
               <!--      <h3>Business Bronze Logo Package</h3>-->
               <!--      <h4><span> $1166<cc class="percent">70% off!</cc></span> $349</h4>-->
               <!--   </div>-->
               <!--   <div class="price_body mCustomScrollbar " data-package-scroll>-->
               <!--      <ul>-->
               <!--         <li>3D/Mascot/Animated Logo</li>-->
               <!--         <li>Unlimited Original Logo Concepts</li>-->
               <!--         <li>8 Dedicated Logo Designer (Industry Specific)</li>-->
               <!--         <li>Unlimited Revisions</li>-->
               <!--         <li>Stationery Design (Business Card, Letterhead, Envelope)</li>-->
               <!--         <li>500 Business Cards</li>-->
               <!--         <li>Email Signature Design</li>-->
               <!--         <li>With Grey Scale Format</li>-->
               <!--         <li>Free Icon Design</li>-->
               <!--         <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF</li>-->
               <!--         <li>24 - 48 Hours Turn Around Time</li>-->
               <!--         <li class="features">MORE FEATURES</li>-->
               <!--         <li>100% Satisfaction</li>-->
               <!--         <li>Money Back Guarantee</li>-->
               <!--         <li>Dedicated Account Manager</li>-->
               <!--      </ul>-->
               <!--   </div>-->
               <!--   <div class="price_strip">-->
               <!--      <a href="tel:+1 817 533 6583"><span>Speak With Us</span> +1 817 533 6583</a>-->
               <!--   </div>-->
               <!--   <div class="order-btn">-->
               <!--      <button class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Business Bronze Logo Package','349');">-->
               <!--         Order now-->
               <!--      </button>-->
               <!--      <a href="javascript:;" class="price-btns pack-cht chat">Chat Now</a>-->
               <!--   </div>-->
               <!--</div>-->
               <!--<div class="price-box-main pricing-box" data-package-box>-->
               <!-- <div class="productSku" style="display: none;">LOGO_INFINITE_LOGO</div> -->
               <!--   <div class="price-title">-->
               <!--      <h3>Business Gold Logo Package</h3>-->
               <!--      <h4><span> $2499<cc class="percent">70% off!</cc></span> $749</h4>-->
               <!--   </div>-->
               <!--   <div class="price_body mCustomScrollbar " data-package-scroll>-->
               <!--      <ul>-->
               <!--         <li> Unlimited Original Logo Concepts</li>-->
               <!--         <li> 8 Dedicated Logo Designer (Industry Specific)</li>-->
               <!--         <li> Unlimited Revisions</li>-->
               <!--         <li> 3 Page Basic Website</li>-->
               <!--         <li> Stationery Design (Business Card, Letterhead, Envelope)</li>-->
               <!--         <li> 500 Business Cards </li>-->
               <!--         <li> 500 Letterheads</li>-->
               <!--         <li> Email Signature Design</li>-->
               <!--         <li> Social Media Designs (Facebook, Twitter, Instagram)</li>-->
               <!--         <li> 2 Sided Flyer OR Bi-Fold Brochure Design</li>-->
               <!--         <li> With Grey Scale Format</li>-->
               <!--         <li> Free Icon Design</li>-->
               <!--         <li> Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>-->
               <!--         <li> 24 - 48 Hours Turn Around Time</li>-->
               <!--         <li class="features">MORE FEATURES</li>-->
               <!--         <li> 100% Satisfaction</li>-->
               <!--         <li> 100% Ownership Rights</li>-->
               <!--         <li> Money Back Guarantee</li>-->
               <!--         <li> Dedicated Account Manager</li>-->
               <!--      </ul>-->
               <!--   </div>-->
               <!--   <div class="price_strip">-->
               <!--      <a href="tel:+1 817 533 6583"><span>Speak With Us</span> +1 817 533 6583</a>-->
               <!--   </div>-->
               <!--   <div class="order-btn">-->
               <!--      <button class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Business Gold Logo Package','749');">-->
               <!--         Order now-->
               <!--      </button>-->
               <!--      <a href="javascript:;" class="price-btns pack-cht chat">Chat Now</a>-->
               <!--   </div>-->
               <!--</div>-->
            </div>
         </div>

      </div>
   </section>
   <!-- packages end -->
   <section class="section-package">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="package-content">
                  <h3>A 1 Stop Value for all <strong>Start-Ups</strong> and <strong>Businesses</strong></h3>
                  <h2>All-In-One Combo</h2>
                  <p>Our <strong>All-in-1 Combo</strong> suitable for startups and business looking for repositioning and a fresh new feel to enhance their <strong>Digital Presence</strong> and <strong>Reach</strong>. Benefit from All-in-1 Combo designed to meet your needs.</p>
                  <div class="left-one">
                     <!-- <h6>Logo Design</h6> -->
                     <ul>
                        <li>Unlimited Original Logo Concepts </li>
                        <li>12 Dedicated Logo Designer (Industry Specific) </li>
                        <li>Unlimited Revisions </li>
                        <li>7 Page Informative Website </li>
                        <li>Stationery Design (Business Card, Letterhead, Envelope) </li>
                        <li>Brand Book</li>
                        <li>500 Business Cards</li>
                        <!--<li>500 Letterheads</li>-->
                        <li>Email Signature Design</li>
                        <li>Social Media Designs (Facebook, Twitter, Instagram)</li>
                     </ul>
                     <!-- <h6 class="mt-30">Website Design</h6> -->
                     <!-- <ul>
                        <li>Email Signature Design</li>
                        <li>Social Media Designs (Facebook, Twitter, Instagram)</li>
                        <li>2 Sided Flyer OR Bi-Fold Brochure Design</li>
                        <li>With Grey Scale Format </li>
                        <li>Free Icon Design </li>
                        <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                     </ul> -->
                  </div>
                  <div class="right-one">
                     <!-- <h6>Stationary Design</h6> -->
                     <ul>
                        <li>2 Sided Flyer OR Bi-Fold Brochure Design</li>
                        <li>With Grey Scale Format </li>
                        <li>Free Icon Design </li>
                        <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                        <li>24 - 48 Hours Turn Around Time</li>
                     </ul>
                     <h6 class="mt-30">MORE FEATURES</h6>
                     <ul>
                        <!-- <li><span><strong>MORE FEATURES</strong></span></li> -->
                        <li>100% Satisfaction </li>
                        <li>100% Ownership Rights </li>
                        <li>Money Back Guarantee </li>
                        <li>Dedicated Account Manager </li>
                     </ul>
                     <!-- <h6 class="mt-30">Value Added Services</h6>
                     <ul>
                        <li>Dedicated Account Manager</li>
                        <li>100% Money Back Guarantee</li>
                        <li>Complete Deployment</li>
                     </ul> -->
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="top-packages pricing-sec">
                  <div class="item">
                     <div class="package-ui pricing" data-package-box>
                        <!-- <div class="productSku" style="display: none;">LOGO_COMBO</div> -->
                        <div class="price-title">
                           <h3>Business Platinum Logo Package</h3>
                           <h6>Complete Branding Solution</h6>
                           <h4> <span> $3333<cc class="percent">70% off!</cc></span> $999</h4>
                        </div>
                        <div class="price_body mCustomScrollbar " data-package-scroll>
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
                        <div class="buynow">
                           <a href="javascript:;" class="order-package dft-btn seller_order cred-btn" data-fancybox="" data-src="#popupform" onclick="priceChange('Business Platinum Logo Package','999');">Order Now </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- our process -->
   <section class="our-process-sec">
      <div class="our-process-container mob-hide">
         <div class="section-title">
            <h4>Our Process</h4>
            <h6>Our order process comprises of 4 easy & simple steps that will save you a great deal of time.</h6>
         </div>
         <div class="process-container container responsive-slider2">
            <div class="single-process wow fadeIn" data-wow-delay="0s">
               <div class="process-thumb"><img data-src="images/process1.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-130  wp-post-image animate__animated animate__pulse animate__infinite" alt="Define" /></div>
               <h6>DEFINITION</h6>
               <div class="process-desc">
                  <p>At our company, we believe in transparency by sharing our expertise and ensuring constant communication throughout any project.</p>
               </div>
            </div>
            <div class="single-process wow fadeIn" data-wow-delay="0.5s">
               <div class="process-thumb"><img data-src="images/process2.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-132  wp-post-image animate__animated animate__pulse animate__infinite" alt="Discuss" /></div>
               <h6>DISCUSSION</h6>
               <div class="process-desc">
                  <p>We strive to create a perfect blend of your brand personality, focusing on user-friendliness and effective communication to achieve your business objectives and establish your identity.</p>
               </div>
            </div>
            <div class="single-process wow fadeIn" data-wow-delay="1s">
               <div class="process-thumb"><img data-src="images/process3.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-134  wp-post-image animate__animated animate__pulse animate__infinite" alt="Design" /></div>
               <h6>DESIGN</h6>
               <div class="process-desc">
                  <p>Our team of creative thinkers with innovative design skills guarantees that our designs will leave a lasting impression on both you and your audience.</p>
               </div>
            </div>
            <div class="single-process wow fadeIn" data-wow-delay="1.5s">
               <div class="process-thumb"><img data-src="images/process4.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-136  wp-post-image animate__animated animate__pulse animate__infinite" alt="Revolutionise" /></div>
               <h6>REVOLUTIONIZE</h6>
               <div class="process-desc">
                  <p>Our goal is to serve you, not just during the project, but until you are completely satisfied with the end result. We promise to handle everything to ensure your satisfaction.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- our process -->
   <!-- cta2 -->
   <section class="sec-6 cta-center second-cta ">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-4  col-xs-12 secnd-cta-title no-padding-left">
               <h3><span>Have Any Question?</span> We are here 24x7!</h3>
            </div>
            <div class="cta-main-center col-md-8  col-xs-12 no-padding"> <a href="tel:+1 817 533 6583" class=" phone-center"><span>Call Toll Free</span> +1 817 533 6583</a> <a href="javascript:;" class="chat-center live_chatt chat"><span>Need Help?</span> Live chat</a> <a data-fancybox="" data-src="#popupform" href="javascript:;" class="header-btn various inquirybtncta"> Let's Start</a>
            </div>
         </div>
      </div>
   </section>
   <!-- cta2 -->
   <!-- industry -->
   <section class="sec-7 industry">
      <div class="container-fluid">
         <h3>Serving <strong>Fortune 500<span>s</span></strong> </h3>
         <h2>from <strong>50+ Industries</strong></h2>
         <div class="row responsive-slider4">
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-1.webp" alt="Industry" class="lazy">
                  <h4>Engineering</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-2.webp" alt="Industry" class="lazy">
                  <h4>Religion</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-3.webp" alt="Industry" class="lazy">
                  <h4>Financial</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-4.webp" alt="Industry" class="lazy">
                  <h4>Medical</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-5.webp" alt="Industry" class="lazy">
                  <h4>Communication</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-6.webp" alt="Industry" class="lazy">
                  <h4>Children</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-7.webp" alt="Industry" class="lazy">
                  <h4>Construction</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-8.webp" alt="Industry" class="lazy">
                  <h4>Social</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-9.webp" alt="Industry" class="lazy">
                  <h4>Insurance</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-10.webp" alt="Industry" class="lazy">
                  <h4>Health</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-11.webp" alt="Industry" class="lazy">
                  <h4>Entertainment</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-12.webp" alt="Industry" class="lazy">
                  <h4>Craft</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-13.webp" alt="Industry" class="lazy">
                  <h4>Technology</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-14.webp" alt="Industry" class="lazy">
                  <h4>Education</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-15.webp" alt="Industry" class="lazy">
                  <h4>Consultation</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-16.webp" alt="Industry" class="lazy">
                  <h4>Travel</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-17.webp" alt="Industry" class="lazy">
                  <h4>Environmental</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-18.webp" alt="Industry" class="lazy">
                  <h4>Music</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-19.webp" alt="Industry" class="lazy">
                  <h4>Automotive</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-20.webp" alt="Industry" class="lazy">
                  <h4>Human Resource</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-21.webp" alt="Industry" class="lazy">
                  <h4>Architectural</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-22.webp" alt="Industry" class="lazy">
                  <h4>Matrimony</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-23.webp" alt="Industry" class="lazy">
                  <h4>Fashion</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-24.webp" alt="Industry" class="lazy">
                  <h4>Navigation</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-25.webp" alt="Industry" class="lazy">
                  <h4>Catalogues</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-26.webp" alt="Industry" class="lazy">
                  <h4>Sports</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-27.webp" alt="Industry" class="lazy">
                  <h4>Food</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-28.webp" alt="Industry" class="lazy">
                  <h4>Art</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-29.webp" alt="Industry" class="lazy">
                  <h4>Spa</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/industry-30.webp" alt="Industry" class="lazy">
                  <h4>News</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Agriculture.webp" alt="Industry" class="lazy">
                  <h4>Agriculture</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Carpet-cleaning.webp" alt="Industry" class="lazy">
                  <h4>Carpet Cleaning</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Coffee-shop.webp" alt="Industry" class="lazy">
                  <h4>Coffee Shop</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Electrician.webp" alt="Industry" class="lazy">
                  <h4>Electrician</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Excavation.webp" alt="Industry" class="lazy">
                  <h4>Excavation</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Fishing.webp" alt="Industry" class="lazy">
                  <h4>Fishing</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Golf-Course.webp" alt="Industry" class="lazy">
                  <h4>Golf Course</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Hotel.webp" alt="Industry" class="lazy">
                  <h4>Hotel</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/janitorial-service.webp" alt="Industry" class="lazy">
                  <h4>Janitorial Service</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Orange-Grove.webp" alt="Industry" class="lazy">
                  <h4>Orange Grove</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Adhesive Manufacturing.webp" alt="Industry" class="lazy">
                  <h4>Adhesive</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Athletic & Sporting Goods Manufacturin.webp" alt="Industry" class="lazy">
                  <h4>Athletic Goods</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Audio Production Studios.webp" alt="Industry" class="lazy">
                  <h4>Audio Production</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Biotechnology.webp" alt="Industry" class="lazy">
                  <h4>Biotechnology</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Blood & Organ Banks.webp" alt="Industry" class="lazy">
                  <h4>Blood & Organ</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Book Publishing.webp" alt="Industry" class="lazy">
                  <h4>Book Publishing</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Commercial Banking.webp" alt="Industry" class="lazy">
                  <h4>Banking</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Event-Management.webp" alt="Industry" class="lazy">
                  <h4>Event Management</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Magazine & Periodical Publishing.webp" alt="Industry" class="lazy">
                  <h4>Magazine</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Movie Theaters.webp" alt="Industry" class="lazy">
                  <h4>Movie Theaters</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/Swimming Pool Construction.webp" alt="Industry" class="lazy">
                  <h4>Swimming Pool</h4>
               </div>
            </div>
            <div class="col-md-3 col-sm-2 col-xs-4">
               <div class="indus-box">
                  <img data-src="images/industry/furniture.png" alt="Industry" class="lazy">
                  <h4>Furniture</h4>
               </div>
            </div>
         </div>
      </div>

   </section>
   <!-- industry -->
   <!-- testimonial-wrap -->
   <section class="testimonial-wrap ">
      <div class="container">
         <div class="row">
            <h2>Our Clients always has everything good for us!</h2>
            <div id="testimonial" class="owl-carousel">
               <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 test-img wow rollIn"> <img class="lazy" data-src="images/testimonial-1.webp" alt="Testimonial"> </div>
                  <div class="col-md-8 col-sm-8 col-xs-12 testimonial-content">
                     <p>Design Vikings completely transformed our online presence with their outstanding web design services. The team was professional, attentive and collaborative throughout the entire process. They listened to our needs and delivered an amazing website that exceeded our expectations.</p>
                     <h4 class="review-name">
                        Angelina Burns
                     </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 test-img wow rollIn"> <img class="lazy" data-src="images/testimonial-2.webp" alt="Testimonial"> </div>
                  <div class="col-md-8 col-sm-8 col-xs-12 testimonial-content">
                     <p>We were so impressed with their work that we also hired them to handle our digital marketing efforts. They are true experts in their field, and we highly recommend Design Vikings to anyone looking for top-notch web design services.</p>
                     <h4 class="review-name">
                        Mark Hammond
                     </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 test-img wow rollIn"> <img class="lazy" data-src="images/testimonial-3.webp" alt="Testimonial"> </div>
                  <div class="col-md-8 col-sm-8 col-xs-12 testimonial-content">
                     <p>Design Vikings helped us build a website that not only looks great, but also drives traffic and conversions. They have a wealth of knowledge when it comes to SEO and user experience, and they applied that expertise to create a site that ranks well and engages our target audience.</p>
                     <h4 class="review-name">
                        Mike Bennett
                     </h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- testimonial-wrap -->
   <!-- testimonial- Video -->
   <section class="videol-wrap ">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="video-cap">
                  <h4 class="cm-title">Joseph</h4>
                  <p>Chief Technology Officer</p>
                  <span>A.I Neural Network Security</span>
               </div>
            </div>
            <div class="col-md-8">
               <div class="videoBox">
                  <video controls poster="images/video-cover.webp?=v0.1">
                     <source src="images/testimonial.mp4?=v0.2" type="video/mp4">
                     <!--<source src="assets/images/testimonial.ogg?=v0.1" type="video/ogg">-->
                     Your browser does not support the video tag.
                  </video>
                  <!-- <div class="embed-responsive embed-responsive-16by9">-->
                  <!--  <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>-->
                  <!--</div>-->
               </div>
            </div>
         </div>
      </div>

   </section>
   <!-- TESTIMONIALS -->
   <!-- footer-logos -->
   <section class="footer-logo">
      <div class="home-featured-area desktopawards">
         <div class="container">
            <div class="section-title">
               <h4>Awards &amp; Recognitions</h4>
               <h6>We've been Honored &amp; Recognized for our Outstanding Achievements in the Industry</h6>
            </div>
            <div class="home-brands responsive-slider"> <img class="lazy" data-src="images/pldaward.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward2.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward3.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward4.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward5.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward6.webp" width="142" height="90"> </div>
         </div>
      </div>
   </section>
   <!-- footer-logos -->
   <footer>
      <div class="footer-top">
         <div class="container">
            <h3>Ready To Give Your Business</h3>
            <h2>The Perfect Direction?</h2>
            <div class="row">
               <div class="col-md-7 col-sm-7 col-xs-12 contact-form">
                  <div class="form-flied" data-form-type="ordernow_form">
                     <form class="leadFormWithOrder" id="bottomForm" method="POST" action="javascript:lead('bottomForm');">
                        <input type="hidden" id="referer" name="referer" value="google">
                        <input type="hidden" id="price" name="price" value="$27">
                        <input type="hidden" id="title" name="package" value="Logo Basic Package">
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
                        <div class="name col-md-6">
                           <input type="text" class="contact-field form-control" name="name" placeholder="Full Name *" data-validation="required" required>
                        </div>
                        <div class="col-md-6">
                           <input type="text" class="form-control contact-field required" name="email" placeholder="Email Address *" data-validation="required" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$" required>
                        </div>
                        <div class="phone col-md-12">
                           <!--<input type="text" class="number contact-field required form-control" name="phone" placeholder="Phone No. *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required>-->
                                <input type="hidden" name="country_code" class="country_code" id="country_code">
                                 <input type="text" class="form-control phone" id="phone02" name="phone" placeholder="Phone No. *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" data-validation="required" required>
                                 <input type="tel" class="hide" id="phone-hidden-02">
                             
                        </div>
                        <div class="mxg field col-md-12">
                           <textarea name="message" class="iemsg contact-field  required" rows="4" placeholder="To help us understand better, enter a brief description about your project." required></textarea>
                        </div>
                        <div class="btn-s field col-md-12">
                           <input class="btn-orangedark" type="submit" name="signupForm" value="Submit" id="footerBtn">
                        </div>
                        <div id="formResult" class="sidebarformResult"></div>
                     </form>
                  </div>
               </div>
               <div class="col-md-5  col-sm-5  col-xs-12 contact-right">
                  <div class="social-icons footer-phone">
                     <h4>Online Customer Service</h4>
                     <a href="tel:+1 817 533 6583" class="footer-btn"> +1 817 533 6583</a>
                     <a href="mailto:sales@designvikings.us" class="footer-email"> sales@designvikings.us</a><br><br>
                     <a href="https://goo.gl/maps/kRvSbveJHyDUS5pR6" class="footer-email"> 3200 14th Street Ste 414, Plano, TX 75074</a>
                  </div>
                  <div class="payment">
                     <h4>Easy Payment</h4>
                     <img class="lazy" data-src="images/payment.webp" alt="Payment">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom">
         <div class="container">
            <div class="row">
               <p>&copy; Copyright 2023 Design Vikings All Rights Reserved | <a href="https://www.designvikings.us/privacy-policy.php">Privacy Policy</a> | <a href="https://www.designvikings.us/terms-conditions.php">Terms & Conditions</a> </p>

            </div>
         </div>
      </div>
   </footer>
   <div class="floating-form-wrap">
      <div class="side-bars">
         <div class="s-bar clearfix">
            <a href="tel:+1 817 533 6583">
               <div class="call-spr"></div>
               <p>Toll Free:</p>
               <span class="pnumlive"> +1 817 533 6583</span>
            </a>
         </div>
         <div class="s-bar clearfix">
            <a class="chat" href="javascript:;" title="Live Chat">
               <div class="chat-spr"></div>
               <p>Get Advice from Expert</p>
               <span class="pnumlive">Live CHAT</span>
            </a>
         </div>
      </div>
      <div class="floating-form">
         <div class="form-container">
            <div class="formdv">
               <div id="flform" class="inform">
                  <h4 class="text-center">Tell us about your project</h4>
                  <h5>Our Design Expert will contact you to discuss your project</h5>
                  <div class="form-flied" data-form-type="ordernow_form">
                     <form class="leadFormWithOrder" id="floatingForm" method="POST" action="javascript:lead('floatingForm');">
                        <input type="hidden" id="referer" name="referer" value="google">
                        <input type="hidden" id="price" name="price" value="$27">
                        <input type="hidden" id="title" name="package" value="Logo Basic Package">
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
                        <div class="field">
                           <input type="text" class="form-control" name="name" placeholder="Full Name *" data-validation="required" required>
                        </div>
                        <div class="field">
                           <input type="text" class="form-control" name="email" placeholder="Email Address *" data-validation="required" pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$" required>
                        </div>
                        <div class="field phone">
                           <input type="text" class="form-control" name="phone" placeholder="Phone No. *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" data-validation="required" required>
                        </div>
                        <div class="field textarea">
                           <textarea name="message" class="iemsg required" rows="4" placeholder="To help us understand better, enter a brief description about your project." required></textarea>
                        </div>
                        <!-- <div class="field">
                           <div class="g-recaptcha leadCaptcha" id="mainFormCaptcha"
                              data-sitekey= data-validation="required"></div>
                           <span id="mainFormCaptchaError"></span>
                        </div> -->
                        <input class="btn-validate" type="submit" id="signupBtn" name="signupForm" value="Submit Your Request">
                        <div id="formResult" class="sidebarformResult"></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="form-handle"></div>
   </div>
   <div style="display: none;" class="popupform" id="popupform">
      <h2>We are here to help!</h2>
      <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.
      </p>
      <div class="form-flied" data-form-type="ordernow_form">
          <form class="leadFormWithOrder" id="popupLead" method="POST" action="javascript:lead('popupLead');">
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
            <div class="row">
               <div class="col-md-12">
                  <ul>
                     <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="name" placeholder="Full Name *">
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <ul>
                     <li>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email Address *">
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <ul>
                     <li class="popupForm">
                         
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <!--<input type="text" class="form-control" name="phone" placeholder="Phone No. *" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" data-validation="required" required>-->
                           <input type="hidden" name="country_code" class="country_code" id="country_code">
                                 <input type="text" class="form-control phone" id="phone03" name="phone" >
                                 <input type="tel" class="hide" id="phone-hidden-03">
                             
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <ul>
                     <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="message" class="iemsg required" rows="4" placeholder="To help us understand better, enter a brief description about your project."></textarea>
                     </li>
                  </ul>
               </div>
               <!-- <div class="col-md-12">
                  <div class="g-recaptcha leadCaptcha" id="mainFormCaptcha"
                     data-sitekey= data-validation="required"></div>
                  <span id="mainFormCaptchaError"></span>
               </div> -->
               <div class="col-md-12">
                  <ul>
                     <li>
                        <input type="submit" value="Submit">
                     </li>
                     <div id="formResult" class="sidebarformResult"></div>
                  </ul>
               </div>
            </div>
         </form>
      </div>
      <div class="cus-overlay"></div>
   </div>
   
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput-jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.min.js"></script>
   <script>
     //=========== FLOATING FORM STARTS
 
     $(".clickbutton").click(function() {
 
       $('.floatbutton').toggleClass("active");
 
       $('.overlayfloatingform').toggleClass("show");
 
     });
 
     $(".overlayfloatingform").click(function() {
 
       $(this).toggleClass("show");
 
       $('.floatbutton').toggleClass("active");
 
     });
 
     $(window).scroll(function() {
 
       if ($(window).scrollTop() >= 500) {
 
         $('.floatbutton').addClass('clickbutton_active');
 
       } else {
 
         $('.floatbutton').removeClass('clickbutton_active');
 
       }
 
     });
     
     // phone number intel masking
     (function($) {
          // function that uses intl-tel-input format as jQuery-Mask
          function initMasking(formatterInput, maskedInput) {
             // get the format fromt intl-tel-input placeholder
             var format = $(formatterInput).attr('placeholder');
 
             // use the format as placeholder to jQuery-Mask input
             $(maskedInput).attr('placeholder', format);
 
             // replace all digits to zero and use is as the mask
            //  $(maskedInput).mask(format.replace(/[1-9]/g, 0));
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
            //  $(maskedInput).mask(format.replace(/[1-9]/g, 0));
          }
 
          // initialize intl-tel-input
          $("#phone-hidden-01").intlTelInput({
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
          initMasking("#phone-hidden-01", "#phone01");
 
          // update the mask format when changing country
          $("#phone-hidden-01").on("countrychange", function(e, countryData) {
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
            //  $(maskedInput).mask(format.replace(/[1-9]/g, 0));
          }
 
          // initialize intl-tel-input
          $("#phone-hidden-02").intlTelInput({
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
          initMasking("#phone-hidden-02", "#phone02");
 
          // update the mask format when changing country
          $("#phone-hidden-02").on("countrychange", function(e, countryData) {
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
            //  $(maskedInput).mask(format.replace(/[1-9]/g, 0));
          }
 
          // initialize intl-tel-input
          $("#phone-hidden-03").intlTelInput({
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
          initMasking("#phone-hidden-03", "#phone03");
 
          // update the mask format when changing country
          $("#phone-hidden-03").on("countrychange", function(e, countryData) {
             $(this).val('');
             $("#phone03").val('');
 
             // update the mask
             initMasking(this, "#phone03");
          });
       })(jQuery);
 
     //=========== FLOATING FORM ENDS
 </script>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js" integrity="sha512-zdfH1XdRONkxXKLQxCI2Ak3c9wNymTiPh5cU4OsUavFDATDbUzLR+SYWWz0RkhDmBDT0gNSUe4xrQXx8D89JIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>
      $(document).ready(function() {
         $(".email").inputmask("email");
      });
   </script>
   <script>
    $('.chat, .live_chatt, .chatt').click(function() {
      $zopim.livechat.window.toggle();
      return false;
    });
  </script>
<script>
    zE(function() {
        $zopim.livechat.setOnUnreadMsgs(function(numUnread){
     if(numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
      $zopim.livechat.window.show();
    }
  })
});
</script>

   <!--====== Main js ======-->
   <script src="js/script.js"></script>
   <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/custom-validation.js?v=1.6"></script>
   
   <script>
       zE(function() {
        $zopim(function() {
          $zopim.livechat.setOnUnreadMsgs(unread);
            function unread(number) {
            if (number>=1)
            {
          $zopim.livechat.window.show();
            }
            }
        });
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