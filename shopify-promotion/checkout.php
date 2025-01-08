<?php
include('./includes/header.php');
?>

<style>
  section.thankyou-col {
    padding-top: 200px;
    padding-bottom: 100px;
  }

  .pay {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .pay-btn {
    border: 1px solid black;
    width: fit-content;
    margin: auto;
    padding: 15px;
    border-radius: 5px;
    margin-top: 40px;
  }

  .pay-btn img {
    filter: invert(1);
  }

  .pay-btn button {
    background: transparent;
    color: black;
    border: none;
  }

  .pay-btn:hover {
    background: black;
  }

  .pay-btn:hover button {
    color: #fff;
  }

  .pay-btn:hover img {
    filter: brightness(20.5);
  }

  section.disclaimer {
    background: #fe7443;
    color: #fff;
    margin: 0;
    padding: 28px 0 16px 0;
  }

  body {
    background-image: url(assets/images/banner.png) !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .thanks-top {
    text-align: center;
    display: block;
  }

  /* a.chat-btn {
    text-decoration: none;
    color: #fff;
    padding: 10px 30px;
    border: 1px solid #fe7443;
    border-radius: 30px;
    background: #fe7443;
    font-size: 20px;
    float: right;
  }

  .get-quote {
    margin: 15px 0 0 0;
    padding: 10px 15px;
    background: #0d356d;
    border-radius: 7px;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    display: inline-block;
    min-width: 100px;
    border: 0;
    text-transform: uppercase;
  }

  .get-quote:hover {
    margin: 15px 0 0 0;
    padding: 10px 15px;
    background: #fff;
    border-radius: 7px;
    color: #0d356d;
    text-decoration: none;
    font-weight: 500;
    display: inline-block;
    min-width: 100px;
    border: 0;
    text-transform: uppercase;
    box-shadow: 0 0px 6px #0d356d;
  }

  .logo-wrapper img {
   
    margin: 8px 0 0 0;
  }




  .thanks-top .sm-title {
    font-size: 28px;
    font-weight: 600;
  }

  .thanks-top p {
    text-align: center;
    font-size: 18px;
    color: black;
  }

  .thanks-top .big-title {
    font-size: 48px;
    font-weight: 800;
    color: #000;
  }

  h4.f-title {
    font-size: 21px;
    font-weight: 800;
    color: #1ee32d;
  }





  .touch {
    text-align: center;
    margin: 35px 0 0;
  }

  .icon-box {
    margin: 0;
    display: block;
    position: relative;
  }

  .icon-box a {
    text-decoration: none;
  }

  .icon-box span.icon {
    width: 80px;
    height: 80px;
    background: #fe7443;
    border-radius: 50px;
    display: block;
    margin: auto;
    overflow: hidden;
  }


  .icon-box span.icon img {
    width: 48px;
    height: 100%;
    margin: auto;
    text-align: center;
    display: block;
    filter: invert(1);
  }

  .icon-box p {
    margin-top: 10px;
    text-align: center;
    font-size: 18px;
    font-weight: 700;
  }

  .icon-box span a {
    font-size: 21px;
    text-decoration: none;
    color: #0d356d;
  }

  @media screen and (max-width:991px) {
    .logo-wrapper {
      margin: 10px 0 0 0;
    }

    a.chat-btn {

      float: none;
    }

    .chat {
      text-align: center;
      margin: 30px 0px 0px 20px;
    }

    .logo-wrapper img {
      width: 170px;
      display: block;
      margin: auto;
    }

    .get-quote {
      float: unset !important;
    }

    .get-quote {
      float: unset !important;
      margin: 15px auto 0 auto;
      width: 155px;
      display: block;
    }

    .b-navigation__menu-right {
      display: flex;
      justify-content: center;
      pointer-events: auto;
      margin: 47px auto 12px auto;
    }

    section.briefForm {
      margin-top: 20px;
    }

    .seqImg {
      margin: 0 0 45px 0;
      padding: 0;
    }

    section.briefForm .pe-5 {
      padding-right: 0 !important;
    }

    .sidebar {
      margin: 0 0 25px 0;
    }
  } */
</style>

<!-- THANK YOU -->
<section class="thankyou-col">
  <div class="container">
    <div class="thanks-top">
      <!-- <h2 class="sm-title mt-5">Be In Touch With Us 24/7!</h2> -->
      <!-- <p>Our design consultant team will be contacting you shortly in order to discuss your project requirements.<br>Meanwhile, if you have any further concerns or queries you may feel free to contact us any time.</p> -->
      <h1 class="big-title">Checkout</h1>
      <p>Your personal data will be used to process your order, support your experience throughout this website, <br>and for other purposes described in our <a href="https://designvikings.us/privacy-policy">privacy policy.</a></p>
    </div>
    <div class="pay">
      <h2>We Accept</h2>
      <img class="img-fluid" src="assets/images/cards.png" />
    </div>
    <?php
    session_start();
    if (!empty($_SESSION['error'])) {
      echo '<p class="text-danger alert-danger"> ' . $_SESSION['error'] .
        '</p>';
      unset($_SESSION['error']);
    }
    ?>
    <form method="post" action="form-bootstrap/payment.php" enctype="multipart/form-data">
      <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">
      <input type="hidden" name="package" value="<?= $_GET['package'] ?>">
      <input type="hidden" name="price" value="<?= $_GET['price'] ?>">
      <div class="pay-btn">

        <button type="submit">Proceed to payment</button>
        <img class="img-fluid" src="assets/images/arrow.png" />
      </div>
    </form>
  </div>
</section>
<!-- <section class="cta-red">
  <div class="container">
    <div class="inner clearfix no-border">
      <div class="touch">
        <h2>Be In Touch With Us 24/7!</h2><br>
      </div>
      <div class="row justify-centent-center mt-5">
        <div class="col-lg-12 col-md-12">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="icon-box rounded-red">
                <a href="tel:+1 817 533 6583">
                  <span class="icon">
                    <img class="lazy" src="query/assets/images/phone-icon.svg">
                  </span>
                  <p>Toll Free<br>
                    <span><a href="tel:+1 817 533 6583">+1 817 533 6583</a></span>
                  </p>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 req-callback pointer">
              <div class="icon-box rounded-red">
                <a href="tel:+1 817 533 6583">
                  <span class="icon">
                    <img class="lazy" src="query/assets/images/call-back.svg">
                  </span>
                  <p>Request<br>
                    <span>Call Back </span>
                  </p>
                </a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 pointer no-border pointer">
              <div class="icon-box rounded-red">
                <a href="javascript:$zopim.livechat.window.show();">
                  <span class="icon">
                    <img class="lazy" src="query/assets/images/chat-icon.svg">
                  </span>
                  <p>Start a<br>
                    <span href="jvascript:setButtonURL();">Live Chat</span>
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<br><br><br>
<section class="disclaimer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Disclaimer:<br>Design Vikings does not have any affiliation with any domain company mentioned on this page to offer such promotion. All other company names, brand names, trademarks and logos mentioned on this page are the property of their respective owners and do not constitute or imply endorsement, sponsorship or recommendation thereof by designmindsonline of the respective trademark owners. </p>
      </div>
    </div>
  </div>
</section>
<!-- END:: MAIN CONTAINER -->
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- recaptcha script -->
<script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>
<script>
  $('.chat, .chatt, .live_chatt').click(function() {
    $zopim.livechat.window.show();
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
</body>

</html>