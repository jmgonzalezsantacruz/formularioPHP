<?php

function validar_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data,ENT_QUOTES);
    $data = htmlentities($data);
    return $data;
}
function validarN($nombre)
{
    if (!preg_match('`[a-zA-Z0-9]{1,10}$`', $nombre)){
        return false;
    }
    return true;
}
function validarC($contraseña)
{
    if (!preg_match('`[0-9A-Za-z!@#$%]{1,10}`', $contraseña)){
        return false;
    }
    return true;
}
