<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcar y consultar</title>
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
            margin-left: -330px;
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

        $codigo = $_GET['codigo'];
        $nombre = $_GET['nombre'];

        $_SESSION['codigo'] = $codigo;
        $_SESSION['nombre'] = $nombre;


        if ($_SESSION) {
            $nombre = $_SESSION['nombre'];
            echo "<h1>Distrito $codigo - $nombre</h1>";
        }
        ?>
    </div>

    <div class="distrito">
        <p class="text">¿Qué operación desea hacer?</p>

        <img src="images/consultasymarcar.jpg" usemap="#image-map">

        <map name="image-map">
            <area target="" alt="" title="" href="marcar.php" coords="216,22,212,51,196,85,178,105,160,132,156,159,160,192,116,189,72,173,36,150,16,125,13,100,31,65,70,42,138,22" shape="poly">
            <area target="" alt="" title="" href="consultar.php" coords="215,22,252,25,309,42,346,65,366,97,363,124,337,158,286,183,236,194,187,197,160,193,156,154,161,130,181,103,195,88,212,53" shape="poly">
        </map>
    </div>

</body>

</html>