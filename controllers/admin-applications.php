<?php

$heading = "Internship Applications Overview";
$config = require('config.php');
$db = new Database($config['database']);

$students = $db->query( "SELECT u.*, c.course_name , a.status
FROM users u 
JOIN course c ON u.course_id = c.course_id 
JOIN applications a ON u.id = a.user_id
 ")->get();


require "views/admin-applications.view.php";