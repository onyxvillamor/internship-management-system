<?php

$heading = "Student Application Information";
$config = require('config.php');
$db = new Database($config['database']);

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


$student = $db->query( "SELECT u.*, c.course_name, a.*, i.*
                        FROM users u
                        JOIN course c ON u.course_id = c.course_id
                        JOIN applications a ON u.id = a.user_id
                        JOIN internships i ON a.internship_id = i.id
                        WHERE u.id = :id", [
                            ':id' => $id
                        ])->find();



require "views/admin-application.view.php";

?>
