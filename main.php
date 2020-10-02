<?php

require_once 'circulo.php';

$radio = $_GET['radio'];

$circulo = new Circulo($radio);

// Área
echo 'El área del círculo es: '.$circulo->areaCirculo();
echo "<br>";
// Perímetro
echo 'El perímetro del círculo es: '.$circulo->perimetroCirculo();


?>