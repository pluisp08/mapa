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
Funciones para calculo de precio en dolar
------------------------------------*/

const costoBolivar = id('costo_bolivar');


costoBolivar.addEventListener('input',()=>{
        let tasa = id("tasa");
        let costoDolar = id('costo_dolar');
        let costo_dolar = costoBolivar.value / tasa.value;
        costoDolar.value = costo_dolar.toFixed(2);
})


/*-----------------------------------
Funcion asincrona (ajax) para cargar utilidad del grupo
------------------------------------*/

const grupo = id('grupoId');

grupo.addEventListener('change',()=>{

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        id('utilidad').value = this.responseText;
    }
    ajax.open('GET','/productos/utilidad/'+grupo.value);
    ajax.send();

})

/*-----------------------------------
Funcion asincrona (ajax) para cargar utilidad del grupo
------------------------------------*/

const selectImpuesto = id('selectImpuesto');

selectImpuesto.addEventListener('change',()=>{

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        id('impuesto').value = this.responseText;
    }
    ajax.open('GET','/productos/impuestos/'+selectImpuesto.value);
    ajax.send();

})


/*-----------------------------------
Funcion asincrona (ajax) para calcular el precio final del producto
------------------------------------*/



const precio = id('precio');
precio.addEventListener('focus',()=>{
    
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        
        id('precio').value = this.responseText;
    }
    
    let impuesto = id('impuesto').value;
    let utilidad = id('utilidad').value;
    
    console.log(impuesto.length);
    if (impuesto.length == 0) {
        impuesto = 1;
    }
    
    
    ajax.open('GET','/productos/precio/'+costoBolivar.value+'/'+impuesto+'/'+utilidad);
    ajax.send();

})
