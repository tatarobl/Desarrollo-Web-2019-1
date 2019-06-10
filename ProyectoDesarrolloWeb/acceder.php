<section id="signup" class="signup-section">
        
    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Ingreso</h2>
                <h4 class="text-white mb-5">ULTIMO INGRESO: <?php echo $ultimologin;?></h4>
                <form class="form-center" action="index.php" method="GET">
                    <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="formUsuario" placeholder="Usuario" name="formUsuario">
                    <input type="password" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="formClave" placeholder="Contraseña" name="formClave"><br>
                    <button type="submit" class="btn btn-primary mx-auto" name="btnAcceso">Ingresar</button>
                </form>

            </div>
        </div>
    </div>
    
    <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script>
</section>