<?php
include('ip/getIpInfo.php');
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

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Get a Logo Design in just $19 | Design Vikings</title>
   <meta name="description" content="Get Your Custom Logo Design from the Most Reliable Logo Design Agency in the industry.">
   <link rel="preload stylesheet" as="style" type="text/css" href="assets/css/plugins.css?ver=8.2">
   <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <link href="assets/css/style-web.css?ver=8.6" rel="stylesheet">
   <!-- Start of  Zendesk Widget script -->
   <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>
   <!-- End of  Zendesk Widget script -->



   <script>
      (function(w, d, t, r, u) {
         var f, n, i;
         w[u] = w[u] || [], f = function() {
               var o = {
                  ti: "97030081",
                  enableAutoSpaTracking: true
               };
               o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
            },
            n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
               var s = this.readyState;
               s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
            },
            i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
      })
      (window, document, "script", "//bat.bing.com/bat.js", "uetq");
   </script>

   <script>
      (function(w, d, t, r, u) {
         var f, n, i;
         w[u] = w[u] || [], f = function() {
            var o = {
               ti: "97030081",
               enableAutoSpaTracking: true
            };
            o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
         }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
            var s = this.readyState;
            s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
         }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
      })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
   </script>

</head>

<body>
   <!-- header section -->
   <header class="main-header">
      <div class="container">
         <div class="row justify-content-between no-gutters pt-2 pb-2 align-items-center">
            <div class="col-lg-3 col-md-4 col-5">
               <a href="#" class="logo">
                  <h1 class="text-hide mx-auto mx-lg-0 mb-3 mb-sm-0 "><img src="assets/images/logo.png" class="img-fluid" width="200px"></h1>
               </a>
            </div>
            <div class="col-lg-7 col-md-7 col-7">
               <div class="hdr-epc-main d-flex flex-column flex-sm-row justify-content-end">
                  <div class="phn-wrap d-flex align-items-center  justify-content-start align-items-center mb-3 mb-sm-0">
                     <a href="tel:+1 817 533 6583">
                        <i class="spritesheet-icons spritesheet-icons-phone-ico"></i>
                        <div class="pl-2 contact-number">
                           <span>Call Us:</span>
                           <p class="mb-0">+1 817 533 6583</p>
                        </div>
                     </a>
                  </div>
                  <div class="chat-wrap d-flex align-items-center  justify-content-start align-items-center mb-3 mb-sm-0">
                     <a href="javascript:;" class="chat">
                        <i class="spritesheet-icons spritesheet-icons-chat-ico"></i>
                        <div class="pl-2 pr-2 pr-xl-5 chat-area">
                           <span>24/7 Avalaible</span>
                           <p class="mb-0 chat">Live Chat</p>
                        </div>
                     </a>
                     <a href="#" class="hdr-btn dft-btn popup-open">
                        Let’s Get Started <i class="fas fa-caret-right"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- End header section -->
   <!-- banner section start  -->
   <section class="main-banner sec-pad" id="banner-form">
      <div class="container">
         <div class="content-wrapper">
            <h2 class="main-heading"><span>Premium Custom</span> Logo Design Service</h2>
            <h3 class="y-heading">In Just 24 Hours</h3>
            <p class="main-sec-para">Get your custom logo designed, from the most reliable Design Agency</p>
            <h2 class="form-heading"><span>SIGNUP NOW TO RESERVE</span> 70% DISCOUNT</h2>
         </div>
         <div class="form-wrap" data-form-type="ordernow_form">
            <form id="header-form" class="offr-frm leadFormWithOrder banner-form" method="post" enctype="multipart/form-data" action="javascript:void(0)">
               <!--hidden required values-->
               <span class="htmlDescription d-none">

               </span>
               <input type="hidden" id="package_items" data-package_items="package_items" value="<ul>
                     <li> 3 Logo Design Concepts</li>
                     <li> 3 Revisions</li>
                     <li> 1 Dedicated Designer</li>
                     <li> Free Color Options</li>
                     <li> Free Grayscale Format</li>
                     <li> 24 To 48 Hours TAT</li>
                     <li> All File Formats (JPG only)</li>
                      <li class='features'><b>MORE FEATURES</b></li>
                     <li> 100% Satisfaction</li>
                     <li> 100% Ownership Rights</li>
                     <li> Money Back Guarantee</li>
                     <li> Dedicated Account Manager</li>
                  </ul>">
               <input type="hidden" id="formType" name="formType" value="Banner Signup Form">
               <input type="hidden" id="referer" name="referer" value="google">
               <input type="hidden" id="price" name="price" value="19">
               <input type="hidden" id="title" name="package" value="Logo Special">
               <input type="hidden" id="sku" name="sku" value="LOGO_SPECIAL">
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
                  <input type="text" placeholder="Enter Your Name" name="name" id="m1" data-validation="required" required pattern="[a-zA-Z\s]+">
               </div>
               <div class="mm-field emailfield">
                  <i class="fa fa-envelope"></i>
                  <input type="email" name="email" class="email" id="email-val" value="" placeholder="Email address*" data-validation="required" required="">
               </div>
               <div class="mm-field pnfields">
                  <i class="fa fa-phone"></i>
                  <input type="text" class="number" minlength="10" maxlength="10" placeholder="Phone Number" name="phone" data-validation="required" required onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
               </div>
               <div class="banFormBtt">
                  <div class="sumbit-btn">
                     <button type="submit" name="signupForm" aria-label="signupForm" id="signupBtn" value="1" class="learn-more-tab">Submit</button>
                  </div>
               </div>
               <div id="formResult"></div>
            </form>
         </div>
      </div>
      <div class="banner-logos">
         <img src="assets/images/webp/ban-logo11.webp" alt="banner logos" class="img-fluid ban-logo1">
         <img src="assets/images/webp/ban-logo12.webp" alt="banner logos" class="img-fluid ban-logo2">
         <img src="assets/images/webp/ban-logo13.webp" alt="banner logos" class="img-fluid ban-logo3">
         <img src="assets/images/webp/ban-logo14.webp" alt="banner logos" class="img-fluid ban-logo4">
         <img src="assets/images/webp/ban-logo15.webp" alt="banner logos" class="img-fluid ban-logo5">
         <img src="assets/images/webp/ban-logo16.webp" alt="banner logos" class="img-fluid ban-logo6">
         <img src="assets/images/webp/ban-logo17.webp" alt="banner logos" class="img-fluid ban-logo7">
         <img src="assets/images/webp/ban-logo18.webp" alt="banner logos" class="img-fluid ban-logo8">
         <img src="assets/images/webp/ban-logo9.webp" alt="banner logos" class="img-fluid ban-logo9">
      </div>
   </section>
   <!-- banner section end -->

   <!-- logo type section start -->
   <section class="logo-types sec-pad">
      <div class="container">
         <h2 class="sec-heading">What Type Is your Logo?</h2>
         <p class="sec-para">Expertly Designed Logo Design Services to Boost Brand Identity. </p>
         <div class="row types-logo-slider">
            <div class="col-lg-4">
               <div class="logos-wrapper">
                  <img src="assets/images/webp/logo-type1.webp" alt="logo types images">
                  <div class="logo-type-content">
                     <p><strong>3D Logo</strong> design gives a logo the depth that a 2D logo fails to give. 3D logo designs almost bring the logo to life giving it realistic lusters. </p>
                  </div>
                  <a href="javascript:;" class="logos-btn dft-btn popup-open">
                     Get Started <i class="fas fa-caret-right"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="logos-wrapper">
                  <img src="assets/images/webp/logo-type2.webp" alt="logo types images">
                  <div class="logo-type-content">
                     <p><strong>2D logos</strong> design is a flat, graphical representation of a company/brand that leaves a lasting impact on viewer.</p>
                  </div>
                  <a href="javascript:;" class="logos-btn dft-btn popup-open">
                     Get Started <i class="fas fa-caret-right"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="logos-wrapper">
                  <img src="assets/images/webp/logo-type3.webp" alt="logo types images">
                  <div class="logo-type-content">
                     <p><strong>Wordmark </strong> logo designs use bold typography to directly get the message across using the corporation or brand name. </p>
                  </div>
                  <a href="javascript:;" class="logos-btn dft-btn popup-open">
                     Get Started <i class="fas fa-caret-right"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="logos-wrapper">
                  <img src="assets/images/webp/logo-type4.webp" alt="logo types images">
                  <div class="logo-type-content">
                     <p><strong>Pictorial logo</strong> is somewhat similar to an icon logo in a way that it employs a graphic based design that is the noticeable or impactful. </p>
                  </div>
                  <a href="javascript:;" class="logos-btn dft-btn popup-open">
                     Get Started <i class="fas fa-caret-right"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="logos-wrapper">
                  <img src="assets/images/webp/logo-type5.webp" alt="logo types images">
                  <div class="logo-type-content">
                     <p><strong>Illustrative logos</strong> are something that are not only fun, they also require some in-depth working for a perfect rendition. </p>
                  </div>
                  <a href="javascript:;" class="logos-btn dft-btn popup-open">
                     Get Started <i class="fas fa-caret-right"></i>
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="logos-wrapper">
                  <img src="assets/images/webp/logo-type6.webp" alt="logo types images">
                  <div class="logo-type-content">
                     <p><strong>Iconic logos</strong> are known for their simplicity. They are simple elements used in the manner to represent a story. </p>
                  </div>
                  <a href="javascript:;" class="logos-btn dft-btn popup-open">
                     Get Started <i class="fas fa-caret-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- logo type section end -->
   <!-- feature section start -->
   <section class="our_fetures">
      <div class="container set_festure_before">
         <div class="row justify-content-between align-items-center">
            <div class="col-xl-3 col-md-4 col-lg-2 feat_heding">
               <h2>Other Features</h2>
            </div>
            <div class="col-xl-9 col-md-8 col-lg-10 featurs_inner">
               <ul class="service-responsive-slider">
                  <li>
                     <i class="spritesheet-icons spritesheet-icons-features1"></i>
                     <span>Fastest <br> Turn-Around</span>
                  </li>
                  <li>
                     <i class="spritesheet-icons spritesheet-icons-features2"></i>
                     <span>Money Back <br> Guarantee</span>
                  </li>
                  <li>
                     <i class="spritesheet-icons spritesheet-icons-features3"></i>
                     <span>Award <br> Winning Team</span>
                  </li>
                  <li>
                     <i class="spritesheet-icons spritesheet-icons-features4"></i>
                     <span>Unique Design <br> Guarantee</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- feature section end -->
   <!-- packages -->
   <section class="packages-section sec-pad">
      <div class="container">
         <div class="packages-title-cont">
            <h2 class="sec-heading">View Our Best Seller Packages</h2>
            <p class="sec-para">We help organizations, small businesses, startups and entrepreneurs grow <br>with sophisticated logo designs in competitive pricing.</p>
         </div>
         <div class="packages-inner-container">
            <div class="row packages-slider owl-carousel owl-theme">
               <!-- package break from here -->
               <div data-package-box>
                  <div class="productSku" style="display: none;">LOGO_SPECIAL</div>
                  <div class="package-box">
                     <div class="packg-hdr">
                        <div class="packg-title-price-wrap">
                           <span>Logo Special</span>
                           <span>$63</span>
                        </div>
                        <h3 class="packg-price">$19</h3>
                        <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->

                     </div>
                     <div class="packg-body" data-package-scroll>
                        <ul>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>3 Logo Design Concepts</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 3 Revisions</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 1 Dedicated Designer</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> With Grey Scale Format</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Free Color Options</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Free Grayscale Formaty</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 24 To 48 Hours TAT</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> All File Formats (JPG only)</li>
                           <li class="features"><b>MORE FEATURES</b></li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Satisfaction</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Ownership Rights</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Money Back Guarantee</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Dedicated Account Manager</li>
                        </ul>
                     </div>
                     <div class="packg-ftr">
                        <a data-target="#popup_form" data-toggle="modal" class="cred-btn order-now" data-sku="LOGO_SPECIAL" data-price="19" data-price-text="$19.00" data-title="Logo Special">Order Now</a>
                        <!--data-bs-toggle="modal" data-bs-target="#exampleModal"-->
                     </div>
                  </div>
               </div>

               <div data-package-box>
                  <div class="productSku" style="display: none;">LOGO_LOGO_PLUS</div>
                  <div class="package-box">
                     <div class="packg-hdr">
                        <div class="packg-title-price-wrap">
                           <span>Logo Plus</span>
                           <span>$263</span>
                        </div>
                        <h3 class="packg-price">$79</h3>
                        <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->

                     </div>
                     <div class="packg-body" data-package-scroll>
                        <ul>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 8 Logo Design Concepts</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 1 Dedicated Designers</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 5 Revisions</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Free Business Card Design</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Free Color Options</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Free Grayscale Format</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Formats: JPEG and PNG only</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Free Icon</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 24 To 48 Hours TAT</li>
                           <li class="features"><b>MORE FEATURES</b></li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Unique Design</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Ownership Rights</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> Money Back Guarantee</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
                        </ul>
                     </div>
                     <div class="packg-ftr">
                        <a data-target="#popup_form" data-toggle="modal" data-target="#popup_form" data-toggle="modal" href="javascript:;" class="cred-btn order-now" data-sku="LOGO_LOGO_PLUS" data-price="79" data-price-text="$79.00" data-title="Logo Plus">Order Now</a>
                     </div>
                  </div>
               </div>

               <div data-package-box>
                  <div class="productSku" style="display: none;">LOGO_LOGO_PLATINUM</div>
                  <div class="package-box">
                     <div class="packg-hdr">
                        <div class="packg-title-price-wrap">
                           <span>Logo Platinum</span>
                           <span>$496</span>
                        </div>
                        <h3 class="packg-price">$149</h3>
                        <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->

                     </div>
                     <div class="packg-body" data-package-scroll>
                        <ul>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Logo Design Concepts</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Revisions</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>4 Dedicated Designers</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Stationery Design (Business Card, Letterhead, Envelope)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Icon</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Any 3 Social Media Designs (Profile Picture & Cover Photo)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Color Options</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Grayscale Format</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>24 To 48 Hours TAT</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>All File Formats (Ai, PSD, EPS, PNG, JPG, PDF)</li>
                           <li class="features"><b>MORE FEATURES</b></li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>100% Satisfaction</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Ownership Rights</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Money Back Guarantee</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Dedicated Account Manager</li>
                        </ul>
                     </div>
                     <div class="packg-ftr">
                        <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="cred-btn order-now" data-sku="LOGO_LOGO_PLATINUM" data-price="149" data-price-text="$149.00" data-title="Logo Platinum">Order Now</a>
                     </div>
                  </div>
               </div>
               <div data-package-box>
                  <div class="productSku" style="display: none;">LOGO_LOGO_BUSINESS</div>
                  <div class="package-box">
                     <div class="packg-hdr">
                        <div class="packg-title-price-wrap">
                           <span>Logo Business</span>
                           <span>$830</span>
                        </div>
                        <h3 class="packg-price">$249</h3>
                        <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->

                     </div>
                     <div class="packg-body" data-package-scroll>
                        <ul>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Logo Design Concepts</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Revisions</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>6 Dedicated Designers</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Stationery Design (Business Card, Letterhead, Envelopes, Invoice)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Corporate Brochure (Up-To 2 Pages)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Any 6 Social Media Designs (Profile Picture & Cover Photo)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>MS Word Letterhead</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Color Options</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Grayscale Format</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Icon</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>24 To 48 Hours TAT</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>All File Formats (Ai, PSD, EPS, PNG, JPG, PDF)</li>
                           <li class="features"><b>MORE FEATURES</b></li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>100% Satisfaction</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Ownership Rights</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Money Back Guarantee</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Dedicated Account Manager</li>
                        </ul>
                     </div>
                     <div class="packg-ftr">
                        <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="cred-btn order-now" data-sku="LOGO_LOGO_BUSINESS" data-price="249" data-price-text="$249.00" data-title="Logo Business">Order Now</a>
                     </div>
                  </div>
               </div>
               <div data-package-box>
                  <div class="productSku" style="display: none;">LOGO_LOGO_CORPORATE</div>
                  <div class="package-box">
                     <div class="packg-hdr">
                        <div class="packg-title-price-wrap">
                           <span>Logo Corporate</span>
                           <span>$1,163</span>
                        </div>
                        <h3 class="packg-price">$349</h3>
                        <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->

                     </div>
                     <div class="packg-body" data-package-scroll>
                        <ul>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Logo Design Concepts</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Revisions</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>6 Dedicated Designers</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Stationery Design (Business Card, Letterhead, Envelopes, Invoice)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Corporate Brochure (Up-To 4 Pages)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>1 Page Website Design</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Any 6 Social Media Designs (Profile Picture & Cover Photo)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>MS Word Letterhead</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Color Options</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Grayscale Format</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>24 To 48 Hours TAT</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>All File Formats (Ai, PSD, EPS, PNG, JPG, PDF)</li>
                           <li class="features"><b>MORE FEATURES</b></li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>100% Satisfaction</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Ownership Rights</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Money Back Guarantee</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Dedicated Account Manager</li>
                        </ul>
                     </div>
                     <div class="packg-ftr">
                        <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="cred-btn order-now" data-sku="LOGO_LOGO_CORPORATE" data-price="349" data-price-text="$349.00" data-title="Logo Corporate">Order Now</a>
                     </div>
                  </div>
               </div>
               <div data-package-box>
                  <div class="productSku" style="display: none;">LOGO_LOGO_GOLD</div>
                  <div class="package-box">
                     <div class="packg-hdr">
                        <div class="packg-title-price-wrap">
                           <span>Logo Gold</span>
                           <span>$1,663</span>
                        </div>
                        <h3 class="packg-price">$499</h3>
                        <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->

                     </div>
                     <div class="packg-body" data-package-scroll>
                        <ul>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Logo Design Concepts</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited Revisions</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>3 Dedicated Design Teams</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Stationery Design (Business Card, Letterhead, Envelope, Compliment Slip, Invoice)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Complete Brochure (4 Pages)</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Double Sided Flyer Design</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>3 Pages Template Website Design</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Profile Picture & Cover Photo</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>MS Word Letterhead</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Email Signature</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Fav Icon</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Dedicated Account Manager</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Color Options</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Free Grayscale Format</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>24 To 48 Hours TAT</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>DAll File Formats (Ai, PSD, EPS, PNG, JPG, PDF)</li>
                           <li class="features"><b>MORE FEATURES</b></li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>100% Satisfaction</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i> 100% Ownership Rights</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Money Back Guarantee</li>
                           <li><i class="fa fa-caret-right" aria-hidden="true"></i>Dedicated Account Manager</li>
                        </ul>
                     </div>
                     <div class="packg-ftr">
                        <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="cred-btn order-now" data-sku="LOGO_LOGO_GOLD" data-price="499" data-price-text="$499.00" data-title="Logo Gold">Order Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="top-packages">
            <div class="combo-slider">
               <div class="item">
                  <div class="bg-secondary" data-package-box>
                     <div class="productSku" style="display: none;">LOGO_INFINITE_LOGO</div>
                     <div class="row">
                        <div class="col-md-8">
                           <h2>Logo Infinite</h2>
                           <div class="combo-list-style" data-package-scroll>
                              <ul>
                                 <li> Unlimited Original Logo Concepts</li>
                                 <li> 8 Dedicated Logo Designer (Industry Specific)</li>
                                 <li> Unlimited Revisions</li>
                                 <li> 3 Page Basic Website</li>
                                 <li> Stationery Design (Business Card, Letterhead, Envelope)</li>
                                 <li> 500 Business Cards </li>
                                 <li> Email Signature Design</li>
                                 <li> 2 Sided Flyer OR Bi-Fold Brochure Design</li>
                                 <li> With Grey Scale Format</li>
                                 <li> Free Icon Design</li>
                                 <li> Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                 <li> 24 - 48 Hours Turn Around Time</li>
                                 <li class="features"><b>MORE FEATURES</b></li>
                                 <li> 100% Satisfaction</li>
                                 <li> 100% Ownership Rights</li>
                                 <li> Money Back Guarantee</li>
                                 <li> Dedicated Account Manager</li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-4 has-pad">
                           <div class="final">
                              <h3 class="ult-cut-prc"><span class="inner">$2330</span></h3>
                              <h1>$999</h1>
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="order-now dft-btn seller_order cred-btn open-popup" data-sku="LOGO_INFINITE_LOGO" data-price="999" data-price-text="$999.00" data-title="Logo Infinite">Order Now <i class="fas fa-caret-right"></i></a>
                           </div>
                           <figure>
                              <img class="m-auto img-fluid" src="assets/images/awards.webp" alt="">
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">

                  <div class="bg-secondary" data-package-box>
                     <div class="productSku" style="display: none;">LOGO_COMBO</div>
                     <div class="row">
                        <div class="col-md-8">
                           <h2>Logo Combo</h2>
                           <div class="combo-list-style" data-package-scroll>
                              <ul>
                                 <li>Unlimited Original Logo Concepts </li>
                                 <li>12 Dedicated Logo Designer (Industry Specific) </li>
                                 <li>Unlimited Revisions </li>
                                 <li>7 Page Informative Website </li>
                                 <li>Custom Ecommerce Website</li>
                                 <li>Stationery Design (Business Card, Letterhead, Envelope) </li>
                                 <li>Up to 200 Products</li>
                                 <li>Brand Book</li>
                                 <li>CMS /Admin Panel Integration</li>
                                 <li>500 Business Cards</li>
                                 <li>Fully Mobile Responsive</li>
                                 <li>500 Letterheads</li>
                                 <li>Email Signature Design</li>

                                 <li>2 Sided Flyer OR Bi-Fold Brochure Design</li>
                                 <li>With Grey Scale Format </li>
                                 <li><span>MORE FEATURES</span></li>
                                 <li>Free Icon Design </li>
                                 <li>100% Ownership Rights </li>
                                 <li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>
                                 <li>Dedicated Account Manager </li>
                                 <li>24 - 48 Hours Turn Around Time</li>
                                 <li>100% Satisfaction </li>
                                 <li>Social Media Designs (Facebook, Twitter, Instagram)</li>
                                 <li>Money Back Guarantee </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-4 has-pad">
                           <div class="final">
                              <h3 class="ult-cut-prc"><span class="inner">$3330</span></h3>
                              <h1>$1299</h1>
                              <a data-target="#popup_form" data-toggle="modal" href="javascript:;" class="order-now dft-btn seller_order cred-btn open-popup" data-sku="LOGO_COMBO" data-price="1299" data-price-text="$1299.00" data-title="Logo Combo">Order Now <i class="fas fa-caret-right"></i></a>
                           </div>
                           <figure>
                              <img class="m-auto img-fluid" src="assets/images/awards.webp" alt="">
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- packages end -->
   <!-- main cta start -->
   <section class="main-cta">
      <div class="container cta-cont">
         <div class="row">
            <div class="col-lg-8 col-md-7">
               <div class="cta-wrapper">
                  <h2 class="sec-heading">Try Us Out Risk Free!</h2>
                  <p class="sec-para">Conceptually driven logo concepts that <br>guarantee 100% client satisfaction. Consult now with a design expert today</p>
               </div>
               <div class="cta-contact-detail">
                  <div class="phn-wrap d-flex align-items-center  justify-content-start">
                     <i class="spritesheet-icons spritesheet-icons-cta-phone"></i>
                     <div class="pl-2 contact-number">
                        <span>Call Us:</span>
                        <p class="mb-0"><a href="tel:+1 817 533 6583">+1 817 533 6583</a></p>
                     </div>
                  </div>
                  <div class="chat-wrap d-flex align-items-center  justify-content-start">
                     <i class="spritesheet-icons spritesheet-icons-cta-chat"></i>
                     <div class="pl-2 pr-2 pr-xl-5 chat-area">
                        <span>24/7 Avalaible</span>
                        <p class="mb-0 chat"><a href="javascript:;" class="chat">Live Chat</a></p>
                     </div>
                  </div>
                  <div class="cta-btn-wrap">
                     <a href="#" class="cta-btn dft-btn popup-open">
                        Let’s Get Started <i class="fas fa-caret-right"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-5">
               <p class="price-para">Basic Logo for</p>
               <h3 class="cta-price"><sup>$</sup>19</h3>
            </div>
         </div>
      </div>
   </section>
   <!-- cta end -->
   <!-- Portfolio -->
   <section class="portfolio sec-pad">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-10">
               <h2 class="sec-heading">Our <span> Portfolio</span></h2>
               <p class="sec-para"> Design Vikings is loved and chosen by its clients because of the
                  creative, aesthetically-pleasing and crisp design.
                  All the design ninjas at our company are industry-experienced and out of the box thinkers.</p>
            </div>
         </div>
      </div>
      <div class="portfolio-wrap">
         <div class="row no-gutters portfolio-responsive-slider">
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p3.webp" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p2.webp" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p1.webp" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p4.webp" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p5.webp" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p6.webp" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p7.webp" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 portfolio-box">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <img src="assets/images/webp/portfolio/p8.webp" alt="" class="img-fluid">
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-5 col-sm-6">
            <div class="portfolio-chat-wrap chat-wrap d-flex ">
               <a href="#" class="portfolio-btn dft-btn popup-open">
                  Let’s Get Started <i class="fas fa-caret-right"></i>
               </a>
               <img src="assets/images/webp/chat-ico.webp" alt="Chat icon" class="img-fluid">
               <div class="pl-2 pr-2 pr-xl-5 chat-area">
                  <span>24/7 Avalaible</span>
                  <p class="mb-0 chat"><a href="javascript:;" class="chat">Live Chat</a></p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Portfolio -->
   <!-- testimonia start -->
   <section class="testimonial sec-pad">
      <div class="container">
         <h2 class="sec-heading">Wall of Loves</h2>
         <h2></h2>
         <div class="row testi-slider ">
            <div class="col-lg-4 testi-wrapper">
               <img src="assets/images/webp/testi-1.webp" class="img-fluid">
               <div class="testi-content">
                  <h4>Ravelo Travel</h4>
                  <p>The designers and service agents are extremely talented and professional. The creativity impressed immensely. With the competitive prices they are offering, I highly recommend them.</p>
               </div>
            </div>
            <div class="col-lg-4 testi-wrapper">
               <img src="assets/images/webp/testi-2.webp" class="img-fluid">
               <div class="testi-content">
                  <h4>Chase Fitness</h4>
                  <p>Beginning a business isn’t the biggest challenge, but getting it recognized it in the industry definitely is! I firmly believe that Design Vikings the Design Vikings company that has reached to a level in no time. </p>
               </div>
            </div>
            <div class="col-lg-4 testi-wrapper">
               <img src="assets/images/webp/testi-3.webp" class="img-fluid">
               <div class="testi-content">
                  <h4>Tanner Lawley</h4>
                  <p>From last many years, I have been doing business with Design Vikings and they are my favorite, I appointed them, for my first project and trust me, I have never regretted it. Ever since I have never worked with any other company. Highly recommended.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--last cta start-->
   <section class="lp-cta">
      <div class="container-xl">
         <div class="row">
            <div class="col-lg-8 lp-cta-inner-cont">
               <p>Register Now & Get Your Logo Delivered In Just One Hour</p>
               <h2>
                  <strong>Get Custom Logo Designed in just $19</strong>
               </h2>
               <div class="lp-cta-btns">
                  <a href="javascript:;" class="chat dft-btn">Let’s Talk</a>
                  <a href="javascript:;" class="popup-open dft-btn open-popup">Start Your Project</a>
                  <a href="tel:+1 817 533 6583" class="dft-btn">+1 817 533 6583</a>
               </div>
            </div>
         </div>
         <div id="slider">
            <div class="dp-wrap">
               <div id="dp-slider">
                  <div class="dp_item" data-class="1" data-position="1">
                     <div class="dp-img">
                        <img class="cta-img-1" src="assets/images/webp/cta-1-img.webp" alt="cta-1">
                     </div>
                  </div>

                  <div class="dp_item" data-class="2" data-position="2">
                     <div class="dp-img">
                        <img class="cta-img-1" src="assets/images/webp/cta-2-img.webp" alt="cta-1">
                     </div>
                  </div>

                  <div class="dp_item" data-class="3" data-position="3">
                     <div class="dp-img">
                        <img class="cta-img-1" src="assets/images/webp/cta-3-img.webp" alt="cta-1">
                     </div>
                  </div>

                  <div class="dp_item" data-class="4" data-position="4">
                     <div class="dp-img">
                        <img class="cta-img-1" src="assets/images/webp/cta-4-img.webp" alt="cta-1">
                     </div>
                  </div>
               </div>
               <span id="dp-next">
                  <i class="fas fa-long-arrow-alt-right"></i>
               </span>
               <span id="dp-prev">
                  <i class="fas fa-long-arrow-alt-left"></i>
               </span>
            </div>
         </div>
      </div>
   </section>
   <!--last cta start-->
   <!-- Copy-right  & secure payement-->
   <footer class="copy-secure">
      <div class="container">
         <div class="row justify-content-between align-items-center ">
            <div class="col-lg-3 col-md-4 col-sm-12">
               <div class="footer-logo-area d-flex align-items-center justify-content-center justify-content-lg-start mb-3 mb-sm-0">
                  <img src="assets/images/logo.png" alt="">
               </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-12">
               <div class="copy-right-wrap position-relative text-center text-lg-left mb-lg-0">
                  <p class="text-white text-center">Copyright 2023 Design Vikings | All Rights Reserved. </p>
               </div>
               <div class="term-privacy d-flex align-items-center justify-content-center ">
                  <!-- <p class="mb-0 border-right px-1 px-xl-2 text-white"><a href="../order/terms.php" class="text-reset">Terms & Conditions</a></p> -->
                  <!-- <p class="mb-0 px-1 px-xl-2 text-white"><a href="../order/privacy.php" class="text-reset">Privacy Policy</a></p> -->
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
               <div class="secure-payment text-center text-lg-right">
                  <img src="assets/images/webp/bank-cards-img.webp">
               </div>
            </div>
         </div>
   </footer>
   <!-- End Copy-right  & secure payement-->

   <!-- popup form -->
   <div id="popup" class="custom-popup">
      <div class="container">
         <a href="javascript:;" id="popup-closed" class="closed"></a>
         <h3>Let's Build Something Great Together!</h3>
         <p>Drop us a line or view contact info.</p>
         <div id="popupform" class="fixedform-1" data-form-type="ordernow_form">
            <form class="jform row leadFormWithOrder float-form" method="post" enctype="multipart/form-data" action="javascript:void(0)" id="modal-form">
               <!--hidden required values-->
               <span class="htmlDescription d-none">
                  <ul>
                     <li> 3 Logo Design Concepts</li>
                     <li> 3 Revisions</li>
                     <li> 1 Dedicated Designer</li>
                     <li> Free Color Options</li>
                     <li> Free Grayscale Format</li>
                     <li> 24 To 48 Hours TAT</li>
                     <li> All File Formats (JPG only)</li>
                     <li class="features"><b>MORE FEATURES</b></li>
                     <li> 100% Satisfaction</li>
                     <li> 100% Ownership Rights</li>
                     <li> Money Back Guarantee</li>
                     <li> Dedicated Account Manager</li>
                  </ul>
               </span>
               <input type="hidden" id="formType" name="formType" value="Modal Signup Form">
               <input type="hidden" id="referer" name="referer" value="google">
               <input type="hidden" id="price" name="price" value="19">
               <input type="hidden" id="title" name="package" value="Logo Special">
               <input type="hidden" name="sku" value="LOGO_SPECIAL">
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
               <div class="col-md-4">
                  <div class="mm-field namefield">
                     <input type="text" name="name" value="" id="m2" placeholder="Your Name*" data-validation="required" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="mm-field emailfield">

                     <input type="email" name="email" id="email-val-pop" class="email" value="" placeholder="Email address*" data-validation="required" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="mm-field pnfields">
                     <input type="text" class="number" placeholder="Phone*" name="phone" maxlength="10" value="" data-validation="required" required />
                  </div>
               </div>
               <!--<div class="col-md-12">-->
               <!--   <div class="mm-field textarea">-->
               <!--      <textarea name="message" placeholder="Enter your comment here" id="" rows="6" required></textarea>-->
               <!--   </div>-->
               <!--</div>-->
               <div class="col-md-12">
                  <div class="input-btn">
                     <button type="submit" id="signupBtn" name="signupForm">Submit Your Request</button>
                  </div>
                  <div id="formResult" style="width: 100%;text-align: center;font-size: 18px;margin: auto;"></div>
               </div>
            </form>
         </div>
      </div>
   </div>



   <!--Package Modal -->
   <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
   <!--  <div class="modal-dialog">-->
   <!--    <div class="modal-content">-->

   <!--      <div class="modal-body">-->
   <!--           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>-->
   <!-- <form id="header-form" class="leadForm_old new_modal_form form-poup" method="post" enctype="multipart/form-data" action="javascript:void(0)">-->
   <!--                hidden required values-->
   <!--                <input type="hidden" id="formType" name="formType" value="Order Page">-->
   <!--                <input type="hidden" id="referer" name="referer" value="Ads">-->
   <!--                <input type="hidden" name="sku" value="">-->
   <!--                <input type="hidden" name="package" value="">-->
   <!--                <input type="hidden" name="price" value="">-->
   <!--                <input type="hidden"  id="package_items" data-package_items="package_items" value="">-->
   <!--                <input type="hidden" name="page" value="<?php echo $website . $pageurl; ?>">-->
   <!--                <input type="hidden" name="ip" value="<?php echo $ip; ?>">-->
   <!--                <input type="hidden" name="realip" value="<?php echo $clientIP; ?>">-->
   <!--                <input type="hidden" name="org" value="<?php echo $organization; ?>">-->
   <!--                <input type="hidden" name="country" value="<?php echo $country; ?>">-->
   <!--                <input type="hidden" name="region" value="<?php echo $region; ?>">-->
   <!--                <input type="hidden" name="city" value="<?php echo $city; ?>">-->
   <!--                <input type="hidden" name="latitude" value="<?php echo $latitude; ?>">-->
   <!--                <input type="hidden" name="longitude" value="<?php echo $longitude; ?>">-->
   <!--                <input type="hidden" name="timezone" value="<?php echo $timezone; ?>">-->
   <!--                <input type="hidden" name="postal" value="<?php echo $postal; ?>">-->


   <!--                <div class="col-md-12 form-sec step-1-form">-->
   <!--                  <h4>Please Fill the Form</h4>-->
   <!--                  <ul>-->
   <!--                    <li>-->
   <!--                      <label>Name <span class="req-field-star">*</span></label>-->
   <!--                      <input type="text" name="name" id="m3" placeholder="Name" data-validation="required"  required pattern="[a-zA-Z\s]+">-->
   <!--                    </li>-->
   <!--                    <li>-->
   <!--                      <label>Email Address <span class="req-field-star">*</span></label>-->
   <!--                      <input type="email" name="email" id="popup-mail-form"placeholder="Address" data-validation="email" required>-->
   <!--                    </li>-->
   <!--                    <li>-->
   <!--                      <label>Phone Number <span class="req-field-star">*</span></label>-->
   <!--                      <input type="tel" name="phone" placeholder="Phone Number" required data-validation="number" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">-->
   <!--                    </li>-->
   <!--                  </ul>-->
   <!--                  <div class="col-md-12 form-sec ">-->
   <!--                  <ul>-->
   <!--                    <li class="submit-btn">-->
   <!--                      <div id="formResult"></div>-->
   <!--                      <button type="submit" class="tbtn btn-red a-btn" id="signupBtn" name="signupForm">SUBMIT-->
   <!--                      </button>-->
   <!--                    </li>-->
   <!--                  </ul>-->
   <!--                </div>-->
   <!--                </div>-->

   <!--              </form>-->
   <!--      </div>-->

   <!--    </div>-->
   <!--  </div>-->
   <!--</div>-->

   <!--form Modal Popup-->
   <div class="modal fade pre-signup" id="popup_form">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <div class="entry-box" data-form-type="ordernow_form">
                  <form id="header-form" class="leadForm_old new_modal_form form-poup popup-form" method="post" enctype="multipart/form-data" action="javascript:void(0)">
                     <!--hidden required values-->

                     <input type="hidden" id="formType" name="formType" value="Order Page">
                     <input type="hidden" id="referer" name="referer" value="Ads">
                     <input type="hidden" name="sku" value="">
                     <input type="hidden" name="package" value="">
                     <input type="hidden" name="price" value="">
                     <input type="hidden" id="package_items" data-package_items="package_items" value="">
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
                        <button type="button" name="close" class="close" aria-label="close" data-dismiss="modal">×</button>
                        <h1>up to 70% Discount</h1>
                     </div>
                     <div class="col-sm-12 entry-right">
                        <div class="text">
                           <h2><span>70% off </span> till midnight</h2>
                           <p>Fill out this brief form to get your <strong>Discount reserved.</strong></p>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="name" placeholder="Your Name" data-validation="required" required pattern="[a-zA-Z\s]+" onkeydown="SpaceBlockModalForm()">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Email Address" data-validation="required" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="tel" class="form-control" name="phone" maxlength="10" placeholder="Phone" data-validation="required" required onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group mb-0 mt-4">
                              <div id="formResult" class="slideformResult"></div>
                              <button type="submit" class="entery-submit" name="signupForm" aria-label="signupForm" id="signupBtn" value="1">
                                 Place your order
                              </button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--form Modal Popup-->






   <!--form Modal 2 Popup-->
   <div class="modal modal2 fade pre-signup" id="popup_form">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body">
               <div class="entry-box" data-form-type="ordernow_form">
                  <form class="jform row leadFormWithOrder" method="post" enctype="multipart/form-data" action="javascript:void(0)" id="modal-form">
                     <!--hidden required values-->
                     <span class="htmlDescription d-none">
                        <ul>
                           <li> 3 Logo Design Concepts</li>
                           <li> 3 Revisions</li>
                           <li> 1 Dedicated Designer</li>
                           <li> Free Color Options</li>
                           <li> Free Grayscale Format</li>
                           <li> 24 To 48 Hours TAT</li>
                           <li> All File Formats (JPG only)</li>
                           <li class="features"><b>MORE FEATURES</b></li>
                           <li> 100% Satisfaction</li>
                           <li> 100% Ownership Rights</li>
                           <li> Money Back Guarantee</li>
                           <li> Dedicated Account Manager</li>
                        </ul>
                     </span>
                     <input type="hidden" id="formType" name="formType" value="Order Page">
                     <input type="hidden" id="referer" name="referer" value="Ads">
                     <input type="hidden" name="sku" value="basic">
                     <input type="hidden" name="package" value="basic">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" id="package_items" data-package_items="package_items" value="">
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
                        <button type="button" name="close" class="close" aria-label="close" data-dismiss="modal">×</button>
                        <h1>up to 70% Discount</h1>
                     </div>
                     <div class="col-sm-12 entry-right">
                        <div class="text">
                           <h2><span>70% off </span> till midnight</h2>
                           <p>Fill out this brief form to get your <strong>Discount reserved.</strong></p>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="text" class="form-control" name="name" placeholder="Your Name" data-validation="required" required pattern="[a-zA-Z\s]+" onkeydown="SpaceBlockModalForm()">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Email Address" data-validation="required" required pattern="^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="tel" class="form-control" name="phone" maxlength="10" placeholder="Phone" data-validation="required" required onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group mb-0 mt-4">
                              <div id="formResult" class="slideformResult"></div>
                              <button type="submit" class="entery-submit" name="signupForm" aria-label="signupForm" id="signupBtn" value="1">
                                 Place your order
                              </button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--form Modal Popup-->

   <!-- popup form -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- scripts -->
   <script src="assets/js/plugins.js"></script>

   <!-- Main Requests Helper -->
   <script src="assets/js/ajaxHelper.js"></script>

   <!-- General Functions -->
   <script src="assets/js/generalHelper.js"></script>

   <!-- recaptcha script -->
   <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>

   <script src="assets/js/leadManagement.js?v=7"></script>

   <script src="assets/js/pricingManagement.js?v=0.3"></script>



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
   <script>
      $('.order-now').click(function(e) {
         e.preventDefault();
         // GET VALUES
         let sku = $(this).data('sku');
         let title = $(this).data('title');
         let priceText = $(this).data('price-text');
         let price = $(this).data('price');
         let package_items = $(this).parent().parent().children('.packg-body').children().html();

         //SAVE VALUES
         $('.new_modal_form input[name=sku]').val(sku);
         $('.new_modal_form input[name=price]').val(price);
         $('.new_modal_form input[name=package]').val(title);
         $('.new_modal_form input[data-package_items=package_items]').val(package_items);
         $('#exampleModal').modal('show');

         console.log(package_items);
      })
   </script>

   <!--   <script>-->
   <!--    jQuery(document).ready(function() {-->
   <!--  jQuery('#header-form').submit(function(event) {-->
   <!--    var email = jQuery('#email-val').val();-->
   <!--    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}jQuery/;-->

   <!--    if (!emailRegex.test(email)) {-->
   <!--event.preventDefault(); // Prevent form submission-->
   <!--    }-->
   <!--  });-->
   <!--});-->



   <!-- $(document).ready(function() {-->
   <!--      $('#m2').on('input', function() {-->
   <!--        $(this).val(function(_, val) {-->
   <!--          return val.replace(/[^a-zA-Z\s]/g, '');-->
   <!--        });-->
   <!--      });-->
   <!--    });-->


   <!-- $(document).ready(function() {-->
   <!--      $('#m1').on('input', function() {-->
   <!--        $(this).val(function(_, val) {-->
   <!--          return val.replace(/[^a-zA-Z\s]/g, '');-->
   <!--        });-->
   <!--      });-->
   <!--    });-->

   <!--  jQuery(document).ready(function() {-->
   <!--  jQuery('.jform').submit(function(event) {-->
   <!--    var email = jQuery('#email-val-pop').val();-->
   <!--    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}jQuery/;-->

   <!--    if (!emailRegex.test(email)) {-->
   <!--event.preventDefault(); // Prevent form submission-->
   <!--    }-->
   <!--  });-->
   <!--});-->


   <!-- $(document).ready(function() {-->
   <!--      $('#m3').on('input', function() {-->
   <!--        $(this).val(function(_, val) {-->
   <!--          return val.replace(/[^a-zA-Z\s]/g, '');-->
   <!--        });-->
   <!--      });-->
   <!--    });-->

   <!--jQuery(document).ready(function() {-->
   <!--  jQuery('.form-poup').submit(function(event) {-->
   <!--    var email = jQuery('#popup-mail-form').val();-->
   <!--    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}jQuery/;-->

   <!--    if (!emailRegex.test(email)) {-->
   <!--event.preventDefault(); // Prevent form submission-->
   <!--    }-->
   <!--  });-->
   <!--});-->

   <!--setTimeout(function(){-->
   <!--    $('.modal2').addClass('show').css('display','block')-->
   <!--},3000)-->

   <!--$('button.close').click(function(){-->
   <!--    $('.modal2').removeClass('show').css('display','none')-->
   <!--})-->
   <!-- </script>-->

   <!--jQuery Validation CDN-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!--Custom Validation JS-->
   <script src="assets/js/custom-validation.js?v=2"></script>

   <!--Chat Script-->

   <script>
      $('.chat, .live_chatt, .chatt').click(function() {
         $zopim.livechat.window.toggle();
         return false;
      });
   </script>


</body>

</html>