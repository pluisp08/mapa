/*------------------------
INICIAMOS WOW
-------------------------*/
new WOW().init();

/*----------------------------------
Iniciamos smoothScroll (Scroll Suave)
--------------------------------*/
smoothScroll.init({
    speed: 1000, // Integer. How fast to complete the scroll in milliseconds
    offset: 100, // Integer. How far to offset the scrolling anchor location in pixels

});

/*---------------------------------
    OCULTAR Y MOSTRAR BOTON IR ARRIBA
 ----------------------------------*/
$(function () {
    $(window).scroll(function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 50) {
            $(".ir-arriba").fadeIn();
        } else {
            $(".ir-arriba").fadeOut();
        }
    });

});

/*---------------------------------
   CABECERA ANIMADA
 ----------------------------------*/
$(window).scroll(function () {

    var nav = $('.encabezado');
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
        nav.addClass("fondo-menu");
    } else {
        nav.removeClass("fondo-menu");
    }
});



/*-----------------------------------
Funciones para calculo de precio
------------------------------------*/

const costoDolar = id('costo_dolar');
costoDolar.addEventListener('focus',()=>{
        let tasa = id("tasa");
        let costoBolivar = id("costo_bolivar");
        let costo_dolar = costoBolivar.value / tasa.value;


        costoDolar.value = costo_dolar.toFixed(2);
})

/*-----------------------------------
Funcion captura  utilidad del grupo producto
------------------------------------*/

const utilidad = id('utilidad');
const grupoId = id('grupoId');

grupoId.addEventListener('change',()=>{

   
        console.log(grupoId.options[grupoId.selectedIndex].value);
     


});

