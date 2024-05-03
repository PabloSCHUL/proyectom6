<?php 
require_once 'userscontroller.php';
require_once 'handleRole.php';
handleRole('admin');
// Conexión a la base de datos
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'php_login_database';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para obtener todos los usuarios
function obtenerUsuarios($conn) {
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $usuarios = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }

    return $usuarios;
}

// Función para eliminar un usuario
function eliminarUsuario($conn, $id) {
    $sql = "DELETE FROM users WHERE id = $id";
    $conn->query($sql);
}

// Verificar si se envió el formulario para eliminar un usuario
if (isset($_POST['eliminar'])) {
    $id_eliminar = $_POST['id_eliminar'];
    eliminarUsuario($conn, $id_eliminar);
}

// Verificar si se envió el formulario para añadir un usuario
if (isset($_POST['añadir'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$nombre', '$email', '$password', '$role')";
    $conn->query($sql);
}

// Obtener todos los usuarios
$usuarios = obtenerUsuarios($conn);

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        form label {
            display: block;
            margin-bottom: 5px;
        }
        form input, form select, form button {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        ul li button {
            padding: 5px 10px;
            background-color: #ff6347;
            border: none;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }
        ul li button:hover {
            background-color: #d13438;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel de Administrador</h1>

        <h2>Usuarios</h2>
        <ul>
            <?php foreach ($usuarios as $usuario): ?>
                <li>
                    <?php echo isset($usuario['name']) ? $usuario['name'] : ''; ?> - <?php echo isset($usuario['email']) ? $usuario['email'] : ''; ?> - <?php echo isset($usuario['role']) ? $usuario['role'] : ''; ?>
                    <form method="post" action="">
                        <input type="hidden" name="id_eliminar" value="<?php echo isset($usuario['id']) ? $usuario['id'] : ''; ?>">
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Añadir Usuario</h2>
        <form method="post" action="">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br>
            <label for="role">Rol:</label><br>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="usuario">Usuario</option>
            </select><br><br>
            <button type="submit" name="añadir">Añadir Usuario</button>
        </form>

        <!-- Botón de volver atrás -->
        <form method="post" action="index.php">
            <button type="submit">Volver Atrás</button>
        </form>
    </div>
</body>
</html>
