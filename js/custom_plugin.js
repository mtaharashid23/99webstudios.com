$(document).ready(function(){
    AOS.init();

})


$(".boxpackages .packdetails .wrap-pack-detail ul").slimScroll({
height: "400px",
color: "#b92b31"
});
0 != $(".scroll").length && $(".scroll").slimScroll({
height: "150px",
size: "6px",
color: "#b92b31",
alwaysVisible: !0,
distance: "16px",
railVisible: !0,
railColor: " #b92b31",
railOpacity: 1,
railBorderRadius: "0px",
wheelStep: 10,
disableFadeOut: !1
});

  
    $('.packages-slider').slick({
        dots: true,
        arrows:  true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
  });
// When a tab is shown...
$('.portfolio-tabs a[data-toggle="tab"]').on('shown.bs.tab', function() {

  // ... select the corresponding tab pane ...
  let $tabPane = $($(this).attr('href'));

  // ... and refresh its slider.
  $('.packages-slider', $tabPane).slick('refresh');

});



$('.inner-packages-slider').slick({
    dots: true,
    arrows:  true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

 
 if($(window).width() <=991){
      if(('.responsives-slider02').length != 0){
        $('.responsives-slider02').addClass('owl-carousel owl-theme');
        $('.responsives-slider02').owlCarousel({
            loop: true,
            nav: false,
            navText: ['<img src="assets/images/left-arrow.png">', '<img src="assets/images/right-arrow.png">'],
            dots: true,
            margin:20,
            autoplay:false,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                  0:{
                    items:3,
                    margin:10
                   },
                    991:{
                    items:4,
                    margin:10
                },
                    767:{
                    items:3,
                    margin:10
                 },
                    575:{
                    items:2,
                    margin:10
                 },
                   480:{
                    items:1,
                    margin:10
                 },
                  360:{
                    items:1,
                    margin:10
                 }
             }
        });
    }
  }

  if($(window).width() <=991){
    if(('.responsives-slider01').length != 0){
      $('.responsives-slider01').addClass('owl-carousel owl-theme');
      $('.responsives-slider01').owlCarousel({
          loop: true,
          nav: false,
          navText: ['<img src="assets/images/left-arrow.png">', '<img src="assets/images/right-arrow.png">'],
          dots: true,
          margin:20,
          autoplay:false,
          autoplayTimeout:4000,
          autoplayHoverPause:true,
          mouseDrag: true,
          responsiveClass:true,
          responsive:{
                0:{
                  items:3,
                  margin:10
                 }
                 ,
                  767:{
                  items:2,
                  margin:10
               },
                  576:{
                  items:2,
                  margin:10
               },
                 480:{
                  items:1,
                  margin:10
               },
                360:{
                  items:1,
                  margin:10
               }
           }
      });
  }
}


    if($(window).width() <=576){
      if(('.customer-info-slider').length != 0){
        $('.customer-info-slider').addClass('owl-carousel owl-theme');
        $('.customer-info-slider').owlCarousel({
            loop: true,
            nav: false,
            navText: ['<img src="assets/images/left-arrow.png">', '<img src="assets/images/right-arrow.png">'],
            dots: true,
            margin:20,
            autoplay:false,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                 0:{
                    items:1,
                    margin:10
                   
                }
                
            }
        });
    }
  }


   if($(window).width() <=480){
      if(('.reasons-info-slider').length != 0){
        $('.reasons-info-slider').addClass('owl-carousel owl-theme');
        $('.reasons-info-slider').owlCarousel({
            loop: true,
            nav: false,
            navText: ['<img src="assets/images/left-arrow.png">', '<img src="assets/images/right-arrow.png">'],
            dots: true,
            margin:20,
            autoplay:false,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            mouseDrag: true,
            responsiveClass:true,
            responsive:{
                 0:{
                    items:2,
                    margin:10
                   
                }
                
            }
        });
    }
  }  


$('.brand-slider').slick({
    dots: true,
    arrows:  true,
    infinite: false,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 3,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
     ]
});


