<?php 

require_once './database.php';

function iniciarSessio($email, $pswd) {
    session_start();

    if (!isset($email) || !isset($pswd)) {
        header('Location: /public/views/login.php?error=0');
        return;
    }
    
    $stmt = $GLOBALS['pdo']->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user || !$pswd) {
        header('Location: /public/views/login.php?error=0');
        return;
    }

    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] == 'admin') {
        header('Location: /php-login/admin.php');
    } else {
        // Si el usuario no es administrador, establece la variable de sesión logged_in en true
        $_SESSION['logged_in'] = true;
        header('Location: /php-login/index.php');
    }
}

iniciarSessio($_POST['email'], $_POST['password']);
?>
