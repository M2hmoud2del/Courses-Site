<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login_register.php');
    exit();
}

// Ensure $user is set and not null
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

include('DBconnection.php'); // Include the database connection file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Coursaty Website</title>
    <style>
        .outerbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(232, 232, 236);
        }
        #username{
          font-size:xx-large;
          font-weight: 700;
        }
        .box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .box img {
            width: 300px;
            border-radius: 50%;
            margin-bottom: 0px;
            margin-top:100px;
        }
        .para p {
            font-size: xx-large;
            font-weight: 350;
            margin: 10px 0;
        }
        .para span {
            font-weight: 100;
        }
    </style>
</head>
<body style="background-color: rgb(232, 232, 236);">
    <!-- Navbar -->
     <?php include("navbar.php"); ?>
    <div class="outerbox mt-5 ">
        <div class="box">
            <img src="img/profile.png" alt="Profile Picture">
            <p id="username"><?php echo htmlspecialchars($user['Username']); ?></p>
            <div class="para">
                <p>First Name: <span><?php echo htmlspecialchars($user['First_Name']); ?></span></p>
                <p>Last Name: <span><?php echo htmlspecialchars($user['Last_Name']); ?></span></p>
                <p>Phone Number: <span><?php echo htmlspecialchars($user['Phone_Number']); ?></span></p>
                <p>Email: <span><?php echo htmlspecialchars($user['Email']); ?></span></p>
                <p>Country: <span><?php echo htmlspecialchars($user['Country']); ?></span></p>
                <p>University: <span><?php echo htmlspecialchars($user['University']); ?></span></p>
            </div>
            <div class="infoButtons mt-5">
            <button type="button" class="btn btn-info bInfo mr-5">Change Information</button>
            <button type="button" class="btn btn-danger bPassword">Change Password</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="js/src.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
</body>
</html>
