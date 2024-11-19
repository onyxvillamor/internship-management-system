<?php

$config = require('config.php');
$db = new Database($config['database']);


$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$status = in_array($_GET['status'], ['Accepted', 'Rejected', 'Pending']) ? $_GET['status'] : null;

if ($id && $status) {
    
    $db->query("UPDATE applications SET status = :status WHERE id = :id", [
        ':status' => $status,
        ':id' => $id
    ]);
    
    header("Location: /admin/applications");
  
} else {
  
    echo "Invalid student or status.";
}

?>

