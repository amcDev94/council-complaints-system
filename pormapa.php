<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <style>
        @font-face {
            font-family: 'Montserrat';
            src: url(Montserrat-VariableFont_wght.ttf);
        }

        * {
            font-family: 'Montserrat';

        }

        HEADER {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 5.5em;
            color: white;
            background-color: #C70B18;
        }

        .madrid {
            font-weight: bolder;
            font-size: 20pt;
        }

        .quejas {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 25px;
            color: #333333;
            margin-top: 30px;
            margin-left: -300px;
            font-size: 10pt;
        }

        .linea {
            width: 9px;
            height: 40px;
            background-color: #C70B18;
        }

        .distrito {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .text {
            font-size: 13pt;
            margin-left: -150px;
        }

        .mapa {
            width: 448px;
            height: 448px;
            background-repeat: no-repeat;
            background-position: center center;
            margin: 0 auto;
            position: relative;
            padding-left: 10px;
            padding-top: 10px;
        }
    </style>
</head>

<body>

    <header>
        <span class="madrid">Comunidad de Madrid</span>
        <img src="images/madrid.png" width="130">
        <span>Servicios e información</span>
        <span>Cultura y turismo</span>
        <span>Inversión y empresa</span>
        <span>Acción de gobierno</span>
        <img src="images/lupa.png" width="18">
    </header>
    <div class="quejas">
        <div class="linea"></div>

        <?php

        session_start();

        if ($_SESSION) {
            $codigo = $_SESSION['codigo'];
            $nombre = $_SESSION['nombre'];

            echo "<h1>Distrito $codigo - $nombre</h1>";
        }
        ?>
    </div>

    <div class="mapa" <?php

                        $conexion = new mysqli('localhost', 'root', '', 'sistema_quejas_madrid');

                        if ($conexion->connect_errno) {
                            die('Lo siento hubo un problema con el servidor');
                        } else {
                            $sql = "SELECT * FROM distritos where codigo='$codigo'";
                            $resultado = $conexion->query($sql);

                            $fila = $resultado->fetch_assoc();

                            echo "style= background-image:url('images/" . $fila['mapa'] . "');";

                        ?>>
    <?php
                            $sql2 = "SELECT * FROM quejas where codigo_distrito='$codigo'";
                            $resultado2 = $conexion->query($sql2);

                            while ($fila2 = $resultado2->fetch_assoc()) {
                                $x = $fila2['x'];
                                $y = $fila2['y'];
                                $desc = $fila2['descripcion'];
                                if ($fila2['tipo'] == "ambiental") {
                                    echo "<img src='images/greenmini.png' style='position:absolute; top:" . $y . "px; left:" . $x . "px;' title='$desc' >";
                                }
                                if ($fila2['tipo'] == "social") {
                                    echo "<img src='images/blackmini.png' style='position:absolute; top:" . $y . "px; left:" . $x . "px;' title='$desc'>";
                                }
                                if ($fila2['tipo'] == "conflictiva") {
                                    echo "<img src='images/redmini.png' style='position:absolute; top:" . $y . "px; left:" . $x . "px;' title='$desc'>";
                                }
                            }
                        }
    ?>
    </div>
</body>

</html>