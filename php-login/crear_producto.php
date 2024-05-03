<?php
require_once './database.php'; // Requiere tu archivo de conexión a la base de datos

// Verificar si se envió el formulario para crear un nuevo producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear_producto"])) {
    // Procesar los datos del formulario para crear un nuevo producto
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];

    // Preparar la consulta SQL para insertar un nuevo producto
    $sql = "INSERT INTO products (Nom, Descripció, Stock, Preu) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    // Ejecutar la consulta con los datos proporcionados
    $stmt->execute([$nombre, $descripcion, $stock, $precio]);

    // Redirigir al usuario a la página de inicio después de crear el producto
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <!-- Enlaces a tus archivos CSS y JS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Crear Nuevo Producto</h1>
    </header>
    <main>
        <div class="container">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción del Producto</label>
                    <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="stock">Stock Disponible</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio del Producto</label>
                    <input type="number" name="precio" class="form-control" required>
                </div>
                <button type="submit" name="crear_producto" class="btn btn-primary">Crear Producto</button>
            </form>
        </div>
    </main>
</body>
</html>
