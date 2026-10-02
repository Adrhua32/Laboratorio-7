let dia     = prompt("Ingresa el día (lunes, martes, miercoles, jueves, viernes, sabado, domingo):").toLowerCase();
let general = parseInt(prompt("Cantidad de entradas General:"));
let ninos   = parseInt(prompt("Cantidad de entradas Niños:"));

let pGeneral, pNinos;
if (dia === "lunes") {
    pGeneral = 9;  pNinos = 7;
} else if (dia === "martes") {
    pGeneral = 7;  pNinos = 7;
} else if (dia === "sabado" || dia === "domingo") {
    pGeneral = 12; pNinos = 9;
} else {
    pGeneral = 10; pNinos = 8;
}

let subtotal = (general * pGeneral) + (ninos * pNinos);
let igv      = subtotal * 0.18;
let total    = subtotal + igv;

// Mostrar con alert (sin div)
alert(
    "Día seleccionado: " + dia + "\n" +
    "Entradas General: " + general + "\n" +
    "Entradas Niños: " + ninos + "\n" +
    "Subtotal: S/ " + subtotal.toFixed(2) + "\n" +
    "IGV (18%): S/ " + igv.toFixed(2) + "\n" +
    "Total: S/ " + total.toFixed(2)
);