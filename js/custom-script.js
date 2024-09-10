jQuery(document).ready(function () {

  /*login with ajax plugin*/
  jQuery(document).on('click', '#special-tab li a', function (e) {
    e.preventDefault();
    var current_val = jQuery(this).data('index');
    jQuery('.ui-tabs-panel,.special-tab-content').hide();
    jQuery('#' + current_val).show();
    jQuery('li.ui-tabs-tab').removeClass('ui-state-active')
    jQuery('li.dropdown-li').addClass('ui-state-active');
    jQuery('#special-tab li a').removeClass('active');
    jQuery(this).addClass('active');


  });
  jQuery(document).on('click', 'a.ui-tabs-anchor', function (e) {
    e.preventDefault();
    jQuery('.special-tab-content').hide();
    jQuery('li.dropdown-li').removeClass('ui-state-active');
    
    var target = jQuery(this).attr('href'); 
    jQuery(this).parent('li').addClass('ui-state-active');
    jQuery(target).attr('style','')

  });


  /* Fixed Header */
  jQuery(window).on("scroll", function () {
    var scroll = jQuery(this).scrollTop();
    if (scroll >= 2) {
      jQuery(".main_header").addClass("fixed-header");
    } else {
      jQuery(".main_header").removeClass("fixed-header");
    }
  });

  if (jQuery(window).width() <= 1023) {
    jQuery(".filter-category-mobile").click(function () {
      // Add the active class
      jQuery(this).parent().toggleClass('active').find('.filter-list').slideToggle('medium');
    });

  }


  if (jQuery(window).width() <= 1023) {
    jQuery(".dropdown-li").click(function () {
      // Add the active class
      jQuery(this).toggleClass('active').find('#special-tab').slideToggle('medium');
    });

  }

  jQuery('.clear-btn').click(function () {
    jQuery('.searchr').val('');
  });


  /* Menu */
  if (jQuery(window).width() <= 1023) {
    jQuery(".toggle_button").on("click", function (event) {
      event.preventDefault();
      jQuery(this).toggleClass("active");
      jQuery(".mobile_menu").toggleClass("navOpen");
      jQuery(".main_header").toggleClass("menu-open");
      jQuery("html").toggleClass("no-scroll");
    });
    jQuery("ul.main_menu > li.menu-item-has-children > a").on("click", function (event) {
      event.preventDefault();
      jQuery('ul.main_menu > li.menu-item-has-children > a').not(jQuery(this)).removeClass('active');
      jQuery(this).toggleClass("active");
      jQuery(this).parent().siblings().find('ul.sub-menu').slideUp();
      jQuery(this).next('ul.sub-menu').slideToggle();
      jQuery(this).parent().siblings().toggleClass('sib');
    });
    jQuery("ul.main_menu ul > li.menu-item-has-children > a").on("click", function (event) {
      event.preventDefault();
      jQuery('ul.main_menu ul > li.menu-item-has-children > a').not(jQuery(this)).removeClass('active');
      jQuery(this).toggleClass("active");
      jQuery(this).parent().siblings().find('ul.sub-menu').slideUp();
      jQuery(this).siblings('ul.main_menu ul > li > ul.sub-menu').slideToggle();
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


  /* Bottom Video Slide*/
  jQuery('#request_popup').on('click', function (e) {
    e.preventDefault();
    jQuery('body').addClass('pull_bottom');
    jQuery('.overlay_main_sec').addClass('active');
  });
  jQuery('.pop_close').on('click', function (e) {
    e.preventDefault();
    jQuery('body').removeClass('pull_bottom');
    jQuery('.overlay_main_sec').removeClass('active');
  });


  /* Header Search */
  if (jQuery(window).width() >= 1023) {
    jQuery('.search-btn').on('click', function () {
      jQuery(this).toggleClass('active');
      jQuery('.navigation.mobile_menu').toggleClass('search-open');
      jQuery('.search_form').animate({
        opacity: 'toggle',
        width: 'toggle',
      }, 400);
    });
  }

  if (jQuery(window).width() <= 719) {
    jQuery(".links-list span").on("click", function (event) {
      event.preventDefault();
      jQuery(this).parent().siblings().find("span.h4").removeClass("active");
      jQuery(this).toggleClass("active");
      jQuery(this).parent().siblings().find(".links-mobile-wrap").slideUp();
      jQuery(this).next(".links-mobile-wrap").slideToggle();
    });
  }

  jQuery('.frm_form_field input, .frm_form_field textarea').on('input', function () {
    var inputLength = jQuery(this).val().length;
    if (inputLength > 0) {
      jQuery(this).addClass('input-has-value');
    } else {
      jQuery(this).removeClass('input-has-value');
    }
  });


  /* Awards Toggle */
  if (jQuery(window).width() <= 1023) {
    jQuery(document).on('click', '.heading_mobile_menu', function (e) {
      e.preventDefault();
      jQuery(this).toggleClass('active');
      jQuery('ul.sidebar_panel').slideToggle();
    });
    jQuery(document).on('click', '.heading-rt-inner ul li a, body #tabs ul.sidebar_panel li a', function (e) {
      e.preventDefault();
      var current_val = jQuery(this).text();
      jQuery('ul.sidebar_panel').slideToggle();
      jQuery('.heading_mobile_menu').text(current_val);
      jQuery('.heading_mobile_menu').removeClass('active');
    });


  }


  /* Star Rating */
  jQuery(".star").click(function () {
    var index = jQuery(this).index();
    jQuery(".star").removeClass("selected");
    jQuery(this).prevAll().addBack().addClass("selected");
    console.log("Selected rating:", index + 1);
  });


  /* Tabs */
  const custmTabs = jQuery("#tabs, #special-tab");
  if (custmTabs.length > 0) {
    custmTabs.tabs();
  }


  /* Click to scroll */
  jQuery('a[href*="#"]').on('click', function (event) {
    if (!jQuery(this).closest('.ui-tabs').length) {
      if (this.hash !== "" && this.pathname === window.location.pathname) {
        event.preventDefault();
        var hash = this.hash;
        var headerHeight = jQuery('.main-header').outerHeight(); // Get height of main-header
        jQuery('html, body').animate({
          scrollTop: jQuery(hash).offset().top + headerHeight // Subtract header height from scrollTop value
        }, 800, function () {
          window.location.hash = hash;
        });
      }
    }
  });


  jQuery('.frm_form_field input, .frm_form_field textarea').on('blur', function () {
    var inputValue = jQuery(this).val();
    if (parseFloat(inputValue) > 0 && inputValue.trim() !== '') {
      jQuery(this).addClass('highlight');
    } else {
      jQuery(this).removeClass('highlight');
    }
  });

  jQuery(".frm_forms .frm_form_fields input, .frm_forms .frm_form_fields textarea").on('focus', function () {
    jQuery(this).siblings(".frm_form_field").addClass("input-has-value");
    jQuery(this).parent(".frm_form_field ").removeClass("frm_blank_field");
    jQuery(this).siblings("label.frm_primary_label").addClass("label-top");

    jQuery(this).siblings(".frm_error").hide();
  }).on('blur', function () {
    if (!jQuery(this).val()) {
      jQuery(this).siblings(".frm_form_field").removeClass("input-has-value");
      jQuery(this).siblings(".frm_error").show();
      jQuery(this).parent(".frm_form_field ").addClass("frm_blank_field");
      jQuery(this).siblings("label.frm_primary_label").removeClass("label-top");

    } else {
      jQuery(this).siblings(".frm_form_field").addClass("input-has-value");
      jQuery(this).parent(".frm_form_field ").removeClass("frm_blank_field");
      jQuery(this).siblings("label.frm_primary_label").addClass("label-top");

      jQuery(this).siblings(".frm_error").hide();
    }
  });


  jQuery(document).on('change', '.frm_forms .frm_form_fields select', function () {
    jQuery(this).siblings("label.frm_primary_label").addClass("input-has-value");
  });
  jQuery(document).on('change', '.frm_forms .frm_form_fields select', function () {
    var selval = jQuery(this).val();
    if (selval == '') {
      jQuery(this).siblings("label.frm_primary_label").removeClass("input-has-value");
    } else {
      jQuery(this).siblings("label.frm_primary_label").addClass("input-has-value");
    }
  });

  function checkForInput(element) {
    const $label = jQuery(element).siblings('div.frm_error');
    if (jQuery(element).val().length > 0) {
      $label.addClass('input-has-value');
    } else {
      $label.removeClass('input-has-value');
    }
  }

});
