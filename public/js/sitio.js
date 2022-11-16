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
Funcion asincrona (ajax) para cargar utilidad del grupo
------------------------------------*/

var grupo = id('grupoId');

grupo.addEventListener('change', () => {

    let ajax = new XMLHttpRequest();
    ajax.onload = function () {
        id('utilidad').value = this.responseText;
    }
    ajax.open('GET', '/productos/utilidad/' + grupo.value);
    ajax.send();

})

/*-----------------------------------
Funcion asincrona (ajax) para cargar utilidad del grupo
------------------------------------*/

const selectImpuesto = id('selectImpuesto');

selectImpuesto.addEventListener('change', () => {

    let ajax = new XMLHttpRequest();
    ajax.onload = function () {
        id('impuesto').value = this.responseText;
    }
    ajax.open('GET', '/productos/impuestos/' + selectImpuesto.value);
    ajax.send();

})

/*-----------------------------------
Funciones para calculo de precio en dolar
------------------------------------*/

const costoBolivar = id('costo_bolivar');


costoBolivar.addEventListener('input', () => {
    let tasa = id("tasa");
    let costoDolar = id('costo_dolar');
    let costo_dolar = costoBolivar.value / tasa.value;
    costoDolar.value = costo_dolar.toFixed(2);
})


/*-----------------------------------
Funciones para calculo de precio en total
------------------------------------*/




costoBolivar.addEventListener('input', () => {
    var cos = id('costo_bolivar').value;
    var imp = id('impuesto').value;
    var uti = id('utilidad').value;
    var precio = id('precio');
    if (imp.length > 0) {

        var impuesto = (imp / 100) + 1;
        var utilidad = (uti / 100) + 1

        var pre = cos * impuesto * utilidad;
        precio.value = pre.toFixed(2);

    } else {
       
        var utilidad = (uti / 100) + 1

        var pre = cos * utilidad;
        precio.value = pre.toFixed(2);
    }
 
})

costoBolivar.addEventListener('input', () => {
    var cos = id('costo_bolivar').value;
    var imp = id('impuesto').value;
    var uti = id('utilidad').value;
    var precio = id('precio');
    if (imp.length > 0) {

        var impuesto = (imp / 100) + 1;
        var utilidad = (uti / 100) + 1

        var pre = cos * impuesto * utilidad;
        precio.value = pre.toFixed(2);

    } else {
       
        var utilidad = (uti / 100) + 1

        var pre = cos * utilidad;
        precio.value = pre.toFixed(2);
    }
 
})



/*-----------------------------------
Funcion asincrona (ajax) para calcular el precio final del producto
------------------------------------*/

/*

//const precio = id('precio');

var grupoSelect = id('grupoId');
grupoSelect.addEventListener('blur',()=>{
    
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        
        id('precio').value = this.responseText;
    }
    
    let impuesto = id('impuesto').value;
    let utilidad = id('utilidad').value;
    
    console.log(impuesto.length);
    if (impuesto.length == 0) {
        ajax.open('GET','/productos/precioexento/'+costoBolivar.value+'/'+utilidad);
        ajax.send();
    }else{
        ajax.open('GET','/productos/precioiva/'+costoBolivar.value+'/'+impuesto+'/'+utilidad);
        ajax.send();

    }
    
})*/


/*-----------------------------------
Funcion para construir tabla de factura
------------------------------------*/
// Variables
const baseDeDatos = [
    {
        id: 1,
        nombre: 'Patata',
        precio: 1,
        imagen: 'patata.jpg'
    },
    {
        id: 2,
        nombre: 'Cebolla',
        precio: 1.2,
        imagen: 'cebolla.jpg'
    },
    {
        id: 3,
        nombre: 'Calabacin',
        precio: 2.1,
        imagen: 'calabacin.jpg'
    },
    {
        id: 4,
        nombre: 'Fresas',
        precio: 0.6,
        imagen: 'fresas.jpg'
    }

];

let carrito = [];
const divisa = 'Bs';
const DOMitems = document.querySelector('#items');
const DOMcarrito = document.querySelector('#carrito');
const DOMtotal = document.querySelector('#total');
const DOMbotonVaciar = document.querySelector('#boton-vaciar');

// Funciones

/**
 * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
 */
