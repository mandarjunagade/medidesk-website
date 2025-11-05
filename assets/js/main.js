(function ($) {
  'use strict';

  /*
  |--------------------------------------------------------------------------
  | Template Name: Medixal
  | Author: ThemeDox
  | Version: 1.0.0
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | TABLE OF CONTENTS:
  |--------------------------------------------------------------------------
  |
  | 1. Preloader
  | 2. Mobile Menu
  | 3. Sticky Header
  | 4. Dynamic Background
  | 5. Slick Slider
  | 6. Modal Video
  | 7. Scroll Up
  | 8. Ripple
  | 9. Counter Animation
  | 10. Accordian
  | 11. Tabs
  | 12. Progress Bar
  | 13. Review
  | 14. Before After Slider
  | 15. Light Gallery
  | 16. Date Picker and Select2
  | 17. Ecommerce
  |
  */

  /*--------------------------------------------------------------
    Scripts initialization
  --------------------------------------------------------------*/
  $.exists = function (selector) {
    return $(selector).length > 0;
  };

  $(window).on('load', function () {
    preloader();
  });

  $(function () {
    mainNav();
    stickyHeader();
    dynamicBackground();
    counterInit();
    slickInit();
    modalVideo();
    scrollUp();
    rippleInit();
    accordian();
    tabs();
    progressBar();
    review();
    lightGallery();
    timeAndDatePicker();
    beforeAfterSlider();
    ecommerce();
    colorPicker();
    if ($.exists('.wow')) {
      new WOW().init();
    }
  });

  $(window).on('scroll', function () {
    showScrollUp();
  });

  /*--------------------------------------------------------------
    1. Preloader
  --------------------------------------------------------------*/
  function preloader() {
    $('.cs_preloader').fadeOut();
    $('cs_preloader_in').delay(150).fadeOut('slow');
  }

  /*--------------------------------------------------------------
    2. Mobile Menu
  --------------------------------------------------------------*/
  function mainNav() {
    $('.cs_nav').append('<span class="cs_menu_toggle"><span></span></span>');
    $('.menu-item-has-children').append(
      '<span class="cs_munu_dropdown_toggle"><span></span></span>',
    );
    $('.cs_menu_toggle').on('click', function () {
      $(this)
        .toggleClass('cs_toggle_active')
        .siblings('.cs_nav_list_wrap')
        .toggleClass('cs_active');
    });
    $('.cs_munu_dropdown_toggle').on('click', function () {
      $(this).toggleClass('active').siblings('ul').slideToggle();
      $(this).parent().toggleClass('active');
    });
    /* Search Toggle */
    $('.cs_search_toggle_btn').on('click', function () {
      $('.cs_modal_search').toggleClass('active');
    });
    $('.cs_search_close, .cs_search_overlay').on('click', function () {
      $('.cs_modal_search, .cs_search_overlay').removeClass('active');
      $('html').removeClass('cs_hamburger_active');
    });
  }

  /*--------------------------------------------------------------
    3. Sticky Header
  --------------------------------------------------------------*/
  function stickyHeader() {
    var $window = $(window);
    var lastScrollTop = 0;
    var $header = $('.cs_sticky_header');
    var headerHeight = $header.outerHeight() + 20;

    $window.scroll(function () {
      var windowTop = $window.scrollTop();

      if (windowTop >= headerHeight) {
        $header.addClass('cs_gescout_sticky');
      } else {
        $header.removeClass('cs_gescout_sticky');
        $header.removeClass('cs_gescout_show');
      }

      if ($header.hasClass('cs_gescout_sticky')) {
        if (windowTop < lastScrollTop) {
          $header.addClass('cs_gescout_show');
        } else {
          $header.removeClass('cs_gescout_show');
        }
      }
      lastScrollTop = windowTop;
    });
  }

  /*--------------------------------------------------------------
    4. Dynamic Background
  --------------------------------------------------------------*/
  function dynamicBackground() {
    $('[data-src]').each(function () {
      var src = $(this).attr('data-src');
      $(this).css({
        'background-image': 'url(' + src + ')',
      });
    });
  }

  /*--------------------------------------------------------------
    5. Slick Slider
  --------------------------------------------------------------*/
  function slickInit() {
    if ($.exists('.cs_slider')) {
      $('.cs_slider').each(function () {
        // Slick Variable
        var $ts = $(this).find('.cs_slider_container');
        var $slickActive = $(this).find('.cs_slider_wrapper');
        // Auto Play
        var autoPlayVar = parseInt($ts.attr('data-autoplay'), 10);
        // Auto Play Time Out
        var autoplaySpdVar = 3000;
        if (autoPlayVar > 1) {
          autoplaySpdVar = autoPlayVar;
          autoPlayVar = 1;
        }
        // Slide Change Speed
        var speedVar = parseInt($ts.attr('data-speed'), 10);
        // Slider Loop
        var loopVar = Boolean(parseInt($ts.attr('data-loop'), 10));
        // Slider Center
        var centerVar = Boolean(parseInt($ts.attr('data-center'), 10));
        // Variable Width
        var variableWidthVar = Boolean(
          parseInt($ts.attr('data-variable-width'), 10),
        );
        // Pagination
        var paginaiton = $(this)
          .find('.cs_pagination')
          .hasClass('cs_pagination');
        // Slide Per View
        var slidesPerView = $ts.attr('data-slides-per-view');
        if (slidesPerView === 1) {
          slidesPerView = 1;
        }
        if (slidesPerView === 'responsive') {
          var slidesPerView = parseInt($ts.attr('data-add-slides'), 10);
          var lgPoint = parseInt($ts.attr('data-lg-slides'), 10);
          var mdPoint = parseInt($ts.attr('data-md-slides'), 10);
          var smPoint = parseInt($ts.attr('data-sm-slides'), 10);
          var xsPoing = parseInt($ts.attr('data-xs-slides'), 10);
        }
        // Fade Slider
        var fadeVar = parseInt($($ts).attr('data-fade-slide'));
        fadeVar === 1 ? (fadeVar = true) : (fadeVar = false);

        // Slick Active Code
        $slickActive.slick({
          autoplay: autoPlayVar,
          dots: paginaiton,
          centerPadding: '28%',
          speed: speedVar,
          infinite: loopVar,
          autoplaySpeed: autoplaySpdVar,
          centerMode: centerVar,
          fade: fadeVar,
          prevArrow: $(this).find('.cs_left_arrow'),
          nextArrow: $(this).find('.cs_right_arrow'),
          appendDots: $(this).find('.cs_pagination'),
          slidesToShow: slidesPerView,
          variableWidth: variableWidthVar,
          swipeToSlide: true,
          responsive: [
            {
              breakpoint: 1600,
              settings: {
                slidesToShow: lgPoint,
              },
            },
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: mdPoint,
              },
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: smPoint,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: xsPoing,
              },
            },
          ],
        });
      });
    }
  }

  /*--------------------------------------------------------------
    6. Modal Video
  --------------------------------------------------------------*/
  function modalVideo() {
    if ($.exists('.cs_video_open')) {
      $('body').append(`
        <div class="cs_video_popup">
          <div class="cs_video_popup-overlay"></div>
          <div class="cs_video_popup-content">
            <div class="cs_video_popup-layer"></div>
            <div class="cs_video_popup-container">
              <div class="cs_video_popup-align">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="about:blank"></iframe>
                </div>
              </div>
              <div class="cs_video_popup-close"></div>
            </div>
          </div>
        </div>
      `);
      $(document).on('click', '.cs_video_open', function (e) {
        e.preventDefault();
        var video = $(this).attr('href');

        $('.cs_video_popup-container iframe').attr('src', `${video}`);

        $('.cs_video_popup').addClass('active');
      });
      $('.cs_video_popup-close, .cs_video_popup-layer').on(
        'click',
        function (e) {
          $('.cs_video_popup').removeClass('active');
          $('html').removeClass('overflow-hidden');
          $('.cs_video_popup-container iframe').attr('src', 'about:blank');
          e.preventDefault();
        },
      );
    }
  }

  /*--------------------------------------------------------------
    7. Scroll Up
  --------------------------------------------------------------*/
  function scrollUp() {
    $('.cs_scrollup').on('click', function (e) {
      e.preventDefault();
      $('html,body').animate(
        {
          scrollTop: 0,
        },
        0,
      );
    });
  }
  /* For Scroll Up */
  function showScrollUp() {
    let scroll = $(window).scrollTop();
    if (scroll >= 350) {
      $('.cs_scrollup').addClass('cs_scrollup_show');
    } else {
      $('.cs_scrollup').removeClass('cs_scrollup_show');
    }
  }

  /*--------------------------------------------------------------
    8. Ripple
  --------------------------------------------------------------*/
  function rippleInit() {
    if ($.exists('.cs_ripple_activate')) {
      $('.cs_ripple_activate').each(function () {
        $('.cs_ripple_activate').ripples({
          resolution: 512,
          dropRadius: 20,
          perturbance: 0.04,
        });
      });
    }
  }

  /*--------------------------------------------------------------
    9. Counter Animation
  --------------------------------------------------------------*/
  function counterInit() {
    if ($.exists('.odometer')) {
      $(window).on('scroll', function () {
        function winScrollPosition() {
          var scrollPos = $(window).scrollTop(),
            winHeight = $(window).height();
          var scrollPosition = Math.round(scrollPos + winHeight / 1.2);
          return scrollPosition;
        }

        $('.odometer').each(function () {
          var elemOffset = $(this).offset().top;
          if (elemOffset < winScrollPosition()) {
            $(this).html($(this).data('count-to'));
          }
        });
      });
    }
  }

  /*--------------------------------------------------------------
    10. Accordian
  --------------------------------------------------------------*/
  function accordian() {
    $('.cs_accordian').children('.cs_accordian_body').hide();
    $('.cs_accordian.active').children('.cs_accordian_body').show();
    $('.cs_accordian_head').on('click', function () {
      $(this)
        .parent('.cs_accordian')
        .siblings()
        .children('.cs_accordian_body')
        .slideUp(250);
      $(this).siblings().slideDown(400);
      $(this)
        .parent()
        .parent()
        .siblings()
        .find('.cs_accordian_body')
        .slideUp(250);
      /* Accordian Active Class */
      $(this).parents('.cs_accordian').addClass('active');
      $(this).parent('.cs_accordian').siblings().removeClass('active');
      $(this)
        .parents('.col-lg-6')
        .siblings()
        .find('.cs_accordian')
        .removeClass('active');
    });
  }

  /*--------------------------------------------------------------
    11. Tabs
  --------------------------------------------------------------*/
  function tabs() {
    $('.cs_tabs .cs_tab_links a').on('click', function (e) {
      var currentAttrValue = $(this).attr('href');
      $('.cs_tabs ' + currentAttrValue)
        .fadeIn(400)
        .siblings()
        .hide();
      $(this).parents('li').addClass('active').siblings().removeClass('active');
      e.preventDefault();
    });
  }

  /*--------------------------------------------------------------
    12. Progress Bar
  --------------------------------------------------------------*/
  function progressBar() {
    $('.cs_progress').each(function () {
      var progressPercentage = $(this).data('progress') + '%';
      $(this).find('.cs_progress_in').css('width', progressPercentage);
    });
  }

  /*--------------------------------------------------------------
    13. Review
  --------------------------------------------------------------*/
  function review() {
    $('.cs_rating').each(function () {
      var review = $(this).data('rating');
      var reviewVal = review * 20 + '%';
      $(this).find('.cs_rating_percentage').css('width', reviewVal);
    });
  }

  /*--------------------------------------------------------------
   14. Before After Slider
 --------------------------------------------------------------*/
  function beforeAfterSlider() {
    if ($.exists('.cs_before_after')) {
      var supportsTouch =
        'ontouchstart' in window || navigator.msMaxTouchPoints;
      $('.cs_before_after').each(function () {
        var $container = $(this),
          $before = $container.find('.cs_before'),
          $after = $container.find('.cs_after'),
          $handle = $container.find('.cs_handle_before_after');

        var maxX = $container.outerWidth(),
          offsetX = $container.offset().left,
          startX = 0;

        var touchstart, touchmove, touchend;
        var mousemove = function (e) {
          e.preventDefault();
          var curX = e.clientX - offsetX,
            diff = startX - curX,
            curPos = (curX / maxX) * 100;
          if (curPos > 100) {
            curPos = 100;
          }
          if (curPos < 0) {
            curPos = 0;
          }
          $before.css({ right: 100 - curPos + '%' });
          $handle.css({ left: curPos + '%' });
        };
        var mouseup = function (e) {
          e.preventDefault();
          if (supportsTouch) {
            $(document).off('touchmove', touchmove);
            $(document).off('touchend', touchend);
          } else {
            $(document).off('mousemove', mousemove);
            $(document).off('mouseup', mouseup);
          }
        };
        var mousedown = function (e) {
          e.preventDefault();
          startX = e.clientX - offsetX;
          if (supportsTouch) {
            $(document).on('touchmove', touchmove);
            $(document).on('touchend', touchend);
          } else {
            $(document).on('mousemove', mousemove);
            $(document).on('mouseup', mouseup);
          }
        };

        touchstart = function (e) {
          console.log(e);
          mousedown({
            preventDefault: e.preventDefault,
            clientX: e.originalEvent.changedTouches[0].pageX,
          });
        };
        touchmove = function (e) {
          mousemove({
            preventDefault: e.preventDefault,
            clientX: e.originalEvent.changedTouches[0].pageX,
          });
        };
        touchend = function (e) {
          mouseup({
            preventDefault: e.preventDefault,
            clientX: e.originalEvent.changedTouches[0].pageX,
          });
        };
        if (supportsTouch) {
          $handle.on('touchstart', touchstart);
        } else {
          $handle.on('mousedown', mousedown);
        }
      });
    }
  }

  /*--------------------------------------------------------------
    15. Light Gallery
  --------------------------------------------------------------*/
  function lightGallery() {
    $('.cs_gallery_list').each(function () {
      $(this).lightGallery({
        selector: '.cs_gallery_item',
        subHtmlSelectorRelative: false,
        thumbnail: false,
        mousewheel: true,
      });
    });
  }

  /*--------------------------------------------------------------
    16. Date Picker and Select2
  --------------------------------------------------------------*/
  function timeAndDatePicker() {
    $('#datepicker').datepicker({});
    $('.cs_time').timepicker({
      minTime: '9:00am',
      maxTime: '11:00pm',
    });
    if ($.exists('.cs_select')) {
      $('.cs_select').select2({
        placeholder: function () {
          $(this).data('placeholder');
        },
      });
    }
  }

  /*--------------------------------------------------------------
    17. Ecommerce
  --------------------------------------------------------------*/
  function ecommerce() {
    // Star Rating Input
    $('.cs_input_rating i').on('click', function () {
      $(this).siblings().removeClass('fa-solid');
      $(this).addClass('fa-solid').prevAll().addClass('fa-solid');
    });
    // Product Single Slider
    if ($.exists('.cs_single_product_thumb')) {
      $('.cs_single_product_thumb').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.cs_single_product_nav',
      });
    }

    if ($.exists('.cs_single_product_nav')) {
      $('.cs_single_product_nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.cs_single_product_thumb',
        focusOnSelect: true,
        arrows: false,
      });
    }
    // Check All
    $('#checkAll').change(function () {
      var isChecked = $(this).prop('checked');
      $('table input[type="checkbox"]').prop('checked', isChecked);
    });
    // Counter
    $('.cs_increment').on('click', function () {
      var countElement = $(this).siblings('.cs_quantity_input');
      var count = parseInt(countElement.text());
      count++;
      countElement.text(count);
    });

    $('.cs_decrement').on('click', function () {
      var countElement = $(this).siblings('.cs_quantity_input');
      var count = parseInt(countElement.text());
      if (count > 0) {
        count--;
        countElement.text(count);
      }
    });
  }
  function colorPicker() {
    $('.cs_color_option').on('click', function () {
      var selectedColor = $(this).data('color');
      document.body.style.setProperty(
        '--accent-color',
        selectedColor,
        'important',
      );
      $(this).addClass('active').siblings().removeClass('active');
    });
    $('.cs_color_settings_btn').on('click', function () {
      $(this).siblings().slideToggle();
    });
  }
})(jQuery); // End of use strict
/**
 * AGB Page JavaScript
 * Handles smooth scrolling and active section highlighting
 */

