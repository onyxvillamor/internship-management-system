<?php

$heading = "Internship Applications Overview";
$config = require('config.php');
$db = new Database($config['database']);

$students = $db->query( "SELECT a.*, c.course_name, u.stud_id, u.first_name, u.last_name, u.course_id, u.img_fileName
FROM applications a
JOIN users u ON a.user_id = u.id 
JOIN course c ON u.course_id = c.course_id
 ")->get();


require "views/admin-applications.view.php";