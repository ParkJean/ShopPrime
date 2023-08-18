<?php
session_start();

if(isset($_SESSION['usuarioValido'])){
?>
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="../../../vista/css/estiloindex.css">
    <link rel="stylesheet" href="../../../vista/css/estilomenu.css">
    <link rel="stylesheet" href="../../../vista/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../vista/vendor/fontawesome-free-6.4.0-web/css/all.css">
    <script src="../../vista/vendor/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/buscar.js"></script>




</head>

<body>
    <div id="contenedor">

        <!--Encabezado-->

        <header class="container-fluid  text-white text-center pt-4">
            <div class="row">
                <div class="col-sm-2">
                    <h1 class="tipodeFuente"> ShopPrime</h1>
                </div>

                <div id="frmBuscar" class="col-sm-6">
                    <form action="">

                        <div class="input-group mb-3" id="borde" >


                            <!--Empieza Dropdown -->

                            <div class="dropdon">
                                <a type="button" class="btn btn-warning" href="#" data-bs-toggle="dropdown">
                                    Todas Las Categorias
                                </a>
                                <ol class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="../../../vista/paginas/AlimeBebi.html"
                                            target="contenedor">Alimentos y Bebidas</a></li>
                                    <li><a class="dropdown-item" href="../../../vista/Paginas/Electronica.html" target="contenedor">
                                            Electronicos </a></li>
                                    <li><a class="dropdown-item" href="../../../vista/Paginas/productos.html" target="contenedor"> Productos</a></li>
                                    </ol>
                            </div>
                            <!--Termina Dropdown -->
                            <input class="form-control " type="text" name="txtBuscar" id="txtBuscar" onclick="borde()";"
                                placeholder="Buscar ShopPrime">
                            <button class="btn btn-warning" type="button" name="btnBuscar">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            </div>
                    </form>
                </div>



                <!--Empieza Cuenta-->
                
               
                <div class="col-sm-2">
                    <div class="dropdon">
                        <a type="button" class="btn btn-black text-white" href="#" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <?php
                            echo 'Hola  '. $_SESSION['usuarioValido'];
                ?>
                        </a>
                        <ol class="dropdown-menu ">
                            <li><a class="dropdown-item" href="editarcuenta" target="_blank">Editar Cuenta</a></li>
                            <li><a class="dropdown-item" href="../../../controlador/cerrarsesion.php" target="iframeContenedor"> Salir</a></li>

                        </ol>
                    </div>

                </div>


                <!--TerminaCuenta-->



                <div class="col-sm-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart3" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    Carrito
                </div>
            </div>



        </header>
        <!--Fin Encabezado-->

        <!--Menu-->
        <nav>
            <ul>

                <!--EMPIEZA OFFCANVA -->

                <div class="offcanvas offcanvas-start" id="demo">
                    <div class="offcanvas-header">
                        <h1 class="offcanvas-title">Heading</h1>
                        <button type="button" class="btn-close " data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>Some text lorem ipsum.</p>
                        <p>Some text lorem ipsum.</p>
                        <p>Some text lorem ipsum.</p>
                    </div>
                </div>

                <div class="container-fluid mt-3">
                    </button>
                </div>

                <!--Termina OFFCANVA -->


                <li>
                    <a id="Todo" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
                        &#9776 Todo
                    </a>
                </li>



                <li id="Inicio"><a href="../../../vista/Paginas/inicio.html" target="contenedor"><i class="fa-solid fa-house"></i>
                        Inicio</a></li>

                <!--Empieza Categoria Dropdowns-->

                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Promociones</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link</a></li>
                        <li><a class="dropdown-item" href="#">Another link</a></li>
                        <li><a class="dropdown-item" href="#">A third link</a></li>
                    </ul>
                </li>

                <!--Termina Categoria Dropdowns-->

                <li id="Videojuegos"><a href="../../../vista/paginas/Electronica.html" target="contenedor"><i></i>
                        Videojuegos</a></li>
                <li id="Productos"><a href=""> Deportes</a></li>
                <li id="Lo Mas Vendido"><a href=""><i class="fa-solid fa-chart-line"></i> Lo Mas Vendido</a></li>
                <li id="Comprar De Nuevo"><a href="">Comprar De Nuevo</a></li>
                <li id="Moda"><a href="">Moda</a></li>
                <li id="Vender"><a href="">Vender</a></li>
               x

            </ul>
        </nav>
        <!--Fin Menu-->

        <!--Contenido de pagina-->
        <section>
            <iframe src="../../../vista/Paginas/inicio.html" frameborder="0" name="contenedor" width="100%" height="1080PX">

            </iframe>
        </section>
        <!--Fin Contenido de la pagina-->

        <!--Pie de pagina-->

        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom">
                <li class="nav-item"><a href="vista/paginas/inicio.html" target="iframeCnt"
                        class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
        </footer>

        <!--Fin del pie de pagina-->



    </div>
</body>

</html>
<?php
}else{
    echo 'Debes iniciar Sesion...';
    echo '
    <a href="formulariologin.html">
    Iniciar Seccion
    </a>
    ';
}
?>