<?php
$usuarios = [
    ["nombre" => "Jett", "edad" => 25, "ciudad" => "Seúl"],
    ["nombre" => "Phoenix", "edad" => 20, "ciudad" => "Londres"],
    ["nombre" => "Sage", "edad" => 15, "ciudad" => "Beijing"],
    ["nombre" => "Reyna", "edad" => 16, "ciudad" => "Ciudad de México"],
    ["nombre" => "Brimstone", "edad" => 45, "ciudad" => "Baltimore"],
    ["nombre" => "Viper", "edad" => 32, "ciudad" => "Los Ángeles"],
    ["nombre" => "Cypher", "edad" => 10, "ciudad" => "Rabat"],
    ["nombre" => "Sova", "edad" => 34, "ciudad" => "Moscú"],
    ["nombre" => "Killjoy", "edad" => 14, "ciudad" => "Berlín"]
];

function filtrarUsuariosPorEdad($usuarios, $edadMinima) {
    $usuariosFiltrados = [];

    foreach ($usuarios as $usuario) {
        if ($usuario["edad"] >= $edadMinima) {
            $usuariosFiltrados[] = $usuario;
        }
    }

    return $usuariosFiltrados;
}

$usuariosMayores = filtrarUsuariosPorEdad($usuarios, 18);

echo "Usuarios con edad mayor o igual a 18:<br>";
foreach ($usuariosMayores as $usuario) {
    echo "Nombre: " . $usuario["nombre"] . ", Edad: " . $usuario["edad"] . ", Ciudad: " . $usuario["ciudad"] . "<br>";
}
?>