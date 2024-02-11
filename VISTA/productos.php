
<?php
$tabla = 'productos';
$listadoroductos = new Control();
$productos = $listadoroductos->mostrarProductos($tabla);
?>
<nav arial-label="breadcrumb">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php?pagina=home"></a>Home</li>
  <li class="breadcrumb-item active"><a href="index.php?nombPagina=productos"></a>Productos</li>
</ol>
</nav>

<div id="body" class="row ms-2 me-2">
    <?php foreach($productos as $value):?>
      
      <div class="col-4 mb-3">
        <div class="card d-flex d-flex align-items-center text-center">
            <h5 class="card-title pt-4"><?php echo $value->getNombreProducto();?></h5>
            <img src="VISTA/<?=$value->getImgUrl();?>" class="card-img img-fluid" style="height:50%; width:50%" alt="">
                <div class="card-body">
                  <h4 class="card-price"><?php echo $value->getPrecioProducto();?> €</h4>
                  <button id="btnAddProductosCarrito" type="button"class="btn btn-primary">Añadir al Carrito</button>
                      <!--<p class="card-text"><//?php echo $value->getDescripcionProducto();?></p>-->
                </div>
        </div>
      </div>
    <?php endforeach; ?>
</div> 