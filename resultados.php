<?php
session_start();
include 'datos.php';

$fyh = $_SESSION['fyh'];
$nombre = $_SESSION['usuario'];
$respuestas = $_SESSION;
$aciertos = 0;
$fallos = 0;
$numpreg = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>

    <div class="enunciado">
    <?php
        echo($nombre.', el resultado de tu examen realizado el día y hora '.$fyh.' es:');
    ?>
    </div>
    <div class="cuerpo">
    <p class="respuestas">
    <?php
    
    foreach($respuestas as $clave => $valor){
        foreach($buenas as $clave2 => $valor2){

            if($clave == $clave2 and $valor == $valor2){
                $aciertos++;
                $numpreg++;
                echo "<p>La pregunta ".$numpreg." es <font color='#0000ff'>correcta</font></p>";
            } else if($clave == $clave2 and $valor != $valor2){
                $fallos++;
                $numpreg++;
                echo "<p>La pregunta ".$numpreg." es <font color='#ff0000'>incorrecta</font></p>";
            }
        }
    }
    ?>
    </p>
    <br>
    <p>Tu nota sobre 10 es: 
        <?php
            if($aciertos < 5)
                echo "<font color='#ff0000'>$aciertos. Insuficiente</font>";
            else if(4 > $aciertos and $aciertos < 7)
                echo "<font color='#0000ff'>$aciertos. Suficiente</font>";
            else if(6 > $aciertos and $aciertos < 9)
            echo "<font color='#0000ff'>$aciertos. Notable</font>";
            else 
            echo "<font color='#0000ff'>$aciertos. Sobresaliente</font>";
        ?>
    </p>
    <p>Has tenido 
        <?php
            echo $fallos. " fallos";

        ?>
    </p>
    </div>
</body>
</html>
