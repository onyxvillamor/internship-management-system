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
    $username = getPostData('username');
    $password = getPostData('password');

    
    if (empty($adminId) || empty($username) || empty($password)) {
        $errors['body'] = "All fields are required.";
    } 

  
    if (empty($errors)) {
        try {
            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

         
            $db->query(
                'INSERT INTO admins (admin_id, username, password) 
                 VALUES (:admin_id, :username, :password)',
                [
                    ':admin_id' => $adminId,
                    ':username' => $username,
                    ':password' => $hashedPassword,  
                ]
            );

       
            header("Location: /admin/login");
            exit();

        } catch (Exception $e) {
           
            error_log($e->getMessage(), 3, __DIR__ . '/errors/error.log');
            $errors['body'] = "An error occurred during registration. Please try again.";
        }
    }
}

require "views/admin-register.view.php";
?>
