<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar</title>
    <style>
        @font-face {
            font-family: 'Montserrat';
            src: url(Montserrat-VariableFont_wght.ttf);
        }

        * {
            font-family: 'Montserrat';

        }

        BODY {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <?php

    session_start();

    if ($_SESSION) {
        $codigo = $_SESSION['codigo'];
    }

    $conexion = new mysqli('localhost', 'root', '', 'sistema_quejas_madrid');

    $x = $_GET['x'];
    $y = $_GET['y'];
    $sexo = $_GET['sexo'];
    $tipo = $_GET['tipo'];
    $descripcion = $_GET['descripcion'];


    if ($conexion->connect_errno) { //if la conexion es erronea
        die('Lo siento hubo un problema con el servidor'); //elimina ese proceso
    } else {
        $sql = "INSERT INTO quejas VALUES ($codigo, $x, $y, '$sexo', '$tipo', '$descripcion', null)";
        $conexion->query($sql);

        if ($conexion->affected_rows >= 1) {
            //  echo 'Filas agregadas: '.$conexion->affected_rows;
            echo "<h1>Queja enviada</h1>";
        }
    }
    ?>
    <meta http-equiv="refresh" content="2; url=quejas_madrid.html">
</body>

</html>