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
    $sql = "UPDATE informations SET First_Name = ?, Last_Name = ?, Phone_Number = ?, Email = ?, Country = ?, University = ? WHERE Client_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssi', $firstName, $lastName, $phoneNumber, $email, $country, $university, $userId);
    $stmt->execute();
    $_SESSION['user']['First_Name'] = $firstName;
    $_SESSION['user']['Last_Name'] = $lastName;
    $_SESSION['user']['Phone_Number'] = $phoneNumber;
    $_SESSION['user']['Email'] = $email;
    $_SESSION['user']['Country'] = $country;
    $_SESSION['user']['University'] = $university;
    header('Location: profile.php');
    exit();
}