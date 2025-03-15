<!DOCTYPE html>
#Ejercicio 1: Cree un formulario en HTML que envíe datos a un script PHP mediante el método POST. 
#El script debe capturar la información y mostrarla en la página.
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php
        // Define the test_input function
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = $apellido = $cantanteFav = "";
        $nameErr = $apellidoErr = $cantanteFavErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Nombre es requerido";
            } else {
              $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["apellido"])) {
              $apellidoErr = "Apellido es requerido";
            } else {
              $apellido = test_input($_POST["apellido"]);
            }
            
            if (empty($_POST["cantanteFav"])) {
              $cantanteFavErr = "Cantante favorito es requerido";
            } else {
              $cantanteFav = test_input($_POST["cantanteFav"]);
            }
        }
    ?>
    <br><br>
    <h1>Formulario sobre ti</h1>
    <form method="post" action="mostrador.php">
        Nombre: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        Apellido: <input type="text" name="apellido" value="<?php echo $apellido;?>">
        <span class="error">* <?php echo $apellidoErr;?></span>
        <br><br>
        Cantante favorito: <input type="text" name="cantanteFav" value="<?php echo $cantanteFav;?>">
        <span class="error">* <?php echo $cantanteFavErr;?></span>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <br><br>
    <h2>Datos enviados:</h2>
    <p>Nombre: <?php echo $name;?></p>
    <p>Apellido: <?php echo $apellido;?></p>
    <p>Cantante favorito: <?php echo $cantanteFav;?></p>

</body>
</html>