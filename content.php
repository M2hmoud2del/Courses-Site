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

echo '<div class="container mt-5">
        <div class="row">';

while($course = mysqli_fetch_assoc($result)) {
    echo '
        <div class="col-sm-4">
            <form action="enroll.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/' . $course['Image'] . '" alt="' . $course['CourseTitle'] . ' Image">
                    <div class="card-body">
                        <h5 class="card-title">' . $course['CourseTitle'] . '</h5>
                        <p class="card-text">' . $course['Description'] . '</p>
                        <p class="card-text">Instructor: ' . $course['Instructor'] . '</p>
                        <p class="card-text">Price: $' . $course['Price'] . '</p>
                        <input type="hidden" name="course_id" value="' . $course['Course_ID'] . '">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="' . $course['CourseTitle'] . '" data-price="' . $course['Price'] . '">Enroll</button>
                    </div>
                </div>
            </form>
        </div>';
}

echo '  </div>
      </div>';
?>
