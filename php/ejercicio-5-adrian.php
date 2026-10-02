<?php
// Menú de productos
$productos = [
    1 => ["Mouse", 30.00],
    2 => ["Teclado", 55.00],
    3 => ["Monitor", 650.00],
    4 => ["Micrófono", 300.00],
    5 => ["Disco Sólido 1TB", 1000.00],
    6 => ["Memoria RAM 32GB", 1200.00],
    7 => ["Luz LED", 85.00],
    8 => ["PAD", 8.50],
    9 => ["Tarjeta de Video NVIDIA GeForce RTX", 1250.00],
    10 => ["Cámara Web Logitech C920", 550.00],
    11 => ["Laptop Asus i7 11va G", 6850.00],
    12 => ["Laptop HP i7 11va G", 7200.00],
    13 => ["Audífono", 65.00],
    14 => ["Parlantes", 120.00]
];

// Acumuladores (se guardan en el formulario con hidden)
$totalVendido = (float)($_POST["totalVendido"] ?? 0);
$detalle      = $_POST["detalle"] ?? "";

// Procesar venta si se envió el formulario
if ($_POST && isset($_POST["producto"])) {
    $cliente = $_POST["cliente"];
    $opcion  = (int)$_POST["producto"];
    $cant    = (int)$_POST["cantidad"];

    $nombre = $productos[$opcion][0];
    $precio = $productos[$opcion][1];
    $subtotal = $cant * $precio;
    $totalVendido += $subtotal;

    $detalle .= "Cliente: $cliente | Producto: $nombre | Cantidad: $cant | Precio: S/ $precio | Subtotal: S/ " . number_format($subtotal, 2) . "<br>";

    // Descuento según monto ACUMULADO
    if ($totalVendido < 400)        $desc = 0.04;
    elseif ($totalVendido <= 700)   $desc = 0.07;
    elseif ($totalVendido <= 1000)  $desc = 0.10;
    elseif ($totalVendido <= 1400)  $desc = 0.14;
    else                            $desc = 0.18;

    $subtotalConDesc = $subtotal - ($subtotal * $desc);
    $igv             = $subtotalConDesc * 0.18;
    $totalNeto       = $subtotalConDesc + $igv;

    echo "<hr>";
    echo "<b>Producto:</b> $nombre <br>";
    echo "<b>Cantidad:</b> $cant <br>";
    echo "<b>Precio:</b> S/ $precio <br>";
    echo "<b>Subtotal:</b> S/ " . number_format($subtotal, 2) . "<br>";
    echo "<b>Descuento aplicado:</b> " . ($desc * 100) . "% <br>";
    echo "<b>Subtotal con descuento:</b> S/ " . number_format($subtotalConDesc, 2) . "<br>";
    echo "<b>IGV (18%):</b> S/ " . number_format($igv, 2) . "<br>";
    echo "<b>Total Neto:</b> S/ " . number_format($totalNeto, 2) . "<br>";
    echo "<hr>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Ejercicio 5</title></head>
<body>

<h2>Tienda de Tecnología</h2>

<form method="post">
    Cliente: <input type="text" name="cliente" required><br><br>

    Producto:
    <select name="producto">
        <?php foreach ($productos as $n => $p): ?>
            <option value="<?= $n ?>"><?= $n ?>. <?= $p[0] ?> - S/ <?= $p[1] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    Cantidad: <input type="number" name="cantidad" value="1" min="1"><br><br>

    <!-- Guardamos acumulados -->
    <input type="hidden" name="totalVendido" value="<?= $totalVendido ?>">
    <input type="hidden" name="detalle" value="<?= htmlspecialchars($detalle) ?>">

    <button>Agregar venta</button>
</form>

<h3>Total acumulado: S/ <?= number_format($totalVendido, 2) ?></h3>

<h3>Historial de ventas:</h3>
<p><?= $detalle ?: "Sin ventas aúnn." ?></p>

</body>
</html>