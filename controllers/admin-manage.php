<?php

session_start();

$heading = "Admin Profile";

$config = require('config.php');
$db = new Database($config['database']);


$adminId = $_SESSION['admin_id'];


$adminDetails = $db->query('SELECT * FROM admins WHERE admin_id = :admin_id', [
    ':admin_id' => $adminId
])->find();

$otherAdmins = $db->query('SELECT * FROM admins WHERE admin_id != :admin_id', [
    ':admin_id' => $adminId
])->get();


if (!$adminDetails) {
    $errors['body'] = "Admin details not found.";
}







require "views/admin-manage.view.php";
?>
