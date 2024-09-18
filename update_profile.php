<?php
session_start();
require("DBconnection.php");
$userId = $_SESSION['user']['Client_ID'];
if($_SERVER['REQUEST_METHOD']==='POST'){
    $firstName = $_POST['First_Name'];
    $lastName = $_POST['Last_Name'];
    $phoneNumber = $_POST['Phone_Number'];
    $email = $_POST['Email'];
    $country = $_POST['Country'];
    $university = $_POST['University'];
    $gender = $_POST['gender'];
    $userProfile = ($gender === 'male')? 'img/prof.webp' : 'img/proff.webp';
    $sql = "UPDATE informations SET First_Name = ?, Last_Name = ?, Phone_Number = ?, Email = ?, Country = ?, University = ?, Gender = ?, userProfile = ? WHERE Client_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssssi', $firstName, $lastName, $phoneNumber, $email, $country, $university, $gender,$userProfile, $userId);
    $stmt->execute();
    $_SESSION['user']['First_Name'] = $firstName;
    $_SESSION['user']['Last_Name'] = $lastName;
    $_SESSION['user']['Phone_Number'] = $phoneNumber;
    $_SESSION['user']['Email'] = $email;
    $_SESSION['user']['Country'] = $country;
    $_SESSION['user']['University'] = $university;
    $_SESSION['user']['gender'] = $gender;
    $_SESSION['user']['userProfile'] = $userProfile;
    header('Location: profile.php');
    exit();
}
