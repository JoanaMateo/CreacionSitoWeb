
<div id="divCarrito" class="modal fade come-from-modal right">
    <div class="modal-dialog d-flex">
        <div class="modal-content justify-content-end">
            <!-- cabecera del diálogo -->
            <div class="modal-header">
                <h4 class="modal-title">¡COMPLETA TU PEDIDO!</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="row">
                    
                        <div class="col-6 modal-header">
                            <h6>Producto</h6>
                        </div>
                    
                        <div class=" col-2 modal-header">
                            <h6>Precio</h6>
                        </div>
                    
                        <div class="col-4 modal-header">
                            <h6>Cantidad</h6>
                        </div>
                    
                </div>
                <div class="row">
                    <!--Zona donde estarán los items del carrito-->
                    <div class="modal-cart-items divZonaProductosEnElCarrito"></div>
                </div>
                <hr>
                <p>Total: <spam class="ml-4 mb-0 carritoCalculoTotal">0</spam> €</p>
                <button class="btn btn-danger btnVaciarCarrito">Vaciar</button>
                <p id="smsFinalizarCompra"></p>
            </div><!--Fin cuerpo de modal-body -->
                        <!-- pie del diálogo -->
                        <div class="modal-footer">
                            <form action="">
                                <button type="submit" class="btn btn-secondary btnCarritoEnviar">CONTINUAR</button>
                            </form>
                        </div>
        </div><!--Fin modal-content-->
    </div><!--Fin modal-dialogo-->
</div><!--Fin modal-->

  
