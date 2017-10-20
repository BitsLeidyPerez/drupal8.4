jQuery(function ($) {


//cambia el silider de la vista movil a la web
var w =$(window).width();

if(w >="769"){// web
  $('#slider-img').attr("src","/RepoBits/themes/custom/adf_bits/images/slider.png") ;


}
else if(w <= "768"){//mov
    $('#slider-img').attr("src","/RepoBits/themes/custom/adf_bits/images/SliderMov.png") ;
    /*Adiciona el li para el correo electronico en el menu de language vista movil*/

    $('#block-languageswitcher ul').prepend("<li id='correo'><a href='contact'><img src='/RepoBits/themes/custom/adf_bits/images/email.png'></a></li>")

}

//fin slider
//fondo del footer
    if(w >="769"){// web
        $('#footer-fondo').attr("src","/RepoBits/themes/custom/adf_bits/images/footer/footer-web.png") ;
    }
    else if(w <= "380"){//mov
        $('#footer-fondo').attr("src","/RepoBits/themes/custom/adf_bits/images/footer/footer-mov.png") ;
    }
    else if(w >= "381" && w <="768" ){//tab
        $('.footer-end').empty(img);
        $('.footer-end').addClass("footer-color");

    }
    //fin footer

//menu si no se a utilizado el scroll

    $('#main-icon').attr("src", "/RepoBits/themes/custom/adf_bits/images/mov_menu1.png");
    $("#main-button").click(function () {
    if ($('#main-button').hasClass('collapsed')){

        if ($('#main').hasClass('menu-color')) {
            $('#main-icon').attr("src", "/RepoBits/themes/custom/adf_bits/images/mov_close.png");
            $('.pos-f-t').addClass("post-color");
        }
        else {
            $('#main-icon').attr("src", "/RepoBits/themes/custom/adf_bits/images/mov_close1.png");

        }
    }
    else{

        if ($('#main').hasClass('menu-color')) {
            $('#main-icon').attr("src", "/RepoBits/themes/custom/adf_bits/images/mov_menu.png");
            $('.pos-f-t').removeClass("post-color");
        }
        else {
            $('#main-icon').attr("src", "/RepoBits/themes/custom/adf_bits/images/mov_menu1.png");
            $('.pos-f-t').removeClass("post-color");

        }

    }
});



//habilitar el menu fixed

$(window).scroll(function()
{

    //para cuando el menu hace escrol en el banner y supera la altura de 100(logo a colores - menu white)
    if ($(this).scrollTop() > 100){

        //pregunta si el usuario esta logueado para mostrar el menu de administracion Blue
        if($('body').hasClass('user-logged-in')){

            var w =$(window).width();

            if(w >="769") {
                if ($(this).scrollTop() > 500) {
                    $('#nav-menu').addClass("fixed-nav");
                }
                else {
                    $('#nav-menu').removeClass("fixed-nav");
                }
            }

           $('#toolbar-administration').addClass("fixed-top-off");//adiciona una clase para visualizar el menu de admin
    $('#main').addClass("fixed-top");// add class para poner el menu fixed despues del menu admin
    $('#main').addClass("menu-color");// adiciona el color blanco al menu
    $('#logo-bs').attr("src","/RepoBits/themes/custom/adf_bits/Logo.png");// muestra el logo a colores

  //Muestra la la X si el menu esta desplegado o la - si el menu esta comprimido
      $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_menu.png");

    if($('#main-button').hasClass('collapsed')){
        $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_menu.png");
        $('.pos-f-t').removeClass("post-color");
    }
    else{
        $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_close.png");
        $('.pos-f-t').addClass("post-color");
    }

    $('#main').addClass("slideDown");
    $('#main').removeClass("slideUp");

}
     else{
            //si el usuario no esta loguado
            var w =$(window).width();

            if(w >="769") {
                if ($(this).scrollTop() > 500) {
                    $('#nav-menu').addClass("fixed-nav-log");
                }
                else {
                    $('#nav-menu').removeClass("fixed-nav-log");
                }
            }
            $('#main').addClass("fixed-top-off");//pone el top en 0 y adiciona el fixed
            $('#main').addClass("menu-color");// add el color blanco
            $('#logo-bs').attr("src","/RepoBits/themes/custom/adf_bits/Logo.png");//logo a color

            //Muestra la la X si el menu esta desplegado o la - si el menu esta comprimido
            $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_menu.png");

            if($('#main-button').hasClass('collapsed')){
                $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_menu.png");
                $('.pos-f-t').removeClass("post-color");
            }
            else{
                $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_close.png");
                $('.pos-f-t').addClass("post-color");
            }

            $('#main').addClass("slideDown");
            $('#main').removeClass("slideUp");


          }
          //fin del if / else user log o no
    }
    //fin del if del scroll
//si scroll es menor de 100
else {
        $('#main').removeClass("menu-color"); // se elimina el color blanco
    $('#logo-bs').attr("src","/RepoBits/themes/custom/adf_bits/logo1.png");// logo en blanco

        $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_menu1.png");
        $('.pos-f-t').removeClass("post-color");
        //Muestra la la X si el menu esta desplegado o la - si el menu esta comprimido
        if($('#main-button').hasClass('collapsed')){
            $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_menu1.png");

        }
        else{
            $('#main-icon').attr("src","/RepoBits/themes/custom/adf_bits/images/mov_close1.png");
        }
        $('#main').removeClass("slideDown");
        $('#main').addClass("slideUp");
/*cambio de boton a blanco 2*/
        //var colapse = $('#main-button').attr('aria-expanded');
        // $("#main-button").click(function() {
        //     if (colapse === 'true') {
        //         $('#main-icon').attr("src", "/themes/custom/adf_bits/images/mov_menu1.png");
        //         $('.pos-f-t').removeClass("post-color");
        //         $('div').remove("#superponer");
        //     }
        //     else if (colapse === 'false') {
        //         $('#main-icon').attr("src", "/themes/custom/adf_bits/images/mov_close1.png");
        //         $('.pos-f-t').addClass("post-color");
        //         $('header').append("<div id='superponer'></div>");
        //         $('#superponer').addClass(".superponer");
        //
        //     }

        // });

}


});
/* Boton Subir la pagina */

        if ($(this).scrollTop() > 700) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }

    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 900);
        return false;
    });

    $('#back-to-top').tooltip('show');


//fin de  boton subir



/*Adiciona el li para el correo electronico en el menu de language vista movil*/

    $('#block-languageswitcher ul').prepend("<li id='correo'><a href='contact'><img src='/RepoBits/themes/custom/adf_bits/images/email.png'></a></li>")

    if ($(this).scrollTop() > 301){
        $('#nav-menu').addClass("fixed-nav");
    }
    else {
        $('#nav-menu').removeClass("fixed-nav");
}


    $(".button").addClass("btn btn-success waves-light");

});


