<nav arial-label="breadcrumb">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?nombPagina=home"></a>Home</li>
  <li class="breadcrumb-item active"><a href="index.php?nombPagina=galeria"></a>Galeria</li>
</ol>
</nav>

<nav class="navbar navbar-expand-lg bg-secondary p-2">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li><a id="todos" class="selcCategoria col-12 nav-link ms-2">Ver todo</a></li>
            <li><a id="talleres" class="selcCategoria col-12 nav-link ms-2">Talleres</a></li>
            <li><a id="producYoga" class="selcCategoria col-12 nav-link ms-2">Accesorios para Yoga</a></li>
            <li><a id="esterillas" class="selcCategoria col-12 nav-link ms-2">Esterillas</a></li>                                
        </ul>
        <form class="d-flex" role="search">
                <input id="inputBuscador" class="form-control me-2"  type="search" placeholder="Search" data-table="table-id" aria-label="Search">
                <!--<button id="btnBuscador" class="btn" >Buscador</button>-->
        </form>
    </div>

</nav>
<h3 id="textoInf1" class="d-flex justify-content-center"></h3>
    <!--Zona donde estarán los items de la galeria-->
    <div id="contenedorGaleria"class="container">
        <div id="divRowProductoGaleria" class="row ms-2 me-2">
            <!--AQUI VA EL RESULTADO DE LOS PRODUCTOS-->
        </div>
    </div>

    <!--PAGINACION-->
<nav aria-label="Page navigation">
  <ul class="pagination pg-dark justify-content-center pb-5 pt-5 mb-0">
    <li class="page-item">
      <a id="pagAnterior" class="page-link" href="" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <div id="divPaginacion" class="d-flex justify-content-center">

    </div> 
    <li class="page-item">
      <a id="pagNext" class="page-link" href="" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
  <p id="textoInf2" class="d-flex justify-content-center"></p>
  <p id="textoInf3" class="d-flex justify-content-center"></p>
</nav>

                 

    