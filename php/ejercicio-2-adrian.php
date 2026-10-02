<?php
// ====== DATOS DE ENTRADA (cámbialos si quieres probar otros casos) ======
$dia     = "lunes";
$general = 2;
$ninos   = 3;

// ====== PRECIOS SEGÚN EL DÍA ======
if ($dia == "lunes") {
    $pGeneral = 9;  $pNinos = 7;
} elseif ($dia == "martes") {
    $pGeneral = 7;  $pNinos = 7;
} elseif ($dia == "miercoles" || $dia == "jueves" || $dia == "viernes") {
    $pGeneral = 10; $pNinos = 8;
} elseif ($dia == "sabado" || $dia == "domingo") {
    $pGeneral = 12; $pNinos = 9;
} else {
    $pGeneral = 0; $pNinos = 0;
}

// ====== CÁLCULOS ======
$subtotal = ($general * $pGeneral) + ($ninos * $pNinos);
$igv      = $subtotal * 0.18;
$total    = $subtotal + $igv;

// ====== SALIDA ======
echo "Día seleccionado: "    . $dia     . "<br>";
echo "Cantidad entradas General: " . $general . "<br>";
echo "Cantidad entradas Niños: "   . $ninos   . "<br>";
echo "Subtotal: S/ " . number_format($subtotal, 2) . "<br>";
echo "IGV (18%): S/ " . number_format($igv, 2)    . "<br>";
echo "Total: S/ "    . number_format($total, 2)   . "<br>";