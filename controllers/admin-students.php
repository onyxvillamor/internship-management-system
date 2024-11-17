<?php

$heading = "Students";
$config = require('config.php');
$db = new Database($config['database']);

$students = $db->query( "SELECT u.*, c.course_name 
FROM users u 
JOIN course c ON u.course_id = c.course_id 
 ")->get();

require "views/admin-students.view.php";