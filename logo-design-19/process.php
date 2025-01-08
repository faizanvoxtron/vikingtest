<?php

include_once('includes/universal.php');

$params = new universal();
$site = $params->params()['url'];

if (!isset($_COOKIE['userid']) && !isset($_COOKIE['uuid'])) {
    header("location:" . $site);
    exit;
}


include_once('service/connectionClass.php');
$ctx = new database();
$query = $ctx->selectData('leads', array('id', 'uuid', 'package', 'price', 'name', 'email', 'country', 'city', ' postal', 'phone'), 'id=' . $_COOKIE['userid']);
$states = array(
    'AL' => 'ALABAMA',
    'AK' => 'ALASKA',
    'AS' => 'AMERICAN SAMOA',
    'AZ' => 'ARIZONA',
    'AR' => 'ARKANSAS',
    'CA' => 'CALIFORNIA',
    'CO' => 'COLORADO',
    'CT' => 'CONNECTICUT',
    'DE' => 'DELAWARE',
    'DC' => 'DISTRICT OF COLUMBIA',
    'FM' => 'FEDERATED STATES OF MICRONESIA',
    'FL' => 'FLORIDA',
    'GA' => 'GEORGIA',
    'GU' => 'GUAM GU',
    'HI' => 'HAWAII',
    'ID' => 'IDAHO',
    'IL' => 'ILLINOIS',
    'IN' => 'INDIANA',
    'IA' => 'IOWA',
    'KS' => 'KANSAS',
    'KY' => 'KENTUCKY',
    'LA' => 'LOUISIANA',
    'ME' => 'MAINE',
    'MH' => 'MARSHALL ISLANDS',
    'MD' => 'MARYLAND',
    'MA' => 'MASSACHUSETTS',
    'MI' => 'MICHIGAN',
    'MN' => 'MINNESOTA',
    'MS' => 'MISSISSIPPI',
    'MO' => 'MISSOURI',
    'MT' => 'MONTANA',
    'NE' => 'NEBRASKA',
    'NV' => 'NEVADA',
    'NH' => 'NEW HAMPSHIRE',
    'NJ' => 'NEW JERSEY',
    'NM' => 'NEW MEXICO',
    'NY' => 'NEW YORK',
    'NC' => 'NORTH CAROLINA',
    'ND' => 'NORTH DAKOTA',
    'MP' => 'NORTHERN MARIANA ISLANDS',
    'OH' => 'OHIO',
    'OK' => 'OKLAHOMA',
    'OR' => 'OREGON',
    'PW' => 'PALAU',
    'PA' => 'PENNSYLVANIA',
    'PR' => 'PUERTO RICO',
    'RI' => 'RHODE ISLAND',
    'SC' => 'SOUTH CAROLINA',
    'SD' => 'SOUTH DAKOTA',
    'TN' => 'TENNESSEE',
    'TX' => 'TEXAS',
    'UT' => 'UTAH',
    'VT' => 'VERMONT',
    'VI' => 'VIRGIN ISLANDS',
    'VA' => 'VIRGINIA',
    'WA' => 'WASHINGTON',
    'WV' => 'WEST VIRGINIA',
    'WI' => 'WISCONSIN',
    'WY' => 'WYOMING',
    'AE' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
    'AA' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
    'AP' => 'ARMED FORCES PACIFIC'
);

?>

<!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11058407434"></script>-->
<!--<script>-->
<!--  window.dataLayer = window.dataLayer || [];-->
<!--  function gtag(){dataLayer.push(arguments);}-->
<!--  gtag('js', new Date());-->

<!--  gtag('config', 'AW-11058407434');-->
<!--</script>-->