function renderizarProductos() {
    baseDeDatos.forEach((info) => {
        // Estructura
        const miNodo = document.createElement('div');
        miNodo.classList.add('card', 'col-sm-4');
        // Body
        const miNodoCardBody = document.createElement('div');
        miNodoCardBody.classList.add('card-body');
        // Titulo
        const miNodoTitle = document.createElement('h5');
        miNodoTitle.classList.add('card-title');
        miNodoTitle.textContent = info.nombre;
        // Imagen
        const miNodoImagen = document.createElement('img');
        miNodoImagen.classList.add('img-fluid');
        miNodoImagen.setAttribute('src', info.imagen);
        // Precio
        const miNodoPrecio = document.createElement('p');
        miNodoPrecio.classList.add('card-text');
        miNodoPrecio.textContent = `${info.precio}${divisa}`;
        // Boton 
        const miNodoBoton = document.createElement('button');
        miNodoBoton.classList.add('btn', 'btn-primary');
        miNodoBoton.textContent = '+';
        miNodoBoton.setAttribute('marcador', info.id);
        miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
        // Insertamos
        miNodoCardBody.appendChild(miNodoImagen);
        miNodoCardBody.appendChild(miNodoTitle);
        miNodoCardBody.appendChild(miNodoPrecio);
        miNodoCardBody.appendChild(miNodoBoton);
        miNodo.appendChild(miNodoCardBody);
        DOMitems.appendChild(miNodo);
    });
}

/**
 * Evento para añadir un producto al carrito de la compra
 */
function anyadirProductoAlCarrito(evento) {
    // Anyadimos el Nodo a nuestro carrito
    carrito.push(evento.target.getAttribute('marcador'))
    // Actualizamos el carrito 
    renderizarCarrito();

}

/**
 * Dibuja todos los productos guardados en el carrito
 */
function renderizarCarrito() {
    // Vaciamos todo el html
    DOMcarrito.textContent = '';
    // Quitamos los duplicados
    const carritoSinDuplicados = [...new Set(carrito)];
    // Generamos los Nodos a partir de carrito
    carritoSinDuplicados.forEach((item) => {
        // Obtenemos el item que necesitamos de la variable base de datos
        const miItem = baseDeDatos.filter((itemBaseDatos) => {
            // ¿Coincide las id? Solo puede existir un caso
            return itemBaseDatos.id === parseInt(item);
        });
        // Cuenta el número de veces que se repite el producto
        const numeroUnidadesItem = carrito.reduce((total, itemId) => {
            // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
            return itemId === item ? total += 1 : total;
        }, 0);
        // Creamos el nodo del item del carrito
        const miNodo = document.createElement('li');
        miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
        miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} - ${miItem[0].precio}${divisa}`;
        // Boton de borrar
        const miBoton = document.createElement('button');
        miBoton.classList.add('btn', 'btn-danger', 'mx-5');
        miBoton.textContent = 'X';
        miBoton.style.marginLeft = '1rem';
        miBoton.dataset.item = item;
        miBoton.addEventListener('click', borrarItemCarrito);
        // Mezclamos nodos
        miNodo.appendChild(miBoton);
        DOMcarrito.appendChild(miNodo);
    });
    // Renderizamos el precio total en el HTML
    DOMtotal.textContent = calcularTotal();
}

/**
 * Evento para borrar un elemento del carrito
 */
function borrarItemCarrito(evento) {
    // Obtenemos el producto ID que hay en el boton pulsado
    const id = evento.target.dataset.item;
    // Borramos todos los productos
    carrito = carrito.filter((carritoId) => {
        return carritoId !== id;
    });
    // volvemos a renderizar
    renderizarCarrito();
}

/**
 * Calcula el precio total teniendo en cuenta los productos repetidos
 */
function calcularTotal() {
    // Recorremos el array del carrito 
    return carrito.reduce((total, item) => {
        // De cada elemento obtenemos su precio
        const miItem = baseDeDatos.filter((itemBaseDatos) => {
            return itemBaseDatos.id === parseInt(item);
        });
        // Los sumamos al total
        return total + miItem[0].precio;
    }, 0).toFixed(2);
}

/**
 * Varia el carrito y vuelve a dibujarlo
 */
function vaciarCarrito() {
    // Limpiamos los productos guardados
    carrito = [];
    // Renderizamos los cambios
    renderizarCarrito();
}

// Eventos
DOMbotonVaciar.addEventListener('click', vaciarCarrito);

// Inicio
renderizarProductos();
renderizarCarrito();
