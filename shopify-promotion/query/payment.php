<?php
require_once("includes/data.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Payment Process - Design Vikings</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.png?v=1" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/service-style.css?v=0.19">
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
    <header>
        <div class="container">
            <div class="row">
                <div class=col-md-5>
                    <div class="logo-wrapper">
                        <!--<h3 style="color:#fff">Design Vikings</h3>-->
                        <a href="javascript:void()"><img class="main-logo" src="../assets/images/logo.png" alt="Design Vikings" width="250" height="80px">
                            <!--<h3><span>Design</span><br>Vikings</h3>-->
                            <!--<img src="assets/images/logo.svg?v=0.11" class="img-fluid" alt="Design Vikings" width="200px" height="100px">-->
                        </a>
                    </div>
                </div>
                <div class=col-md-7>
                    <!--<div class="top-btn">-->
                    <!--    <a href="javascript:$zopim.livechat.window.show();" class="get-quote c-button js-next-screen shine me-3"><i class="fa-solid fa-phone me-2"></i>Chat Now</a>-->
                    <!--    <a href="tel:8883470769" class="get-quote c-button js-next-screen shine"><i class="fa-solid fa-phone me-2"></i>+1 817 533 6583</a>-->
                    <!--</div>-->
                     <div class="chat">
                <a href="javascript::" class="chat-btn chat chatt">Live Chat</a>


              </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <style>
            .error {
                color: red;
            }
        </style>
        <!-- -->
        <section class="briefForm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main-title">
                            <h2>Payment Form</h2>
                        </div>
                        <form style="padding-bottom: 60px;" id="payForm" method="POST" action="javascript:pay('payForm');">
                            <input type="hidden" id="user" name="userid" value="<?= $_GET['id'] ?>">
                            <div class="row">
                                <div class="col-md-6 mb-3 d-none">
                                    <label for="pname" class="form-label">PACKAGE</label>
                                    <select class="form-control" id="pname" name="package" required onchange="changePackage(this);">
                                        <?php
                                        foreach ($packages as $item) {
                                            echo '<option value="' . $item . '"' . ($item == $package ? 'selected' : '') . '>' . $item . '</option>';
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="pprice" class="form-label">AMOUNT: $</label>
                                    <input type="text" class="form-control" id="pprice" name="price" placeholder="☞ type here" value="<?= $dprice ?>" required readonly>
                                </div>
                                <div class="col-md-12">
                                    <hr />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tagline">FULL NAME <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="name" type="text" id="tagline" placeholder="☞ type here">

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email">EMAIL <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="email" type="email" class="email" placeholder="☞ type here">

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone">CELL PHONE (PRIMARY) <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="phone" type="tel" class="phone" placeholder="☞ type here" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1')">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="address">BILLING ADDRESS <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="address" type="text" id="" placeholder="☞ type here">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="city">CITY <span class="req-field-star">*</span></label>
                                    <input class="form-control" name="city" type="text" id="" placeholder="☞ type here">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="city">STATE/PROVINCE <span class="req-field-star">*</span></label>
                                    <select data-validation="required" id="stateName" class="form-select" name="state" required>
                                        <option value="" selected>--Select State--</option>
                                        <?php
                                        foreach ($states as $item) {
                                            echo '<option value="' . $item . '">' . $item . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="postal">ZIP/POSTAL CODE <span class="req-field-star">*</span></label>
                                    <input type="text" value="" name="postal" class="form-control" id="PostalCode" placeholder="☞ type here">
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <span class="cards">
                                        <img class="img-fluid in-block" src="assets/images/cards.svg" style="text-align: center;margin: 0 auto; width:400px;"> </span>
                                </div>
                                <div class="col-md-6">
                                    <label>NAME ON CARD: <span class="req-field-star">*</span></label>
                                    <input type="text" class="form-control" name="cardname" placeholder="☞ type here">
                                </div>
                                <div class="col-md-6">
                                    <label>CARD NUMBER: <span class="req-field-star">*</span> <span class="card_type_box"></span></label>
                                    <input type="text" class="form-control" name="cardnumber" placeholder="☞ type here" id="card_number">
                                    <span class="text-danger danger alert-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>EXP DATE: <span class="req-field-star">*</span></label>
                                            <select id="cmbCardMonth" data-validation="required" class="required month form-select" name="expirymonth" required>
                                                <option value="">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="cmbCardYear" data-validation="required" class="required year cardyear form-select" name="expiryyear" required>
                                                <option value="">Year</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                                <option value="2031">2031</option>
                                                <option value="2032">2032</option>
                                                <option value="2033">2033</option>
                                                <option value="2034">2034</option>
                                                <option value="2035">2035</option>
                                                <option value="2036">2036</option>
                                                <option value="2037">2037</option>
                                                <option value="2038">2038</option>
                                                <option value="2039">2039</option>
                                                <option value="2040">2040</option>
                                                <option value="2041">2041</option>
                                                <option value="2042">2042</option>
                                                <option value="2043">2043</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>CVV: <span class="req-field-star">*</span></label>
                                    <input type="text" class="form-control" name="cvc" placeholder="" id="cvv">
                                </div>
                            </div>
                            <div class="privacy-terms paddingBottom">
                                <input type="checkbox" name="checkbox" id="tos" checked="" disabled="" required>
                                <label>I accept <a href="/terms.php" target="blank">Terms & Conditions</a> and <a href="/privacy.php" target="blank">Privacy Policy</a>.</label>
                            </div>
                            <button type="submit" style="width:100%;" class="submit-buttons">Proceed</button>
                            <div class="form-bottom">
                                <span class="secu-img"><img width="288" class="img-responsive in-block" src="assets/images/verfication.svg"></span>
                            </div>
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
                                        <a href="tel:8883470769" class="call" tabindex="0"> <span><small>Speak with us</small>+1 817 533 6583</span></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="../assets/js/custom-validation.js?v=1.3"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script src="assets/js/jquery-3.6.0.min.js?v=1"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script defer src="assets/js/payment.js?v=1"></script>
    <script defer src="assets/js/cc.js"></script>
    <script src="../assets/js/custom-validation.js?v=15"></script>
    <!-- recaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>
    <script>
        $('.chat, .live_chatt, .chatt').click(function() {
            $zopim.livechat.window.toggle();
            return false;
        });
    </script>
    <script>
        //     zE(function() {
        //         $zopim.livechat.setOnUnreadMsgs(function(numUnread){
        //      if(numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
        //       $zopim.livechat.window.show();
        //     }
        //   })
        // });
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