<?php

$heading = "Student Application Information";
$config = require('config.php');
$db = new Database($config['database']);

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


$student = $db->query(
    "SELECT c.course_name, a.*, i.title, i.company_name, i.location, i.start_date, i.end_date, u.first_name, u.last_name, u.stud_id, u.email, u.phone
     FROM applications a
     JOIN users u ON a.user_id = u.id
     JOIN course c ON u.course_id = c.course_id
     JOIN internships i ON a.internship_id = i.id
     WHERE a.id = :id", [
        ':id' => $id
    ]
)->find();



require "views/admin-application.view.php";

?>
