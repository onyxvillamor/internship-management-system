<?php

require 'init.php'; 

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $studentId = filter_var($_POST['student_id']);
    $password = filter_var($_POST['password'] );

  
    $user = $db->query("SELECT * FROM users WHERE stud_id = :studentId AND last_name = :lastName LIMIT 1", [
        ':studentId' => $studentId,
        ':lastName' => $password
    ])->find();

  
    if ($user && $password) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

      
        session_regenerate_id(true);

      
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['student_id'] = $user['stud_id'];
        $_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];
        $_SESSION['is_logged_in'] = true;

      
        header("Location: /student");
        exit;
    } else {
        header('Location: /login?error=invalid_credentials');
        exit;
    }
}

?>