<!-- Event snippet for Submit lead form conversion page -->
<!--<script>-->
<!--  gtag('event', 'conversion', {'send_to': 'AW-11058407434/XvwPCLzI04wYEIrQh5kp'});-->
<!--</script>-->


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="facebook-domain-verification" content="0x8q6sdt14y1d39iu1g1ylwqad6mhe" />
    <title>Payment - Design Vikings</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="assets/img/svg/favicon.svg" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="assets/css/style.css?v=4" rel="stylesheet">
    <link href="assets/css/custom-scroller.css" rel="stylesheet">
    <link href="assets/css/style-web.css?ver=3" rel="stylesheet">
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

        .card_type_box {
            font-weight: 700;
            text-align: right;
            position: absolute;
            bottom: 26px;
            right: 30px;
            font-size: 20px;
            text-transform: uppercase;
        }

        .form-process div label {
            margin: 0 0 5px 0;
            font-size: 16px;
            width: 100%;
            text-transform: uppercase;
        }

        .form-process div input {
            padding: 8px 14px;
            width: 100%;
            margin: 0 0 20px 0;
            font-size: 16px;
            border: 1px solid #182a5b;
            border-radius: 2px;
        }

        .form-process div select {
            padding: 8.5px 14px;
            width: 100%;
            margin: 0 0 20px 0;
            font-size: 16px;
            border: 1px solid #182a5b;
            border-radius: 2px;
        }

        hr {
            border: 1px solid #f2f2f2;
            width: 100%;
            margin: 20px 15px;
            display: table-block;
        }

        hr.ccseperator {
            border: 1px solid #f2f2f2;
            width: 100%;
            margin: 40px 15px;
        }

        .form-process div img {
            margin: 10px 0px 25px !important;
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
                        <img width="210px;" src="assets/images/logo.png" alt="">
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
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            .boxpackages {
                height: auto;
                background: #fff;
                border-radius: 15px;
                padding: 20px 10px 0px;
                position: sticky;
                top: 15px;
            }

            .boxpackages .packdetails {
                padding: 10px 0 0;
                position: relative;
                height: 430px;
            }

            .packdetails .listpacks li {
                position: relative;
                padding: 5px 20px 0px;
                font-size: 14px;
                color: #455164;
            }
        </style>
    </head>

    <section class="page-title">
        <div class="container">
            <h1>Let's Get Started with Your Project</h1>
            <p>Please Provide the information requested below.</p>
        </div>
    </section>
    <section class="steps-seq">
        <div class="container">
            <ul id="progressbar">
                <li class="">
                    <h4>Order Now</h4>
                </li>
                <li class="progressbar-2">
                    <h4 id="dynamicValue">Logo Brief</h4>
                </li>
                <li class="active">
                    <h4>Payment</h4>
                </li>
            </ul>
        </div>
    </section>

    <section class="content-seq">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <form id="orderForm" action="javascript:void(0)" method="post">
                        <input type="hidden" name="userid" value="<?php echo $query['data'][0]['id']; ?>">
                        <input type="hidden" name="uuid" value="<?php echo $query['data'][0]['uuid']; ?>">
                        <!-- One "tab" for each step in the form: -->
                        <div class="form-sec step-1-form logo-brief-form">
                            <h4 style="margin-bottom: 30px">Payment</h4>
                            <div class="row form-process">
                                <div class="col-md-6">
                                    <label>PACKAGE </label>
                                    <input type="text" placeholder="" readonly id="pname" value="<?php echo $_COOKIE['package']; ?>" name="package" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Amount: USD </label>
                                    <input type="text" placeholder="" id="pprice" readonly name="price" value="<?php echo $_COOKIE['priceText']; ?>" required>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <label>FULL NAME <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="name" placeholder="" value="<?php echo $query['data'][0]['name']; ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label>EMAIL <span class="req-field-star">*</span></label>
                                    <input value="<?php echo $query['data'][0]['email']; ?>" type="text" data-validation="required" name="email" placeholder="" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Telephone <span class="req-field-star">*</span></label>
                                    <input value="<?php echo $query['data'][0]['phone']; ?>" type="text" data-validation="required" name="phone" placeholder="" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                                </div>
                                <div class="col-md-6">
                                    <label>ADDRESS <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="address" placeholder="" id="txtShipAddress1" required>
                                </div>
                                <div class="col-md-6">
                                    <label>CITY <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="city" placeholder="" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label>STATE/PROVINCE <span class="req-field-star">*</span></label>
                                    <select data-validation="required" id="stateName" name="state" required>
                                        <?php
                                        foreach ($states as $item) {
                                        ?>
                                            <option value="<?= $item ?>" <?= $query['data'][0]['region'] == $item ? ' selected="selected"' : '' ?>><?= $item ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>ZIP/POSTAL CODE <span class="req-field-star">*</span></label>
                                    <input type="text" value="" name="postal" placeholder="" id="txtShipPostalCode" data-validation="required" aria-required="true" maxlength="5" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                                </div>
                                <input type="hidden" name="country" value="<?php echo $query['data'][0]['country']; ?>" required>
                                <hr class="cc-seperator">
                                <div class="col-md-12">
                                    <img class="img-responsive in-block" src="assets/images/cards.svg" style="text-align: center;margin: 0 auto; width:400px;">
                                </div>
                                <div class="col-md-6">
                                    <label>CARD NAME: <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="cardName" placeholder="" required pattern="[a-zA-Z\s]+" onkeydown="SpaceBlockModalForm()">
                                </div>
                                <div class="col-md-6">
                                    <label>CARD NUMBER: <span class="req-field-star">*</span> <span class="card_type_box"></span></label>
                                    <input type="text" data-validation="required" name="cardNumber" placeholder="" id="card_number" onblur="validate_cc(this)" maxlength="16" onkeyup="validate_cc(this)" required>
                                    <span class="text-danger danger alert-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label>EXP DATE: <span class="req-field-star">*</span></label>
                                    <select id="cmbCardMonth" data-validation="required" class="required month" name="expiryMonth" required>
                                        <option selected="" disabled="" value="">Month</option>
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
                                    <select id="cmbCardYear" data-validation="required" class="required year" name="expiryYear" required>
                                        <option selected="" disabled="" value="">Year</option>
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
                                <div class="col-md-6">
                                    <label>CVV: <span class="req-field-star">*</span></label>
                                    <input type="text" data-validation="required" name="cardCVV" placeholder="" id="cvv" maxlength="4" onkeyup="validate_cc(this)" required>
                                </div>
                            </div>
                        </div>
                        <div class="row paddingBottom">
                            <div class="col-lg-6 col-md-6 ">
                                <label class="field-txt">Statement Descriptor:</label>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label class="field-txt">designvikings.us</label>
                            </div>
                        </div>

                        <div class="privacy-terms paddingBottom">
                            <input type="checkbox" name="checkbox" id="tos" checked="" disabled="">
                            <label>I accept <a href="https://designvikings.us/terms-and-conditions" target="blank">Terms
                                    condition</a> and <a href="https://designvikings.us/privacy-policy" target="blank">Privacy Policy</a>.</label>
                        </div>
                        <div class="col-md-12">
                            <div id="finalFormResult" style="margin: 15px 0"></div>
                        </div>
                        <div class="form-sec">
                            <ul>
                                <li class="submit-btn">
                                    <button type="submit" class="btn btn-red a-btn" id="orderFormBtn" name="orderForm" value="1">Submit</button>
                                </li>
                                <li style="list-style:none">
                                    <div id="formResult"></div>
                                </li>
                                <li style="list-style:none">
                                    <img width="288" class="img-responsive in-block" src="assets/images/verfication.svg">
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar">
                        <h2><span>Need</span> Assistance?</h2>
                        <ul>
                            <li>
                                <a href="tel:+1 817 533 6583">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>Toll Free:</span> +1 817 533 6583 </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="chat">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                    <span>Live Chat:</span>with our design expert</a>
                            </li>
                        </ul>
                    </div>
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
    <!--<script src="assets/js/lib.js"></script>-->
    <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
    <!--<script src="assets/js/functions.js"></script>-->

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

    <!-- Start of businesslogodesignsupport Zendesk Widget script -->


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
    <!-- End of businesslogodesignsupport Zendesk Widget script -->

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

    <!-- Main Requests Helper -->
    <script src="assets/js/ajaxHelper.js"></script>

    <!-- General Functions -->
    <script src="assets/js/generalHelper.js"></script>

    <!-- Sweet Alert -->
    <!--<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">-->
    <!--<script src="assets/js/sweetalert.min.js"></script>-->

    <!--<script src="assets/js/form_validator.min.js"></script>-->

    <!-- recaptcha script -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>


    <script src="assets/js/paymentManagement.js?v=0.1"></script>
    <script src="assets/js/cc.js"></script>
    <!-- Start of  Zendesk Widget script -->
    <!--<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=92fceac5-6cf4-49c4-993c-78d8ddd3d87d"> </script>-->
    <!-- End of  Zendesk Widget script -->
</body>

</html>