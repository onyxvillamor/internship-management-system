<?php

$heading = "Edit Internship Offer";

$config = require('config.php');
$db = new Database($config['database']);
$errors = [];

$internshipId = $_GET['id'] ?? null;
if (!$internshipId) {
    header('Location: /admin/internships');
    exit;
}

$internship = $db->query("SELECT * FROM internships WHERE id = :id", [':id' => $internshipId])->find();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $company = $_POST['company_name'];
    $description = $_POST['description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $course = $_POST['course'];
    $location = $_POST['location'];
    
    $imagePath = $internship['company_logo'];

    if (!empty($_FILES['image']['name'])) {
        $fileName = $_FILES['image']['name'] ?? null;
        $tempName = $_FILES['image']['tmp_name'] ?? null;
        $folder = 'views/img/' . $fileName;
        move_uploaded_file($tempName, $folder);
    }

    $db->query("UPDATE internships SET title = :title, company_name = :company, description = :description, start_date = :start_date, end_date = :end_date, course = :course, location = :location, company_logo = :image WHERE id = :id", [
        ':title' => $title,
        ':company' => $company,
        ':description' => $description,
        ':start_date' => $start_date,
        ':end_date' => $end_date,
        ':course' => $course,
        ':location' => $location,
        ':image' => $fileName,
        ':id' => $internshipId
    ]);

    header('Location: /admin/internships?status=updated');
    exit;
}

require 'views/admin-internships-edit.view.php';
?>
