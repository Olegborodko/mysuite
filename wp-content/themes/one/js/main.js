jQuery(window).bind("load", function() {
  //========================= desktop ipad mobile
  var mobile_size = window.matchMedia( "(max-width: 767px)" ).matches;
  var ipad_size = window.matchMedia( "(min-width: 768px) and (max-width: 1199px)" ).matches;
  var desktop_size = window.matchMedia( "(min-width: 1200px)" ).matches;

  var size_410_and_less = window.matchMedia( "(max-width: 410px)" ).matches;
  var size_411_and_more = window.matchMedia( "(min-width: 411px)" ).matches;

  var scroll_now = jQuery(window).scrollTop();


  if (scroll_now > 30) {
    jQuery('header').addClass("js_menu_scroll_now");
  }

  //========================= menu
  var mobile_size_1200 = window.matchMedia( "(max-width: 1199px)" ).matches;

  var c, currentScrollTop = 0;
  var navbar = jQuery('header');
  //navbar_height = navbar.height()+"px";

  jQuery(window).scroll(function () {

    scroll_now = jQuery(window).scrollTop();
    var b = navbar.height();

    currentScrollTop = scroll_now;

    if (scroll_now >= 30) {
      navbar.addClass("js_menu_scroll_now");
      if (c < currentScrollTop && scroll_now > b + b) {
        if (!mobile_size_1200) {
          navbar.addClass("js_menu_display_none");
        }else{}
      } else if (c > currentScrollTop && !(scroll_now <= b)) {
        if (!mobile_size_1200) {
          navbar.removeClass("js_menu_display_none");
        }else{}
      }
      c = currentScrollTop;
    } else {
      if (!mobile_size_1200) {
        navbar.removeClass("js_menu_display_none");
      }else{
        jQuery("#primary-menu").css("display", "none");
        close_sub_menu();
      }
      navbar.removeClass("js_menu_scroll_now");
    }

  });

  //========================== close menu and sub-menu if click on document
  if (mobile_size_1200) {
    jQuery(document).on('click', function (event) {
      console.log("document on click");
      if (jQuery(event.target).closest("#js_i_menu_button").attr("id")!== "js_i_menu_button" && jQuery(event.target).closest("#primary-menu").attr("id")!=="primary-menu" && event.target.id !=="menu-top-container") {
        //close sub menu
        jQuery("#primary-menu").css("display", "none");
        close_sub_menu();
        console.log(event.target.id);
      }
    });
  }

  //========================== mobile size
  if (mobile_size_1200) {
    jQuery('.js_mobile_margin').each(function (i, el) {
      var this_ = jQuery(el);
      var attr_top = this_.attr('data-m-top');
      var attr_padding = this_.attr('data-m-padding');
      var attr_ipad_top = this_.attr('data-ipad-top');

      var attr_b_ipad = this_.attr('data-b-ipad');
      var attr_b_mobile = this_.attr('data-b-mobile');

      if (mobile_size) {
        if (attr_top && attr_top.length > 0) {
          this_.css('margin-top', attr_top);
        }
        if (attr_padding && attr_padding.length > 0) {
          this_.css('padding', attr_padding);
        }

        if (attr_b_mobile && attr_b_mobile.length > 0) {
          this_.css('background-image', 'url(' + attr_b_mobile + ')');
        }
      }

      if (ipad_size) {
        if (attr_ipad_top && attr_ipad_top.length > 0) {
          this_.css('margin-top', attr_ipad_top);
        }

        if (attr_b_ipad && attr_b_ipad.length > 0) {
          this_.css('background-image', 'url(' + attr_b_ipad + ')');
        }
      }

    });
  }

  //=========================== animation on scroll
  // ScrollReveal().reveal('.animated',{
  //   delay: 0,
  //   distance: '0px',
  //   duration: 600,
  //   easing: 'cubic-bezier(0.5, 0, 0, 1)',
  //   interval: 0,
  //   opacity: 0,
  //   origin: 'bottom',
  //   rotate: {
  //     x: 0,
  //     y: 0,
  //     z: 0
  //   },
  //   scale: 1,
  //   cleanup: true,
  //   container: document.documentElement,
  //   desktop: true,
  //   mobile: true,
  //   reset: false, //true = replay
  //   useDelay: 'always',
  //   viewFactor: 0.0,
  //   viewOffset: {
  //     top: 0,
  //     right: 0,
  //     bottom: 0,
  //     left: 0
  //   },
  //   afterReset: function (el) {},
  //   afterReveal: function (el) {},
  //   beforeReset: function (el) {},
  //   beforeReveal: function (el) {
  //     //start animation
  //     var this_ = jQuery(el);
  //     var classElement = this_.attr("data-animated");
  //     this_.addClass(classElement);
  //   }
  // });

//================================ scroll to section
  function close_sub_menu(){
    jQuery('#primary-menu ul.sub-menu').each(function () {
      jQuery(this).removeClass('sub_menu_open');
    });
  }

//Scroll to anchor
  jQuery(function () {
    jQuery('#primary-menu a').click(function (e) {
      console.log('#primary-menu a');

      var this_ = jQuery(this);
      var this_next = this_.next();

      jQuery("#primary-menu").css("display", "none");
      close_sub_menu();

      // if don't use scroll active
      // jQuery('#primary-menu a').each(function () {
      //     jQuery(this).removeClass('active');
      // });
      // this_.addClass('active');

      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          jQuery('html, body').animate({
            scrollTop: target.offset().top - 67
          }, 500, function() {
            //location.replace(this_.attr("href"));
            window.history.pushState("", "", this_.attr("href"));
          });
          return false;
        }
      }
    });
  });

  //========================== display menu on mobile
  jQuery("#js_i_menu_button").click(function(){
    console.log('#js_i_menu_button');
    var menu_ = jQuery("#primary-menu");
    if (menu_.css("display")==="none"){

      if (scroll_now < 30) {
        console.log(scroll_now);
        jQuery('html, body').animate({
          scrollTop: scroll_now + 30
        }, 300, function(){
          menu_.css("display","inline-block")
        });
      }else{
        menu_.css("display","inline-block");
      }

    }else{
      menu_.css("display","none");
    }
    close_sub_menu();

  });

  //========================== add active class to menu links
  // const scroller = scrollama();
  //
  // scroller
  // .setup({
  //   step: '.animated' // required - class name of trigger steps
  // })
  // .onStepEnter(function(el){
  //   var this_ = jQuery(el.element);
  //
  //   var set_ = jQuery("#primary-menu li");
  //   if (this_.attr("id")){
  //   //   //var length_ = set_.length;
  //      set_.each(function(i,el) {
  //        jQuery(el).removeClass("active");
  //      });
  //      jQuery("#primary-menu ." + this_.attr("id")).addClass("active");
  //   }
  // })
  // .onStepExit();

  //========================= js_equal_height
