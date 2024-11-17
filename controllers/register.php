<?php

$config = require('config.php');
$db = new Database($config['database']);


$errors = [];


function getPostData($key)
{
    return isset($_POST[$key]) ? trim($_POST[$key]) : null;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstName = getPostData('first_name');
    $lastName = getPostData('last_name');
    $studId = getPostData('stud_id');
    $email = getPostData('email');
    $phone = getPostData('phone');
    $courseId = getPostData('course_id');
    $streetAddress = getPostData('street_address');
    $city = getPostData('city');
    $region = getPostData('region');
    $postalCode = getPostData('postal_code');
    $inputDate = getPostData('birthday');


    if (
        empty($firstName) || empty($lastName) || empty($studId) || empty($email) ||
        empty($phone) || empty($courseId) || empty($streetAddress) || empty($region) || empty($postalCode) || empty($inputDate)
    ) {
        $errors['body'] = "All fields are required.";
    } else {

        $address = $streetAddress . ', ' . $city . ', ' . $region . ', ' . $postalCode;
        $birthday = date('Y-m-d', strtotime($inputDate));

        $fileName = $_FILES['image']['name'] ?? null;
        $tempName = $_FILES['image']['tmp_name'] ?? null;
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        $newFileName = $studId . '.' . $fileExtension;
        $folder = 'views/img/' . $fileName;



        if (empty($errors)) {
            try {

                $db->query(
                    'INSERT INTO users (first_name, last_name, stud_id, email, address, phone, birthday, course_id, img_fileName) 
                     VALUES (:first_name, :last_name, :stud_id, :email, :address, :phone, :birthday, :course_id, :img_fileName)',
                    [
                        ':first_name' => $firstName,
                        ':last_name' => $lastName,
                        ':stud_id' => $studId,
                        ':email' => $email,
                        ':address' => $address,
                        ':phone' => $phone,
                        ':birthday' => $birthday,
                        ':course_id' => $courseId,
                        ':img_fileName' => $fileName
                    ]
                );

                
                
            
                move_uploaded_file($tempName, $folder);
            } catch (Exception $e) {

                error_log($e->getMessage(), 3, __DIR__ . '/errors/error.log');
                $errors['body'] = "An error occurred during registration. Please try again.";
            }
        }
    }
}



require "views/register.view.php";
