<?php
// Crear un arreglo con nombres de ciudades
$ALMBUNDEOZ = ["ZATANIA", "IRA DEI", "ILUSSIA", "PIRATAS", "GAIA"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de ALBUNES</title>
</head>
<body>
    <h1>Lista de ALBUNES DEL MAGO DE OZ</h1>
    <ol>
        <?php
        foreach ($ALMBUNDEOZ as $album) {
            echo "<li>$album</li>";
        }
        ?>
    </ol>
</body>
</html>