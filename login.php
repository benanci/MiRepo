<?php
/**
 * Created by PhpStorm.
 * User: Benancio
 * Date: 19/06/2018
 * Time: 04:57 PM
 */
session_start();

// Obtengo los datos cargados en el formulario de login.
$email = $_POST['email'];
$password = $_POST['password'];

// Esto se puede remplazar por un usuario real guardado en la base de datos.
if($email == 'benancio1992@gmail.com' && $password == '12345'){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;

    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: Index.php");
}else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
}