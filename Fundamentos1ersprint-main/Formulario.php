<?php
    $servername = "localhost";
    $database = "registro";
    $username = "root";
    $password = "";

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $cedula = $_POST['cedula'];
    $carrera = $_POST['carrera'];
    $mensaje = $_POST['mensaje'];

    $conexion = mysqli_connect($servername,$username,$password,$database);
    $sql = "INSERT INTO formulario (nombre, correo, telefono, cedula, carrera, mensaje) values ('$nombre', '$correo', '$telefono'
    , '$cedula', '$carrera', '$mensaje')";

    if(mysqli_query($conexion, $sql)){
        header('Location: FormularioExitoso.html');
    }
?>