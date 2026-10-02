let saldos = { // Objeto para guardar saldos iniciales
    "soles": 1000, // Saldo inicial en soles
    "dolares": 500 // Saldo inicial en dólares
}; // Fin del objeto de saldos

let claveGuardada = "1234"; // Clave actual del usuario

console.log("--- OPERACIONES DEL CAJERO AUTOMÁTICO ---"); // Titulo

// 1. CONSULTA DE SALDO INICIAL
console.log("1. Saldo Inicial:"); // Encabezado de consulta
console.log("Soles: S/ " + saldos["soles"] + " | Dólares: $ " + saldos["dolares"]); // Muestra saldos iniciales

// 2. DEPÓSITO EN SOLES
let montoDeposito = 100; // Monto a depositar
saldos["soles"] = saldos["soles"] + montoDeposito; // Realiza el depósito
console.log("----NUEVO DEPOSITO----");
console.log("Depósito de S/ " + montoDeposito + ":"); // Encabezado depósito
console.log("Nuevo saldo en soles: S/ " + saldos["soles"]); // Muestra nuevo saldo

// 3. RETIRO DE DÓLARES
let montoRetiro = 50; // Monto a retirar
saldos["dolares"] = saldos["dolares"] - montoRetiro; // Realiza el retiro
console.log("3. Retiro de $ " + montoRetiro + ":"); // Encabezado retiro
console.log("Nuevo saldo en dólares: $ " + saldos["dolares"]); // Muestra nuevo saldo

// 4. CAMBIO DE CLAVE
let nuevaClave = "5678"; // Nueva clave definida
claveGuardada = nuevaClave; // Actualiza la clave
console.log("4. Cambio de Clave:"); // Encabezado cambio de clave
console.log("Clave actualizada con éxito a: " + claveGuardada); // Muestra confirmacion