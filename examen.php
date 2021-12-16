<?php

include 'datos.php';
session_start();
echo '<link href="estilo.css" type="text/css" rel="stylesheet">';

$timestamp = time();
$fyh = date("d-m-Y H:i:s", $timestamp);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        !empty($_POST['p1']) and !empty($_POST['p2']) and !empty($_POST['p3']) and !empty($_POST['p4'])
        and !empty($_POST['p5']) and !empty($_POST['p6']) and !empty($_POST['p7'])
        and !empty($_POST['p8']) and !empty($_POST['p9']) and !empty($_POST['p10'])
    ) {

        $_SESSION['p1'] = $_POST['p1'];
        $_SESSION['p2'] = $_POST['p2'];
        $_SESSION['p3'] = $_POST['p3'];
        $_SESSION['p4'] = $_POST['p4'];
        $_SESSION['p5'] = $_POST['p5'];
        $_SESSION['p6'] = $_POST['p6'];
        $_SESSION['p7'] = $_POST['p7'];
        $_SESSION['p8'] = $_POST['p8'];
        $_SESSION['p9'] = $_POST['p9'];
        $_SESSION['p10'] = $_POST['p10'];

        $_SESSION['fyh'] = $_POST['fyh'];


        $err = false;

        header("Location: resultados.php");
    } else {
        $err = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Examen</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="examen">
        
        <br><br>

        <div class="preguntas">
            <?php echo 'Bienvenido/a al examen, ' . $_SESSION['usuario']; ?>
            <h1>Examen sobre cultura general</h1>
            <h2>El test es multirespuesta así que responde con precaución</h2>

            <?php if ($err = true and ($_SERVER["REQUEST_METHOD"] == "POST")) {
            echo "<p> Revisa la pregunta en rojo. La dejaste sin responder</p>";
            } ?>
            
        </div>

        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p1']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>1. ¿Cuántos planetas hay en el Sistema Solar?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p1[]' value='$p[$i]'";

                if (isset($_POST['p1'])) {
                    $res = $_POST['p1'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>

            <br>
        </div>

        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p2']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>2. ¿Cuánto tiempo tarda en crecer las uñas del pie?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p2[]' value='$p[$i]'";

                if (isset($_POST['p2'])) {
                    $res = $_POST['p2'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>
            <br>
        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p3']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>3. ¿Cuántos días puedes estar sin beber agua?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p3[]' value='$p[$i]'";

                if (isset($_POST['p3'])) {
                    $res = $_POST['p3'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>
            <br>
        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p4']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>4. ¿Cuántos meses dura un embarazo normalmente?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p4[]' value='$p[$i]'";

                if (isset($_POST['p4'])) {
                    $res = $_POST['p4'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>
            <br>
        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p5']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>5. ¿La ESO es obligatoria en España?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p5[]' value='$p[$i]'";

                if (isset($_POST['p5'])) {
                    $res = $_POST['p5'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>
        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p6']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>6. ¿Un vegetariano puede comer huevos?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p6[]' value='$p[$i]'";

                if (isset($_POST['p6'])) {
                    $res = $_POST['p6'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>
        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p7']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>7. ¿Cuánto tarda el sol en dar la vuelta a la tierra?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p7[]' value='$p[$i]'";

                if (isset($_POST['p7'])) {
                    $res = $_POST['p7'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>

        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p8']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>8. ¿Qué significa el factor de las cremas solares?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p8[]' value='$p[$i]'";

                if (isset($_POST['p8'])) {
                    $res = $_POST['p8'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>

        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p9']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>9. ¿Qué tipo de animal es un gamusino?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p9[]' value='$p[$i]'";

                if (isset($_POST['p9'])) {
                    $res = $_POST['p9'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>

        </div>
        <div class="preguntas">
            <p id="preguntas" <?php if (empty($_POST['p10']) and ($_SERVER["REQUEST_METHOD"] == "POST")) echo 'style="color:red"' ?>>10. ¿Los relojes de cuarzo llevan pilas?</p>

            <?php for ($i = 0; $i < count($p); $i++) {

                echo "$p[$i]<input type='checkbox' name='p10[]' value='$p[$i]'";

                if (isset($_POST['p10'])) {
                    $res = $_POST['p10'];
                    for ($j = 0; $j < count($res); $j++) {
                        if ($res[$j] == $p[$i]) {
                            echo "checked";
                        }
                    }
                }

                echo ">";
            }
            ?>
        </div>
        <!-- HIDDEN FECHA Y HORA -->
        <input type="hidden" name="fyh" value="<?php echo $fyh; ?>">
        <br><br>
        <button type="submit" name="enviar" value="enviar">Enviar respuestas</button>
        <button type="reset" name="borrar" value="borrar">Borrar respuestas</button>
</body>

</html>