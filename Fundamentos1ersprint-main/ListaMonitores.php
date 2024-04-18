<?php
    $conexion = mysqli_connect('localhost', 'root', '', 'registro')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ListaMonitores.css">
    <title>Lista de monitores</title>
</head>
<body>
<header>
        <div class="logo">
            <img src="Imagenes/LogoUdem.jpeg" alt="Logo de Mi Sitio Web">
        </div>
        <nav>
            <ul>
                <li><a href="InicioDocente.html">Inicio</a></li>
                <li><a href="InicioDocente.html">Enviar Invitación por área</a></li>
                <li><a href="InicioDocente.html">Enviar invitación por promedio</a></li>                
                <li><a href="ListaMonitores.php">Lista de monitores</a></li>
                <li><a href="Bienvenida.html">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <table class="styled-table">
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Cedula</td>
            <td>Tipo de perfil</td>
        </tr>

        <?php
            $sql = "SELECT * FROM datos where tipo_perfil ='monitor'";
            $result = mysqli_query($conexion, $sql);

            while($mostrar=mysqli_fetch_array($result)){
        ?>

            <tr>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['cedula'] ?></td>
                <td><?php echo $mostrar['tipo_perfil'] ?></td>
            </tr>

        <?php
            }
        ?>

    </table>
</body>
</html>