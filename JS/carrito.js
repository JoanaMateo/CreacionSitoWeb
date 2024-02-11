// Variables
//Me crea una variable con el array de todos los botones para añadir los productos
const contenedorProductosGaleria = document.getElementById('contenedorGaleria');
const btnCarrito = document.querySelector('.btnCarrito');

const headerSpanCarritoCount = document.getElementById('headerSpanCarritoCount');
const carritoCalculoTotal = document.querySelector(".carritoCalculoTotal");
const smsFinalizarCompra = document.getElementById('smsFinalizarCompra');
const divZonaProductosEnElCarrito = document.querySelector('.divZonaProductosEnElCarrito');
const btnVaciarCarrito = document.querySelector('.btnVaciarCarrito');
const btnEnviarCarrito = document.querySelector('.btnCarritoEnviar');

iniciar()

function iniciar(){
    
    if(contenedorProductosGaleria != null){
        contenedorProductosGaleria.addEventListener("click",comprobar);
    }
    
btnVaciarCarrito.addEventListener('click', vaciarCarrito);
btnEnviarCarrito.addEventListener('click', finalizarCompra);

    



function comprobar(event){
    var elemento=event.target;
    
    if(elemento.textContent === "Añadir al Carrito"){
        addToCartCarritoList(elemento);
        btnCarrito.className="d-inline-block align-text-top animate__animated animate__rubberBand";
        
        setTimeout(() => {
            btnCarrito.className="d-inline-block align-text-top";
        }, "1000")
    }
}

//Evento cuando seleccioamos un producto
function addToCartCarritoList(elemento){

//capturamos el div con toda la info del producto
const producto = elemento.closest('.card');
//capturamos la informacion del div
const productoTitle = producto.querySelector('.card-title').textContent;
const productoImg = producto.querySelector('.card-img').src;
const productoPrice = producto.querySelector('.card-price').textContent;

addProductoAlCarrito(productoTitle, productoImg, productoPrice );
}


//a esta función le pasamos las 3variables con la información del producto.
function addProductoAlCarrito(productoTitle, productoImg, productoPrice){
smsFinalizarCompra.innerText = '';

    //Primero evaluamos que el producto esté en el carrito
   const arrayElementosCarrito = divZonaProductosEnElCarrito.getElementsByClassName('shoppingCartItemTitle')

    //recorremos el array
   for(let i=0; i< arrayElementosCarrito.length; i++){
        if(arrayElementosCarrito[i].innerText === productoTitle){
        let cantidadElementos = arrayElementosCarrito[i].parentElement.parentElement.parentElement.querySelector('.shoppingCartItemQuantity')
        cantidadElementos.value++;
        calculoTotalCarrito();
        return;
        }
   }

   
    //Div del Modal
    const divFilaproductoCarrito = document.createElement('div');
    divFilaproductoCarrito.className= "row productoDelCarrito";
    const divImg = document.createElement('div');
    divImg.className= "col-6";
    const divPrecio = document.createElement('div');
    divPrecio.className= "col-2";
    const divInputBtn = document.createElement('div');
    divInputBtn.className= "col-4";
    const divModalImg= document.createElement('div');
    divModalImg.className = "modal-cart-item d-flex justify-content-center align-items-center border-bottom pb-2 pt-3 h-100";
    const divModalPrecio= document.createElement('div');
    divModalPrecio.className = "modal-cart-item d-flex justify-content-center align-items-center border-bottom pb-2 pt-3 h-100";
    const divModalInputBtn= document.createElement('div');
    divModalInputBtn.className = "modal-cart-quantity d-flex justify-content-between aling-items-center border-bottom pb-2 pt-3 h-100";

    //Imagen
    const imgProducto = document.createElement('img');
    imgProducto.src = productoImg; //Le damos el valor del parámetro.
    imgProducto.style.width = "60px";
    imgProducto.style.height= "60px";
    imgProducto.className="modal-cart-img";

    //Titulo
    const tituloProducto = document.createElement('h6');
    tituloProducto.className="modal-cart-title shoppingCartItemTitle text-truncate ml-3 mb-0";
    tituloProducto.textContent = productoTitle; //Le damos el valor del parámetro.

    //Precio
    const pProducto = document.createElement('p');
    pProducto.className= "modal-cart-price shoppingCartItemPrice ml-3 mb-0";
    pProducto.textContent = productoPrice; //Le damos el valor del parámetro.

    //input cantidad producto
    const inputModalProducto= document.createElement('input');
    inputModalProducto.className = "form-control shoppingCartItemQuantity";
    inputModalProducto.type = "number";
    inputModalProducto.value = "1";
    //boton eliminar producto
    const btnModalProducto = document.createElement('button');
    btnModalProducto.className = "btn btn-danger buttonDelete";
    btnModalProducto.type= "button";
    btnModalProducto.textContent= "X";

    //Montamos el modal:
    divModalImg.append(tituloProducto);
    divModalImg.prepend(imgProducto);
    divImg.insertAdjacentElement("afterbegin",divModalImg);

    divModalPrecio.appendChild(pProducto);
    divPrecio.insertAdjacentElement("afterbegin",divModalPrecio);

    divModalInputBtn.append(btnModalProducto);
    divModalInputBtn.prepend(inputModalProducto);
    divInputBtn.appendChild(divModalInputBtn);

    divFilaproductoCarrito.insertAdjacentElement("afterbegin", divImg);
    divFilaproductoCarrito.append(divPrecio);
    divFilaproductoCarrito.insertAdjacentElement("beforeend",divInputBtn);

//Introducimos esta info en la variable de la fila del carrito
divZonaProductosEnElCarrito.append(divFilaproductoCarrito);

//creamos el evento para eliminar los productos del carrito:
divFilaproductoCarrito.querySelector('.buttonDelete').addEventListener('click', borrarProductoCarrito);

//trabajamos la cantidad de los productos
divFilaproductoCarrito.querySelector('.shoppingCartItemQuantity').addEventListener('change',variacionCantidadProductos)

calculoTotalCarrito()

}

function borrarProductoCarrito(event){

    const btnBorrarProductoCarrito = event.target;
    btnBorrarProductoCarrito.closest('.productoDelCarrito').remove();

    calculoTotalCarrito();
}

function variacionCantidadProductos(event){
    const inputCantidadProducto = event.target;

    if (inputCantidadProducto.value <= 0){
        inputCantidadProducto.value = 1 //De esta forma el usuario no podrá bajar de cero.
    }

    calculoTotalCarrito();

}

function calculoTotalCarrito(){
let total= 0
let totalCantidad = 0;
//Este array va cogiendo la info de todos los productos que se van añadiendo.
const arrayProductosCarrito = document.querySelectorAll('.productoDelCarrito');
//Iteramos el array para hacer el calculo del total
arrayProductosCarrito.forEach(arrayProductosCarrito => {
       //Necesitamos obtener solo el valor en tipo number y sin simbolos monetarios
   const precioProducto = Number(arrayProductosCarrito.querySelector('.modal-cart-price').textContent.replace('€', ''));

   //obtenemos en una variable la cantidad
   const cantidadProducto = Number(arrayProductosCarrito.querySelector('.shoppingCartItemQuantity').value);
//Operamos
total =total +  (precioProducto * cantidadProducto);
totalCantidad += cantidadProducto;

});
carritoCalculoTotal.innerText = total.toFixed(2);
headerSpanCarritoCount.innerText = totalCantidad;
//DUDAS COMO SE USA LOCALSTORAGE
localStorage.setItem("carritoContent", headerSpanCarritoCount.innerText )

}
function vaciarCarrito(){
    while(divZonaProductosEnElCarrito.firstChild){
        divZonaProductosEnElCarrito.removeChild(divZonaProductosEnElCarrito.firstChild);
    }
    calculoTotalCarrito();
}

function finalizarCompra(event){
event.preventDefault()    //Al finalizar la compra se borrará el contenido del carrito

if(Number(carritoCalculoTotal.textContent) === 0 || carritoCalculoTotal.textContent === 0.00 ){
    smsFinalizarCompra.innerText= "El carrito está vacio."
}else{
    vaciarCarrito();
    smsFinalizarCompra.innerText= "Su compra se ha enviado correctamente. Gracias"
}
    
}

}