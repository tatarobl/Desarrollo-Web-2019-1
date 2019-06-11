<?php
    # Verifica que el archivo ya este incluido
    require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Find Your Bike</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Find Your Bike</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Registra tu Bici</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#cicloruta">Cicloruta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#seguridad">Tips Seguridad</a>
                    </li>
                    <!--Coloca en el menu las opciones Registrarse, Ingresar-->
                    <?php echo $itemMenu; ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a>
                    </li>
                    <!-- Coloca la opcion Cerrar sesion -->
                    <?php echo $itemCerrarSesion; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Find your Bike</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Si robaron tu bicicleta y la tenías registrada aquí puedes buscar si fue encontrada. Recuerda registrar tu bicicleta </h2>
                <a href="#about" class="btn btn-primary js-scroll-trigger">Registra tu bici</a>
            </div>
        </div>
    </header>

    <!-- Registrar la bicicleta -->
    <section id="about" class="about-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Registra tu Bici</h2>
                    <p class="text-white-50">Registrar tu bici ayudará a combatir el hurto y la comercialización de bicicletas robadas. Además, facilitará la devolución a sus dueños.
                        <a href="https://registrobicibogota.movilidadbogota.gov.co/#!/">Haz click aqui</a>. Sigue las instrucciones y registrate</p>
                </div>
            </div>
            <img src="img/registro.png" class="img-fluid" alt="">
        </div>
    </section>

    <!-- CICLORUTA -->
    <section id="cicloruta" class="projects-section bg-light">
        <div class="container">
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1BZqeTtkmI-zmgAbhZECpx-OH060" width="640" height="480"></iframe>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Cicloruta de Bogotá</h4>
                        <p class="text-black-50 mb-0">Aquí encontrarás la cicloruta de la ciudad de Bogotá-Colombia. Es importante estar actualizado con estas rutas para que tu camino sea más tranquilo, seguro y agradable.<br> <br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TIPS DE SEGURIDAD -->    
    <section id="seguridad">
        <div class="container">
            <!-- Project One Row -->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/seguridad1.jpg" alt="" height="300px" width="500px">
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Seguridad de tu Bicicleta</h4>
                                <p class="mb-0 text-white-50">No dejes tu bici en cualquier lado y al ponerle el candado recuerda hacerlo de alguna de las maneras que ves en la foto para que de esta manera este más excenta de que te la roben</p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6">
                    <img class="imtg-fluid" id="1" src="img/seguridad2.jpg" alt="" height="300px" width="555px">
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Equipo de Seguridad</h4>
                                <p class="mb-0 text-white-50">Recuerda siempre utilizar el casco, puede que no por imprudencia tuya si no de terceros, puede suceder un accidente. <br> Comprar uno que se pueda ajustar al tamaño de tu cabeza</p>
                                <hr class="d-none d-lg-block mb-0 mr-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        # Empieza Registro usuario
        if (isset($_POST['btnRegistrar'])) {
                # TRIM -->> busca eliminar espacios en blanco
                # POST -->> 
                $formUsuario = trim($_POST['formRegistrarUsuario']);
                $formClave   = trim($_POST['formRegistrarClave']);
            # Existe Boton Registrar
            if (isset($_POST['formRegistrarUsuario']) && !empty(trim($_POST['formRegistrarUsuario'])) && isset($_POST['formRegistrarClave']) && !empty(trim($_POST['formRegistrarClave']))) {
                # Todo OK
                # Registro correcto
                echo $claseUsuario->MostrarMensaje("Registrado Correctamente", "ok");
            } else {
                # Falto Llenar un campo obligatorio
                echo $claseUsuario->MostrarMensaje("Falto llenar algun campo obligatorio", "error");
            }
        } else {}
    ?>

    <?php echo $BoxRegistro; ?>
    
    <?php
        # Empieza Comprobar acceso
        if (isset($_POST['btnAcceso'])) {
            $formUsuario = $_POST['formUsuario'];
            $formClave   = $_POST['formClave'];
            # Existe Boton Acceso
            if (isset($_POST['formUsuario']) && !empty(trim($_POST['formUsuario'])) && isset($_POST['formClave']) && !empty(trim($_POST['formClave']))) {
                # Todo OK, comprobar login              
                
                if ( $formUsuario == '' && $formClave == '') {
                     echo "<div class='form-type-send'><h5>Datos no validos</h5></div>";
                } else {
                }
            }
        }
    ?> 

    <?php include('conexionDB/conexion.php'); ?>

    <?php
        /**
        * Sentencias SQL que permiten obtener el usuario
        * a través de la base de datos e implementando
        * los datos obtenidos en el formulario
        * por medio de un método POST
        **/
        $sql="SELECT * FROM PERSONA WHERE Usuario='".$_POST['correo']."' AND Contrasena='".$_POST['contrasena']."'";
        /**
        * Implementación de una función MySQLi para
        * generar consultas
        **/
        $result = mysqli_query($conexion,$sql);
        $datos = mysqli_fetch_array($result);

        /**
        * Método que genera una cookie con el identicador
        * del usuario que inicia sesión
        **/
        setcookie('id_persona',$datos['Id_persona']);
        if (mysqli_num_rows($result) == 0) {
            /**
            * Alerta generada en JavaScript en caso que
            * el usuario digíte erroneamente sus
            * credenciales de acceso al portal web
            **/
            echo '<script language="javascript">';
            echo 'alert("Usuario o contraseña incorrecta")';
            echo '</script>';
        } else {
            /**
            * Alerta generada en JavaScript en caso que
            * el usuario digíte correctamente sus
            * credenciales de acceso al portal web
            **/
            echo '<script language="javascript">';
            echo 'alert("Bienvenido")';
            echo '</script>';
        }

    ?>

    <?php
        # Empieza Buscar Bici
            if (isset($_POST['btnBuscarBici'])) {
                $NumSerie = $_POST['formSerie'];
                if (isset($_POST['formSerie']) && !empty(trim($_POST['formSerie']))) {
                    # No esta vacio el numero de serie
                    if ($NumSerie == 'ABC123' || $NumSerie == 'XYZ789') {
                        echo $claseUsuario->MostrarMensaje("Tu bici fue encontrada, comunicate con el 123!!!", "ok");
                    } else {
                        echo $claseUsuario->MostrarMensaje("Lo sentimos, pero tu bici no fue encontrada.", "error");
                    }
                }
            } else {}
    ?>

    <!-- BuscarBiciLogueado -- Acceder -->
    <?php require_once $UrlUsuario; ?>
    <!-- Termina BuscarBiciLogueado -- Acceder -->

    <!-- Contacto -->
    <section id="contacto" class="contact-section bg-black">
        <div class="container">

            <div class="row">

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Biografia</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">Tatiana Vanessa Robles Rodríguez - 21 años.<br>Estudiante de Septimo semestre de Ingeniería de Sistemas de la Universidad EAN.<br> Fundadora de Find your Bike </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Foto</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">
                                <a href="#">Tatiana Vanessa Robles Rodriguez <img class="img-fluid" src="img/tati.jpeg"></a>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4">
                            <div class="small text-black-50"><a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtDnGMFTkspSdkxhkjlQwcLzSXBfRHFZTfHMMfQjXtZNrdjQtWqvhWnSwPtHZTSrMwQWpbwV">troblesr5459@universidadean.edu.co</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="social d-flex justify-content-center">
                <a href="#" class="mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="mx-2">
                    <i class="fab fa-github"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
        <div class="container">
            Copyright &copy; Find Your Bike
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