//   var js_equal_height_max = 0;
//   jQuery(".js_equal_height").each(function (i, el) {
//     var el_ = jQuery(el);
//     var el_height = el_.height();
//
//     if ( el_height > js_equal_height_max){
//       js_equal_height_max = el_height;
//     }
//   });
//
//   jQuery(".js_equal_height").each(function (i, el) {
//     var el_ = jQuery(el);
//     var el_item = el_.find('.black_block__item');
//     el_item.css('height', js_equal_height_max + "px");
//   });


//=========================== shadow image
// jQuery(window).load(function() {
//   jQuery(".img_with_backg__block .img_with_backg__shadow").each(function (i, el) {
//     var el_ = jQuery(el);
//     var img_ =  el_.closest('.img_with_backg__block').find('img.img_with_backg__img');
//     //var img_ = el_.nextAll('img.img_with_backg__img').first();
//
//     el_.css("width",img_.width());
//     el_.css("height",img_.height() - (img_.height() / 5.36));
//     el_.css("top",(img_.position().top) + (img_.height() / 2.977));
//     el_.css("left",(img_.position().left) + (img_.width() / 5.22) );
//     el_.css("margin",img_.css("margin"));
//
//   });
// });

//============================ menu changed

  jQuery("li.menu-item-has-children").each(function (i, el) {
    var this_ = jQuery(el);
    var span_ = this_.children('i.tangle').first();

    span_.addClass("has_sub-menu");
  });

  if (mobile_size_1200) {
    jQuery("i.has_sub-menu").click(function () {
      console.log("i.has_sub-menu");
      close_sub_menu();
      var this_ = jQuery(this);
      var sub_menu_ = this_.next();
      sub_menu_.addClass("sub_menu_open");
    });
  }

//========================= js_change_text on mobile desktop ipad
  jQuery(".js_change_text").each(function (i, el) {
    var this_ = jQuery(el);
    var data_desktop = this_.attr('data-desktop');
    var data_ipad = this_.attr('data-ipad');
    var data_mobile = this_.attr('data-mobile');

    if (mobile_size){
      this_.html(data_mobile);
    }else if(ipad_size){
      this_.html(data_ipad);
    }else if(desktop_size){
      this_.html(data_desktop);
    }
  });

