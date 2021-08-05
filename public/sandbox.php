<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/../vendor/autoload.php';

use App\Models\Entity\Tank;
use App\Models\Entity\FillingOrder;
use App\Models\Entity\Car;
use App\Models\Entity\ChangeTankOrder;
use App\Models\Entity\Mechanic;

$tanque = new Tank;
echo('Tank 01: <pre>' . print_r($tanque, true) . '</pre>');

$ordenLlenado = new FillingOrder(false, 40.0);

$carro = new Car($tanque);

echo('Carro: <pre>' . print_r($carro, true) . '</pre>');
$llenadoTanque = $carro->fillTank($ordenLlenado);

echo('Tank 02: <pre>' . print_r($tanque, true) . '</pre>');
echo('LlenadoTanque: <pre>' . print_r($llenadoTanque, true) . '</pre>');
echo('Carro 02: <pre>' . print_r($carro, true) . '</pre>');

$cambioTanque = new Tank;
$cambioTanque->setMaxCapacity(200.0);
$cambioTanque->setCurrentCapacity(185.0);

echo('Tank nuevo: <pre>' . print_r($cambioTanque, true) . '</pre>');

$ordernCambioTanque = new ChangeTankOrder($cambioTanque);
$mecanico = new Mechanic;

$carro->changeTank($ordernCambioTanque, $mecanico);

echo('Carro 03: <pre>' . print_r($carro, true) . '</pre>');