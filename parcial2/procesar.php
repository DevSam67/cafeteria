<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pedido = $_POST['pedido'];

echo "<h2>Pedido recibido en Salteneria El Horno</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Mensaje: " . $pedido . "<br>";

$cartas = [
    "Salteña de pollo - Bs 6",
    "Docena de salteñas - Bs 65",
    "Refresco de mocochinchi - Bs 5"
];

foreach ($cartas as $carta) {
    echo "<li>$carta</li>";
}


echo "Te atiende samuel canedo caballero";
?>