<?php
require 'conexion.php';

if(isset($_POST['login'])){
    $cedula = $_POST['cedula'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM datos WHERE cedula = '$cedula' and contrasena ='$contrasena'";
    $resultado = mysqli_query($conexion, $sql);
    $numero_registro = mysqli_num_rows($resultado);

    if ($numero_registro != 0){
        $fila = mysqli_fetch_assoc($resultado);
        $tipo_perfil = $fila['tipo_perfil'];

        switch ($tipo_perfil) {
            case 'monitor':
                header('Location: InicioMonitor.html');
                break;
            case 'estudiante':
                header('Location: InicioEstudiante.html');
                break;
            case 'docente':
                header('Location: InicioDocente.html');
                break;
            default:
                echo "Tipo de perfil no válido";
                break;
        }
        exit; // Detiene la ejecución del script
    } else {
        header('Location: LoginInvalido.html');
    }
}
?>
