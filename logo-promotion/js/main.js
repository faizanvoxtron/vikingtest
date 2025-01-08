var currentTab = 0;
function showTab(t) {
  var e = document.getElementsByClassName("tab");
  (e[t].style.display = "block"),
    0 == t
      ? ((document.getElementById("prevBtn").style.display = "none"),
        (document.getElementById("signupBtn").style.display = "none"),
        (document.getElementById("nextBtn").style.display = "inline"))
      : (document.getElementById("prevBtn").style.display = "inline"),
    t == e.length - 1
      ? ((document.getElementById("nextBtn").style.display = "none"),
        (document.getElementById("signupBtn").style.display = "inline"))
      : (document.getElementById("nextBtn").innerHTML =
          '<i class="fas fa-arrow-right"></i>');
}

function nextPrev(t) {
  var e = document.getElementsByClassName("tab");
  if (1 == t && !validateForm()) return !1;
  (e[currentTab].style.display = "none"), showTab((currentTab += t));
}

function validateForm() {
  var t,
    e,
    a = !0;
  for (
    t = document
      .getElementsByClassName("tab")
      [currentTab].getElementsByTagName("input"),
      e = 0;
    e < t.length;
    e++
  )
    "" == t[e].value && ((t[e].className += " invalid"), (a = !1));
  return a;
}

$(".banner-log-1,.banner-log-2,.banner-log-3").tilt({});

// Wrap every letter in a span
var textWrapper = document.querySelector(".ml6 .letters");
textWrapper.innerHTML = textWrapper.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);

anime
  .timeline({ loop: true })
  .add({
    targets: ".ml6 .letter",
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i,
  })
  .add({
    targets: ".ml6",
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000,
  });

/*Scroll Animation*/

AOS.init({
  duration: 800,
});

//Best Seller Cerousel

$("#owl-demo-one").owlCarousel({
  loop: true,
  autoplay: false,
  margin: 30,
  navigation: true,
  responsiveClass: true,
  nav: true,
  navText: [
    "<i class='fa fa-angle-left'></i>",
    "<i class='fa fa-angle-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    600: {
      items: 1,
      dots: true,
      nav: true,
    },
    768: {
      items: 1,
      dots: true,
      nav: true,
    },
    991: {
      items: 2,
      nav: true,
      loop: false,
      dots: true,
    },
  },
});

$("#owl-demo").owlCarousel({
  loop: false,
  margin: 10,
  nav: false,
  dot: true,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    991: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

$(".combo-slider").owlCarousel({
  loop: false,
  margin: 0,
  nav: false,
  dot: true,
  items: 1,
});
//   $("#owl-demo").owlCarousel({
//       loop: !0,
//       margin: 20,
//       autoplay: !0,
//       responsiveClass: !0,
//       responsive: {
//           0: {
//               items: 1,
//               nav: !1
//           },
//           600: {
//               items: 1,
//               dots: !0,
//               nav: !1
//           },
//           768: {
//               items: 2,
//               dots: !0,
//               nav: !1
//           },
//           991: {
//               items: 2,
//               nav: !1,
//               loop: !1,
//               dots: !0
//           },
//           1000: {
//               items: 3,
//               nav: !1,
//               loop: !1,
//               dots: !0
//           }
//       }
//   });

if ($(window).width() <= 575) {
  if (".portfolio-tab-slider".length != 0) {
    $(".portfolio-tab-slider").addClass("owl-carousel owl-theme");
    $(".portfolio-tab-slider").owlCarousel({
      loop: true,
      nav: true,
      navText: [
        '<img src="img/left-arrow.png">',
        '<img src="img/right-arrow.png">',
      ],
      dots: false,
      margin: 25,
      autoplay: false,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      mouseDrag: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          margin: 10,
        },
      },
    });
  }
}

$(document).ready(function () {
  $(".bets_seller_list").slimScroll({
    size: "8px",
    width: "100%",
    height: "165px",
    color: "#151b27",
    opacity: "1",
    allowPageScroll: true,
    alwaysVisible: true,
  });

  $("img.lazyload").lazyload();
});

if ($(window).width() <= 992) {
  if (".service-responsive-slider".length != 0) {
    $(".service-responsive-slider").addClass("owl-carousel owl-theme");
    $(".service-responsive-slider").owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      mouseDrag: true,
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 2,
        },
        577: {
          items: 2,
        },
        991: {
          items: 2,
        },
      },
    });
  }
}

if ($(window).width() <= 992) {
  if (".logo-responsive-slider".length != 0) {
    $(".logo-responsive-slider").addClass("owl-carousel owl-theme");
    $(".logo-responsive-slider").owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      mouseDrag: true,
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 2,
        },
        577: {
          items: 3,
        },
        991: {
          items: 4,
        },
      },
    });
  }
}

if ($(window).width() <= 992) {
  if (".work-responsive-slider".length != 0) {
    $(".work-responsive-slider").addClass("owl-carousel owl-theme");
    $(".work-responsive-slider").owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      mouseDrag: true,
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 1,
        },
        577: {
          items: 2,
        },
        991: {
          items: 2,
        },
      },
    });
  }
}

if ($(window).width() <= 992) {
  if (".portfolio-responsive-slider".length != 0) {
    $(".portfolio-responsive-slider").addClass("owl-carousel owl-theme");
    $(".portfolio-responsive-slider").owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: false,
      mouseDrag: true,
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 1,
        },
        577: {
          items: 2,
        },
        991: {
          items: 3,
        },
      },
    });
  }
}

// Validation
// jQuery(document).ready(function() {
//   jQuery('#popupLead').submit(function(event) {
//     var email = jQuery('#email-val').val();
//     var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}jQuery/;

//     if (!emailRegex.test(email)) {
//       event.preventDefault(); // Prevent form submission
//       jQuery('#emailStatus').text('Please Enter a Valid Email Address.');
//     }
//   });
// });

// jQuery(document).ready(function() {
//   jQuery('#regForm').submit(function(event) {
//     var email = jQuery('#email-val').val();
//     var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}jQuery/;

//     if (!emailRegex.test(email)) {
//       event.preventDefault(); // Prevent form submission
//     }
//   });
// });


// $(document).ready(function() {
//       $('.text-val').on('input', function() {
//         $(this).val(function(_, val) {
//           return val.replace(/[^a-zA-Z\s]/g, '');
//         });
//       });
//     });
