<?php
session_start();
require("DBconnection.php");
$userId = $_SESSION['user']['UserID'];
if($_SERVER['REQUEST_METHOD']==='POST'){
    $firstName = $_POST['First_Name'];
    $lastName = $_POST['Last_Name'];
    $phoneNumber = $_POST['Phone_Number'];
    $email = $_POST['Email'];
    $country = $_POST['Country'];
    $university = $_POST['University'];
    $sql = "UPDATE users SET First_Name = ?, Last_Name = ?, Phone_Number = ?, Email = ?, Country = ?, University = ? WHERE Client_ID = ?";
    header('Location: profile.php');
    exit();
}