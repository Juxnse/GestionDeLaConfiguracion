<?php
    $servername = "localhost";
    $database = "registro";
    $username = "root";
    $password = "";

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $contrasena = $_POST['contrasena'];
    $tipo_perfil = $_POST['tipo_perfil'];

    $conexion = mysqli_connect($servername,$username,$password,$database);
    $sql = "INSERT INTO datos (nombre, apellidos, cedula, contrasena, tipo_perfil) values ('$nombre', '$apellidos', '$cedula'
    , '$contrasena', '$tipo_perfil')";

    if(mysqli_query($conexion, $sql)){
        header('Location: RegistroExitoso.html');
    }
?>