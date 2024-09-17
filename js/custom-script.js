jQuery(document).ready(function () {

  /* Fixed Header */
  jQuery(window).on("scroll", function () {
    var scroll = jQuery(this).scrollTop();
    if (scroll >= 2) {
      jQuery(".main_header").addClass("fixed-header");
    } else {
      jQuery(".main_header").removeClass("fixed-header");
    }
  });

  
  /* Menu */
  if(jQuery(window).width()<=1023){
    jQuery(document).on("click", ".menu_icon", function(event){
        event.preventDefault();
        jQuery(this).toggleClass("active");
        jQuery(".logo").toggleClass("logo-open");
        jQuery("nav.navigation").toggleClass("open");
    });
    jQuery("ul.main_menu > li.menu-item-has-children > a").on("click", function(event){
        event.preventDefault();
        jQuery(this).parent().siblings("li").toggleClass('sib');	
        jQuery('ul.main_menu > li.menu-item-has-children > a').not(jQuery(this)).removeClass('active');
        jQuery(this).toggleClass("active");

        jQuery(this).siblings('ul.sub-menu').slideToggle('900');
        jQuery(this).siblings('ul.sub-menu').children().find("ul.sub-menu").slideUp();
        jQuery(this).parent().siblings('li').find("ul.sub-menu").slideUp();
        
    });
    jQuery("ul.main_menu ul.sub-menu > li.menu-item-has-children > a").on("click", function(event){
        event.preventDefault();
        jQuery(this).toggleClass("active");
        jQuery(this).parent().siblings('li').find("a").removeClass("active");
        jQuery(this).siblings("ul").slideToggle();
        jQuery(this).parent().siblings('li').find("ul.sub-menu").slideUp();
    });
}


  /* Accorrdion */
jQuery(".accordion-item .accordion-heading").on("click", function (e) {
    e.preventDefault();
    if (jQuery(this).closest(".accordion-item").hasClass("active")) {
      jQuery(".accordion-item").removeClass("active");
    } else {
      jQuery(".accordion-item").removeClass("active");
      jQuery(this).closest(".accordion-item").addClass("active");
    }
    var jQuerycontent = jQuery(this).next();
    jQuerycontent.slideToggle(300);
    jQuery(".accordion-item .content").not(jQuerycontent).slideUp("slow");
  });
    
    
  jQuery('select').selectBox({
    keepInViewport: false,
    menuSpeed: 'slow',
    mobile: true,
  });

});
