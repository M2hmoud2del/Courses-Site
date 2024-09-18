<?php
session_start();
include('DBconnection.php');

?>
<!--Background Photo-->
<div class="cont" style="margin-top: 120px;">
    <div class="tex" style="margin: 50px; margin-top:110px;">
        <h1 style="margin-bottom:50px;">Welcome to Coursaty Website</h1>
        <p>Your destination for learning new skills and advancing your career.</p>
        <p>Explore our courses on web development, AI, data science, and much more!</p>
        <p>Our instructors provide hands-on learning to ensure you master the skills you need.</p>
        <p>Join thousands of learners and start your journey towards success today!</p>
    </div>
<div class="imgeg">
<img src="img/bg.jpg" id="back" alt="">
</div>
</div>      
    <!-- content -->
    <?php
$query = "SELECT * FROM courses ORDER BY 
CASE 
    WHEN Category = 'Programming' THEN 1
    WHEN Category = 'Web Development' THEN 2
    WHEN Category = 'AI' THEN 3
    ELSE 4
END, CourseTitle";
$result = mysqli_query($conn, $query);

// Initialize $enrolledCourses as an empty array
$enrolledCourses = [];

// Check if the user session exists
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $user_id = $user['Client_ID'];
    $query = "SELECT course FROM coursesmembership WHERE client = '$user_id'";
    $selectedCourses = mysqli_query($conn, $query);
    while ($course = mysqli_fetch_assoc($selectedCourses)) {
        $enrolledCourses[] = $course['course'];
    }
}

echo '<div class="container-fluid mt-5" id="contentContainer">
        <div class="row" id="contentRow">';
        $count =0;
while ($course = mysqli_fetch_assoc($result)) {
    // Check if the user is not enrolled in this course
    if($course['Category'] === "Programming" && $count==0){echo "<div class='courseType' ><h1 id='programming'>Programming</h1></div>";$count++;}
    else if($course['Category'] === "Web Development" && $count==1){echo "<div class='courseType'><h1 id='Web Development'>Web Development</h1></div>";$count++;}
    else if($course['Category'] === "AI" && $count==2){echo "<div class='courseType'><h1 id='AI'>AI</h1></div>";$count++;}
    else if($course['Category'] !== "AI" &&$count==3){echo "<div class='courseType'><h1 id='Other Courses'>Other Courses</h1></div>";$count++;}
    if (!in_array($course['Course_ID'], $enrolledCourses)) {
        echo '
        <div class="col-sm-6 col-md-4 mb-4" id="column">
            <div class="card clickable-card" style="width: 400px; height: 450px;">
                <img class="card-img-top" src="img/' . $course['Image'] . '" alt="' . $course['CourseTitle'] . ' Image" style="height: 150px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <div>
                        <h5 class="card-title text-primary" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . $course['CourseTitle'] . '</h5>
                        <p class="card-text" style="height: 60px; overflow: hidden;">' . $course['Description'] . '</p>
                        <p class="card-text">Instructor: ' . $course['Instructor'] . '</p>
                        <p class="card-text">Price: $' . $course['Price'] . '</p>
                        <form action="coursedetails.php" method="post" class="details-form">
                            <input type="hidden" name="course_id" value="' . $course['Course_ID'] . '">
                        </form>
                    </div>
                    <div class="mt-auto">
                        <form action="enroll.php" method="post">
                            <button type="submit" class="btn btn-primary add-to-cart enrollbutton" data-name="' . $course['CourseTitle'] . '" data-price="' . $course['Price'] . '">Enroll</button>
                            <input type="hidden" name="course_id" value="' . $course['Course_ID'] . '">
                        </form>
                    </div>
                </div>
            </div>
        </div>';
        
    }
}

echo '  </div>
      </div>';
?>
<script>
document.querySelectorAll('.clickable-card').forEach(function(card) {
    card.addEventListener('click', function(event) {
        if (!event.target.closest('.enrollbutton')) {
            card.querySelector('.details-form').submit();
        }
    });
});

</script>
