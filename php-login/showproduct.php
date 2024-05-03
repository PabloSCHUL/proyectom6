<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles del Producto - Tienda de Tecnología</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .product-details {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 50px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .product-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    <div class="header">
        <h1>Tienda de Tecnología</h1>
    </div>
    <div class="product-details">
        <?php
        require_once './database.php'; // Requiere tu archivo de conexión a la base de datos

        // Verifica si se proporcionó una ID de producto válida en la URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            // Obtiene la ID del producto de la URL
            $productId = $_GET['id'];
            
            // Prepara la consulta SQL para obtener la información del producto
            $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
            $stmt->execute([$productId]);
            
            // Obtiene el producto de la base de datos
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verifica si se encontró el producto
            if ($product) {
                // Muestra la imagen del producto si está disponible
                if (isset($product['Image'])) {
                    echo "<img src='{$product['Image']}' alt='{$product['Nom']}' class='product-image'>";
                }
                // Muestra los detalles del producto
                echo "<h2>{$product['Nom']}</h2>";
                echo "<p>Descripción: {$product['Descripció']}</p>";
                echo "<p>Stock disponible: {$product['Stock']}</p>";
                echo "<p>Medidas: {$product['Mides']}</p>";
                echo "<p>Precio: {$product['Preu']}€</p>";
            } else {
                // Si no se encuentra el producto, muestra un mensaje de error
                echo "<p>Producto no encontrado</p>";
            }
        } else {
            // Si no se proporcionó una ID de producto válida, muestra un mensaje de error
            echo "<p>ID de producto no válido</p>";
        }
        ?>
        <a href="index.php" class="btn btn-primary btn-back"><i class="fas fa-arrow-left"></i> Volver Atrás</a>
    </div>
</body>
</html>
