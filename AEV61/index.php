<?php

require_once './class/productos.php';
require_once './class/frescos.php';
require_once './class/refrigeracion.php';
require_once './class/congelados.php';
require_once './class/aire.php';
require_once './class/agua.php';
require_once './class/nitrogeno.php';

echo "<h2>Los Productos Frescos</h2>";
$frescos = new Frescos("2025-06-13", 12345, "2025-01-30", "España");

$frescos->setFechaDeCaducidad("2027-02-23");
$frescos->setNumLote(98475);
$frescos->setFechaDeEnvasado("2026-01-15");
$frescos->setPaisOrigen("Francia");

echo "Fecha de caducidad: " . $frescos->getFechaDeCaducidad() . "<br>";
echo "Número de lote: " . $frescos->getNumLote() . "<br>";
echo "Fecha de envasado: " . $frescos->getFechaDeEnvasado() . "<br>";
echo "País de origen: " . $frescos->getPaisOrigen() . "<br>";

echo "<h2>Productos Refrigerados</h2>";
$refrigerado = new Refrigerados("2025-11-25", 54321, "2025-03-17", "Italia", "-6°C", "Control Sanitario XYZ");

$refrigerado->setTempRecm("-8°C");
$refrigerado->setSupervAliment("Supervisión alimentaria ABC");

echo "Fecha de caducidad: " . $refrigerado->getFechaDeCaducidad() . "<br>";
echo "Número de lote: " . $refrigerado->getNumLote() . "<br>";
echo "Fecha de envasado: " . $refrigerado->getFechaDeEnvasado() . "<br>";
echo "País de origen: " . $refrigerado->getPaisOrigen() . "<br>";
echo "Temperatura recomendada: " . $refrigerado->getTempRecm() . "<br>";
echo "Supervisión alimentaria: " . $refrigerado->getSupervAliment() . "<br>";

echo "<h2>Los Productos Congelados</h2>";
$congelado = new Congelados("2025-04-18", 45871, "2024-11-28", "Serbia", "-18°C");

$congelado->setTempRecm("-20°C");

echo "Fecha de caducidad: " . $congelado->getFechaDeCaducidad() . "<br>";
echo "Número de lote: " . $congelado->getNumLote() . "<br>";
echo "Fecha de envasado: " . $congelado->getFechaDeEnvasado() . "<br>";
echo "País de origen: " . $congelado->getPaisOrigen() . "<br>";
echo "Temperatura recomendada: " . $congelado->getTempRecm() . "<br>";

echo "<h2>Congelados por Aire</h2>";
$aire = new Aire("2028-01-18", 28469, "2027-04-13", "", "-26°C", "15%", "8%", "63%", "23%", "2%");

$aire->setPorCarbo("3%");
$aire->setPorDio("11%");
$aire->setPorNitro("67%");
$aire->setPorOxi("16%");
$aire->setPorVap("3%");

echo "Porcentaje de Carbono: " . $aire->getPorCarbo() . "<br>";
echo "Porcentaje de Dióxido: " . $aire->getPorDio() . "<br>";
echo "Porcentaje de Nitrógeno: " . $aire->getPorNitro() . "<br>";
echo "Porcentaje de Oxígeno: " . $aire->getPorOxi() . "<br>";
echo "Porcentaje de Vapor: " . $aire->getPorVap() . "<br>";

echo "<h2>Congelados en Agua</h2>";
$agua = new Agua("2027-08-13", 54862, "2026-12-23", "Colombia", "-23ºC", "7%");

$agua->setSalinidad("10%");

echo "Cantidad de Salinidad: " . $agua->getSalinidad() . "<br>";

echo "<h2>Congelados con Nitrógeno</h2>";
$nitrogeno = new Nitrogeno("2025-03-25", 54871, "2024-07-12", "Noruega", "-38°C", "Método criogénico", "-225°C");

$nitrogeno->setInfoMetCong("Método de congelación criogénico");
$nitrogeno->setTempCong("-196°C");

echo "Método de congelación: " . $nitrogeno->getInfoMetCong() . "<br>";
echo "Temperatura de congelación: " . $nitrogeno->getTempCong() . "<br>";

?>