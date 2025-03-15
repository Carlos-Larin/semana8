<?php
session_start();
$usuariof = "admin";
$passf = "1234";

$userlog = $_POST['user'];
$passlog = $_POST['pass'];

if($usuariof == $userlog && $passf == $passlog){
    $_SESSION['usuario'] = $usuariof;
    header('Location: ejemplo1.php');
    exit();
} else {
    echo "Usuario o contraseña incorrectos
    <a href='login.php'>Volver</a>";
}
?>
