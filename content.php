<?php
session_start();
include('DBconnection.php');
$courseTracks = [
    "Programming" => [
        "title" => "Programming",
        "description" => "The Programming Track is ideal for anyone looking to build a strong foundation in coding, problem-solving, and logic. This track covers a variety of programming languages like Python, Java, and C++, focusing on algorithm design, data structures, and software development principles. As you progress, you will also learn about object-oriented programming and explore advanced topics such as databases, APIs, and cloud computing. Whether you are aspiring to become a software developer, mobile app developer, or game designer, this track equips you with the core skills needed for any technology-related field."
    ],
    "Web Development" => [
        "title" => "Web Development",
        "description" => "The Web Development Track is designed for individuals interested in creating dynamic and interactive websites or web applications. This track teaches both front-end and back-end development, covering essential technologies such as HTML, CSS, and JavaScript for front-end design, and Node.js, PHP, and databases for back-end development. You will also explore modern frameworks and libraries like React and Vue.js, which allow you to create scalable and responsive web applications. By the end of the track, you will be able to build full-stack applications and deploy them online, preparing you for a career in web development or freelancing."
    ],
    "AI" => [
        "title" => "Artificial Intelligence (AI)",
        "description" => "The AI Track focuses on the cutting-edge field of Artificial Intelligence, which is revolutionizing industries across the globe. This track covers essential AI concepts, including machine learning, deep learning, and neural networks. You will learn how to implement algorithms that allow machines to learn from data and make intelligent decisions. This track also introduces key tools and frameworks like TensorFlow and PyTorch, which are widely used in AI development. By mastering the AI track, you’ll be equipped to work on projects involving autonomous systems, natural language processing, and data-driven decision-making, making you highly sought after in fields like robotics, finance, and healthcare."
    ],
    "Other" => [
        "title" => "Other Courses",
        "description" => "Explore a diverse range of courses that don't fit into our main categories. These offerings cover a variety of unique topics and specialized areas, providing opportunities for you to broaden your skills and knowledge in different fields. Whether you're interested in niche subjects or emerging trends, you'll find valuable content here to enhance your learning journey."
    ]
];
$printedTracks = [
    "Programming" => false,
    "Web Development" => false,
    "AI" => false,
    "Other" => false
];
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
while ($course = mysqli_fetch_assoc($result)) {
    if (isset($course['Category']) && isset($courseTracks[$course['Category']]) && !$printedTracks[$course['Category']]) {
        $track = $courseTracks[$course['Category']];
        echo "<div class='courseType' style='padding: 20px; border: 1px solid #ddd; margin-bottom: 10px; border-radius: 5px;'>
                <h1 id='{$track['title']}' style='font-size: 28px; color: #333;'>{$track['title']}</h1>
                <p style='font-size: 16px; color: #666;padding-left:30px;'>{$track['description']}</p>
              </div>";
        $printedTracks[$course['Category']] = true; // Mark track as printed
    } else if (!isset($courseTracks[$course['Category']]) && !$printedTracks["Other"]) {
        echo "<div class='courseType' style='padding: 20px; border: 1px solid #ddd; margin-bottom: 10px; border-radius: 5px;'>
                <h1 id='Other Courses' style='font-size: 24px; color: #333;'>Other Courses</h1>
                <p style='font-size: 16px; color: #666;padding-left:30px;'>{$courseTracks['Other']['description']}</p>
              </div>";
        $printedTracks["Other"] = true;
    }
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
