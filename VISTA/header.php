<!--Aquí va el tema de la sesión-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="VISTA/styleLanding.css">
    <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>MandalaYoga</title>
</head>
<body>
<div class="d-flex justify-content-start container-fluid">
    <a class="navbar-brand" href="index.php?pagina=home">
        <img src="VISTA/img/logo.png" class="d-inline-block align-top" width="120" height="90" alt="logo">
        <img src="VISTA/img/logoMandalayoga.png" class="d-inline-block align-top" width="120" height="90" alt="logoLetras">
    </a>
    <a class="nav-link d-grid d-flex me-2 p-4 ms-auto" href="index.php?pagina=login">
        <button class="btn btn-lg align-items-center" style="background-color: #f26b8a;" type="button">Login</button>
    </a>
</div>
<nav class="navbar navbar-expand-lg bg-secondary p-2">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?nombPagina=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="headerGaleria nav-link" href="index.php?nombPagina=galeria&categoria=todos">Galeria de Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?nombPagina=aboutUs">Conócenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?nombPagina=contacto">Contacto</a>
                </li>
            </ul>
        </div>
        
        <a class="navbar-brand mx-2" href="#">
            <button type="button" class="btn d-inline-block align-text-top btnCarrito" data-bs-toggle="modal" data-bs-target="#divCarrito">
                <img src="VISTA/imG/carrito-de-compras.png" alt="carrito" width="30" height="28" class="d-inline-block align-text-top">
                    <span id="headerSpanCarritoCount" class="position-relative badge rounded-pill" style="background-color: #f26b8a;">
                        <script>
                            
                            var contenido= document.getElementById("headerSpanCarritoCount");
                                    if(localStorage.getItem('headerSpanCarritoCount') == undefined){
                                      contenido.innerHTML=0
                                    }else{
                                        contenido.innerHTML= localStorage.getItem("headerSpanCarritoCount");
                                    }
                        </script>
                    </span>
            </button>
        </a>
    </div>
</nav> <!--FIN BARRA NAVEGACIÓN-->