<?php
session_start();
include('DBconnection.php');
?>
<!--Background Photo-->
      <div class="cont" style="margin-top: 120px;">
        <div class="tex">
      <p class="text-start">Start aligned text on all viewport sizes.</p>
<p class="text-center">Center aligned text on all viewport sizes.</p>
<p class="text-end">End aligned text on all viewport sizes.</p>

<p class="text-sm-start">Start aligned text on viewports sized SM (small) or wider.</p>
<p class="text-md-start">Start aligned text on viewports sized MD (medium) or wider.</p>
<p class="text-lg-start">Start aligned text on viewports sized LG (large) or wider.</p>
<p class="text-xl-start">Start aligned text on viewports sized XL (extra-large) or wider.</p>
</div>
<div class="imgeg">
<img src="img/bg.jpg" id="back" alt="">
</div>
</div>      
    <!-- content -->
    <?php
$query = "SELECT * FROM courses";
$result = mysqli_query($conn, $query);

$user = $_SESSION['user'];
$user_id = $user['Client_ID'];

$query = "SELECT course FROM coursesmembership WHERE client = '$user_id'";
$selectedCourses = mysqli_query($conn, $query);
$enrolledCourses =[];
while($course = mysqli_fetch_assoc($selectedCourses)){
    $enrolledCourses[] = $course['course'];
}

echo '<div class="container-fluid mt-5" id="contentContainer">
        <div class="row" id="contentRow">';

while($course = mysqli_fetch_assoc($result)) {
    if(!in_array($course['Course_ID'],$enrolledCourses)){
    echo '
        <div class="col-sm-6 col-md-4 mb-4 " id="column">
            <form action="enroll.php" method="post">
                <div class="card " style="width: 450px; height: 450px;">
                    <img class="card-img-top" src="img/' . $course['Image'] . '" alt="' . $course['CourseTitle'] . ' Image" style="height: 150px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <div>
                            <h5 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . $course['CourseTitle'] . '</h5>
                            <p class="card-text" style="height: 60px; overflow: hidden;">' . $course['Description'] . '</p>
                            <p class="card-text">Instructor: ' . $course['Instructor'] . '</p>
                            <p class="card-text">Price: $' . $course['Price'] . '</p>
                            <input type="hidden" name="course_id" value="' . $course['Course_ID'] . '">
                        </div>
                        <div class="mt-auto">
                            <button type="submit" class="btn btn-primary add-to-cart" data-name="' . $course['CourseTitle'] . '" data-price="' . $course['Price'] . '">Enroll</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>';
    }
}

echo '  </div>
      </div>';
?>
