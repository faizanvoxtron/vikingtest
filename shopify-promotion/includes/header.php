<?php
// require_once('ip/getIpInfo.php');
// $ipdetails = getInfo();
// $pageurl = $_SERVER['REQUEST_URI'];
// $website = $_SERVER['HTTP_HOST'];
// $ip = $ipdetails['ip'];
// $city = $ipdetails['city'];
// $region = $ipdetails['region'];
// $country = $ipdetails['country'];
// $organization = $ipdetails['organization'];
// $latitude = $ipdetails['latitude'];
// $longitude = $ipdetails['longitude'];
// $timezone = $ipdetails['timezone'];
// $postal = $ipdetails['postal_code'];
// $clientIP = $_SERVER['HTTP_CLIENT_IP']
//   ?? $_SERVER["HTTP_CF_CONNECTING_IP"] 
//   ?? $_SERVER['HTTP_X_FORWARDED']
//   ?? $_SERVER['HTTP_X_FORWARDED_FOR']
//   ?? $_SERVER['HTTP_FORWARDED']
//   ?? $_SERVER['HTTP_FORWARDED_FOR']
//   ?? $_SERVER['REMOTE_ADDR']
//   ?? '0.0.0.0';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shopify Store Developer | Design Vikings</title>

  <!-- css start -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
  <link rel="stylesheet" href="./assets/css/style.css?v=3.1" />
  <link rel="stylesheet" href="./assets/css/responsive.css?v=1.7" />
  <link href="https://fonts.googleapis.com/css?family=Sora:400,500,700,900&display=swap" rel="stylesheet import preload" as="style" async />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />






  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Start of  Zendesk Widget script -->
  <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>
  <script>
    $('.chat, .chatt, .live_chatt').click(function() {
      $zopim.livechat.window.show();
    });
  </script>
  <script>
    zE(function() {
      $zopim.livechat.setOnUnreadMsgs(function(numUnread) {
        if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
          $zopim.livechat.window.show();
        }
      })
    });
  </script>
</head>

<body>


  <div class="header">
    <div class="container">

      <div class="main-header">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="logo">
              <a href="/">
                <img class="img-fluid" src="assets/images/logo.png" alt="logo" />
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="side-nav">

              <!-- <img class="img-fluid" src="assets/images/search-icon.png"> -->
              <div class="chat">
                <a href="javascript::" class="chat-btn chat chatt">Live Chat</a>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>