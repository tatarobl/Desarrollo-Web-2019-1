<?php
    require_once 'usuario.php';
    $claseUsuario = new Usuario();
    
    # Se crea la cookie mediante el inicio de sesion
    # ISSET -->> Verifica que la variable esta definida o no es null
    # EMPTY -->> Determina si la variable esta vacia
    if (isset($_SESSION['idusuario']) && !empty(trim($_SESSION['idusuario']))) {
        setcookie('ultimologin', $_SESSION['idusuario'], time()+3600); #dejara de existir luego de 3600 seg
    }
    $UrlUsuario = "acceder.php";
    # Menu que se agregara despues de iniciar sesion
    $itemMenu   = '<li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#registroDatos">Registro</a>
    </li>
    <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#signup">Ingresar</a>
    </li>';
    $itemCerrarSesion = "";
    #Parte que se quitara para registrar los datos personales
    $BoxRegistro = '<!-- Registro datos personales -->
        <section id="registroDatos" class="projects-section bg-light">
            <div class="container">
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7">
                        <img class="img-fluid mb-3 mb-lg-0" id="2" src="img/fondo.jpg" alt="">
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Registro</h4>
                            <p class="text-black-50 mb-0">Para iniciar sesión, registrate aquí<br><br></p>

                            <div class="container">
                                <form class="form___reg" action="index.php" method="POST">
                                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="user" type="text" placeholder="Usuario" required name="formRegistrarUsuario">
                                    <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="password" type="password" placeholder="Contraseña" required name="formRegistrarClave"><br>
                                    <div class="btn__form">
                                        <input class="btn btn-primary js-scroll-trigger" type="submit" value="Registrar" name="btnRegistrar">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Termina Registro datos personales -->';

    # Comprobar si existe sesion
    if (isset($_SESSION['idusuario']) && !empty(trim($_SESSION['idusuario']))) {
        $idUnico = trim($_SESSION['idusuario']);

        # Existe Sesion
        $UrlUsuario = "BuscarBiciLogueado.php";
        $itemMenu   = '<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#buscarBici">Buscar Bici</a>
        </li>';
        $itemCerrarSesion = '<li class="nav-item">
            <a class="nav-link" href="cerrar_sesion.php">Cerrar Sesión</a>
        </li>';
        $BoxRegistro = "";

    }

    if (isset($_COOKIE['ultimologin']) && !empty(trim($_COOKIE['ultimologin']))) {
        $ultimologin = $_COOKIE["ultimologin"];
        ($_COOKIE['ultimologin']);
    } else {
        $ultimologin = "-";
    }
?>