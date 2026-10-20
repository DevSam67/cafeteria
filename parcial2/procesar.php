<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pedido = $_POST['pedido'];

echo "<h2>Pedido recibido en Salteneria El Horno</h2>";
echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Mensaje: " . $pedido . "<br>";
?>