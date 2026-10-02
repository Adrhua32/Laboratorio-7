<?php
$productos = [ // Lista de joyas
    "Aretes Rosalia" => 46.00, // Precio de Aretes Rosalía
    "Aretes Cuarzo Plus" => 44.00, // Precio de Aretes Cuarzo Plus
    "Aretes piedra brillantes" => 47.00, // Precio de Aretes piedra brillantes
    "Aretes de compromiso Estandar" => 47.00, // Precio de Aretes de compromiso Estándar
    "Aretes de Compromiso brillantes" => 52.00 // Precio de Aretes de Compromiso brillantes
]; // Fin de la lista

$producto = "Aretes Rosalia"; // Nombre del producto que se solicita
$gramos = 25; // Gramos que quiere el cliente

if ($gramos >= 20) { // pone la condicion de que sea mayor o igual a 20
    $precioGramo = $productos[$producto]; // hace referencia al arreglo, buscando lo que se solicita
    $soles = $precioGramo * $gramos; // Multiplicamos el precio por los gramos
    $dolares = $soles / 3.40; // Convertimos el total a dólares
    $euros = $soles / 4.20; // Convertimos el total a euros

    echo "Producto: " . $producto . "<br>"; // Muestra el producto
    echo "Total Soles: S/ " . $soles . "<br>"; // Muestra el precio en soles
    echo "Total Dolares: $ " . round($dolares) . "<br>"; // Muestra el precio en dólares
    echo "Total Euros: € " . round($euros) . "<br>"; // Muestra el precio en euros
} else { // Si los gramos son menores a 20
    echo "No procede la venta (minimo 20 gramos)."; // Muestra mensaje de rechazo
}
?>