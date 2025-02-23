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
  toggleActive(".plan_tab", "active", ".tab_content");

  $(".menu").on("click", function (e) {
    e.preventDefault();
    $(".menu").toggleClass("active");
    $(".navbar").toggleClass("active");
  });

  $(".icons_slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    center: true,
    smartSpeed: 2000,
    autoplay: false,

    navText: [
      '<i class="fa-solid fa-angle-left"></i>',
      '<i class="fa-solid fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 3,
      },
    },
  });

  var owl = $(".about_gallery").owlCarousel({
    loop: false,
    margin: 30,
    nav: true,
    center: true,
    smartSpeed: 2000,
    autoplay: false,

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
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $(".icon_box").click(function () {
    var index = $(this).data("slide");
    owl.trigger("to.owl.carousel", [index, 1000]);
    $(".icon_box").removeClass("active");
    $(this).addClass("active");
  });

  // When the carousel changes, update the active icon
  owl.on("changed.owl.carousel", function (event) {
    var index = event.item.index - event.relatedTarget._clones.length / 2;
    index =
      (index + $(".about_gallery .item").length) %
      $(".about_gallery .item").length;
    $(".icon_box").removeClass("active");
    $(".icon_box[data-slide='" + index + "']").addClass("active");
  });

  $(".plan_slider").owlCarousel({
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
        items: 1,
      },
      900: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $(".gallery_slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    center: true,
    smartSpeed: 2000,
    autoplay: false,

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
      1000: {
        items: 2,
        stagePadding: 130,
      },
      1200: {
        items: 2,
        stagePadding: 190,
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
