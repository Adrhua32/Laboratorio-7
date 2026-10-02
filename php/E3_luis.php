<?php
$saldos = [ // Arreglo para guardar saldos iniciales
    "soles" => 1000, // Saldo inicial en soles
    "dolares" => 500 // Saldo inicial en dólares
]; // Fin del arreglo de saldos

$claveGuardada = "1234"; // Clave actual del usuario

echo "<h3>--- OPERACIONES DEL CAJERO AUTOMÁTICO ---</h3><br>"; // Titulo

// 1. CONSULTA DE SALDO INICIAL
echo "<b>1. Saldo Inicial:</b><br>"; // Encabezado de consulta
echo "Soles: S/ " . $saldos["soles"] . " | Dólares: $ " . $saldos["dolares"] . "<br><br>"; // Muestra saldos iniciales

// 2. DEPÓSITO EN SOLES
$montoDeposito = 100; // Monto a depositar
$saldos["soles"] = $saldos["soles"] + $montoDeposito; // Realiza el depósito
echo "<b>2. Depósito de S/ " . $montoDeposito . ":</b><br>"; // Encabezado depósito
echo "Nuevo saldo en soles: S/ " . $saldos["soles"] . "<br><br>"; // Muestra nuevo saldo

// 3. RETIROL DE DÓLARES
$montoRetiro = 50; // Monto a retirar
$saldos["dolares"] = $saldos["dolares"] - $montoRetiro; // Realiza el retiro
echo "<b>3. Retiro de $ " . $montoRetiro . ":</b><br>"; // Encabezado retiro
echo "Nuevo saldo en dólares: $ " . $saldos["dolares"] . "<br><br>"; // Muestra nuevo saldo

// 4. CAMBIO DE CLAVE
$nuevaClave = "5678"; // Nueva clave definida
$claveGuardada = $nuevaClave; // Actualiza la clave
echo "<b>4. Cambio de Clave:</b><br>"; // Encabezado cambio de clave
echo "Clave actualizada con éxito a: " . $claveGuardada . "<br>"; // Muestra confirmacion
?>