(function ($) {
  jQuery(document).ready(function () {
    const btn = $(".btn--up");
    $(window).scroll(function () {
      if ($(window).scrollTop() > 600) {
        btn.addClass("active");
      } else {
        btn.removeClass("active");
      }
    });
    btn.on("click", function (e) {
      e.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "300");
    });
  });
})(jQuery);
