//habilitar el menu fixed   1111111
jQuery(function ($) {
  new WOW().init();
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

// Initialize popover component
  $(function () {
    $('[data-toggle="popover"]').popover()
  })

  if($('body').hasClass('user-logged-in')){

    $('#toolbar-item-administration').click(function () {
    if($('#toolbar-item-administration').hasClass('is-active')) {

        $('#main-menu').removeClass("fixed-top");
        $('#main-menu').addClass("fixed-top-login");
        $('#main-menu').css('top', '40px');

    }
    else{
      $('#main-menu').removeClass("fixed-top");
      $('#main-menu').addClass("fixed-top-login");
      $('#main-menu').css('top', '78px');
    }
  });
    $('#main-menu').removeClass("fixed-top");
    $('#main-menu').addClass("fixed-top-login");

  }
  else{
    $('#main-menu').removeClass("fixed-top-login");
    $('#main-menu').addClass("fixed-top");
  }





$(window).scroll(function()
{
    if ($(this).scrollTop() > 50){

        $('#logo-menu').removeClass("visible");

    }
    else {

        $('#logo-menu').addClass("visible");
    }

});


});