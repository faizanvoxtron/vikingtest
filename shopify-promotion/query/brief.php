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
                        <a href="javascript:void()">
                            <!--<img class="main-logo" src="assets/images/logo.png" alt="Design Vikings" width="250" height="80px">-->
                            <!--<h3><span>Design</span><br>Vikings</h3>-->
                            <img src="assets/images/logo.svg?v=0.7" class="img-fluid" alt="Design Vikings" width="200px" height="100px">
                        </a>
                    </div>
                </div>
                <div class=col-md-7>
                    <!--<div class="top-btn">-->
                    <!--    <a href="javascript:$zopim.livechat.window.show();" class="get-quote c-button js-next-screen shine me-3"><i class="fa-solid fa-phone me-2"></i>Chat Now</a>-->
                    <!--    <a href="tel:+1 817 533 6583" class="get-quote c-button js-next-screen shine"><i class="fa-solid fa-phone me-2"></i>+1 817 533 6583</a>-->
                    <!--</div>-->
                    <div class="chat">
                        <a href="javascript::" class="chat-btn chat chatt">Live Chat</a>


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
                    <div class="col-lg-7">
                        <div class="main-title">
                            <h2>Brief <span>Form</span></h2>
                        </div>
                        <?php

                        if (!empty($_SESSION['error'])) {
                            echo '<p class="text-danger alert-danger"> ' . $_SESSION['error'] .
                                '</p>';
                            unset($_SESSION['error']);
                        }
                        ?>
                        <form class="row g-3" id="brief-form" method="POST" action="#">
                            <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">

                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Business Name *" name="business_name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="What are you selling?" name="what_are_you_selling">
                            </div>
                            <div class="col-md-12">
                                <select class="form-select" name="company">
                                    <option disabled selected>Which category does your company fall into?*</option>
                                    <option value="Brand/Retail">Brand/Retail</option>
                                    <option value="Third Party Logistics">Third Party Logistics</option>
                                    <option value="Aggregator">Aggregator</option>
                                    <option value="Partner">Partner</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Store inspiration" name="store_inspiration">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Theme Inspiration" name="theme_inspiratino">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Goals with poject" name="goals_with_project">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Interested Products" name="interested_products">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="About the project" name="about_the_project">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Interested Store" name="interested_store">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="about_you" id="" cols="30" rows="4" placeholder="About You"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="button" id="submit_brief" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="sidebar">
                            <div class="boxpackages">
                                <!-- <span class="b-pricing__attention">most popular</span> -->
                                <div class="package_head">
                                    <div class="price-box">
                                        <h4 class="price"><?= $dprice ?></h4>
                                        <span class="cut-price">
                                            <strike><?= $price ?></strike>
                                            <span>70% off</span>
                                        </span>

                                    </div>
                                    <h3 class="title"><?= $package ?></h3>
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
                                    <!-- <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <a href="javascript:$zopim.livechat.window.show();" class="chat" tabindex="0"> <span><small>Let's Talk</small> Live Chat Now</span></a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- -->
                            <div class="need">
                                <h2><span>Need</span> Assistance?</h2>
                                <ul class="asstxt">
                                    <li>
                                        <a href="tel:+1 817 533 6583">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Toll Free: </span> +1 817 533 6583 </a>
                                    </li>
                                    <br>
                                    <!-- <li>
                                        <a href="javascript:;" class="chat">
                                            <i class="fa fa-comments" aria-hidden="true"></i>
                                            <span>Live Chat:</span>with our design expert</a>
                                    </li> -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script>
        $(document).ready(function() {
            $.validator.addMethod("alphabetsAndSpaces", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
            }, "Please enter only alphabets.");

            $("#brief-form").validate({
                rules: {
                    business_name: {
                        required: true,
                        minlength: 3,
                        alphabetsAndSpaces: true
                    },
                    company: {
                        required: true,
                    },
                    what_are_you_selling: {
                        required: true,
                    },
                    store_inspiration: {
                        required: true,
                    },
                    theme_inspiratino: {
                        required: true,
                    },
                    goals_with_project: {
                        required: true,
                    },
                    interested_products: {
                        required: true,
                    },
                    about_the_project: {
                        required: true,
                    },
                    interested_store: {
                        required: true,
                    },
                    about_you: {
                        required: true,
                    },

                },
                messages: {
                    name: {
                        required: "Please enter business name."
                    },
                    company: {
                        required: "Please select company category."
                    },
                    what_are_you_selling: {
                        required: "Please select company category."
                    },
                    theme_inspiratino: {
                        required: "Please select company category."
                    },
                    store_inspiration: {
                        required: "Please select company category."
                    },
                    goals_with_project: {
                        required: "Please select company category."
                    },
                    interested_products: {
                        required: "Please select company category."
                    },
                    about_the_project: {
                        required: "Please select company category."
                    },
                    interested_store: {
                        required: "Please select company category."
                    },
                    about_you: {
                        required: "Please select company category."
                    },

                }
            });
        });
    </script> -->
    <!-- <script src="../assets/js/custom-validation.js?v=1.1"></script> -->

    <!-- <script src="assets/js/jquery-3.6.0.min.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- <script defer src="assets/js/brief.js"></script> -->
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


    <script>
        var api_base_url = "https://shopify.designvikings.us/dynamic_form/api/"
        var form = $('#brief-form')

        $(document).ready(async function() {
            $('#submit_brief').click(function(e) {
                e.preventDefault();
                submitBrief();
            })
        })

        async function getApiToken() {
            let endpoint = "token";

            let response = await $.get(api_base_url + endpoint);
            return JSON.parse(response);
        }

        async function submitBrief() {

            // let api_token = await getApiToken();
            var formData = new FormData(form[0]);
            // formData.append(api_token.data.token_name, api_token.d ata.token_value);
            await $.ajax({
                url: api_base_url + "post/1/", // here 1 is form ID which represents type of form
                cache: false,
                type: "post",
                dataType: 'json',
                contentType: false,
                processData: false,
                data: formData,
                success: function(response) {
                    if (response.status == true) {

                        let payment_page_url = "../checkout?lead_id=" + <?= $_GET['lead_id'] ?> + "&package=<?= urlencode($_GET['package']) ?>" + "&price=<?= urlencode($_GET['price']) ?>";
                        window.location = payment_page_url;
                    } else {
                        alert(response.message);
                    }

                }
            });
        }
    </script>

</body>

</html>