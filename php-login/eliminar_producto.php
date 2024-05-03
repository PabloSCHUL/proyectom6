<?php
// Aquí iría el código para verificar si el usuario tiene permisos para eliminar productos
// Si el usuario no tiene permisos, redirigirlo a otra página o mostrar un mensaje de error

// Código para manejar la solicitud de eliminación de producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar_producto"])) {
    // Obtener la ID del producto a eliminar del formulario
    $producto_id = $_POST["id"];

    // Redirigir al usuario a la página de administración de productos después de eliminar el producto
    header("Location: eliminar_producto.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Eliminar Producto</h1>
        <p>¿Estás seguro de que deseas eliminar este producto?</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET["id"]); ?>">
            <button type="submit" name="eliminar_producto">Eliminar</button>
        </form>
    </div>
</body>
</html>

