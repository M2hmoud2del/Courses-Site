<?php
session_start();
include('DBconnection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (!isset($_SESSION['user'])) {
        header('Location: login_register.php');
        exit();
    }else{
        $user = $_SESSION['user'] ;
        $courseID = $_POST['course_id'];
        $sql = "INSERT INTO coursesmembership (client, course) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        if($stmt){
            $stmt->bind_param("ss", $user['Client_ID'],$courseID);
            $stmt->execute();
            $stmt->close();
        }
        header('Location: coursedetails.php');
        exit();}
}
?>
