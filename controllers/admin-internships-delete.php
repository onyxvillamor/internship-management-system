<?php


$config = require('config.php');
$db = new Database($config['database']);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if ($id) {
    try {
      
        $db->query("DELETE FROM internships WHERE id = :id", [
            ':id' => $id
        ]);

     
        header('Location: /admin/internships?message=deleted_successfully');
        exit;

    } catch (Exception $e) {
     
        header('Location: /admin/internships?error=delete_failed');
        exit;
    }
} else {
 
    header('Location: /admin/internships?error=invalid_id');
    exit;
}


?>