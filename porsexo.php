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
            margin-left: 30px;
        }
        .grafico{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap:10px;
            margin-left:-200px;
            margin-top:40px;

        }
        .barras{
            display:flex;
            flex-direction: row;
            justify-content: center;
            align-items: baseline;
            gap:30px;
        }
        .sexo{
            display:flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap:20px;
            margin-left:-6px;
        }
        IMG:hover{
            filter: brightness(0.8);
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

            echo "<h1>Distrito $codigo - $nombre</h1>";
        }
    ?>
    </div>

    <div class="grafico">
        <div class="barras">
    <?php
    
    $conexion = new mysqli('localhost', 'root', '', 'sistema_quejas_madrid');

        if($conexion -> connect_errno){ 
            die('Lo siento hubo un problema con el servidor');

        }else{
            $sql="SELECT * FROM quejas where codigo_distrito='$codigo'"; 
            $resultado=$conexion->query($sql);
            
            $M=0;
            $F=0;
            while($fila = $resultado->fetch_assoc()){
                if ($fila['sexo']=="M"){
                    $M++;
                }
                if ($fila['sexo']=="F"){
                    $F++;
                }
            }
            $porcentajeM=$M/($M+$F)*100*4;
            $porcentajeF=$F/($M+$F)*100*4;

            $porcentajeMtitle=$M/($M+$F)*100;
            $porcentajeFtitle=$F/($M+$F)*100;

            echo "<img src='images/azul.jpg' width='60' height='$porcentajeM' title='$porcentajeMtitle%'>
                <img src='images/rojo.png' width='60' height='$porcentajeF' title='$porcentajeFtitle%'>";

        }

    ?>
    </div>
    <div class="sexo">
        <span>Hombres</span><span>Mujeres</span>
    </div>
    </div>
</body>
</html>