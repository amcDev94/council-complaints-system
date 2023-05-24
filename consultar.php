

<!DOCTYPE html>
<html lang="en">
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
        *{
            font-family: 'Montserrat';

        }
        HEADER{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            width:100%;
            height:5.5em;
            color:white;
            background-color:#C70B18;
        }
        .madrid{
            font-weight: bolder;
            font-size:20pt;
        }
        .quejas{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap:25px;
            color:#333333;
            margin-top: 30px;
            margin-left:-300px;
            font-size: 10pt;
        }
        .linea{
            width:9px;
            height:40px;
            background-color:#C70B18;
        }
        .distrito{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap:20px;
        }
        .text{
            font-size: 13pt;
            margin-left: -150px;
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

            if($_SESSION){
                $codigo=$_SESSION ['codigo'];
                $nombre=$_SESSION ['nombre'];
                echo "<h1>$codigo - $nombre</h1>";
            }
        ?>
    </div>
    <div class="distrito">
        <p class="text">¿Qué tipo de consulta desea hacer?</p>
        <img src="images/consultas.jpg" usemap="#image-map">

        <map name="image-map">
            <area target="" alt="" title="" href="pormapa.php" coords="244,82,279,79,314,84,336,94,344,103,346,113,335,127,310,137,276,140,243,136,220,129,207,115,208,102,224,90" shape="poly">
            <area target="" alt="" title="" href="porsexo.php" coords="82,136,95,130,120,126,148,124,182,132,195,140,204,152,199,167,175,181,152,186,122,186,98,182,74,172,68,165,64,157,68,144" shape="poly">
    </map>
    </div>
</body>
</html>