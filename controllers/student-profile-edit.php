<?php

session_start();

$heading = "Edit Profile";

$config = require('config.php');
$db = new Database($config['database']);

$errors = [];
$currentUserId =  $_SESSION['user_id'];

$profile = $db->query('SELECT * FROM users WHERE id = :id', [
    ':id' => $currentUserId
])->find();


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
    $address = getPostData('address');
    $inputDate = getPostData('birthday');

 
    if (
        empty($firstName) || empty($lastName) || empty($studId) || empty($email) ||
        empty($phone) || empty($courseId) || empty($address) || empty($inputDate)
    ) {
        $errors['body'] = "All fields are required.";
    } else {
       
        $birthday = date('Y-m-d', strtotime($inputDate));

        $fileName = $_FILES['image']['name'] ?? null;
        $tempName = $_FILES['image']['tmp_name'] ?? null;
        $folder = 'views/img/' . $fileName;
        $imageUpload = false;

        if ($fileName) {
       
            if (move_uploaded_file($tempName, $folder)) {
                $imageUpload = true;
            } else {
                $errors['body'] = "Image upload failed.";
            }
        }

       
        if (empty($errors)) {
            try {
            
                $query = '
                    UPDATE users
                    SET 
                        first_name = :first_name,
                        last_name = :last_name,
                        email = :email,
                        stud_id = :stud_id,
                        address = :address,
                        phone = :phone,
                        birthday = :birthday,
                        course_id = :course_id';
                
               
                if ($imageUpload) {
                    $query .= ', img_fileName = :img_fileName';
                }

                $query .= ' WHERE id = :id';

               
                $params = [
                    ':id' => $currentUserId,
                    ':first_name' => $firstName,
                    ':last_name' => $lastName,
                    ':stud_id' => $studId,
                    ':email' => $email,
                    ':address' => $address,
                    ':phone' => $phone,
                    ':birthday' => $birthday,
                    ':course_id' => $courseId
                ];

            
                if ($imageUpload) {
                    $params[':img_fileName'] = $fileName;
                }

              
                $user = $db->query($query, $params);

                header("Location: /student/profile");
                exit;
            } catch (Exception $e) {
             
                $errors['body'] = "An error occurred while updating the profile. Please try again.";
            }
        }
    }
}


require "views/student-profile-edit.view.php";
?>
