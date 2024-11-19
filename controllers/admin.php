<?php

session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /admin/login');
    exit;
}

$heading = "Admin Dashboard";
$config = require('config.php');
$db = new Database($config['database']);

$adminId = $_SESSION['admin_id'];

$query = "SELECT 'users' AS table_name, COUNT(*) AS row_count FROM users
          UNION
          SELECT 'accepted' AS table_name, COUNT(*) AS row_count FROM applications WHERE status = 'Accepted'
          UNION
          SELECT 'pending' AS table_name, COUNT(*) AS row_count FROM applications WHERE status = 'Pending';";

$counts = $db->query($query)->get();

$totalUsers = 0;
$totalAcceptedStudents = 0;
$totalPending = 0;


foreach ($counts as $count) {
    if ($count['table_name'] == 'users') {
        $totalUsers = $count['row_count'];
    } elseif ($count['table_name'] == 'accepted') {
        $totalAcceptedStudents = $count['row_count'];
    } elseif ($count['table_name'] == 'pending') {
        $totalPending = $count['row_count'];
    }
}


require "views/admin.view.php";
