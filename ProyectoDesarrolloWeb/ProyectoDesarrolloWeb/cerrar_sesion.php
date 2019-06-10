<?php
    require_once 'config/config.php';
    $_SESSION['idusuario'] = "";
    session_destroy();
    echo '<script type="text/javascript">window.location = "index.php";</script>';
?>