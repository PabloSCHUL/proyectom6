
<?php

require_once './database.php';

function getUsers() {
    $stmt = $GLOBALS['pdo'] -> prepare('SELECT * FROM users');
    $stmt -> execute();
    $users = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function getUserById($id) {
    $stmt = $GLOBALS['pdo'] -> prepare('SELECT * FROM users WHERE id = ?');
    $stmt -> execute([$id]);
    $user = $stmt -> fetch(PDO::FETCH_ASSOC);
    return $user;
}

function updateUserById(
    $id,
    $name,
    $email,
    $password,
    $role
) {
    $GLOBALS['pdo'] -> prepare('
        UPDATE users
        SET
            name = ?,
            email = ?,
            password = ?,
            role = ?
        WHERE id = ?
    ') -> execute([$name, $email, $password, $role, $id]);
}

function deleteUserById($id) {
    if ($id == 1) return;
    $GLOBALS['pdo'] -> prepare('DELETE FROM users WHERE id = ?') -> execute([$id]);
}
