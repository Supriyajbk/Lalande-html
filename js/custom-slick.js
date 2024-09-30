jQuery(document).ready(function () {
  
  
  var windowWidth = jQuery(window).width();
  //Show Slider //
  function introSlider() {
  var $tvslider = jQuery('.logo-slider-row');
  var tvslideCount = $tvslider.children().length;
  if(windowWidth >= 1024) {
if(tvslideCount > 5){
  $tvslider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    speed: 1000,
    dots: false,
    arrows: true,
    variableWidth: true,
    draggable: true,
    swipeToSlide: true,
    touchThreshold: 100,
      autoplay:true,
      autoplaySpeed:1000,
      prevArrow:'<span class="slick-arrow prev-arrow fa-regular fa-angle-left flex flex-center"></span>',
      nextArrow:'<span class="slick-arrow next-arrow fa-regular fa-angle-right flex flex-center"></span>',
  });
}
  }
else{
  $tvslider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    speed: 1000,
    dots: false,
    arrows: true,
    variableWidth: true,
    draggable: true,
    swipeToSlide: true,
    touchThreshold: 100,      
      autoplay:true,
      autoplaySpeed:1000,
      prevArrow:'<span class="slick-arrow prev-arrow fa-regular fa-angle-left flex flex-center"></span>',
      nextArrow:'<span class="slick-arrow next-arrow fa-regular fa-angle-right flex flex-center"></span>',
  });
}
  }
  introSlider();

jQuery(window).on('resize load', function () {
  var newScreenWidth = jQuery(window).width();
  if (newScreenWidth !== windowWidth) {
    windowWidth = newScreenWidth;
    introSlider();

  }
});

/* Insights Slider */
   if (jQuery(window).width() <= 767) {
    jQuery(".recent-insights-main").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      swipeToSlide: true,
      infinite: false,
      speed: 1000,
      dots: true,
      arrows: false,
      variableWidth: true,
    })
  }

    /* hamiltion-stats-module Slider */
   if (jQuery(window).width() <= 767) {
    jQuery(".hamiltion-stats-bottom .stats-row").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      draggable: true,
      swipeToSlide: true,
      infinite: false,
      speed: 1000,
      dots: true,
      arrows: false,
    })
  }

});