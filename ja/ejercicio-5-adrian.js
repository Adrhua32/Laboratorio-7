const productos = {
    1:["Mouse",30], 2:["Teclado",55], 3:["Monitor",650], 4:["Micrófono",300],
    5:["Disco Sólido 1TB",1000], 6:["Memoria RAM 32GB",1200], 7:["Luz LED",85],
    8:["PAD",8.5], 9:["Tarjeta de Video NVIDIA GeForce RTX",1250],
    10:["Cámara Web Logitech C920",550], 11:["Laptop Asus i7 11va G",6850],
    12:["Laptop HP i7 11va G",7200], 13:["Audífono",65], 14:["Parlantes",120]
};

// Menú en un alert
let menu = "--- MENÚ DE PRODUCTOS ---\n";
for (let n in productos) menu += n + ". " + productos[n][0] + " - S/ " + productos[n][1] + "\n";
alert(menu);

// Pedir datos
const cliente = prompt("Nombre del cliente:");
const opcion  = parseInt(prompt("Elige producto (1 al 14):"));
const cant    = parseInt(prompt("Cantidad a comprar:"));

const nombre = productos[opcion][0];
const precio = productos[opcion][1];
const subtotal = cant * precio;

// Descuento según monto
let desc;
if (subtotal < 400)        desc = 0.04;
else if (subtotal <= 700)  desc = 0.07;
else if (subtotal <= 1000) desc = 0.10;
else if (subtotal <= 1400) desc = 0.14;
else                       desc = 0.18;

const subtotalConDesc = subtotal - (subtotal * desc);
const igv             = subtotalConDesc * 0.18;
const totalNeto       = subtotalConDesc + igv;

// Resultado
const salida =
    "Cliente: " + cliente + "\n" +
    "Producto: " + nombre + "\n" +
    "Cantidad: " + cant + "\n" +
    "Precio: S/ " + precio + "\n" +
    "Subtotal: S/ " + subtotal.toFixed(2) + "\n" +
    "Descuento: " + (desc*100) + "%\n" +
    "Subtotal con descuento: S/ " + subtotalConDesc.toFixed(2) + "\n" +
    "IGV (18%): S/ " + igv.toFixed(2) + "\n" +
    "Total Neto: S/ " + totalNeto.toFixed(2);

alert(salida);
document.getElementById("resultado").innerHTML = "<pre>" + salida + "</pre>";
