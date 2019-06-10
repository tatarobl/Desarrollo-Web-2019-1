<?php
    /**
    * Método que permite la conexión con la báse de datos
    * Implementada en PHPMyAdmin
    **/
    $conexion= new mysqli('localhost','bike','bike','bike');

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);
?>