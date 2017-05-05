$( document ).ready(function () {
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
});