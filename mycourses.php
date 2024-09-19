<?php
session_start();
include('DBconnection.php');
if (!isset($_SESSION['user'])) {
    header('Location: login_register.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Coursaty Website</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .card {
            width: 100%;
            max-width: 25rem;
        }

        @media (min-width: 576px) {
            .card-container {
                gap: 20px;
            }
        }

        @media (min-width: 768px) {
            .card-container {
                justify-content: flex-start;
            }
        }

        @media (min-width: 992px) {
            .card-container {
                justify-content: space-between;
            }
        }
    </style>
</head>
<body style="background-color: rgb(232, 232, 236);">
    <?=include('navbar.php');?>
    <?php
    $user = $_SESSION['user'];
    $user_id = $user['Client_ID'];

$query = "SELECT courses.Course_ID, courses.CourseTitle, courses.Description, courses.Image 
          FROM courses
          INNER JOIN coursesmembership ON courses.Course_ID = coursesmembership.course
          WHERE coursesmembership.client = '$user_id'";
$result = mysqli_query($conn, $query);
echo '<br><br><br><br>';
echo '
    <div class="container mt-5 bg-light text-center text-lg-start p-5" style="border-radius: 15px;">
        <div class="card-container mycourses">';

while($course = mysqli_fetch_assoc($result)) {
    echo '
            <div class="card">
                <img class="card-img-top" src="img/' . $course['Image'] . '" alt="' . $course['CourseTitle'] . ' Image">
                <div class="card-body">
                    <h5 class="card-title text-primary">' . $course['CourseTitle'] . '</h5>
                    <p class="card-text">' . $course['Description'] . '</p>
                <form action="coursedetails.php" class="viewcourseForm" method="post">
                    <button type="submit"  id="viewCourse" class="btn btn-primary">View Course</button>
                    <input type="hidden" name="course_id" value="' . $course['Course_ID'] . '">
                </div></form>   
            </div>';
}

echo '
        </div>
    </div>';
?>
    <?=include('footer.html');?>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/src.js"></script>
</body>
</html>