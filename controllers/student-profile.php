<?php
session_start(); 

$heading = "Profile";
$config = require('config.php');
$db = new Database($config['database']);

$currentUserId =  $_SESSION['user_id'];

$profile = $db->query('SELECT u.*, c.course_name, a.status, i.company_name, i.title, i.start_date, i.end_date
FROM users u
LEFT JOIN course c ON u.course_id = c.course_id
LEFT JOIN applications a ON u.id = a.user_id
LEFT JOIN internships i ON a.internship_id = i.id
WHERE u.id = :id
' , [
    ':id' => $currentUserId
    ])->find();

    
require "views/student-profile.view.php";

?>

