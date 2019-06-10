<!-- Buscar cicla robada-->
<section id="buscarBici" class="projects-section bg-light">
    <?php
        /**
        * Código PHP para validar que los datos ingresados
        * no estén vacíos y correspondan a los datos almacenados
        * en la base de datos
        **/
        $formUsuario=$_GET['formUsuario'];
        $formClave=$_GET['formClave'];
        if (isset($formUsuario)) {
            if ($formUsuario=="" || $formClave=="") {
                echo "<div class='form-type-send'><h5>Datos no validos</h5></div>";
            } else {
            }
        }
    ?>
    
    <div class="container">
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" id="2" src="img/bici.png" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Busca aquí tu Bici</h4>
                    <p class="text-black-50 mb-0">Si tu bicicleta fue hurtada, verifica que la policia la haya encontrado colocando el Número de Serie de tu bicicleta <br>
                        <div class="container">
                            <form class="form___reg" action="index.php" method="POST">
                                <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="serie" type="text" placeholder="Serie No." required name="formSerie"><br>
                                <div class="btn__form">
                                    <input class="btn btn-primary js-scroll-trigger" type="submit" value="BUSCAR" name="btnBuscarBici">
                                </div>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>
