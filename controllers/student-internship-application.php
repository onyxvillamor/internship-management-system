<?php
session_start(); 

$heading = "Internship";

$config = require('config.php');
$db = new Database($config['database']);

$internship = $db->query( "SELECT i.*, c.course_name 
FROM internships i 
JOIN course c ON i.course = c.course_id
WHERE i.id = :id", [
    ':id' => $_GET['id']
])->find();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $internship_id = $_POST['internship_id'];
    $cover_letter = $_POST['cover_letter'];
    $resume = $_FILES['resume'];
    $user_id = $_SESSION['user_id'];

 
    $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    $max_file_size = 2 * 1024 * 1024; 

    if ($resume['error'] === 0 && in_array($resume['type'], $allowed_types) && $resume['size'] <= $max_file_size) {
        $upload_dir = 'views/applicant-resume/';
        $resume_name = time() . '-' . basename($resume['name']);
        $upload_path = $upload_dir . $resume_name;

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        if (move_uploaded_file($resume['tmp_name'], $upload_path)) {
         
            $db->query("INSERT INTO applications (user_id, internship_id, cover_letter, resume) VALUES (:user_id, :internship_id, :cover_letter, :resume)", [
                ':user_id' => $user_id,
                ':internship_id' => $internship_id,
                ':cover_letter' => $cover_letter,
                ':resume' => $resume_name,
            ]);
                 echo "<script>alert('Application submitted successfully!');</script>";
                 header("Location: /student/applications");
        } else {
            echo "Failed to upload resume.";
        }
    } else {
        echo "Invalid file type or size.";
    }
}


require "views/student-internship-application.view.php";

?>

