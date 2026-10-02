let productos = { // Lista de joyas
    "Aretes Rosalia": 46.00, // Precio de Aretes Rosalía
    "Aretes Cuarzo Plus": 44.00, // Precio de Aretes Cuarzo Plus
    "Aretes piedra brillantes": 47.00, // Precio de Aretes piedra brillantes
    "Aretes de compromiso Estandar": 47.00, // Precio de Aretes de compromiso Estándar
    "Aretes de Compromiso brillantes": 52.00 // Precio de Aretes de Compromiso brillantes
}; // Fin de la lista

let producto = "Aretes Rosalia"; // Nombre del producto que quiere el cliente
let gramos = 25; // Gramos que quiere el cliente

if (gramos >= 20) { // pone la condicion de que sea mayor o igual a 20
    let precioGramo = productos[producto]; // hace referencia al arreglo, buscando el producto
    let soles = precioGramo * gramos; // Multiplicamos el precio por los gramos
    let dolares = soles / 3.40; // Convertimos el total a dólares
    let euros = soles / 4.20; // Convertimos el total a euros

    console.log("Producto: " + producto); // Muestra el producto
    console.log("Total Soles: S/ " + soles.toFixed(2)); // Muestra el precio en soles 
    console.log("Total Dolares: $ " + dolares.toFixed(2)); // Muestra el precio en dólares
    console.log("Total Euros: € " + euros.toFixed(2)); // Muestra el precio en euros 
} else { // Si los gramos son menores a 20
    console.log("No procede la venta (minimo 20 gramos)."); // Muestra mensaje en caso no se cumpla
}