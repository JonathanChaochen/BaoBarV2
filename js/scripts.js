$(document).ready(function(){

  $('#mobile-menu').click(function(){
      $(this).next().slideToggle('');
      $(this).find('img').toggle();
      $('.home-header').toggleClass('menu-open');
  });


  $('.carousel').bcSwipe({ threshold: 30 });

});
