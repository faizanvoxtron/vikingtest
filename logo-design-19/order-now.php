<?php

include_once('includes/universal.php');
$params = new universal();
$site = $params->params()['url'];

if (!isset($_COOKIE['package']) && !isset($_COOKIE['html'])) {
  header("location:" . $site);
  exit;
}
include('ip/getIpInfo.php');
$ipdetails = getInfo();
$pageurl = $_SERVER['REQUEST_URI'];
$website = $_SERVER['HTTP_HOST'];
$ip = $ipdetails['ip'];
$city = $ipdetails['city'];
$region = $ipdetails['region'];
$country = $ipdetails['country'];
$organization = $ipdetails['organization'];
$isp = $ipdetails['isp'];
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

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="facebook-domain-verification" content="0x8q6sdt14y1d39iu1g1ylwqad6mhe" />
  <title> Sign Up - Design Vikings</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="icon" href="assets/images/favicon.png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom-scroller.css?ver=0.2" rel="stylesheet">
  <link href="assets/css/style-web.css?ver=0.1" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  <!-- Start of  Zendesk Widget script -->
  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>
  <!-- End of  Zendesk Widget script -->



  <style>
    .selected-dial-code {
      display: none;
    }

    .mCSB_outside+.mCSB_scrollTools {
      right: 0px !important;
    }

    .bets_seller_list {
      height: auto !important;
    }

    .slimScrollBar {
      display: none !important;
    }

    .features {
      font-weight: 700;
    }

    .packdetails .listpacks li.features:before {
      content: " ";
    }
  </style>
  <!-- Meta Pixel Code -->

  <script>
    ! function(f, b, e, v, n, t, s)

    {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?

          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };

      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';

      n.queue = [];
      t = b.createElement(e);
      t.async = !0;

      t.src = v;
      s = b.getElementsByTagName(e)[0];

      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',

      'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '684755740088602');

    fbq('track', 'PageView');
  </script>

  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=684755740088602&ev=PageView&noscript=1" /></noscript>

  <!-- End Meta Pixel Code -->
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



