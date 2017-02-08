$(document).ready(function(){

  $(".button-collapse").sideNav();


  $('#pull').click(function(){

    $('div.main').addClass('pull-up');

    setTimeout(function(){
      $('div.main').remove();
      $('html').css('overflow', 'visible');
  }, 1000);

  });


  // $('#mobile_menu').click(function(){
  //   $('#menu').css('width', '0px');
  //   $('#menu').toggleClass('hidden-xs');
  //
  //   $('#menu').animate({
  //     width: "100%",
  //   }, 500);
  //
  //   $('#mobile_menu').toggleClass('fa-bars');
  //   $('#mobile_menu').toggleClass('fa-close');
  // });

});
