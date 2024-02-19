<nav arial-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?nombPagina=home"></a>Home</li>
  </ol>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <img src="VISTA/img/imgPrincipal.png" class="img-fluid" style="width:60%" alt="imagenPrincipal">
    </div>
    <div class="col">
      <h1>ENCUENTRA TU EQUILIBRIO</h1>
    </div>
  </div>

  <div class="row justify-content-center col-12 m-0 mt-2" style="z-index:1;" id="he">
    <div class="col-12 d-flex justify-content-center bg-light text-dark digital">
      <marquee id="descuento" WIDTH=70% SCROLLAMOUNT=12 behavior="scroll" direction="left" onmouseover="this.stop();"  onmouseout="this.start();">
      Descuentos especiales por San Valentin:<span class="fw-bold" style="color:red"> ILOVEYOGA</span>
      </marquee>
    </div>
  </div>
  <div class="row d-flex justify-content-center col-12 mt-3 text-center">
    <div class="col-12 d-flex justify-content-center p-0">
      <h2>CATEGORIAS</h2>
    </div>
  </div>
  <div class="row d-flex">
    
      <div class="card col-4 d-flex align-items-center text-center">
          <div class="card" style="width: 18rem;">
            <img src="VISTA/img/tallerYoga.png" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Talleres</h5>
            </div>
            <div class="card-footer d-grid">
              <a href="index.php?nombPagina=galeria&categoria=talleres" class="homeEnalceGaleria btn btn-primary">Ver más</a>
            </div>
          </div>
      </div>

      <div class="card col-4 d-flex align-items-center text-center">
            <div class="card" style="width: 18rem;">
              <img src="VISTA/img/productosYoga.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Productos de Yoga</h5>
              </div>
              <div class="card-footer d-grid">
                <a href="index.php?nombPagina=galeria&categoria=todos" class="homeEnalceGaleria btn btn-primary aCardCategoria">Ver más</a>
              </div>
            </div>
      </div>
    
      <div class="card col-4 d-flex align-items-center text-center mb-4 border-0">
            <div class="card" style="width: 18rem;">
              <img src="VISTA/img/blogYoga.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Conoce nuestro Blog</h5>
              </div>
              <div class="card-footer d-grid">
                <a href="index.php?nombPagina=pagError" class="btn btn-primary aCardCategoria">Ver más</a>
              </div>
            </div>
        </div>
  </div>
<!--
  <div class="row d-flex justify-content-center col-12 mt-3" style="z-index:1;">
    <div class="col-12 d-flex justify-content-center p-0">
      <p class="text-center titulos">PRODUCTOS MAS VENDIDOS</p>
    </div>
  </div>
  <div id="demo" class="carousel slide mt-2 border-bottom border-1" data-bs-ride="carousel">

     Indicators/dots 
    <div class="carousel-indicators">
      <button id="btnCarouselIndicators" type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active bg-danger" aria-label="..."></button>
    </div>
  
     The slideshow/carousel  1420x400
    <div class="carousel-inner">
      Aquí van las fotos del carousel
    </div>
  
    Left and right controls/icons 
    <button class="carousel-control-prev" style="top:40%;bottom:40%"  aria-label="boton1" type="button" data-bs-target="#demo" id="estec" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark rounded-circle" id="carousel1"></span>
    </button>
    <button class="carousel-control-next" style="top:40%;bottom:40%"  aria-label="boton2" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
    </button>
  
  </div>
-->
  <!---->
  <div class="row border">
    <div class="col">
          <h2>AQUI IRIA LA GALERIA DE PRODUCTOS POR UN API SPRINT2</h2>
          <p>Requisitos funcionales</p>
          <p>- La página debe constar de una galería de productos/servicios destacados obtenidos del API del backend
          - Debe añadirse un buscador que permita buscar productos/servicios por nombre/descripción
          - Si hay más productos de los que se pueden mostrar debe añadirse una páginación</p>
          <p>Requisitos técnicos</p>

          <p>- Se debe utilizar exclusivamente los métodos y objetos del DOM para añadir los eventos y crear los elementos del carrito de la compra.
          - Los productos/servicios deben guardarse en un array de objetos.
          - Se debe utilizar Vainilla Javascript, no está permitido ningún framework javascript </p>
    </div>
  </div>
</div>

