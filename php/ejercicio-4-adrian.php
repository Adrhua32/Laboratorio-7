<?php
// Menú de productos
$productos = [
    1 => ["Arroz", 3.80],
    2 => ["Azúcar", 3.40],
    3 => ["Papas", 3.20],
    4 => ["Menestras", 4.50],
    5 => ["Fideos", 3.20],
    6 => ["Camote", 4.60],
    7 => ["Aceituna", 5.80],
    8 => ["Mandarina", 3.90],
    9 => ["Manzana", 4.20],
    10 => ["Uva", 5.40]
];

$tc = 3.40;

// Datos del formulario (si no se envían, quedan vacíos)
$cliente = $_POST["cliente"] ?? "";
$opcion  = (int)($_POST["producto"] ?? 0);
$kg      = (float)($_POST["kg"] ?? 0);

// Solo calcular si ya enviaron el formulario
if ($_POST) {
    if ($kg < 5) {
        $resultado = "❌ No procede la venta: mínimo 5 kg.";
    } else {
        $nombre = $productos[$opcion][0];
        $precio = $productos[$opcion][1];

        $subtotal = $kg * $precio;
        $igv      = $subtotal * 0.18;
        $total    = $subtotal + $igv;

        $resultado  = "Cliente: $cliente <br>";
        $resultado .= "Producto: $nombre <br>";
        $resultado .= "Cantidad: $kg kg <br>";
        $resultado .= "Precio: S/ $precio <br>";
        $resultado .= "Subtotal: S/ " . number_format($subtotal, 2) . " | $ " . number_format($subtotal / $tc, 2) . "<br>";
        $resultado .= "IGV (18%): S/ " . number_format($igv, 2) . " | $ " . number_format($igv / $tc, 2) . "<br>";
        $resultado .= "Total: S/ " . number_format($total, 2) . " | $ " . number_format($total / $tc, 2) . "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Ejercicio 4</title></head>
<body>

<h2>Tienda de productos</h2>

<form method="post">
    Cliente:
    <input type="text" name="cliente" value="<?= $cliente ?>"><br><br>

    Producto:
    <select name="producto">
        <?php foreach ($productos as $n => $p): ?>
            <option value="<?= $n ?>" <?= $opcion==$n?"selected":"" ?>>
                <?= $n ?>. <?= $p[0] ?> - S/ <?= $p[1] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    Cantidad en kg:
    <input type="number" step="0.1" name="kg" value="<?= $kg ?>"><br><br>

    <button>Calcular</button>
</form>

<?php if (isset($resultado)): ?>
    <hr>
    <p><?= $resultado ?></p>
<?php endif; ?>

</body>
</html>