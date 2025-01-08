<?php
include_once('includes/universal.php');
$params = new universal();
$site = $params->params()['url'];
if (!isset($_COOKIE['userid']) && !isset($_COOKIE['uuid'])) {
    header("location:" . $site);
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="facebook-domain-verification" content="0x8q6sdt14y1d39iu1g1ylwqad6mhe" />
    <title>Brief Form - Design Vikings</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="assets/images/favicon.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom-scroller.css" rel="stylesheet">
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

        input {
            background: #fff !important;
            font-size: 14px !important;
            border-radius: 2px !important;
            color: #4e4e4e !important;
            border: #e2e2e2 2px solid !important;
            padding: 16px 15px !important;
            text-transform: none !important;
            width: 100% !important;
        }
    </style>

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
    <!DOCTYPE html>
    <html>

    <head>

        <style>
            section.steps-seq ul li.first:after {
                background: linear-gradient(to right, #f70343, rgba(106, 29, 109, 0.8));
                color: #fff;
                text-align: center;
            }

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
                list-style: none;
            }

            .listpacks {
                height: 279px !important;
                overflow-y: scroll;
            }
        </style>

        <section class="page-title">
            <div class="container">
                <h1>Let's Get Started with Your Project</h1>
                <p>Please Provide the information requested below.</p>
            </div>
        </section>

        <section class="steps-seq">
            <div class="container">
                <ul id="progressbar">
                    <li style="width: 33%">
                        <h4>Order Now</h4>
                    </li>
                    <li class="active" style="width: 33%">
                        <h4>Logo Brief</h4>
                    </li>
                    <li style="width: 33%">
                        <h4>Payment</h4>
                    </li>
                </ul>
            </div>
        </section>


        <section class="content-seq">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row" style="display: flex;flex-wrap: wrap;">
                            <div class="col-md-12">
                                <form id="briefForm" method="post" enctype="multipart/form-data" action="javascript:void(0)">
                                    <div class="col-md-12 form-sec step-1-form logo-brief-form">
                                        <h4 style="margin-bottom: 30px">Logo Brief</h4>
                                        <ul>
                                            <li>
                                                <label>Is this a re-design or a new logo?<span class="req-field-star">*</span></label>
                                                <input type="hidden" name="userid" value="<?php echo $_COOKIE['userid']; ?>">
                                                <input type="hidden" name="uuid" value="<?php echo $_COOKIE['uuid']; ?>">
                                                <input type="text" name="type" placeholder="" class="required" required pattern="[a-zA-Z\s]+">
                                            </li>
                                            <li>
                                                <label>Select type(s) of how your logo should look?</label>
                                                <div class="select-logo">
                                                    <input type="hidden" name="style" id="logoSelect" value="">

                                                    <ul class="list-inline">
                                                        <li>
                                                            <i>
                                                                <img selected="0" class="bordr" src="assets/images/breiflogo/sony-e-log.jpg" width="151" height="151" alt="">
                                                            </i>
                                                            <p>high-tech</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/anderoid-pic.jpg" width="151" height="151" alt=""></i>
                                                            <p>minimalist</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/cola-pic.jpg" width="151" height="151" alt=""></i>
                                                            <p>typography</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/mico-pic.jpg" width="151" height="151" alt=""></i>
                                                            <p>corporate</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/kfc-log.jpg" width="151" height="151" alt=""></i>
                                                            <p>illustrative</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/gn-lo.jpg" width="151" height="151" alt=""></i>
                                                            <p>initials</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/fanta-log.jpg" width="151" height="151" alt=""></i>
                                                            <p>fun</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/egale-log.jpg" width="151" height="151" alt=""></i>
                                                            <p>sporty</p>
                                                        </li>
                                                        <li><i><img selected="0" class="bordr" src="assets/images/breiflogo/porch-log.jpg" width="151" height="151" alt=""></i>
                                                            <p>shield</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <label>Word/name you want in the logo to appear (type in exactly as you wish).<span class="req-field-star">*</span></label>
                                                <input type="text" placeholder="" class="required" required name="logo" required="">
                                            </li>
                                            <li>
                                                <label>Any tagline that you want in the logo to appear.</label>
                                                <input type="text" name="tagline" placeholder="">
                                            </li>
                                            <li>
                                                <label>Please provide a brief description of your business. You may also want to list website address of your competitors, if any.</label>
                                                <input type="text" name="description" placeholder="">
                                            </li>

                                            <li>
                                                <label>Anything that you do not like and we should avoid that in our design concept. (color, picture or certain nature, etc)</label>
                                                <input type="text" name="concept" placeholder="">
                                            </li>
                                            <li>
                                                <label>The existing website address, if any</label>
                                                <input type="text" name="website" placeholder="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 form-sec ">
                                        <ul>
                                            <li class="submit-btn">
                                                <div id="formResult"></div>
                                                <button type="submit" class="btn btn-red a-btn" id="briefFormBtn">Continue
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
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
                                <div class="productSku" style="display: none;"><?php echo $_COOKIE['priceText']; ?></div>
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
        <!--<script src="assets/js/jquery.mCustomScrollbar.min.js"></script>-->
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



        <script src="https://designvikings.us/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>

        <!--Main Requests Helper-->
        <script src="assets/js/ajaxHelper.js"></script>

        <!-- General Functions -->
        <script src="assets/js/generalHelper.js"></script>

        <!-- Sweet Alert -->
        <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
        <script src="assets/js/sweetalert.min.js"></script>

        <!-- recaptcha script -->
        <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>


        <script src="assets/js/briefManagement.js?v=0.1"></script>
</body>

</html>