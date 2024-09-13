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
    <form action="enroll.php" method="post">
    <div class="container mt-5">
        <div class="row">
            <!-- Course 1 -->
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/python.jpg" alt="Introduction to Python Programming Image">
                    <div class="card-body">
                        <h5 class="card-title">Introduction to Python Programming</h5>
                        <p class="card-text">Learn the basics of Python, including syntax, functions, and more.</p>
                        <p class="card-text">Instructor: John Smith</p>
                        <p class="card-text">Price: $100</p>
                        <input type="hidden" name="course_id" value="1">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Introduction to Python Programming" data-price="100">Enroll</button>
                    </div>
                </div>
            </div>
    </form>
            <!-- Course 2 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/data.jpg" alt="Data Science with R Image">
                    <div class="card-body">
                        <h5 class="card-title">Data Science with R</h5>
                        <p class="card-text">Comprehensive course on using R for data analysis and visualization.</p>
                        <p class="card-text">Instructor: Jane Doe</p>
                        <p class="card-text">Price: $150</p>
                        <input type="hidden" name="course_id" value="2">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Data Science with R" data-price="150">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
            <!-- Course 3 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/ai.jpg" alt="Artificial Intelligence Image">
                    <div class="card-body">
                        <h5 class="card-title">Artificial Intelligence</h5>
                        <p class="card-text">Explore AI fundamentals and applications.</p>
                        <p class="card-text">Instructor: Dr. Sarah Jones</p>
                        <p class="card-text">Price: $500</p>
                        <input type="hidden" name="course_id" value="3">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Artificial Intelligence" data-price="500">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Course 4 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/webdev.jpg" alt="Web Development Image">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Learn to build modern web applications.</p>
                        <p class="card-text">Instructor: John Doe</p>
                        <p class="card-text">Price: $300</p>
                        <input type="hidden" name="course_id" value="4">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Web Development" data-price="300">Enroll</button>
                    </div>
                </div>
            </div>
            </form>

            <!-- Course 5 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/cybersecurity.jpg" alt="Cybersecurity Image">
                    <div class="card-body">
                        <h5 class="card-title">Cybersecurity</h5>
                        <p class="card-text">Comprehensive course on security protocols.</p>
                        <p class="card-text">Instructor: Dr. Emily Smith</p>
                        <p class="card-text">Price: $450</p>
                        <input type="hidden" name="course_id" value="5">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Cybersecurity" data-price="450">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
            <!-- Course 6 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/data.jpg" alt="Data Science Image">
                    <div class="card-body">
                        <h5 class="card-title">Data Science</h5>
                        <p class="card-text">Master data analysis and visualization techniques.</p>
                        <p class="card-text">Instructor: Dr. Michael Brown</p>
                        <p class="card-text">Price: $600</p>
                        <input type="hidden" name="course_id" value="6">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Data Science" data-price="600">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Course 7 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/marketing.jpg" alt="Digital Marketing Image">
                    <div class="card-body">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Learn strategies for online marketing success.</p>
                        <p class="card-text">Instructor: Jessica White</p>
                        <p class="card-text">Price: $350</p>
                        <input type="hidden" name="course_id" value="7">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Digital Marketing" data-price="350">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
            <!-- Course 8 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/finance.jpg" alt="Financial Analysis Image">
                    <div class="card-body">
                        <h5 class="card-title">Financial Analysis</h5>
                        <p class="card-text">Analyze financial statements and trends.</p>
                        <p class="card-text">Instructor: George Lee</p>
                        <p class="card-text">Price: $400</p>
                        <input type="hidden" name="course_id" value="8">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Financial Analysis" data-price="400">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
            <!-- Course 9 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/blockchain.jpg" alt="Blockchain Technology Image">
                    <div class="card-body">
                        <h5 class="card-title">Blockchain Technology</h5>
                        <p class="card-text">Understand blockchain and its applications.</p>
                        <p class="card-text">Instructor: Dr. William Clark</p>
                        <p class="card-text">Price: $700</p>
                        <input type="hidden" name="course_id" value="9">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Blockchain Technology" data-price="700">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Course 10 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/uiux.jpg" alt="UI/UX Design Image">
                    <div class="card-body">
                        <h5 class="card-title">UI/UX Design</h5>
                        <p class="card-text">Design user interfaces with a focus on user experience.</p>
                        <p class="card-text">Instructor: Dr. Alice Green</p>
                        <p class="card-text">Price: $450</p>
                        <input type="hidden" name="course_id" value="10">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="UI/UX Design" data-price="450">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
            <!-- Course 11 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/python.jpg" alt="Advanced Python Programming Image">
                    <div class="card-body">
                        <h5 class="card-title">Advanced Python Programming</h5>
                        <p class="card-text">Deep dive into advanced Python features and libraries.</p>
                        <p class="card-text">Instructor: Dr. Laura Scott</p>
                        <p class="card-text">Price: $250</p>
                        <input type="hidden" name="course_id" value="11">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Advanced Python Programming" data-price="250">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
            <!-- Course 12 -->
            <form action="enroll.php" method="post">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/machinelearning.jpg" alt="Machine Learning Image">
                    <div class="card-body">
                        <h5 class="card-title">Machine Learning</h5>
                        <p class="card-text">Understand machine learning algorithms and their applications.</p>
                        <p class="card-text">Instructor: Dr. Daniel Martinez</p>
                        <p class="card-text">Price: $550</p>
                        <input type="hidden" name="course_id" value="12">
                        <button type="submit" class="btn btn-primary add-to-cart" data-name="Machine Learning" data-price="550">Enroll</button>
                    </div>
                </div>
            </div>
            </form>
        </div>


    </div>
</form>
