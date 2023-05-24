<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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

        .form {
            background-color: #E6E6E6;
            padding: 40px;
            border-radius: 5px;
        }

        SELECT {
            border-radius: 5px;
            border: 1px solid #ADA69C;
        }

        TEXTAREA {
            resize: none;
            width: 500px;
            height: 200px;
            border-radius: 7px;
            padding: 5px;
            margin-top: 8px;
            border: 1px solid #ADA69C;
            outline: 1px solid #ADA69C;
        }

        .submit {
            width: 150px;
            height: 50px;
            float: right;
            font-size: 14pt;
            font-weight: bolder;
            background-color: white;
            border-radius: 8px;
            border: 2px solid #ADA69C;
            color: #444444;
        }

        .submit:hover {
            cursor: pointer;
            background-color: #C70B18;
            color: white;
            border: none;
        }

        SPAN {
            font-weight: 600;
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
    <div class="distrito">
        <p class="text">Rellena el formulario.</p>

        <div class="form">
            <form action="enviar_queja.php">
                <input type="hidden" name="x" value=<?php echo ($_GET['mapa_x']) ?>>
                <input type="hidden" name="y" value=<?php echo ($_GET['mapa_y']) ?>>
                <span>Sexo: &nbsp;</span>
                <select name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select><br><br>
                <span>Tipo de queja: &nbsp;</span>
                <select name="tipo">
                    <option value="ambiental">Ambiental</option>
                    <option value="social">Social</option>
                    <option value="conflictiva">Conflictiva</option>
                </select><br><br>
                <span>Descripción:</span><br>
                <textarea name="descripcion" maxlength="255" placeholder="Escriba su queja o sugerencia aquí.">
            </textarea><br><br>
                <input class="submit" type="submit" value="ENVIAR">
            </form>
        </div>
    </div>
</body>

</html>