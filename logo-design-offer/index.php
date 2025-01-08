<?php
define("NITROPACK_HOME_URL", "https://designvikings.us/logo-design-offer/"); 
define("NITROPACK_SITE_ID", "ynONfcxeEQszyDlObjAjsrkNFjVqhNZp"); 
define("NITROPACK_SITE_SECRET", "awci3Bl2RqojKzxt1l09LrUAwymaa51c0sJen2bKzN9IUalTg79h7j5C7wx8t1ko"); 
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
   <title>Get a Custom Logo Design in just $35 | Design Vikings</title>
   <meta name="description" content="Get your Custom Logo Design starting from $35 only at Design Vikings. We are offering straight 70% off on our Business Logo Design Service. Unlike other Logo Design Companies we do not use pre defined templates as we believe in creating your Brand Identity unique.">
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
                           Call Us: 817 533 6583</span></a>
                     <a class="various get_a_quote inquirybtncta" data-fancybox="" data-src="#popupform" href="javascript:;"> Get Started</a>
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
                     <h1 style="font-size:23px; margin:0;">Get a <span class="txt-yellow banner-txt-md" style="font-size:27px;">Custom Logo Design</span> in just</h1>
                     <h1>$ <span>35</span></h1>
                     <!--<h1>in just <span class="txt-red">AUD 49</span> +20% OFF on your future orders*</h1>-->
                     <p class="banner-cub-txt"><span>+20% OFF</span> on your future orders*</p>
                     <p style="margin-top: 19px;">Get Your Personalized Professional Logo Design <br />By Highly Skilled Logo Designers</p>
                     <ul>
                        <li>4 Custom Logo Concepts</li>
                        <li>Dedicated Logo Designer</li>
                        <li>FREE File Formats</li>
                        <li>Money-Back Guarantee</li>
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
                     <h2>70% Off <span class="color_cl">On Your First Order! </span></h2>
                     <h3><span> Avail Now.</span> </h3>
                     <i class="dtag"><img src="images/70-off.svg" alt=""></i>
                     <div class="form-flied" data-form-type="ordernow_form">
                        <form class="leadFormWithOrder" id="bannerForm" method="POST" action="javascript:lead('bannerForm');">
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
                              <div class="slide_btn col-md-12">
                                 <button class=" btn" type="submit" id="signupBtn" name="signupForm">Activate Coupon</button>
                              </div>
                              <p class="any_con">Not sure?<a class="chat" href="javascript:;"> Take help from our 24/7 customer support</a></p>
                              <div id="formResult" class="sidebarformResult"></div>
                           </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
    </div>
   </header>
   <!-- end header -->
   <!-- clinet logos -->
   <section class="social-counts-sec">
      <div class="social-counts">
         <div class="container">
            <div class="social-left">
               <ul class="bxslider1">
                  <li>Decades of Digital Industry Experience </li>
                  <li>Client Satisfaction 100% Guaranteed </li>
                  <li>Logo Design Cherished Worldwide</li>
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
         <h2>What Type Is Your Logo Design?</h2>
         <div class="row">
            <div id="logos-type" class="owl-carousel">
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>3D Logo Design</h3>
                     <p>3D logos are one step further from all other types of logos because they exhibit and demonstrate a sense of depth and dimensionality to the feel and look of professional logo design. Logo creators incorporate gradients, textures, shadows and elements that create a depth-defining illusion to give an edge and modern look to the logo. 3D logos are more identifiable due to their cool appearance, and hence are easy to remember.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/silder.webp" alt="3D Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Animated Logo Design</h3>
                     <p>Animated business logo design presents a much innovative and thought-provoking approach making the design stand out from competition. This type of design used funky and fun elements that gives a motion-look to logo useable at many platforms – video games, social media posts, video intros and much more. The rotation and movement effects by logo designers can add a lasting impression on the target audience. Get expertly animated logo designs from one of the best logo designing companies.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/an-sliderlogo.webp" alt="Animated Logo design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Flat Logo Design</h3>
                     <p>Flat logo design is made from simple 2D images without any knotty details. A flat business logo design involves minimalistic typography and design elements that convey the brand message effectively. Get services of the best logo design company with Design Vikings. A simple logo design can be used anywhere.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/flat.webp" alt="Flat Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Icon Based Logo Design</h3>
                     <p>This type involves designing the logo keeping the symbol or icon of an entity as the centerpiece. Best logo design companies make the icon that’s your representative and generally is the first thing recalled in customer’s mind. Icon-based professional logo design leaves a lasting impression.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/silder1.webp" alt="Iconic Logo design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Illustrative Logo Design</h3>
                     <p>A step above the simple logo, illustrative logos inculcates intricate details such as drawings or elements which effectively communicates the brand’s story. It is something to which the customers can immediately resonate with. Best logo design companies use novel design and unique approach to make the logo a distinction. Illustrative logo makers possess the necessary skills to add flavor of originality in this type of logo design.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/illustrative.webp" alt="Illustrative Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Abstract Logo Design</h3>
                     <p>Abstract logo design is more like a theoretical concept. It doesn’t represent a particular meaning but is aesthetically pleasing and reflects a unique identity of your brand. Logo designers incorporate details that might be stimulating and ignite spark among users, thus making it original and uniquely identifiable. Abstract logo design done best from the best logo design company.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn popup_open btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/abstract.webp" alt="Abstract Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Mascot Logo Design</h3>
                     <p>Mascot logo design can be termed as ambassadors of the brand. They are characters picked by the businesses as representative of their brand image/name. These characters help the viewers to recognize brand within an instance and are relatable. Custom logo design is widely used in mascot logos to give a formidable and original touch to your design.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn popup_open btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/mascot-logo.webp" alt="Mascot Logo Design" class="lazy"> </div>
               </div>
               <div class="item">
                  <div class="col-md-7 col-sm-6 col-xs-12 logo-content">
                     <h3>Typography Logo Design</h3>
                     <p>Typography logos are text-based incorporating symbols and design elements. Best logo design companies offer typography logos to new companies and startups that aim to make a name for themselves in the industry. It is simple and affordable option which allows brand to establish a distinct identity. Although simple in many terms, logo creators tend to have tons of expertise and experience to craft a uniquely identifiable masterpiece that fits well with business philosophy.</p>
                     <a href="javascript:;" data-fancybox="" data-src="#popupform" class="header-btn various btn-orangedark get_started inquirybtncta">Let's Start</a>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 type-logos"> <img data-src="images/flip/typo.webp" alt="Typography Logo Design" class="lazy"> </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="sec-4 cta-center ">
      <div class="container">
         <div class="row justify-content-center">
            <h3 class="mb-4"><strong>Professional</strong> Logo Design  <strong>that portrays </strong><br>your Business Identity.</h3>
               <div class="cta-main-center "> <a href="tel:+1 817 533 6583" class="phone-center "><span>Call Toll
                        Free</span> (817) 533 6583 </a>
                  <a href="javascript:;" class="chat-center live_chatt chat"><span>Get Assistance</span> Live Chat</a>
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
               <h2>Skim through our <strong>Finest Logo Design Works</strong></h2>
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
            <h2>Get Your Custom Logo from highly skilled <strong>Logo Designer</strong></h2>
            <p>A well-designed <strong>Custom Logo and Brand Identity</strong> can make your marketing efforts more effective, as it can help grab customers' attention and communicate your brand's message more clear.</p>
         </div>
         <div class="packages-inner-container">
            <div class="packages-slider owl-carousel owl-theme">
               <!-- package break from here -->
               <div class="price-box-main pricing-box" data-package-box>
                  <div class="productSku" style="display: none;"> Logo Special Package</div>
                  <div class="price-title">
                     <h3>Logo Design Special</h3>
                     <h4><span> $119 <cc class="percent">70% off!</cc></span> $35</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
                        <li> 4 Logo Design Concepts</li>
                        <li> Dedicated Logo Designer</li>
                        <li> 4 Revisions</li>
                        <li> JPEG Format</li>
                        <li> 24 - 48 Hours Turn Around Time</li>
                        <li class="features">MORE FEATURES</li>
                        <li> 100% Satisfaction</li>
                        <li> Money Back Guarantee</li>
                        <li> Dedicated Account Manager</li>
                     </ul>
                  </div>
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> (817) 533 6583</a>
                  </div>
                  <div class="order-btn">
                     <button class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Logo Special Package','35');">
                        Order now
                     </button>
                     <a href="javascript:;" class="price-btns pack-cht chat">Chat Now</a>
                  </div>
               </div>
               <div class="price-box-main pricing-box" data-package-box>
                  <div class="productSku" style="display: none;">Logo Plus Package</div>
                  <div class="price-title">
                     <h3>Logo Design Plus</h3>
                     <h4><span> $399<cc class="percent">70% off!</cc></span> $119</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
                        <li> 12 Logo Design Concepts</li>
                        <li> 4 Dedicated Logo Designer (Industry Specific)</li>
                        <li> Unlimited Revisions</li>
                        <li>Stationery Design (Business Card, Letterhead, Envelope) </li>
                        <li> Free Icon Design</li>
                        <li> Final File Formats</li>
                        <li> 24 - 48 Hours Turn Around Time</li>
                        <li class="features">MORE FEATURES</li>
                        <li> 100% Satisfaction</li>
                        <li> 100% Ownership Rights</li>
                        <li> Money Back Guarantee</li>
                        <li> Dedicated Account Manager</li>
                     </ul>
                  </div>
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> (817) 533 6583</a>
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
                     <h3>Logo Design Platinum</h3>
                     <h4><span> $999<cc class="percent">70% off!</cc> </span> $299</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
                        <li>Unlimited Logo Concepts</li>
                        <li>8 Dedicated Logo Designer (Industry Specific)</li>
                        <li>Unlimited Revisions</li>
                        <li>Stationery Design (Business Card, Letterhead, Envelope)</li>
                        <li>500 Business Cards</li>
                        <li>With Grey Scale Format</li>
                        <li>Free Icon Design</li>
                        <li>Final File Formats</li>
                        <li>24 - 48 Hours Turn Around Time</li>
                        <li class="features">MORE FEATURES</li>
                        <li>100% Satisfaction</li>
                        <li> 100% Ownership Rights</li>
                        <li>Money Back Guarantee</li>
                        <li>Dedicated Account Manager</li>
                     </ul>
                  </div>
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> (817) 533 6583</a>
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
                     <h3>Logo Design Gold</h3>
                     <h4><span> $1666 <cc class="percent">70% off!</cc></span> $499</h4>
                  </div>
                  <div class="price_body mCustomScrollbar " data-package-scroll>
                     <ul>
                        <li>Unlimited Original Logo Concepts</li>
                        <li>8 Dedicated Logo Designer (Industry Specific)</li>
                        <li>Unlimited Revisions</li>
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
                        <li> 100% Ownership Rights</li>
                        <li>Money Back Guarantee</li>
                        <li>Dedicated Account Manager</li>
                     </ul>
                  </div>
                  <div class="price_strip">
                     <a href="tel:+1 817 533 6583"><span>Speak With Us</span> (817) 533 6583</a>
                  </div>
                  <div class="order-btn">
                     <button class="price-btns order-package" data-fancybox="" data-src="#popupform" onclick="priceChange('Gold Package','499');">
                        Order Now
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
                  <h3>A One-Stop-Shop Special Offer for <strong>Entrepreneurs</strong> and <strong>Startups</strong></h3>
                  <h2>All-Inclusive Bundle</h2>
                  <p>Our <strong>All-Inclusive Bundle</strong> is viable for entrepreneurs and startups looking to setup their business at the very initial stage. This can help you design everything that you need for a business to grow your reach and solidify your online existence. Get hands-on experience of professional logo design that can be used anywhere. Grab the opportunity with both hands to take all-out benefits from our exclusive bundle.</p>
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
                     <div style="border-top-left-radius:32px; margin-top:20px;" class="package-ui pricing" data-package-box>
                        <!-- <div class="productSku" style="display: none;">LOGO_COMBO</div> -->
                        <div class="price-title" style="padding-top:0px; border-top-left-radius:32px;">
                           <h3 style="margin-top:0px; width:100%">Business Platinum Combo</h3>
                           <h6 style="margin-top:30px;">Complete Branding Solution</h6>
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
            <h4 style="text-align:left; margin-bottom: 20px;">Why Choose Design Vikings?</h4>
            <h5 style="text-align:left; font-size:22px;">What is Unique?</h5>
            <p style="text-align:left;">We create Custom Logos from scratch that are tailored to your unique Brand Identity, rather than relying on pre-made templates or generic designs. Our focus is just not to make a Logo Design for you, but also developing a comprehensive Brand Identity system that includes Brand Strategy, Messaging, and Visual Design.</p>
            <br>
            <h5 style="text-align:left; font-size:22px;">Turn Around Time?</h5>
            <p style="text-align:left;">We offer fast turnaround time for Logo Design projects without sacrificing quality, so you do not have to worry about tight deadlines. Unlike other Logo Design Companies we do not charge extra fee for expedited process and delivers your Logo Designs with in 24 to 48 hours.</p>
            <br>
            <h5 style="text-align:left; font-size:22px;">Collabrative Design Process</h5>
            <p style="text-align:left;">We follow a highly collaborative design process that involves working closely with you to ensure the final Logo Design reflects your Vision, values, and Brand Identity. Unlike other Logo Design Companies, we do not believe in using the templates or generic designs that are available on Free Logo Creators.</p>
            <br><br><br>
            <h6 style="font-size:18px;">Our Workflow is divided into 4 simple processes (4 D’s) that makes us efficient</h6>
         </div>
         <div class="process-container container responsive-slider2">
            <div class="single-process wow fadeIn" data-wow-delay="0s">
               <div class="process-thumb"><img  data-src="images/process1.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-130  wp-post-image animate__animated animate__pulse animate__infinite" alt="Define" /></div>
               <h6>Discuss</h6>
               <div class="process-desc">
                  <p>Brainstorming Sessions, Understanding Requirements, Keeping Business goals in to consideration. Our priority is to keep you in to loop at all times.</p>
               </div>
            </div>
            <div class="single-process wow fadeIn" data-wow-delay="0.5s">
               <div class="process-thumb"><img  data-src="images/process2.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-132  wp-post-image animate__animated animate__pulse animate__infinite" alt="Discuss" /></div>
               <h6>Design</h6>
               <div class="process-desc">
                  <p>Our Logo Designer ensure that all those elements that are essential for your Brand Identity are embedded within your particular Business Logo Design.</p>
               </div>
            </div>
            <div class="single-process wow fadeIn" data-wow-delay="1s">
               <div class="process-thumb"><img  data-src="images/process3.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-134  wp-post-image animate__animated animate__pulse animate__infinite" alt="Design" /></div>
               <h6>Revise</h6>
               <div class="process-desc">
                  <p>Your Account Manager receives your feedback and Refine the Logo Design Concepts taking into account any additional information or Design preferences.</p>
               </div>
            </div>
            <div class="single-process wow fadeIn" data-wow-delay="1.5s">
               <div class="process-thumb"><img data-src="images/process4.webp" class="lazy attachment-post-thumbnail size-post-thumbnail colorbox-136  wp-post-image animate__animated animate__pulse animate__infinite" alt="Revolutionise" /></div>
               <h6>Deliver</h6>
               <div class="process-desc">
                  <p>Receive your final feedback on the refine concepts, pointing out any final changes you would like to see. Once you approve, we deliver the final files.</p>
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
               <h3 style="font-size:23px;">Let's Start Your<br>Logo Design Project.</h3>
            </div>
            <div class="cta-main-center col-md-8  col-xs-12 no-padding"> <a href="tel:+1 817 533 6583" class=" phone-center"><span>Call Toll Free</span> (817) 533 6583</a> <a href="javascript:;" class="chat-center live_chatt chat"><span>Get Assistance</span> Live chat</a> <a data-fancybox="" data-src="#popupform" href="javascript:;" class="header-btn various inquirybtncta"> Let's Start</a>
            </div>
         </div>
      </div>
   </section>
   <!-- cta2 -->
   <!-- industry -->
   <section class="sec-7 industry">
      <div class="container-fluid">
         <h3>Trusted Choice of <strong>Top-Players</strong></h3> 
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
            <h2>Client Satisfaction keeps us Energized</h2>
            <div id="testimonial" class="owl-carousel">
               <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 test-img wow rollIn"> <img class="lazy" data-src="images/testimonial-1.webp" alt="Testimonial"> </div>
                  <div class="col-md-8 col-sm-8 col-xs-12 testimonial-content">
                     <p>Design Vikings are the best you can find! I wanted a logo for my company and they sure were spot-on with the design. The best logo creators you can find online. They helped to fortify my online existence and helped me deliver a top-notch website that has made me spell-bound to their services. Thank you, Design Vikings for always being consistent.</p>
                     <h4 class="review-name">
                        Angelina Burns
                     </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 test-img wow rollIn"> <img class="lazy" data-src="images/testimonial-2.webp" alt="Testimonial"> </div>
                  <div class="col-md-8 col-sm-8 col-xs-12 testimonial-content">
                     <p>Me and my team loved their work straightaway. They don’t make you go round-and-round but talk to the point and the best thing is that they understand what you’re looking for. I am amazed at the level of professionalism and communication they incur. This makes them the best creators in digital industry. Would highly recommend others as well.</p>
                     <h4 class="review-name">
                        Mark Hammond
                     </h4>
                  </div>
               </div>
               <div class="item">
                  <div class="col-md-4 col-sm-4 col-xs-12 test-img wow rollIn"> <img class="lazy" data-src="images/testimonial-3.webp" alt="Testimonial"> </div>
                  <div class="col-md-8 col-sm-8 col-xs-12 testimonial-content">
                     <p>I was skeptical to try them at first but believe me, it turned out to be the best decision. Their logo design makers are creative geniuses. I wonder from where do they get such great ideas? I was constantly updated by their support team and the production team fully incorporated what I was looking for. Kudos for a job well-done.</p>
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
                  <h4 class="cm-title">JOSEPH - CTO</h4>
                     <p>A.I Neural Network Security</p>
                     <br><br>
                     <span>Project:</span>
                     <p>Brand Indentity & Website Solution</p>
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
               <h6>Our work has been applauded and recognized for over-the-top performances</h6>
            </div>
            <div class="home-brands responsive-slider"> <img class="lazy" data-src="images/pldaward.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward2.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward3.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward4.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward5.webp" width="142" height="90"> <img class="lazy" data-src="images/pldaward6.webp" width="142" height="90"> </div>
         </div>
      </div>
   </section>
   <!-- footer-logos -->
   <footer>
      <div class="footer-top">
         <div class="container">
            <h3>Are you in towards the </h3>
            <h2>Journey of Success?</h2>
            <div class="row">
               <div class="col-md-7 col-sm-7 col-xs-12 contact-form">
                  <div class="form-flied" data-form-type="ordernow_form">
                     <form class="leadFormWithOrder" id="bottomForm" method="POST" action="javascript:lead('bottomForm');">
                        <input type="hidden" id="referer" name="referer" value="google">
                        <input type="hidden" id="price" name="price" value="$35">
                        <input type="hidden" id="title" name="package" value="Logo Special">
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
                     <a href="tel:+1 817 533 6583" class="footer-btn"> (817) 533 6583</a>
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
               <span class="pnumlive"> (817) 533 6583</span>
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