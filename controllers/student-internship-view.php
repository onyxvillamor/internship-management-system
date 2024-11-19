<?php

$heading = "Internship";

$config = require('config.php');
$db = new Database($config['database']);

$internship = $db->query( "SELECT i.*, c.course_name 
FROM internships i 
JOIN course c ON i.course = c.course_id
WHERE i.id = :id", [
    ':id' => $_GET['id']
])->find();




require "views/student-internship.view.php";

?>

