<?php
$usuarios = [
    ["nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid"],
    ["nombre" => "Ana", "edad" => 17, "ciudad" => "Barcelona"],
    ["nombre" => "Luis", "edad" => 30, "ciudad" => "Valencia"],
    ["nombre" => "Marta", "edad" => 16, "ciudad" => "Sevilla"]
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