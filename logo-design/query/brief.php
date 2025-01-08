<?php
require_once("includes/data.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Brief Form - Design Vikings</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../favIcon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/service-style.css?v=0.11">
    <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>
<!-- End of  Zendesk Widget script -->
</head>

<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class=col-md-5>
                    <div class="logo-wrapper">
                        <!--<h3 style="color:#fff">Design Vikings</h3>-->
                        <a href="javascript:void()"><img src="assets/images/logo.svg?v=0.7" class="img-fluid" alt="Design Vikings" width="100px" height="100px">
                        <!--<h3><span>Design</span><br>Vikings</h3>-->
                        </a>
                    </div>
                </div>
                <div class=col-md-7>
                    <div class="top-btn">
                    <a href="javascript:$zopim.livechat.window.show();" class="get-quote c-button js-next-screen shine me-3"><i class="fa-solid fa-phone me-2"></i>Chat Now</a>
                    <a href="tel:+1 817 533 6583" class="get-quote c-button js-next-screen shine"><i class="fa-solid fa-phone me-2"></i>+1 817 533 6583</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

        <!-- -->
        <section class="briefForm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main-title">
                            <h2>Brief Form</h2>
                        </div>
                        <form id="briefForm" style="padding-bottom:80px" method="POST" action="javascript:brief('briefForm');">
                            <input type="hidden" id="user" name="UserId" value="<?= $_GET['id'] ?>">
                            <input type="hidden" id="price" name="Price" value="<?= $dprice ?>">
                            <input type="hidden" id="title" name="Package" value="<?= $package ?>">
                            <div class="mb-3">
                                <label for="logoType" class="form-label">IS THIS A RE-DESIGN OR A NEW LOGO? *</label>
                                <input type="text" class="form-control" id="logoType" name="Logo" placeholder="☞ type here" required>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">WORD/NAME YOU WANT IN THE LOGO TO APPEAR (TYPE IN EXACTLY AS YOU WISH). *</label>
                                <input type="text" class="form-control" id="logo" name="LogoName" placeholder="☞ type here" required>
                            </div>
                            <div class="mb-3">
                                <label for="tagline">ANY TAGLINE THAT YOU WANT IN THE LOGO TO APPEAR.</label>
                                <input class="form-control" name="Tagline" type="text" id="tagline" placeholder="☞ type here">
                            </div>
                            <div class="mb-3">
                                <label for="logoStyle">SELECT YOUR PREFERED LOGO STYLE? *</label>
                                <div class="prefered-logo-designs row">
                                    <div class="logo-box col-md-2">
                                        <img src="assets/images/types/Iconic.jpg"/>
                                        <p>Iconic / Letterforms</p>
                                    </div>
                                    <div class="logo-box col-md-2">
                                        <img src="assets/images/types/Wordmark.jpg"/>
                                        <p>Wordmarks / Letters</p>
                                    </div>
                                    <div class="logo-box col-md-2">
                                        <img src="assets/images/types/Monogram.jpg"/>
                                        <p>Lettermarks / Monogram</p>
                                    </div>
                                    <div class="logo-box col-md-2">
                                        <img src="assets/images/types/symbol.jpg"/>
                                        <p>Symbol / Brandmarks</p>
                                    </div>
                                    <div class="logo-box col-md-2">
                                        <img src="assets/images/types/abstract.jpg"/>
                                        <p>Abstract / Logomarks</p>
                                    </div>
                                    <div class="logo-box col-md-2">
                                        <img src="assets/images/types/mascot.jpg"/>
                                        <p>Mascot / Gaming</p>
                                    </div>
                                </div>
                                <input type="hidden" id="prefered" value="" name="PreferedLogo" required>
                            </div>
                            <div class="mb-3">
                                <label for="logoStyle">SELECT TYPE(S) OF HOW YOUR LOGO SHOULD LOOK?</label>
                                <select class="form-select form-select-lg mb-3" name="LogoStyle" id="logoStyle" aria-label=".form-select-lg example">
                                    <option selected>Select Logo Style</option>
                                    <option value="High-Tech">High-Tech</option>
                                    <option value="minimalist">Minimalist</option>
                                    <option value="typography">Typography</option>
                                    <option value="corporate">Corporate</option>
                                    <option vlaue="illustrative">Illustrative</option>
                                    <option vlaue="initials">Initials</option>
                                    <option vlaue="fun">Fun</option>
                                    <option vlaue="sporty">Sporty</option>
                                    <option vlaue="shield">Shield</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="description">PLEASE PROVIDE A BRIEF DESCRIPTION OF YOUR BUSINESS. YOU MAY ALSO WANT TO LIST WEBSITE ADDRESS OF YOUR COMPETITORS, IF ANY.</label>
                                <input class="form-control" name="Description" type="text" id="description" placeholder="☞ type here">

                            </div>
                            <div class="mb-3">
                                <label for="concept">ANYTHING THAT YOU DO NOT LIKE AND WE SHOULD AVOID THAT IN OUR DESIGN CONCEPT. (COLOR, PICTURE OR CERTAIN NATURE, ETC)</label>
                                <input class="form-control" name="Avoid" type="text" id="concept" placeholder="☞ type here">

                            </div>
                            <div class="mb-3">
                                <label for="website">THE EXISTING WEBSITE ADDRESS, IF ANY</label>
                                <input class="form-control" name="Website" type="text" id="website" placeholder="☞ type here">

                            </div>
                            <button type="submit" style="width:100%;" class="submit-buttons">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="boxpackages">
                                <!-- <span class="b-pricing__attention">most popular</span> -->
                                <div class="package_head">
                                    <h3 class="title"><?= $package ?></h3>
                                    <div class="price-box">
                                        <h4 class="price"><?= $dprice ?></h4>
                                        <span class="cut-price">
                                            <strike><?= $price ?></strike>
                                            <span>70% off</span>
                                        </span>

                                    </div>
                                    <p class="desc">Suitable for potential super-startups and brand revamps for companies.</p>
                                </div>
                                <div class="package_content">
                                    <!--<p class="text-center">Add on: $50 for expedited services</p>-->
                                    <ul>
                                        <li><?= $logo ?></li>
                                        <li><?= $designer ?></li>
                                        <li><?= $revisions ?></li>
                                        <li><?= $fileformat ?></li>
                                        <li><?= $time ?></li>
                                        <li class="features">MORE FEATURES</li>
                                        <li> 100% Satisfaction</li>
                                        <li> Money Back Guarantee</li>
                                        <li> Dedicated Account Manager</li>
                                    </ul>
                                    <div class="container">
                                    <div class="row">
                                        <!-- <div class="col-md-6 border-end my-2">
                                        <a href="tel:8883470769" class="call" tabindex="0"> <span><small>Speak with us</small>(888) 347-0769</span></a>
                                        </div> -->
                                        <div class="col-md-12 ">
                                        <a href="javascript:$zopim.livechat.window.show();" class="chat" tabindex="0"> <span><small>Let's Talk</small> Live Chat Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- -->
                            <div class="need">
                                <h2><span>Need</span> Assistance?</h2>
                                <ul class="asstxt">
                                    <li>
                                        <a href="tel:+1 817 533 6583">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Toll Free:</span> +1 817 533 6583 </a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="javascript:;" class="chat">
                                            <i class="fa fa-comments" aria-hidden="true"></i>
                                            <span>Live Chat:</span>with our design expert</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END:: MAIN CONTAINER -->
    </main>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/js/brief.js"></script>
    <!-- recaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>
  <script>
      $('.chat, .chatt, .live_chatt').click(function() {
         $zopim.livechat.window.show();
      });
   </script>
   

   

</body>

</html>