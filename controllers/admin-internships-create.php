<?php

$heading = "Internships";
$config = require('config.php');
$db = new Database($config['database']);


$errors = [];


function getPostData($key)
{
    return isset($_POST[$key]) ? trim($_POST[$key]) : null;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = getPostData('title');
    $company = getPostData('company');
    $desc = getPostData('description');
    $location = getPostData('location');
    $course = getPostData('course');
    $start = getPostData('start_date');
    $end = getPostData('end_date');


    if (
        empty($title) || empty($company) || empty($desc) || empty($location) ||
        empty($course) || empty($start) || empty($end)
    ) {
        $errors['body'] = "All fields are required.";
    } else {
     
        $start_date = date('Y-m-d', strtotime($start));
        $end_date = date('Y-m-d', strtotime($end));

        if (empty($errors)) {
            try {

                $db->query(
                    'INSERT INTO internships (title, company_name, description, location, course, start_date, end_date) 
                     VALUES (:title, :company_name, :description, :location, :course, :start_date, :end_date)',
                    [
                        ':title' => $title,
                        ':company_name' => $company,
                        ':description' => $desc,
                        ':location' => $location,
                        ':course' => $course,
                        ':start_date' => $start_date,
                        ':end_date' => $end_date
                    ]
                );

                
            } catch (Exception $e) {

                error_log($e->getMessage(), 3, __DIR__ . '/error.log');
                $errors['body'] = "An error occurred during registration. Please try again.";
            }
        }
    }
}



require "views/admin-internships-create.view.php";