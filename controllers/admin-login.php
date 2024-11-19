<?php

$config = require('config.php');
$db = new Database($config['database']);

$errors = [];

function getPostData($key)  
{
    return isset($_POST[$key]) ? trim($_POST[$key]) : null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $adminId = getPostData('admin_id');    
    $password = getPostData('password');

    if (empty($adminId) || empty($password)) {
        $errors['body'] = "Both fields are required.";
    } else {

        try {

            $admin = $db->query("SELECT * FROM admins WHERE admin_id = :admin_id", [
                ':admin_id' => $adminId
            ])->find();
            
            if ($admin && password_verify($password, $admin['password'])) {

              
                session_start();
                $_SESSION['admin_id'] = $admin['admin_id'];
                $_SESSION['username'] = $admin['username'];

              
                header('Location: /admin');
                exit; 
            } else {
                $errors['body'] = "Invalid username or password.";
            }
        } catch (Exception $e) {

            $errors['body'] = "An error occurred during login. Please try again.";
        }
    }
}

require "views/admin-login.view.php";
