// Menú de productos: [nombre, precio por kg]
const productos = {
    1:  ["Arroz", 3.80],
    2:  ["Azúcar", 3.40],
    3:  ["Papas", 3.20],
    4:  ["Menestras", 4.50],
    5:  ["Fideos", 3.20],
    6:  ["Camote", 4.60],
    7:  ["Aceituna", 5.80],
    8:  ["Mandarina", 3.90],
    9:  ["Manzana", 4.20],
    10: ["Uva", 5.40]
};

const tc = 3.40; // Tipo de cambio

// Mostrar menú en la página
let menu = "--- MENÚ DE PRODUCTOS ---\n";
for (let n in productos) {
    menu += n + ". " + productos[n][0] + " - S/ " + productos[n][1] + "\n";
}
document.getElementById("resultado").innerHTML = "<pre>" + menu + "</pre>";

// Pedir datos con prompt()
const cliente = prompt("Nombre del cliente:");
const opcion  = parseInt(prompt("Elige producto (1 al 10):"));
const kg      = parseFloat(prompt("Cantidad en kg:"));

// Validar mínimo 5 kg
if (kg < 5) {
    alert("No procede la venta: mínimo 5 kg.");
    document.getElementById("resultado").innerHTML += "<p>No procede la venta: mínimo 5 kg.</p>";
} else {
    const nombre = productos[opcion][0];
    const precio = productos[opcion][1];

    const subtotal = kg * precio;
    const igv      = subtotal * 0.18;
    const total    = subtotal + igv;

    const salida =
        "--- RESULTADO ---\n" +
        "Cliente: "  + cliente + "\n" +
        "Producto: " + nombre  + "\n" +
        "Cantidad: " + kg      + " kg\n" +
        "Precio: S/ " + precio + "\n" +
        "Subtotal: S/ " + subtotal.toFixed(2) + " | $ " + (subtotal/tc).toFixed(2) + "\n" +
        "IGV (18%): S/ " + igv.toFixed(2) + " | $ " + (igv/tc).toFixed(2) + "\n" +
        "Total: S/ "    + total.toFixed(2) + " | $ " + (total/tc).toFixed(2);

    alert(salida);
    document.getElementById("resultado").innerHTML += "<pre>" + salida + "</pre>";
}
