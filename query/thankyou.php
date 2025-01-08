<!doctype html>
<html lang="en">

<head>
  <title>Thank You</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/service-style.css">
</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="logo-wrapper">
            <a href="#_"><img class="main-logo" src="assets/images/logo.png" alt="Design Vikings" width="250" height="80px"></a>
          </div>
        </div>
        <div class=col-md-5>
        </div>
        <div class="col-md-4 cc">
          <a href="" class="get-quote c-button js-next-screen shine me-3" data-bs-toggle="modal" data-bs-target="#leadModal">Get a free quote</a>
          <a href="tel:8883470769" class="get-quote c-button js-next-screen shine"><i class="fa-solid fa-phone me-2"></i>+1 817 533 6583</a>
        </div>
      </div>
    </div>
  </header>
  <main>

    <!-- THANK YOU -->
    <section class="thankyou-col">
      <div class="container">
        <div class="thanks-top">
          <h2 class="sm-title">Be In Touch With Us 24/7!</h2>
          <p>Our design consultant team will be contacting you shortly in order to discuss your project requirements.<br>Meanwhile, if you have any further concerns or queries you may feel free to contact us any time.</p>
          <h1 class="big-title">THANK YOU</h1>
          <h4 class="f-title">For Your Interest</h4>
        </div>
      </div>
    </section>
    <section class="cta-red">
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
                    <img class="lazy" src="assets/images/phone-icon.svg">
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
                      <img class="lazy" src="assets/images/call-back.svg">
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
                    <img class="lazy" src="assets/images/chat-icon.svg">
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
    </section>
    <br><br><br>
    <section class="disclaimer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Disclaimer:<br>Design Viking does not have any affiliation with any domain company mentioned on this page to offer such promotion. All other company names, brand names, trademarks and logos mentioned on this page are the property of their respective owners and do not constitute or imply endorsement, sponsorship or recommendation thereof by designmindsonline of the respective trademark owners. </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END:: MAIN CONTAINER -->
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script defer src="./assets/js/brief.js"></script>
  <!-- recaptcha script -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LfFL2kgAAAAAD_aEFl-OkWzNTEf2wE8EJwBjmUt"></script>

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
            if (number>=1)
            {
          $zopim.livechat.window.show();
            }
            }
        });
    });
   </script>

</body>

</html>