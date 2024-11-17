<?php

$heading = "Internship";

$config = require('config.php');
$db = new Database($config['database']);

$internships = $db->query( "SELECT i.*, c.course_name 
FROM internships i 
JOIN course c ON i.course = c.course_id")->get();


require "views/student-internship.view.php";

?>

