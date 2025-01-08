          <section class="footer">
            <div class="container">
              <div class="row align-items-center">
                <div class="col">
                  <div class="fot1">
                    <h1 class="fot-title">About Us</h1>
                    <p>Design Vikings is a team of creative experts having experience in crafting unique business solutions that catapult you to new heights of growth. From ideation to identity, we help you transform your brand into a powerhouse. We deliver guaranteed results – with customer satisfaction at the top. Get recognized by the best agency in USA.</p>
                    <!--<STRONG>ABN 86 660 262 742</STRONG>-->
                  </div>
                </div>
                <div class="col">
                  <div class="fot2 ">
                    <img src="assets/images/partner.png" class="brand-img" />
                  </div>
                </div>
                <div class="col">
                  <div class="fot3">
                    <img src="assets/images/card-brands.png" class="brand-img" />
                    <div class="social">
                      <a href="https://m.facebook.com/photo.php?fbid=239797305599686&set=pcb.239799258932824&type=3&__tn__=HH-R&eid=ARDLi6kCrvTZeWgLz8xIMDbc-NznFV6mwq5LgVNRP1kcC8dVDp9a6s3nbiyv-TYbFf0JJV3Mjw3m1zPE" target="_blank"><img src="assets/images/fb.png" /></a>
                      <!--<img src="assets/images/insta.png" />-->
                      <!--<img src="assets/images/twitter.png" />-->
                      <!--<img src="assets/images/pinterest.png" />-->
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>

          <div class="copyright">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <img src="assets/images/logo.png" />
                </div>
                <div class="col-md-6">
                  <p>© Shopify 2023 All Rights Reserved</p>
                </div>
              </div>
            </div>
          </div>

          <!-- bootstrap js -->
          <!--Custom Validation Files-->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="assets/js/custom-validation.js?v=1.3"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://www.google.com/recaptcha/api.js?render=6LdpP8okAAAAAG-d_Lk0itBjn1vay86yke6KeH6u"></script>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></script>
          <script src="assets/js/script.js"></script>

          <!-- Portfolio Carousel -->
          <script>
            jQuery("#portfolio-carousel").owlCarousel({
              loop: true,
              margin: 25,
              dots: true,
              //   autoplay: true,

              responsive: {
                0: {
                  items: 1,
                },
                600: {
                  items: 3,
                },
                1000: {
                  items: 4,
                },
              },
            });
          </script>

          <script>
            jQuery("#pricing-carousel").owlCarousel({
              loop: true,
              margin: 25,
              dots: true,
              // nav: true,
              //   autoplay: true,

              responsive: {
                0: {
                  items: 1,
                },
                600: {
                  items: 3,
                },
                1000: {
                  items: 3,
                },
              },
            });
          </script>
          <script>
            jQuery("#testimonials-carousel").owlCarousel({
              loop: true,
              margin: 25,
              dots: true,
              // nav: true,
              //   autoplay: true,

              responsive: {
                0: {
                  items: 1,
                },
                600: {
                  items: 3,
                },
                1000: {
                  items: 3,
                },
              },
            });
          </script>

          <!-- chat -->

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
          <script type="text/javascript">
            //  zE(function() {
            // zE.activate();
            //  });
          </script>


          <script>
            function order_now_value(objButton, packid = 1) {
              x = objButton.name;
              $("#packages").val(
                $("#packages")
                .find('[pack="' + packid + '"]')
                .attr("value")
              );
              try {
                document.getElementById("lead_area_popup1").value = x;
                document.getElementById("lead_text").innerHTML = x;
              } catch (ex) {}
            }
          </script>


          <!-- Modal -->
          <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="m-header">
                    <h5><strong>Wait!</strong> Looking for an <strong>Amazing Offer?</strong></h5>
                    <h4>Get Your <strong>Design Now</strong></h4>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php
       
       if (!empty($_SESSION['error'])) {
           echo '<p class="text-danger alert-danger"> ' . $_SESSION['error'] .
               '</p>';
           unset($_SESSION['error']);
       }
       ?>
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <form class="popup-form" id="popupLead" action="./form-bootstrap/lead.php" method="POST">
                        
                        <input type="hidden" id="price" name="price" value="449">
                        <input type="hidden" id="title" name="package" value="Shopify Starter Package">
                        <input type="hidden" name="source" value="1">
            <input type="hidden" name="status" value="2">
                        <input type="text" name="name" placeholder="Full Name *" />
                        <input type="email" name="email" placeholder="Email Address *" />
                      

                        <input type="text" name="phonenumber" placeholder="Phone Number *" />
                        <textarea name="description" placeholder="Additional Information"></textarea>
                        <div class="form-btn">
                        <button class="submit" type="submit" name="submit">submit</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                      <div class="contact-details">
                        <ul>
                          <li>
                            <h6>Email</h6>
                            <a href="mailto:sales@designvikings.us">sales@designvikings.us</a>
                          </li>
                          <li>
                            <h6>Phone</h6>
                            <a href="tel:+1 817 533 6583">+1 817 533 6583</a>
                          </li>
                          <li>
                            <h6>Address</h6>
                            <a href="">3210 14th St, Plano, TX 75074</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
              </div>
            </div>
          </div>

          </body>

          </html>