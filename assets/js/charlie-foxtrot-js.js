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
});