//========================== initialize swiper type1
  if ( jQuery(".slider_type1__js").length ) {
    if (size_410_and_less) {
      var mySwiper = new Swiper('.slider_type1__js', {
        spaceBetween: 20,
        slidesPerView: 1.4,
        centeredSlides: true,
        paginationClickable: true,
        loop: false,
        allowSwipeToNext: true,
        allowSwipeToPrev: true,
        pagination: '.slider_type1__pagination'
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev'
        //autoplay: 2000
        // scrollbar: {
        //   el: '.swiper-scrollbar'
        // }
        // breakpoints: {
        //   414: {
        //     slidesPerView: 1,
        //     spaceBetween: 10
        //   }
        // }
      });
    } else {
      var mySwiper = new Swiper('.slider_type1__js', {
        spaceBetween: 25,
        slidesPerView: 3,
        paginationClickable: true
      });
    }
  }

  //========================== initialize swiper type2
  if ( jQuery(".slider_type2__js").length ) {
    if (mobile_size_1200) {
      var mySwiper = new Swiper('.slider_type2__js', {
        slidesPerView: 1,
        centeredSlides: true,
        paginationClickable: true,
        loop: false,
        allowSwipeToNext: true,
        allowSwipeToPrev: true,
        pagination: '.slider_type2__pagination',
        nextButton: '.slider_type2__button_next',
        prevButton: '.slider_type2__button_prev'
      });
    } else {
      var mySwiper = new Swiper('.slider_type2__js', {
        spaceBetween: 25,
        slidesPerView: 3,
        loop: false
        // pagination: '.slider_type2__pagination'
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev'
      });
    }
  }

  //=========================== initialize swiper reviews_slider__js
  if ( jQuery(".reviews_slider__js").length ) {
    var mySwiper = new Swiper('.reviews_slider__js', {
      slidesPerView: 1,
      centeredSlides: true,
      paginationClickable: true,
      loop: false,
      allowSwipeToNext: true,
      allowSwipeToPrev: true,
      pagination: '.reviews_slider__pagination',
      nextButton: '.reviews_slider__button_next',
      prevButton: '.reviews_slider__button_prev'
    });
  }

  //=========================== initialize swiper location_slider__js
  if ( jQuery(".location_slider__js").length ) {
    var mySwiper = new Swiper('.location_slider__js', {
      slidesPerView: 1,
      centeredSlides: true,
      paginationClickable: true,
      loop: false,
      allowSwipeToNext: true,
      allowSwipeToPrev: true,
      // pagination: '.location_slider__js__pagination',
      nextButton: '.location_slider__button_next',
      prevButton: '.location_slider__button_prev'
    });
  }

  //============================  form
  function label_show(element, label){
    jQuery(element + " input").on('input',function(e){
      if (jQuery(this).val().length > 0) {
        jQuery(label).css("display", "block");
      }else{
        jQuery(label).css("display", "none");
      }
    });
  }

  if ( jQuery(".js_form_el").length ) {
    label_show('.contact_form__name', '.contact_form__label_name');
    label_show('.contact_form__surname', '.contact_form__label_surname');
    label_show('.contact_form__email', '.contact_form__label_email');
    label_show('.contact_form__phone', '.contact_form__label_phone');
  }

  jQuery(".js_form_el .contact_form__date").change(function() {
      if ( jQuery(".contact_form__date input").val().length > 0 ) {
        jQuery(".contact_form__label_date").css("display", "block");
      }else{
        jQuery(".contact_form__label_date").css("display", "none");
      }
  });

  jQuery(".js_form_el textarea").on('input',function(e){
    if (jQuery(this).val().length > 0) {
      jQuery(".contact_form__label_textarea").css("display", "block");
    }else{
      jQuery(".contact_form__label_textarea").css("display", "none");
    }
  });

  //============================================
  if ( jQuery(".js_questions__item_title").length ) {

    jQuery(".js_questions__item_title").click(function () {
      this_ = jQuery(this);
      el_ = this_.next(".js_questions__item_content");
      console.log(el_);
      if (el_.css("display") === "none") {
        el_.show("slow");
        this_.find(".js_questions__plus").toggleClass('questions__minus questions__plus');
      } else {
        el_.hide("slow");
        this_.find(".js_questions__plus").toggleClass('questions__plus questions__minus');
      }
    });

    //only first element
    //jQuery("li.js_nomination_text").slice(0, 1).show("slow");
  }

  //======================================== question scroll

    jQuery('.js_questions__category_title a').click(function (e) {

      var this_ = jQuery(this);

      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          jQuery('html, body').animate({
            scrollTop: target.offset().top - 67
          }, 500, function () {
            window.history.pushState("", "", this_.attr("href"));
          });
          return false;
        }
      }
    });

  //========================================== slider




});
