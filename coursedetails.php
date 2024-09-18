<?php
session_start();
include('DBconnection.php'); // Include the database connection file

$course_id = "";

if (isset($_POST['course_id'])) {
    $course_id = $_POST['course_id'];
    $query = "SELECT * FROM courses WHERE Course_ID = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "i", $course_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Failed to prepare the SQL statement.";
    }
}
mysqli_close($conn);
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
    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
    margin: 0;
    padding: 0;
}

.carddetails {
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    width: 80%;
    max-width: 800px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.carddetails h1 {
    font-size: 2.2em;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}


.carddetails .instructor, 
.carddetails .course-duration, 
.carddetails .course-price {
    font-size: 1.2em;
    margin-bottom: 10px;
    text-align: center;
}

.carddetails .instructor strong,
.carddetails .course-duration strong,
.carddetails .course-price strong {
    color: #444;
}

.course-content {
    margin-top: 30px;
    font-size: 1.1em;
}

.course-content h2 {
    font-size: 1.5em;
    color: #444;
    margin-bottom: 15px;
}

.course-content p {
    margin-bottom: 15px;
    line-height: 1.6;
    color: #555;
}

@media (max-width: 768px) {
    .carddetails {
        width: 90%;
        padding: 15px;
    }

    .carddetails h1 {
        font-size: 1.8em;
    }

    .course-content h2 {
        font-size: 1.3em;
    }

    .carddetails .instructor, 
    .carddetails .course-duration, 
    .carddetails .course-price {
        font-size: 1.1em;
    }
}

.course-video {
    margin-top: 30px;
    text-align: center;
}

.course-video h2 {
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #444;
}

.course-video p {
    font-size: 1.1em;
    margin-bottom: 20px;
    color: #555;
}


    </style>
</head>
<body style="background-color: rgb(232, 232, 236);">
    <br>
    <br>
    <?php

    echo '
    <div class="carddetails">
    <div class="container mb-5" ><img src="img/' . $data['Image'] .'" id="back" alt="" style="width:100%;height:300px;"></div>
    <div>
    <h1 class="text-primary">' . $data['CourseTitle'] . '</h1></div>

    <div class="instructor" >
        <strong>Instructor: </strong>' . $data['Instructor'] . '
    </div>

    <div class="course-duration">
        <strong>Duration:</strong>' . $data['Date']  . '
    </div>

    <div class="course-price">
        <strong>Price:</strong>' . $data['Price'] .'
        <hr>
    </div>

    <div class="course-content">
        <h2>Course Content Overview</h2>
        <p>'. $data['More_Details'] .'</p>
    </div>

        <div class="course-video">
        <h2>Watch the Course Overview Video</h2>
        <p>This video explains the entire course structure and what you can expect to learn:</p>
        
        <iframe width="100%" height="450" src="'. $data['videoLink'] . '" 
        title="'. $data['CourseTitle'] . 'Course Overview" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>'
?>
    <?php
    include('dbConnection.php');include('navbar.php');
    ?>
      <input class="key" type="hidden" name="course_id" value="">
 
    <?php
    include("footer.html");
    ?>
 
    <!-- orderPlaced -->
    <!-- cart -->
    <!-- profile -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/src.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
</body>
</html>