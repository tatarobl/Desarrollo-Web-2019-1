<?php include('conexionDB/conexion.php'); ?>
<?php
    /**
    * Sentencias SQL que permiten obtener el usuario
    * a través de la base de datos e implementando
    * los datos obtenidos en el formulario
    * por medio de un método POST
    **/
    $sql="SELECT * FROM PERSONA WHERE usuario='".$_POST['usuario']."' AND clave='".$_POST['clave']."'";
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
    if (mysqli_num_rows($result) == 0) {
        /**
        * Alerta generada en JavaScript en caso que
        * el usuario digíte erroneamente sus
        * credenciales de acceso al portal web
        **/
        echo '<script language="javascript">';
        echo 'alert("Usuario o contraseña incorrecta")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href="../index.php";';
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
        echo '<script language="javascript">';
        echo 'window.location.href="../BuscarBiciLogeado.php";';
        echo '</script>';
    }

?>