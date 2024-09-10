jQuery(document).ready(function () {
  
  
  var windowWidth = jQuery(window).width();
  //Show Slider //
  function introSlider() {
  var $tvslider = jQuery('.tv-show-row');
  var tvslideCount = $tvslider.children().length;
  if(windowWidth >= 1024) {
if(tvslideCount > 7){
  $tvslider.slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    infinite: true,
    speed: 1000,
    dots: false,
    arrows: false,
    variableWidth: true,
    draggable: true,
    swipeToSlide: true,
    touchThreshold: 100,
  });
}
  }
else{
  $tvslider.slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    speed: 1000,
    dots: false,
    arrows: false,
    variableWidth: true,
    draggable: true,
    swipeToSlide: true,
    touchThreshold: 100,
    centerMode: false,
    centerPadding:0,
  });
}
  }
  introSlider();

  //Host Slider //
  function hostSlider() {
  var $tvslider = jQuery('.tv-host-row');
  var tvslideCount = $tvslider.children().length;
  if(windowWidth >= 1024) {
if(tvslideCount > 7){
  $tvslider.slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    infinite: true,
    speed: 1000,
    dots: false,
    arrows: false,
    variableWidth: true,
    draggable: true,
    swipeToSlide: true,
    touchThreshold: 100,
  });
}
  }
else{
  $tvslider.slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    speed: 1000,
    dots: false,
    arrows: false,
    variableWidth: true,
    draggable: true,
    swipeToSlide: true,
    touchThreshold: 100,
    centerMode: false,
    centerPadding:0,
  });
}
  }
  hostSlider();







//  var $slider = jQuery('.tv-host-row');
//   var slideCount = $slider.children().length;

//   if (slideCount > 7) {
//     $slider.slick({

//     slidesToShow: 1,

//     slidesToScroll: 1,

//     infinite: false,

//     speed: 1000,

//     dots: false,

//     arrows: false,

//     variableWidth: true,

//     draggable: true,

//     swipeToSlide: true,

//     touchThreshold: 100,
    

//       responsive: [

//       {

//         breakpoint:1024,

//         settings: {

//            centerMode: false,

//             centerPadding:0,

//             slidesToShow: 2,

//         }

//       }

//     ]

//    });
//   }







  if (jQuery(window).width() <= 719) {

    jQuery(".recipes-row").slick({

      slidesToShow: 2,

      slidesToScroll: 1,

      draggable: true,

      swipeToSlide: true,

      infinite: true,

      speed: 1000,

      dots: false,

      arrows: false,

      variableWidth: true,

      centerPadding: '0',

      centerMode: true,

    })

  }

  if (jQuery(window).width() <= 719) {

  jQuery(".page-template-recipe .recipes-row").slick('unslick');

  }



  /* Marquee Slider */

  jQuery('.scroll-left').slick({

    speed: 8000,

    autoplay: true,

    autoplaySpeed: 0,

    centerMode: false,

    cssEase: 'linear',

    draggable: false,

    focusOnSelect: false,

    pauseOnFocus: false,

    pauseOnHover: false,

    slidesToShow: 1,

    slidesToScroll: 1,

    variableWidth: true,

    infinite: true,

    initialSlide: 1,

    arrows: false,

    buttons: false,

  });

  jQuery('.scroll-right').slick({

    speed: 8000,

    autoplay: true,

    autoplaySpeed: 0,

    centerMode: false,

    cssEase: 'linear',

    draggable: false,

    focusOnSelect: false,

    pauseOnFocus: false,

    pauseOnHover: false,

    slidesToShow: 1,

    slidesToScroll: 1,

    variableWidth: true,

    infinite: true,

    initialSlide: 1,

    arrows: false,

    buttons: false,

    rtl: true

  });

  /* End of Marquee Slider */




/* Awards */

jQuery('.awards-slider').slick({

  slidesToShow: 1,

  slidesToScroll: 1,

  infinite: false,

  speed: 1000,

  dots: false,

  arrows: false,

  variableWidth: true,

  draggable: true,

  swipeToSlide: true,

  touchThreshold: 100

});

jQuery(window).on('resize load', function () {
  var newScreenWidth = jQuery(window).width();
  if (newScreenWidth !== windowWidth) {
    windowWidth = newScreenWidth;
    introSlider();

  }
});

jQuery(window).on('resize load', function () {
  var newScreenWidth = jQuery(window).width();
  if (newScreenWidth !== windowWidth) {
    windowWidth = newScreenWidth;
    hostSlider();

  }
});


});