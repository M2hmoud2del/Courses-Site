<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In / Register</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add any additional custom styles here */
    </style>
</head>
<body style="background-color: rgb(232, 232, 236);">
    <?= include('navbar.php'); ?>
            <!-- Display message if available -->
            <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])): ?>
            <div class="alert alert-info">
                <?= $_SESSION['message']; ?>
                <?php unset($_SESSION['message']); // Clear the message after displaying ?>
            </div>
        <?php endif; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <h2 class="text-center">Sign In / Register</h2>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="sign-in-tab" data-toggle="tab" href="#sign-in" role="tab" aria-controls="sign-in" aria-selected="true">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content mt-4" id="myTabContent">
                    <!-- Sign In Tab -->
                    <div class="tab-pane fade show active" id="sign-in" role="tabpanel" aria-labelledby="sign-in-tab">
                        <form method="post" action="login.php"> <!-- Ensure form action points to the correct PHP file -->
                            <div class="form-group">
                                <label for="login-email">Email address</label>
                                <input type="email" class="form-control" name="email" id="login-email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="login-password">Password</label>
                                <input type="password" class="form-control" name="password" id="login-password" placeholder="Password" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3" name="login">Sign In</button>
                        </form>
                        <p class="text-center mt-3"><a href="#">Forgot your password?</a></p>
                    </div>
                    
                    <!-- Register Tab -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form method="post" action="login.php"> <!-- Ensure form action points to the correct PHP file -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="register-first-name">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="register-first-name" placeholder="First Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="register-last-name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="register-last-name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="register-email">Email address</label>
                                <input type="email" class="form-control" name="email" id="register-email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="register-username">Username</label>
                                <input type="text" class="form-control" name="username" id="register-username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="register-password">Password</label>
                                <input type="password" class="form-control" name="password" id="register-password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="register-confirm-password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="register-confirm-password" placeholder="Confirm Password" required>
                            </div>
                            <div class="form-group">
                                <label for="register-phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="register-phone" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label for="register-country">Country</label>
                                <input type="text" class="form-control" name="country" id="register-country" placeholder="Country" required>
                            </div>
                            <div class="form-group">
                                <label for="register-university">University</label>
                                <input type="text" class="form-control" name="university" id="register-university" placeholder="University" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-4" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
