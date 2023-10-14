<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juago Dados</title>
    <style>
        .Dados1{
            background-color: red;
            width: 20%;
            height: 150px;
            display: inline-block;
        }
        .Dados2{
            background-color: blue;
            width: 20%;
            height: 150px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Cinco dados</h1>
    <h3>Actualice la pagina para mostrar una nueva tirada</h3>
    <div class="J1">
        <label><b>Jugador 1</b></label>
        <div class="Dados1">
           <?php   
            $Dados=
            ["&#9856;","&#9857","&#9858;","&#9859;","&#9860","&#9861"];
            $SumaDadosJ1=0;
            $DadoMin=6;
            $DadoMax=0;

            for($i=0;$i<5;$i++){
            $Tirada=rand(0,5);
            echo "<label style='font-size:70px'>$Dados[$Tirada]</label>";
            //guardar el dado mas pequeño
            if($Tirada+1<$DadoMin){
                $DadoMin=$Tirada+1;
            }
            //guardar el dado mas grande
            if($Tirada+1>$DadoMax){
                $DadoMax=$Tirada+1;
            }
            $SumaDadosJ1=$SumaDadosJ1+$Tirada+1;
            }
            $SumaDadosJ1=$SumaDadosJ1-$DadoMax-$DadoMin;
            echo("<script>console.log('PHP: DadoMAx" . $DadoMax . "');</script>");
            echo("<script>console.log('PHP: DadoMIx" . $DadoMin . "');</script>");
            ?>
        </div>
        <?php
            echo "<label><b>$SumaDadosJ1 puntos</b></label>";
        ?>
    </div>
    <div class="J2">
        <label><b>Jugador 2</b></label>
        <div class="Dados2">
           <?php
            $SumaDadosJ2=0;
            $DadoMin2=6;
            $DadoMax2=0;
   
            for($i=0;$i<5;$i++){
            $Tirada=rand(0,5);
            echo "<label style='font-size:70px'>$Dados[$Tirada]</label>";
            //guardar el dado mas pequeño
            if($Tirada+1<$DadoMin2){
                $DadoMin2=$Tirada+1;
            }
            //guardar el dado mas grande
            if($Tirada+1>$DadoMax2){
                $DadoMax2=$Tirada+1;
            }
            $SumaDadosJ2=$SumaDadosJ2+$Tirada+1;
            }
            $SumaDadosJ2=$SumaDadosJ2-$DadoMax2-$DadoMin2;
            echo("<script>console.log('PHP: DadoMAx" . $DadoMax2 . "');</script>");
            echo("<script>console.log('PHP: DadoMIx" . $DadoMin2 . "');</script>");
            ?>
        </div>
        <?php
            echo "<label><b>$SumaDadosJ2 puntos</b></label>";
        ?>
    </div>
    <?php
        if($SumaDadosJ1>$SumaDadosJ2)
            echo "<label><b>Ha ganado el Jugador 1</b></label>";
        else
            echo "<label><b>Ha ganado el Jugador 2</b></label>";
    ?>
    
</body>
</html>