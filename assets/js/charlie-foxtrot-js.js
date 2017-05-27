( function ($) {
$( document ).ready(function () {
  $('.cf-facebook>a').prepend('<span class="ws-facebook"></span>');
  $('.cf-twitter>a').prepend('<span class="ws-twitter"></span>');
  $('.cf-instagram>a').prepend('<span class="ws-instagram"></span>');
  $('.cf-youtube>a').prepend('<span class="ws-youtube"></span>');
  $('.cf-google>a').prepend('<span class="ws-google"></span>');
  $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
      $height = $('#page-footer').height();
      $('.content-area').css({'padding-bottom': $height});
      $('#home-content').css({'padding-bottom': $height});
      $('#products').css({'padding-bottom': $height});
      $('#main-content').css({'padding-bottom': $height});
  $(window).resize( function() {
      $height = $('#page-footer').height();
      $('.content-area').css({'padding-bottom': $height});
      $('#home-content').css({'padding-bottom': $height});
      $('#products').css({'padding-bottom': $height});
      $('#main-content').css({'padding-bottom': $height});
  });
  $('.search-toggle').click(function() {
    if ($('.mobile-search>form>div.input-group>input.form-control').css('top') == '36px') {
      $('.mobile-search>form>div.input-group>input.form-control').css({'top': '0px'});
    } else {
      $('.mobile-search>form>div.input-group>input.form-control').css({'top': '36px'});
    }
      $('.mobile-search>form>div>input').focus();
  });

  // Add touch for mobile
  // swipe controls for slider
$("#myCarousel a").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
// Add touch for mobile
  // swipe controls for social
$("#socialCarousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
});
})(jQuery);