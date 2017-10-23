jQuery(function ($) {
  var w =$(window).width();
  var h =$(window).height();
  if(w>="769"){
    // version web
    /*usuario desloguiado*/
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
      $(window).scroll(function() {
        if ($(this).scrollTop() > 150){
          $('#main-menu').css('background', '#ffffff' ,'important');
          $('.a-menu').addClass("a-color");

        }
        else{
          $('#main-menu').css('background', 'transparent' ,'important');
          $('.a-menu').removeClass("a-color");
        }
      });

    }
    /*usuario desloguiado*/
    else{
      $('#main-menu').removeClass("fixed-top-login");
      $('#main-menu').addClass("fixed-top");
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100){
          $('#main-menu').css('background', '#ffffff' ,'important');
          $('.a-menu').addClass("a-color");

        }
        else{
          $('#main-menu').css('background', 'transparent' ,'important');
          $('.a-menu').removeClass("a-color");

        }
      });

    }

  }

  //version movil
  else if(w<="768"){
    if($('body').hasClass('user-logged-in')){

      $(window).scroll(function() {
        if ($(this).scrollTop() > 100){
          $('#main-menu').css('background', '#ffffff' ,'important');
          $('#main-menu').addClass("fixed-top");
          $('#nav-icon-desp').css('background-image', 'url("/RepoBits/themes/custom/adf_bits/images/mov_menu.png")' ,'important');
          $('#nav-icon-cont').css('color','#327cc1', 'important');
        }
        else{
          $('#main-menu').css('background', 'transparent' ,'important');
          $('#main-menu').addClass("fixed-top");
          $('#nav-icon-desp').css('background-image', 'url("/RepoBits/themes/custom/adf_bits/images/mov_menu1.png")' ,'important');
          $('#nav-icon-cont').css('color','#ffffff', 'important');
        }
      });
    }
    else{
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100){
          $('#main-menu').css('background', '#ffffff' ,'important');
          $('#main-menu').removeClass("fixed-top-login");
          $('#main-menu').addClass("fixed-top");
          $('#nav-icon-desp').css('background-image', 'url("/RepoBits/themes/custom/adf_bits/images/mov_menu.png")' ,'important');
          $('#nav-icon-cont').css('color','#327cc1', 'important');
        }
        else{
          $('#main-menu').css('background', 'transparent' ,'important');
          $('#main-menu').removeClass("fixed-top-login");
          $('#main-menu').addClass("fixed-top");
          $('#nav-icon-desp').css('background-image', 'url("/RepoBits/themes/custom/adf_bits/images/mov_menu1.png")' ,'important');
          $('#nav-icon-cont').css('color','#ffffff', 'important');
        }
      });
    }
    $('#a-menu').addClass("a-color");
    /*Adiciona el li para el correo electronico en el menu de language vista movil*/

    $('#block-languageswitcher ul').prepend("<li id='correo'><a href='contact'><img src='/RepoBits/themes/custom/adf_bits/images/email.png'></a></li>")

  }


  /* Boton Subir la pagina */
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("myBtn").style.display = "none";
    }
  }

// When the user clicks on the button, scroll to the top of the document
  $('#myBtn').click( function() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
  });




  $('#edit-productos-de-interes-select').multiselect();

  $('#edit-servicios-de-interes-select').multiselect();
});