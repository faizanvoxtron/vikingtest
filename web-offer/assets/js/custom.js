$(document).ready(() => {
   if(findGetParameter('ModalClosed') !== null) {
    
       $('#myModal').removeClass('show').hide();
       $(".modal").addClass("lessindex");
   } 
   
   $('.tabcontent#web').css('display','block');
   $('.webtab').addClass('active');
});
$(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $("header").addClass("sticky-header");
        } else {
            $("header").removeClass("sticky-header");
        }
    });

var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
// $('#btnclose').click(() => {
//     if(!(findGetParameter("ModalClosed") !== null)) {
//         console.log(location.href.includes("?"));
//         if(findGetParameter("keyword") !== null) {
//             location.href = location.href+"&ModalClosed=true";      
//         }
//         else {
//             location.href = location.href+"?ModalClosed=true";
//         }
//     }
// });

function findGetParameter(parameterName) {
  var result = null,
      tmp = [];
  location.search
      .substr(1)
      .split("&")
      .forEach(function (item) {
        tmp = item.split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
      });
  return result;
}

 $(".dispopup").click(function (e) {
        console.log(e);
        $('.signUpPoptwo').fadeIn();

        // New Changes added By Abdullah Zaydi for opening "modal_type" form only when the plan is selected.
        let plan = $(e.target).attr('data-package'),
        plan_id = $(e.target).attr('data-package-id'),
        price = $(e.target).attr('data-price');
        if(plan === undefined) {
            $('#modal_info').removeClass('hide');
            $('#modal_type').addClass('hide');
        }
        else {
            $('#modal_info').addClass('hide');
            $('#modal_type').removeClass('hide');
            $('#package_type').val(plan);
            $('#package_id_order').val(plan_id);
            $('#package_price').val(price);
        }
        $('.overlay').fadeIn();
    });

    $('.popupMaintwo .closePoptwo').click(function(){



        $('.signUpPoptwo').fadeOut();



        $('.overlay').fadeOut();



     



    });    
    

// popup

var form_num = 1;

function Nextfun(){
    if(form_num === 1){
        $('#backbtn').show();
        $('#form2').siblings().hide();
        $('#form2').show();
        $('#changetopic').text('What are your website needs?');
        window.location.hash='#website-needs';
        ++form_num;
    }else if(form_num === 2){
        $('#form3').siblings().hide();
        $('#form3').show();
        $('#changetopic').text('What type of business is this for?');
        window.location.hash='#type-of-business';
        ++form_num;
    }else if(form_num === 3){
        $('#form4').siblings().hide();
        $('#form4').show();
        $('#changetopic').text('What industry do you operate in?');
        window.location.hash='#industry-you-operate';
        ++form_num;
    }else if(form_num === 4){
        $('#form5').siblings().hide();
        $('#form5').show();
        $('#changetopic').text('What is your estimated budget for this project?');
        window.location.hash='#estimated-budget';
        ++form_num;
    }else if(form_num === 5){
        $('#form6').siblings().hide();
        $('#form6').show();
        $('#nextbtn').hide();
        $('#backbtn').hide();
        $('#changetopic').text("Great - we've got pros ready and available.");
        $('.holder').addClass('center-txt');
        window.location.hash='#FREE-QUOTE';
        ++form_num;
    }  
}

function Backfun(){
    if(form_num === 2){
        $('#backbtn').hide();
        $('#form1').siblings().hide();
        $('#form1').show();
        $('#changetopic').text('What type of business is this for?');
        --form_num;
    }else if(form_num === 3){
        $('#form2').siblings().hide();
        $('#form2').show();
        $('#changetopic').text('What industry do you operate in?');
        --form_num;
    }else if(form_num === 4){
        $('#form3').siblings().hide();
        $('#form3').show();
        $('#changetopic').text('What industry do you operate in?');
        --form_num;
    }else if(form_num === 5){
        $('#form4').siblings().hide();
        $('#form4').show();
        $('#changetopic').text('What is your estimated budget for this project?');
        --form_num;
    } 
}

$(document).ready(function () {

    $('.get-quotes').on('click',function(){
        $('#myModals').fadeIn();
         $(".modal").removeClass("lessindex");
         $(".modal").addClass("show");
    })

    $('.close').on('click',function(){
        $('#myModals').fadeOut();
        window.location.hash='';
    })
})

// $(window).on('load',function(){
//     $('#myModal').fadeIn();
// })


$(document).ready(function() {

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    
    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
        $('body').toggleClass('overflw');
    });
   $('.package-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });
    $('.sucess-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });
    $('.customer-sliders').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        fade: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });
      $('.sucess-slider-3').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
      });
      $('.sucess-slider-4').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
      });
      $('.sucess-slider-5').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });

            $('.sol-slide').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows:false
            }
            },
            {
            breakpoint: 440,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows:false
            }
        },
        ]
    });

        $('.client-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });

    $('.event-slider').slick({
        dots: false,
        arrows: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: true,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
                
            }
        },
        ]
    });


// counter javascript start

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

// counter javascript end
    
 $('.review-list').slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScrol1: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        centerMode: true,
        variableWidth: true,
        responsive: [
          {
            breakpoint: 480,
            settings: {
              centerMode: false,
              variableWidth: false,
              slidesToShow: 1,
              autoplay: false
            }
          }
        ]

      }); 

    // $('.faqAccordian>li.first').addClass('active');
    $('.faqAccordian>li').click(function(){
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
    });

    $('.fancybox-media').fancybox({
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            media: {}
        }
    });

    $('.searchBtn').click(function() {
        $('.searchWrap').addClass('active');
        $('.overlay').fadeIn('active');
        $('.searchWrap input').focus();
        $('.searchWrap input').focusout(function(e) {
            $(this).parents().removeClass('active');
            $('.overlay').fadeOut('active');
            $('body').removeClass('ovr-hiddn');

        });
    });

});


$(window).on('load', function() {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('ul.menu li a').each(function() {
        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    })

});

// tabing

     $('[data-targetit]').on('click', function(e) {
  $(this).addClass('current');
  $(this).siblings().removeClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="box-"]').hide();
  $('.' + target).fadeIn();
});


     // sticky header

     $(window).scroll(function() {
    if ($(this).scrollTop() > 500){  
        $('').addClass("box-visable");
    }
    else{
        $('').removeClass("box-visable");
    }
});


// slider additional js for tabbing
          $("[data-targetit]").on("click", function (e) {
        $(".sucess-slider").slick("setPosition");
    });


 function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


   var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    $(".accordion").removeClass("active")
    $(".panel").css("display" , "none")
    this.classList.toggle("active");

    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
$(".clickbutton").click(function() {
    $(".floatbutton").toggleClass("active")
}), $("#vbtn").on("click", function() {
    "View Less" != $(this).html() ? $(this).html("View Less") : $(this).html("View More..")
});





$('.baner-slide').removeClass('no-slides')
$('.service-slide').removeClass('without-slide')
$('.baner-slide').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



$('.brand-slide').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});