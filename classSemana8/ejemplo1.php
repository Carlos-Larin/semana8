<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>larin</title>
</head>
<body>
    <?php if (isset($_SESSION['usuario'])): ?>
        <h1>Bienvenido <?=$_SESSION['usuario']?></h1>
        <a href="logout.php">Cerrar sesión</a> 
    <?php else: ?>
        <p>Para seguir necesitas iniciar secion</p>
        <a href="login.php">Iniciar sesión</a>
    <?php endif; ?>
</body>
</html>