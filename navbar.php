    <!-- Navbar -->
    <nav class="navbar navbar-danger bg-light" style="position: fixed;z-index: 1000;width: 100%;top: 0px;">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="index.php"><img src="img\logo.png" style="width:60px; ">Coursaty </a>
          <a class="navbar-brand fw-bold" href="index.php">Home</a>
          <a class="navbar-brand fw-bold" href="#foot" >About</a>
          <li class="navbar-brand dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Courses
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Programming</a>
              <a class="dropdown-item" href="#">AI</a>
              <a class="dropdown-item" href="#">Web Devlovment</a>
            </div>
          </li>
          <a class="navbar-brand fw-bold" id="acc" href="#"><i class="fa-solid fa-user "></i></a>
        </div>
        <div class="menu" style="display: none; position: absolute; margin-top: 250px;padding-right: 50px; ;right:5px;border-radius: 10px;border: 1px solid rgb(97, 97, 99) ;background-color: #d4e8eb;">
          <a class="navbar-brand fw-bold ml-3" style="font-weight: 500;" href="profile.php">Profile</a><br>
          <a class="navbar-brand fw-bold ml-3" style="font-weight: 500;" href="mycourses.php">My Courses</a><br>
          <hr>
          <?php if (isset($_SESSION['user'])): ?>
            <!-- Show Logout when the user is logged in -->
            <a class="navbar-brand fw-bold text-danger pe-5 w-100 ml-3" href="logout.php" style="font-weight: 500;">Logout</a>
        <?php else: ?>
            <!-- Show Login/Register when the user is not logged in -->
            <a class="navbar-brand fw-bold ml-3 pe-5 w-100 ml-3" href="login_register.php" style="font-weight: 500;">Login / Register</a>
        <?php endif; ?>
        </div>
      </nav>