<?php
session_start();
include('DBconnection.php'); // Include the database connection file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Coursaty Website</title>
</head>
<body style="background-color: rgb(232, 232, 236);">
    <?php
    include('dbConnection.php');include("navbar.php");include("footer.html");
    ?>
    <!-- orderPlaced -->
    <!-- cart -->
    <!-- profile -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/src.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>