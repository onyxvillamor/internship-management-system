<?php

$heading = "Available Internships";

$config = require('config.php');
$db = new Database($config['database']);

$courses = $db->query('SELECT * FROM course')->get();


$course_id = isset($_GET['course_id']) ? $_GET['course_id'] : null;


if ($course_id) {
   
    $internships = $db->query(
        "SELECT i.*, c.course_name 
        FROM internships i 
        JOIN course c ON i.course = c.course_id 
        WHERE i.course = :course_id", [
        ':course_id' => $course_id
    ])->get();
} else {
   
    $internships = $db->query(
        "SELECT i.*, c.course_name 
        FROM internships i 
        JOIN course c ON i.course = c.course_id"
    )->get();
}

require "views/student-internships.view.php";
?>
