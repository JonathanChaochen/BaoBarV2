$(document).ready(function(){

  $('#mobile-menu').click(function(){
      $(this).next().slideToggle('fast');
      $(this).find('img').toggle();
      // $('.home-header').toggleClass('menu-open');
  });


  $('.carousel').bcSwipe({ threshold: 50 });

});
