<?php
session_start();
require("DBconnection.php");
if($_SERVER['REQUEST_METHOD']==='POST'){
    $Password = $_POST['new_password'];
    $currPassword = $_POST['current_password'];
    $user = $_SESSION['user'];
    $user_id = $user['Client_ID'];
    $oldPassword = $user['Password'];
    if($oldPassword != $currPassword){
        $_SESSION['password_updated'] = false;
    }else{
    $sql = "UPDATE informations SET Password = ? WHERE Client_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si',$Password,$user_id);
    if ($stmt->execute()) {
        $_SESSION['password_updated'] = true;
        $_SESSION['user']['Password'] = $Password;
    } else {
        $_SESSION['password_updated'] = false;
    }
    $stmt->close();
    $conn->close();
    }
}