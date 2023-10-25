<?php
$nombre = $_POST['nombre'];
$valorHora = floatval($_POST['valorHora']);
$horasTrabajadas = floatval($_POST['horasTrabajadas']);
$opcion = $_POST['opcion'];

$salario = $valorHora * $horasTrabajadas;

switch ($opcion) {
    case 'infantes':
        $porcentajeDescuento = 0.07;
        break;
    case 'terceraEdad':
        $porcentajeDescuento = 0.12;
        break;
    case 'incapacitados':
        $porcentajeDescuento = 0.05;
        break;
    default:
        $porcentajeDescuento = 0; 
}

$descuento = ($salario * $porcentajeDescuento);
$salarioNeto = $salario - $descuento;

echo "Nombre del empleado: $nombre<br>";
echo "Salario antes del descuento: $salario<br>";
echo "Porcentaje de descuento seleccionado: $porcentajeDescuento%<br>";
echo "Cantidad a deducir: $descuento<br>";
echo "Salario neto a pagar: $salarioNeto";
?>