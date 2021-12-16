<?php
session_start();
include 'datos.php';
include 'funciones.php';

//Compruebo si llegan datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Compruebo si hay campos vacíos
        if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {


            //Saneo y valido nombre y contraseña
             $nombre = validar_input($_POST['usuario']);
             $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);

             $contraseña = validar_input($_POST['contraseña']);
             $contraseña = filter_var($contraseña,FILTER_SANITIZE_STRING);

            if (validarN($nombre) and validarC($contraseña)){

            
            foreach ($usuarios as $clave => $valor) {

            //Compruebo si los datos son correctos
            if ($nombre == $clave && $contraseña == $valor) {

                $_SESSION['usuario'] = $nombre;

                header("Location: examen.php");

            } else if ($nombre == $clave && $contraseña != $valor) {
                $err1 = true;
            } else
                $err2 = true;
        }
    }
} else
    $err3 = true;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="login">
        <h2>Añade tus datos y accede al examen</h2>

        <?php
        if (isset($err1)){
            echo '<p style="color:red">Contraseña incorrecta</p>';
        } else if(isset($err2)){
            echo '<p style="color:red">Debes introducir un usuario existente</p>';
        } else if(isset($err3)){
            echo '<p style="color:red">No puedes dejar campos sin rellenar</p>';
        }
        ?>

        Usuario: <input type="text" name="usuario" pattern="[a-zA-Z0-9]+">
        <br><br>
        Contraseña: <input type="password" name="contraseña" pattern="[a-zA-Z0-9]+">
        <br><br>
        <button type="submit">Login</button>
        </div>
</body>

</html>