$( document ).ready(function () {
  $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
     $height = $('footer').height();
     $('.content-area').css({'padding-bottom': $height});
     $('#home-content').css({'padding-bottom': $height});
 $(window).resize( function() {
     $height = $('footer').height();
     $('.content-area').css({'padding-bottom': $height});
     $('#home-content').css({'padding-bottom': $height});
 });
  $height = $('footer').height();
  $('.content-area').css({'padding-bottom': $height});
  $('#home-content').css({'padding-bottom': $height});
});