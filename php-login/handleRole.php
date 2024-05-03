<?php 
function handleRole($role) : string {
    session_start();
    if(!isset($_SESSION['role']) || $_SESSION['role'] != $role){
        header("Location: /php-login/admin.php");  
        exit();
    }

    return $_SESSION['role'];
} 