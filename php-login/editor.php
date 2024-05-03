<?php
// Verificar si el usuario tiene el rol de editor
// Aquí deberías tener una lógica para verificar el rol del usuario actual
$user_is_editor = true; // Por propósito de demostración

// Si el usuario no tiene el rol de editor, redirigirlo a otra página o mostrar un mensaje de error
// if (!$user_is_editor) {
//     header("Location: no-authorized.php");
//     exit;
// }

// Aquí iría el código PHP para manejar las acciones de crear, modificar y eliminar productos

// Código de ejemplo para manejar la creación de un nuevo producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["crear_producto"])) {
    // Procesar los datos del formulario de creación de productos y agregar el nuevo producto a la base de datos
    // Aquí iría la lógica para insertar el nuevo producto en la base de datos
}

// Código de ejemplo para manejar la modificación de un producto existente
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["modificar_producto"])) {
    // Procesar los datos del formulario de modificación de productos y actualizar el producto en la base de datos
    // Aquí iría la lógica para actualizar el producto en la base de datos
}

// Código de ejemplo para manejar la eliminación de un producto existente
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar_producto"])) {
    // Procesar la solicitud de eliminación de producto y eliminar el producto de la base de datos
    // Aquí iría la lógica para eliminar el producto de la base de datos
}

// Consulta de ejemplo para obtener la lista de productos desde la base de datos
$productos = [
    ["id" => 1, "nombre" => "Producto 1", "descripcion" => "Descripción del Producto 1", "stock" => 10, "precio" => 100],
    ["id" => 2, "nombre" => "Producto 2", "descripcion" => "Descripción del Producto 2", "stock" => 20, "precio" => 150],
    // Más productos...
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        a {
            display: block;
            text-align: center;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        form {
            display: inline;
        }

        button {
            padding: 6px 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Administración de Productos</h1>
    <a href="crear_producto.php">Crear Nuevo Producto</a>
    <a href="index.php">Volver a la Tienda</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto["id"]; ?></td>
                    <td><?php echo $producto["nombre"]; ?></td>
                    <td><?php echo $producto["descripcion"]; ?></td>
                    <td><?php echo $producto["stock"]; ?></td>
                    <td><?php echo $producto["precio"]; ?></td>
                    <td>
                        <form method="post" action="modificar_producto.php">
                            <input type="hidden" name="id" value="<?php echo $producto["id"]; ?>">
                            <button type="submit" name="modificar_producto">Modificar</button>
                        </form>
                        <form method="post" action="eliminar_producto.php">
                            <input type="hidden" name="id" value="<?php echo $producto["id"]; ?>">
                            <button type="submit" name="eliminar_producto">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
