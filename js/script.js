(function ($) {

  $.fn.menumaker = function (options) {

    var cssmenu = $(this),
      settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

    return this.each(function () {
      cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
      $(this).find("#menu-button").on('click', function () {
        $(this).toggleClass('menu-opened');
        var mainmenu = $(this).next('ul');
        if (mainmenu.hasClass('open')) {
          mainmenu.hide().removeClass('open');
        } else {
          mainmenu.show().addClass('open');
          if (settings.format === "dropdown") {
            mainmenu.find('ul').show();
          }
        }
      });

      cssmenu.find('li ul').parent().addClass('has-sub');

      multiTg = function () {
        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
        cssmenu.find('.submenu-button').on('click', function () {
          $(this).toggleClass('submenu-opened');
          if ($(this).siblings('ul').hasClass('open')) {
            $(this).siblings('ul').removeClass('open').hide();
          } else {
            $(this).siblings('ul').addClass('open').show();
          }
        });
      };

      if (settings.format === 'multitoggle') multiTg();
      else cssmenu.addClass('dropdown');

      if (settings.sticky === true) cssmenu.css('position', 'fixed');

      resizeFix = function () {
        if ($(window).width() > 768) {
          cssmenu.find('ul').show();
        }

        if ($(window).width() <= 768) {
          cssmenu.find('ul').hide().removeClass('open');
        }
      };
      resizeFix();
      return $(window).on('resize', resizeFix);

    });
  };
})(jQuery);

(function ($) {
  $(document).ready(function () {

    $("#navigation").menumaker({
      title: "Menu",
      format: "multitoggle"
    });

  });
})(jQuery);

// fce pro pekny scroll na target po click
var smothScroll = function (targetId, time = 500) {

  var scroll = $(targetId).offset().top;

  // animate
  $('html, body').animate({
    scrollTop: scroll
  }, time, function () {

    // when done, add hash to url
    // (default click behaviour)
    window.location.hash = targetId;
  });
};

// pěknější skrolování kvůli fix menu
$(document).ready(function () {
  // pri zmene hashe, navigace
  $(window).on('hashchange', function () {
    let hash = location.hash;

    // jde o navigaci pomoc9 hash tagu, napr. "#!#main-1".match(/^#!#(.*)/) - /^#!#(.*)/
    // ne, jen routing angularu
    if (hash.match(/^#(.*)/)) {
      let id = hash.match(/^(#.*)/)[1];
      if ($(id)) {
        setTimeout(() => {
          // .affix jeste neni vyrenderovany, ale poskocim o typicky offset, neni spolehlive, pokud ma napr. rozpravovanou nemovitosti, jiny offset
          let offsetHeight = -(130 + parseInt($(id).css('padding-top'))); // + padding vrsku            
          $('html, body').animate({
            scrollTop: $(id).offset().top + offsetHeight
          }, 300);
        }, 300); // timeout, protoze nejprve obsluhuje browser
      }
    }
  }).trigger('hashchange'); // vyvolam hned po loadu
});