<body class="home-page">
  <header>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3">
          <a href="../" class="header-logo">
            <img width="210" src="assets/images/logo.png" alt="">
          </a>
        </div>
        <div class="col-md-9">
          <div class="phoneInfo">
            <ul>
              <li>
                <a href="javascript:;" class="chat"><i class="chat-icon for-sprite"></i>
                  Start Live Chat</a>
              </li>
              <li>
                <a href="tel:+1 817 533 6583"><i class="tell-icon for-sprite"></i> Call 24/7: <span>+1 817 533 6583</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="page-title">
    <div class="container">
      <h1>Let's Get Started with Your Project</h1>
      <p>Please Provide the information requested below.</p>
    </div>
  </section>
  <section class="steps-seq">
    <div class="container">
      <ul id="progressbar">
        <li class="active">
          <h4>Order Now</h4>
        </li>
        <li class="progressbar-2">
          <h4 id="dynamicValue">Logo Brief</h4>
        </li>
        <li class="color">
          <h4>Payment</h4>
        </li>
      </ul>
    </div>
  </section>
  <section class="content-seq">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-9">
          <div class="row" style="display: flex;flex-wrap: wrap;">
            <div class="col-md-6 col-lg-5">
              <div class="boxpackages">
                <div class="packheads">
                  <div class="productSku" style="display: none;"><?php echo $_COOKIE['sku']; ?></div>
                  <h3 class="montfont packageName"><?php echo $_COOKIE['package']; ?></h3>
                </div>
                <div class="packdetails">
                  <div class="packtitles">
                    <div class="fleft">
                      <h3 class="opensansfont packagePrice"><?php echo $_COOKIE['priceText']; ?></h3>
                    </div>
                  </div>
                  <div class="listpacks">
                    <?php echo $_COOKIE['html']; ?>
                  </div>
                  <div class="botarea-pack">
                    <div class="liovechats-bx">
                      <a href="javascript:;" title="" class="chat">
                        <span>Click here to</span>
                        <h5 class="montfont">Live Chat</h5>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-7" data-form-type="ordernow_form">
              <form id="orderForm" class="leadForm" method="post" enctype="multipart/form-data" action="javascript:void(0)">
                <!--hidden required values-->
                <input type="hidden" id="formType" name="formType" value="Order Page">
                <input type="hidden" id="referer" name="referer" value="Ads">
                <input type="hidden" name="sku" value="<?php echo $_COOKIE['sku']; ?>">
                <input type="hidden" name="package" value="<?php echo $_COOKIE['package']; ?>">
                <input type="hidden" name="price" value="<?php echo $_COOKIE['price']; ?>">
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


                <div class="col-md-12 form-sec step-1-form">
                  <h4>Please Fill the Form</h4>
                  <ul>
                    <li>
                      <label>Name <span class="req-field-star">*</span></label>
                      <input type="text" name="name" placeholder="Name" data-validation="required" required pattern="[a-zA-Z\s]+">
                    </li>
                    <li>
                      <label>Email Address <span class="req-field-star">*</span></label>
                      <input type="email" name="email" placeholder="Address" data-validation="email" required>
                    </li>
                    <li>
                      <label>Phone Number <span class="req-field-star">*</span></label>
                      <input type="tel" name="phone" placeholder="Phone Number" required data-validation="number" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                    </li>
                  </ul>
                </div>
                <div class="col-md-12 form-sec ">
                  <ul>
                    <li class="submit-btn">
                      <div id="formResult"></div>
                      <button type="submit" class="tbtn btn-red a-btn" id="signupBtn" name="signupForm">SUBMIT
                      </button>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-3 sidebar">
          <h2><span>Need</span> Assistance?</h2>
          <ul>
            <li>
              <a href="tel:+1 817 533 6583">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Toll Free:</span> +1 817 533 6583 </a>
            </li>
            <li><a href="javascript:;" class="chat"><i class="fa fa-comments" aria-hidden="true"></i>
                <span>Live Chat:</span>with our design expert</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>&copy; Copyright 2023 Design Vikings. All Rights Reserved</p>
        </div>
        <div class="col-md-6">
          <p class="align">
            <a href="https://designvikings.us/privacy-policy" target="_blank">Privacy Policy</a> | <a href="https://designvikings.us/terms-and-conditions" target="_blank">Terms &
              Conditions</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="assets/js/lib.js"></script>
  <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
  <script src="assets/js/functions.js"></script>

  <script type="text/javascript">
    var logoField = "";
    var categ = Array();
    var i = 0;
    $(".bordr").click(function() {
      // console.log($(this).parent('i').parent('li').find('p').html())
      var selct = $(this).attr('selected');
      console.log();
      var trys = 0;
      for (var j = 0; j < categ.length; j++) {

        if ($(this).attr("src") == categ[j]) {
          var abc = $(this).parent('i').parent('li').find('p').html();
          logoField = logoField.replace(abc, '');
          $(this).css("border", "3px solid #777");
          categ[j] = "";
          trys = 1;
        }

      }
      if (trys == 0) {

        var abc = $(this).parent('i').parent('li').find('p').html();
        logoField += " " + abc;
        $(this).css("border", "3px solid #97C03E");
        categ[i] = $(this).attr("src");
        i++;

      }
      newAr = Array();
      var l = 0;

      for (var k = 0; k < categ.length; k++) {

        if (categ[k] != "") {
          newAr[l] = categ[k];
          l++;
        }

      }

      $('#logoSelect').val(logoField);

    });
  </script>



  <script>
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
    $('.chat, .chatt, .live_chatt').click(function() {
      $zopim.livechat.window.toggle();
    });
  </script>




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
      background: rgba(242, 222, 222, 0.5);
    }
  </style>

  <!-- Forms validation -->
  <script src="assets/js/form_validator.min.js"></script>

  <!-- Main Requests Helper -->
  <script src="assets/js/ajaxHelper.js"></script>

  <!-- General Functions -->
  <script src="assets/js/generalHelper.js"></script>

  <!-- Sweet Alert -->
  <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  <script src="assets/js/sweetalert.min.js"></script>

  <!-- recaptcha script -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>


  <!-- Lead Management Of Form -->
  <script src="assets/js/leadManagement.js?v=69"></script>

</body>

</html>