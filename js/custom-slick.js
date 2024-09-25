jQuery(document).ready(function () {
  
  
  var windowWidth = jQuery(window).width();
  //Show Slider //
  function introSlider() {
  var $tvslider = jQuery('.logo-slider-row');
  var tvslideCount = $tvslider.children().length;
  if(windowWidth >= 1024) {
if(tvslideCount > 7){
  $tvslider.slick({
    slidesToShow: 7,
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
      prevArrow:'<span class="slick-arrow prev-arrow fa-sharp fa-light fa-arrow-left-long flex flex-center"></span>',
      nextArrow:'<span class="slick-arrow next-arrow fa-sharp fa-light fa-arrow-right-long flex flex-center"></span>',
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
      prevArrow:'<span class="slick-arrow prev-arrow fa-sharp fa-light fa-arrow-left-long flex flex-center"></span>',
      nextArrow:'<span class="slick-arrow next-arrow fa-sharp fa-light fa-arrow-right-long flex flex-center"></span>',
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



});