(function () {
  'use strict';

  // Wait for DOM to be fully loaded
  document.addEventListener('DOMContentLoaded', function () {

    // ============= SMOOTH SCROLL FOR SIDEBAR NAVIGATION =============
    const sidebarLinks = document.querySelectorAll('.agb-nav-list a');

    sidebarLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
          const offset = 120; // Offset for fixed header
          const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset - offset;

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });

          // Update active state
          updateActiveLink(this);
        }
      });
    });

    // ============= HIGHLIGHT ACTIVE SECTION ON SCROLL =============
    const sections = document.querySelectorAll('.agb-section');
    const navLinks = document.querySelectorAll('.agb-nav-list a');

    function highlightActiveSection() {
      let currentSection = '';

      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const scrollPosition = window.pageYOffset + 200; // Add offset for better UX

        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
          currentSection = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + currentSection) {
          link.classList.add('active');
        }
      });
    }

    // Function to update active link
    function updateActiveLink(clickedLink) {
      navLinks.forEach(link => link.classList.remove('active'));
      clickedLink.classList.add('active');
    }

    // Listen to scroll events
    let scrollTimeout;
    window.addEventListener('scroll', function () {
      // Debounce scroll event for better performance
      if (scrollTimeout) {
        window.cancelAnimationFrame(scrollTimeout);
      }

      scrollTimeout = window.requestAnimationFrame(function () {
        highlightActiveSection();
      });
    });

    // Initial check on page load
    highlightActiveSection();

    // ============= PRINT FUNCTIONALITY =============
    // Add print button functionality if needed
    const printButton = document.querySelector('.agb-print-button');
    if (printButton) {
      printButton.addEventListener('click', function () {
        window.print();
      });
    }

    // ============= BACK TO TOP IN SIDEBAR =============
    const backToTopBtn = document.querySelector('.agb-back-to-top');
    if (backToTopBtn) {
      backToTopBtn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }

    // ============= COPY SECTION LINK =============
    // Add copy link functionality to section headers
    const sectionHeaders = document.querySelectorAll('.agb-section h2');

    sectionHeaders.forEach(header => {
      // Create copy icon
      const copyIcon = document.createElement('span');
      copyIcon.className = 'agb-copy-link';
      copyIcon.innerHTML = '<i class="fa fa-link"></i>';
      copyIcon.title = 'Link kopieren';
      copyIcon.style.cssText = 'cursor: pointer; margin-left: 10px; opacity: 0.3; transition: opacity 0.3s;';

      copyIcon.addEventListener('mouseenter', function () {
        this.style.opacity = '1';
      });

      copyIcon.addEventListener('mouseleave', function () {
        this.style.opacity = '0.3';
      });

      copyIcon.addEventListener('click', function (e) {
        e.preventDefault();
        const sectionId = header.parentElement.getAttribute('id');
        const url = window.location.origin + window.location.pathname + '#' + sectionId;

        // Copy to clipboard
        if (navigator.clipboard) {
          navigator.clipboard.writeText(url).then(function () {
            showCopyNotification('Link kopiert!');
          }).catch(function () {
            fallbackCopyTextToClipboard(url);
          });
        } else {
          fallbackCopyTextToClipboard(url);
        }
      });

      header.appendChild(copyIcon);
    });

    // Fallback copy function for older browsers
    function fallbackCopyTextToClipboard(text) {
      const textArea = document.createElement('textarea');
      textArea.value = text;
      textArea.style.position = 'fixed';
      textArea.style.top = '0';
      textArea.style.left = '0';
      textArea.style.opacity = '0';
      document.body.appendChild(textArea);
      textArea.focus();
      textArea.select();

      try {
        const successful = document.execCommand('copy');
        if (successful) {
          showCopyNotification('Link kopiert!');
        }
      } catch (err) {
        console.error('Kopieren fehlgeschlagen:', err);
      }

      document.body.removeChild(textArea);
    }

    // Show copy notification
    function showCopyNotification(message) {
      const notification = document.createElement('div');
      notification.textContent = message;
      notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: #4CAF50;
        color: white;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 10000;
        font-weight: 600;
        animation: slideInRight 0.3s ease;
      `;

      document.body.appendChild(notification);

      setTimeout(function () {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(function () {
          document.body.removeChild(notification);
        }, 300);
      }, 2000);
    }

    // Add animations
    const style = document.createElement('style');
    style.textContent = `
      @keyframes slideInRight {
        from {
          transform: translateX(100%);
          opacity: 0;
        }
        to {
          transform: translateX(0);
          opacity: 1;
        }
      }
      @keyframes slideOutRight {
        from {
          transform: translateX(0);
          opacity: 1;
        }
        to {
          transform: translateX(100%);
          opacity: 0;
        }
      }
      .agb-nav-list a.active {
        background: #f0f4f8;
        color: var(--highlighted-color);
        border-left-color: var(--highlighted-color);
        font-weight: 600;
      }
    `;
    document.head.appendChild(style);

    // ============= EXPAND/COLLAPSE SECTIONS ON MOBILE =============
    if (window.innerWidth <= 767) {
      const sidebarHeading = document.querySelector('.agb-sidebar h4');
      const navList = document.querySelector('.agb-nav-list');

      if (sidebarHeading && navList) {
        // Initially collapse on mobile
        navList.style.display = 'none';
        sidebarHeading.style.cursor = 'pointer';
        sidebarHeading.innerHTML += ' <i class="fa fa-chevron-down" style="float: right; font-size: 14px;"></i>';

        sidebarHeading.addEventListener('click', function () {
          const icon = this.querySelector('i');
          if (navList.style.display === 'none') {
            navList.style.display = 'block';
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
          } else {
            navList.style.display = 'none';
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
          }
        });

        // Close sidebar when link is clicked on mobile
        sidebarLinks.forEach(link => {
          link.addEventListener('click', function () {
            if (window.innerWidth <= 767) {
              navList.style.display = 'none';
              const icon = sidebarHeading.querySelector('i');
              icon.classList.remove('fa-chevron-up');
              icon.classList.add('fa-chevron-down');
            }
          });
        });
      }
    }

  });

})();