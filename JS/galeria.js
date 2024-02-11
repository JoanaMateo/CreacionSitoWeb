const divRowProductoGaleria = document.getElementById('divRowProductoGaleria');
const paginaItem="";

let pagina;
let totalConsulta;
let registro= 3;

document.addEventListener('DOMContentLoaded', ()=>{
    if(divRowProductoGaleria != null){ 
        ajaxAllProductos();

        /*PAGINACIÓN */
        const btnPagAnterior = document.getElementById("pagAnterior");
        const btnPagNext = document.getElementById("pagNext");

        btnPagAnterior.addEventListener('click', pagAnterior);
        btnPagNext.addEventListener('click', pagNext);

        /*BUSCADOR */
        const buscador = document.querySelector("input[type='search']");
        console.log(buscador)
        buscador.addEventListener("keyup", buscadorProductos);
        
        /*AJAX */
        const headerGaleria = document.getElementsByClassName("headerGaleria nav-link");
        
        headerGaleria[0].addEventListener('click', ajaxAllProductos);
               
        const selcCategoria = document.querySelectorAll("li .selcCategoria");
        selcCategoria.forEach(selcCategoria =>{
            selcCategoria.addEventListener('click', selecionaTipoCategoria);
        })
    }    
    function ajaxAllProductos(){
        divRowProductoGaleria.innerHTML = ""
    
            fetch('http://localhost:8888/mandelaYoga_JoanaMateo/API/mostrarProductoAPI.php?nombPagina=galeria&categoria=todos', {method: 'GET'})
            .then(response => response.json())
            //.then(datos=>console.log(typeof(datos)))
            //.then(datos=>console.log(datos))
            .then(datos => cargarDatosProductos(datos))
        //cargarPaginacion();          
    }

    function selecionaTipoCategoria(event){
        let categoria = event.target.id;
        console.log(categoria);
        switch(categoria){
            case "todos":
                divRowProductoGaleria.innerHTML = "";
                fetch(`http://localhost:8888/mandelaYoga_JoanaMateo/API/mostrarProductoAPI.php?nombPagina=galeria&categoria=${categoria}`, {method: 'GET'})
                .then(response => response.json())
                .then(datos => cargarDatosProductos(datos))
            break;
            case "talleres":
            case "producYoga":
            case "esterillas":
            case "buscador":
                divRowProductoGaleria.innerHTML = "";
                fetch(`http://localhost:8888/mandelaYoga_JoanaMateo/API/mostrarProductoAPI.php?nombPagina=galeria&categoria=${categoria}`, {method: 'GET'})
                .then(response => response.json())
                .then(datos => cargarDatosProductos(datos))
            break;
        } 
    }

    function cargarDatosProductos(datos){
console.log(datos.datosConsultaProductos)
const card = crearCard(datos.datosConsultaProductos);
        
divRowProductoGaleria.appendChild(card);
/*
        datos.datosConsultaProductos.forEach(elementos => {

        const card = crearCard(elementos);
        
        divRowProductoGaleria.appendChild(card);
        });*/

        /*
        datos['paginacion'] es un objeto.
            console.log(datos['paginacion'].total)            
            //igual que producto pero con la pagina.
            //const pag = crearPaginacion(elementos);
            //añadims¡os
            //paginaItem.appendChild(pag);
            });   */
    }
    function crearPaginacion(objeto){

    }

    function crearCard(objeto){

        const divCol = document.createElement('div');
        divCol.className = "col-4 mb-3";
        const divCard = document.createElement('div');
        divCard.className = "card d-flex d-flex align-items-center text-center";
        const divCardBody = document.createElement('div');
        divCardBody.className = "card-body";

        const hcinq = document.createElement('h5');
        hcinq.className = "card-title pt-4";
        hcinq.textContent = objeto.nombre; //Aquí el nombre
        const hcuat = document.createElement('h4');
        hcuat.className = "card-price";
        hcuat.textContent = objeto.precio+" €"; //Aquí el precio
        const imgProduct = document.createElement('img');
        imgProduct.src="VISTA/"+objeto.imgUrl; //Aquí va la imagen
        imgProduct.className = "card-img img-fluid";
        imgProduct.style = "height:50%; width:50%";
        imgProduct.alt = "";
        const buttonAddProduct = document.createElement('button');
        buttonAddProduct.id = "btnAddProductosCarrito";
        buttonAddProduct.type = "button";
        buttonAddProduct.className = "btn btn-primary";
        buttonAddProduct.textContent = "Añadir al Carrito";

        divCol.insertAdjacentElement("afterbegin",divCard);
        divCard.appendChild(hcinq);
        divCard.appendChild(imgProduct);
        divCard.append(divCardBody);
        divCardBody.appendChild(hcuat);
        divCardBody.appendChild(buttonAddProduct);

        return divCol;
    }
    

function buscadorProductos(){

}

}); 