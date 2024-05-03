<?php
// Establecer la conexión con la base de datos (reemplaza los valores con los de tu configuración)
$servername = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'php_login_database';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Definir la lista de productos con sus detalles
    $productos = [
        ["Intel Core i5-11400F 2.6 GHz", "Processador intel", 20, "200cm", 120],
        ["Benq EL2870UE 28\" LED UltraHD 4K FreeSync", "pantallabenq", 10, "150 cm de llarg", 199.99],
        ["Apple iPhone 12 Pro Max 128GB Azul Pacífico Lliure", "telefon apple", 8, "15cm", 949.38],
        ["Amazfit GTS 2 Mini SmartWatch Meteor Black", "rellotge amazon", 2, "49mm", 85.99],
        ["AMD Ryzen 5 5600X 3.7GHz", "processador ryzen", 5, "3cm", 249.89],
        ["HP Omen Spacer TKL Teclado Mecánico Gaming", "pantalla hp omen", 6, "50 cm", 139.98]
    ];

    // Preparar la consulta SQL para insertar productos
    $stmt = $conn->prepare("INSERT INTO products (Nom, Descripció, Stock, Mides, Preu) VALUES (?, ?, ?, ?, ?)");

    // Iterar sobre cada producto y ejecutar la consulta para insertarlos
    foreach ($productos as $producto) {
        $stmt->execute($producto);
    }

    echo "Los productos se han insertado correctamente en la base de datos.";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión con la base de datos
$conn = null;
?>
