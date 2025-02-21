$(document).ready(function () {
  // WOW animation
  new WOW().init({
    boxClass: "wow", // default
    animateClass: "animated", // default
    offset: 0, // default
    mobile: true, // default
    live: true, // default
  });

  // video popup
  $(".video-link").magnificPopup({
    type: "iframe",
    // other options
  });

  // content popup
  $(".popup-link").magnificPopup({
    type: "inline",
    fixedBgPos: true,
    fixedContentPos: true,
    // other options
  });
  $(".phone").intlTelInput({
    defaultCountry: "auto",
    initialCountry: "IN",
    geoIpLookup: function (callback) {
      callback("IN");
    },
    utilsScript: "./assets/js/utils.js",
  }),
    $("body").on("countrychange", ".phone", function (e, countryData) {
      var dialCode = countryData.dialCode;
      console.log(dialCode);
      var countryCodeElem = $(
        "#country_code_banner_form,#country_code_footer_form,#country_code_download_popup,#country_code_enquiry_popup,#country_code_sticky_form"
      );
      countryCodeElem.val(dialCode);
    });

  zoomEnable();
  function zoomEnable() {
    $(".image-popup").magnificPopup({
      type: "image",
      fixedContentPos: true,
      callbacks: {
        open: function () {
          var $image = $(".mfp-img");
          $image.CloudZoom({
            zoomPosition: "inside",
            zoomOffsetX: 0,
          });
        },
        close: function () {
          var $image = $(".mfp-img");
          if ($image.data("CloudZoom")) $image.data("CloudZoom").destroy();
        },
      },
    });
  }

  $(".img-popup").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1],
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
        return item.el.attr("title");
      },
    },
  });

  $(".img-gallery").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1],
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
        return item.el.attr("title");
      },
    },
  });

  function toggleActive(element, targetClass, contentClass) {
    $(element).on("click", function () {
      $(element).removeClass(targetClass);
      $(this).addClass(targetClass).css("transition", "all 0.5s ease-in-out");
      var tab = $(this).attr("data-target");
      $(contentClass).removeClass(targetClass);
      $(tab).addClass(targetClass).css("transition", "all 0.5s ease-in-out");
    });
  }
  toggleActive(".higlight_tab", "active", ".image_box");

  // Amenities Slider
  let mainSliderSelector = ".main-slider",
    interleaveOffset = 0.5;

  let mainSliderOptions = {
    loop: true,
    speed: 2000,
    autoplay: {
      delay: 3000,
    },
    loopAdditionalSlides: 10,
    grabCursor: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      init: function () {
        this.autoplay.stop();
      },
      imagesReady: function () {
        this.el.classList.remove("loading");
        this.autoplay.start();
      },
      slideChangeTransitionEnd: function () {
        let swiper = this,
          captions = swiper.el.querySelectorAll(".content");
        for (let i = 0; i < captions.length; ++i) {
          captions[i].classList.remove("show");
        }
        swiper.slides[swiper.activeIndex]
          .querySelector(".content")
          .classList.add("show");
      },
      progress: function () {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          let slideProgress = swiper.slides[i].progress,
            innerOffset = swiper.width * interleaveOffset,
            innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(".slide-bgimg").style.transform =
            "translate3d(" + innerTranslate + "px, 0, 0)";
        }
      },
      touchStart: function () {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function (speed) {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".slide-bgimg").style.transition =
            speed + "ms";
        }
      },
    },
  };

  new Swiper(mainSliderSelector, mainSliderOptions);

  $(".menu").on("click", function (e) {
    e.preventDefault();
    $(".menu").toggleClass("active");
    $(".navbar").toggleClass("active");
  });

  $(".about_gallery").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    center: true,
    smartSpeed: 2000,
    autoplay: true,

    navText: [
      '<i class="fa-solid fa-angle-left"></i>',
      '<i class="fa-solid fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      900: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $("").owlCarousel({
    loop: false,
    margin: 30,
    nav: true,
    center: false,
    smartSpeed: 2000,
    autoplay: true,

    navText: [
      '<i class="fa-solid fa-angle-left"></i>',
      '<i class="fa-solid fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      900: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });

  $("").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    center: false,
    smartSpeed: 2000,
    autoplay: true,

    navText: [
      '<i class="fa-solid fa-angle-left"></i>',
      '<i class="fa-solid fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      900: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });

  $(".enquire_now").on("click", function () {
    $("#sticky-form").toggleClass("active");
  });

  $(".close").on("click", function () {
    $("#sticky-form").removeClass("active");
  });

  if ($("#leads_table").length) {
    var table = $("#leads_table").DataTable({
      dom: "Bfrtip",
      buttons: [
        { extend: "copy", text: "COPY TABLE" },
        { extend: "csv", text: "EXPORT TABLE TO CSV" },
        { extend: "excel", text: "EXPORT TABLE TO EXCEL" },
      ],
      initComplete: function () {
        this.api()
          .columns("5")
          .every(function () {
            var column = this;
            var select = $('<select><option value="">All</option></select>')
              .appendTo($(column.header()))
              .on("change", function () {
                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                column.search(val ? "^" + val + "$" : "", true, false).draw();
              });

            column
              .data()
              .unique()
              .sort()
              .each(function (d, j) {
                select.append('<option value="' + d + '">' + d + "</option>");
              });
          });
      },
    });
  }

  //anchor scroll smooth
  $('a[href*="#"]:not([href="#"])')
    .not(".tabs a, ._tabs a")
    .click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            100
          );
          return false;
        }
      }
    });

  if ($(window).innerWidth() > 768) {
    $(window).scroll(function () {
      if ($(window).scrollTop() >= 100) {
        $("header").addClass("fixed-header animated slideInDown");
      } else {
        $("header").removeClass("fixed-header animated slideInDown");
      }
    });
  } else {
    $("header").addClass("fixed-header animated slideInDown");
  }

  $(".floating-icons-mob").removeClass("scroll-hide");

  $(window).scroll(function () {
    if ($(window).scrollTop() >= 100) {
      $(".floating-icons-mob").addClass("scroll-hide");
    } else {
      $(".floating-icons-mob").removeClass("scroll-hide");
    }
  });
  $(".owl_master_plan_filter_btns").on("click", ".filter_item", function () {
    $(".owl_master_plan_filter_btns .filter_item").removeClass("active");
    $(this).addClass("active");
    var $item = $(this);
    var filter = $item.data("owl-filter");
    master_plan_carousel.owlcarousel2_filter(filter);
  });
  $(".owl_floor_plan_filter_btns").on("click", ".filter_item", function () {
    $(".owl_floor_plan_filter_btns .filter_item").removeClass("active");
    $(this).addClass("active");
    var $item = $(this);
    var filter = $item.data("owl-filter");
    floor_plan_carousel.owlcarousel2_filter(filter);
  });
});
