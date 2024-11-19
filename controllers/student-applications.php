<?php
session_start(); 

$heading = "My Internship Applications";
$config = require('config.php');
$db = new Database($config['database']);

$currentUserId =  $_SESSION['user_id'];

$applications = $db->query('SELECT c.course_name, a.*, i.title,i.description,i.company_name, i.location,i.start_date
FROM users u
LEFT JOIN course c ON u.course_id = c.course_id
LEFT JOIN applications a ON u.id = a.user_id
LEFT JOIN internships i ON a.internship_id = i.id
WHERE u.id = :id
' , [
    ':id' => $currentUserId
    ])->get();

require "views/student-applications.view.php";

?>