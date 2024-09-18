<?php
session_start(); // Start session to access session variables
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>Sign In / Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(232, 232, 236);">
    <?= include("navbar.php");?>
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
                                <div class="input-group-append">
                                <input type="password" class="form-control" name="password" id="login-password" placeholder="Password" required>
                                
                                    <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword" style="border:none;">
                                    <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3" name="login">Sign In</button>
                        </form>
                        <!-- Display message if available -->
                        <?php if (isset($_SESSION['message']) && !empty($_SESSION['message']) && $_SESSION['message'] !== "Registration successful!"): ?>
                            <div class="alert alert-danger mt-2">
                                <?= $_SESSION['message']; ?>
                                <?php unset($_SESSION['message']); // Clear the message after displaying ?>
                            </div>
                        <?php elseif(isset($_SESSION['message']) && !empty($_SESSION['message'])): ?>
                            <div class="alert alert-success mt-2">
                                <?= $_SESSION['message']; ?>
                                <?php unset($_SESSION['message']); // Clear the message after displaying ?>
                            </div>
                        <?php endif; ?>
                        <p class="text-center mt-3"><a href="#">Forgot your password?</a></p>
                    </div>
                    
    <!-- Register Tab -->
    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
    <form method="post" id="changeInfoForm" action="login.php">
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
            <label for="register_password">Password</label>
            <div class="input-group-append">
                <input type="password" class="form-control" name="password" id="register_password" placeholder="Password" required>
                <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword" style="border:none;">
                  <i class="fa fa-eye"></i>
                </button>
            </div>
            <div id="checks" style="display:none;">
                <div id="CheckCapital">
                    <i class="fa-solid fa-circle-xmark icons" style="color:red; margin-left:20px; font-size:small;"></i>
                    <label style="margin:10px; margin-bottom: 0px; color:red;">Capital letter</label>
                </div>
                <div id="CheckSmall">
                    <i class="fa-solid fa-circle-xmark icons" style="color:red; margin-left:20px; font-size:small;"></i>
                    <label style="margin:10px; margin-bottom: 0px; color:red; font-size:small;">At least 1 digit</label>
                </div>
                <div id="CheckComplex">
                    <i class="fa-solid fa-circle-xmark icons" style="color:red; margin-left:20px; font-size:small;"></i>
                    <label style="margin:10px; margin-bottom: 0px; color:red; font-size:small;">Contain 1 of these characters [@$!%*?&]</label>
                </div>
                <div id="CheckLength">
                    <i class="fa-solid fa-circle-xmark icons" style="color:red; margin-left:20px; font-size:small;"></i>
                    <label style="margin:10px; margin-bottom: 0px; color:red; font-size:small;">Password length more than 8 characters</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="register_confirm_password">Confirm Password</label>
            <div class="input-group-append">
                <input type="password" class="form-control" name="confirm_password" id="register_confirm_password" placeholder="Confirm Password" required>
                <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword" style="border:none;">
                  <i class="fa fa-eye"></i>
                </button>
            </div>
            <small id="CheckMatching" style="display:none; margin:10px; margin-bottom: 0px; color:red;">
                <i class="fa-solid fa-circle-xmark" style="color:red; margin-left:10px; margin-right: 10px; font-size:small;"></i>Passwords Not Matching
            </small>
        </div>
        <div class="form-group">
            <label for="register-phone">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="register-phone" placeholder="Phone Number" required oninput="validatePhoneNumber()">
            <small id="phone-validation-message" class="form-text text-danger"></small>
        </div>
        <div class="form-group">
            <label for="register-country">Country</label>
            <input type="text" class="form-control" name="country" id="register-country" placeholder="Country" required>
        </div>
        <div class="form-group">
            <label for="register-university">University</label>
            <input type="text" class="form-control" name="university" id="register-university" placeholder="University" required>
        </div>
        <!-- Enhanced Gender Section -->
        <div class="form-group">
            <label class="d-block">Gender</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male">
                <label class="form-check-label" for="gender-male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female">
                <label class="form-check-label" for="gender-female">Female</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4" name="register">Register</button>
    </form>
</div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/src.js"></script>
    <script>

document.addEventListener('DOMContentLoaded', () => {
    const RegistrationForm = document.getElementById('changeInfoForm');
    const Password = RegistrationForm.querySelector('#register_password');
    const confirmPassword = RegistrationForm.querySelector('#register_confirm_password');
    const CheckMatching = RegistrationForm.querySelector('#CheckMatching');
    const CheckCapital = RegistrationForm.querySelector('#CheckCapital');
    const CheckSmall = RegistrationForm.querySelector('#CheckSmall');
    const CheckComplex = RegistrationForm.querySelector('#CheckComplex');
    const CheckLength = RegistrationForm.querySelector('#CheckLength');

    function validateMatching() {
        if (Password.value !== confirmPassword.value) {
            CheckMatching.style.display = 'block';
            return false; // Indicate mismatch
        } else {
            CheckMatching.style.display = 'none';
            return true; // Indicate match
        }
    }
    
    function validatePassword() {
        const password = Password.value;
        const hasCapital = /[A-Z]/.test(password);
        const hasSmall = /[a-z]/.test(password);
        const hasDigit = /\d/.test(password);
        const hasSpecial = /[@$!%*?&]/.test(password);
        const isLongEnough = password.length > 8;

        // Capital Letter
        const capitalIcon = CheckCapital.querySelector('.icons');
        const capitalText = CheckCapital.querySelector('label');
        if (hasCapital) {
            capitalIcon.classList.remove('fa-circle-xmark');
            capitalIcon.classList.add('fa-check');
            capitalIcon.style.color = 'green';
            capitalText.textContent = 'Capital letter present';
            capitalText.style.color = 'green';
        } else {
            capitalIcon.classList.remove('fa-check');
            capitalIcon.classList.add('fa-circle-xmark');
            capitalIcon.style.color = 'red';
            capitalText.textContent = 'Capital letter required';
            capitalText.style.color = 'red';
        }

        // Digit
        const digitIcon = CheckSmall.querySelector('.icons');
        const digitText = CheckSmall.querySelector('label');
        if (hasDigit) {
            digitIcon.classList.remove('fa-circle-xmark');
            digitIcon.classList.add('fa-check');
            digitIcon.style.color = 'green';
            digitText.textContent = 'At least 1 digit present';
            digitText.style.color = 'green';
        } else {
            digitIcon.classList.remove('fa-check');
            digitIcon.classList.add('fa-circle-xmark');
            digitIcon.style.color = 'red';
            digitText.textContent = 'At least 1 digit required';
            digitText.style.color = 'red';
        }

        // Special Character
        const specialIcon = CheckComplex.querySelector('.icons');
        const specialText = CheckComplex.querySelector('label');
        if (hasSpecial) {
            specialIcon.classList.remove('fa-circle-xmark');
            specialIcon.classList.add('fa-check');
            specialIcon.style.color = 'green';
            specialText.textContent = 'Special character present';
            specialText.style.color = 'green';
        } else {
            specialIcon.classList.remove('fa-check');
            specialIcon.classList.add('fa-circle-xmark');
            specialIcon.style.color = 'red';
            specialText.textContent = 'Special character required';
            specialText.style.color = 'red';
        }

        // Length
        const lengthIcon = CheckLength.querySelector('.icons');
        const lengthText = CheckLength.querySelector('label');
        if (isLongEnough) {
            lengthIcon.classList.remove('fa-circle-xmark');
            lengthIcon.classList.add('fa-check');
            lengthIcon.style.color = 'green';
            lengthText.textContent = 'Password length is sufficient';
            lengthText.style.color = 'green';
        } else {
            lengthIcon.classList.remove('fa-check');
            lengthIcon.classList.add('fa-circle-xmark');
            lengthIcon.style.color = 'red';
            lengthText.textContent = 'Password length must be more than 8 characters';
            lengthText.style.color = 'red';
        }
        
        return hasCapital && hasDigit && hasSpecial && isLongEnough; // Return overall validation status
    }
    Password.addEventListener('focus',function(){
  document.querySelector('#checks').style.display = 'block';
});
Password.addEventListener('blur',function(){
  if(validatePassword())document.querySelector('#checks').style.display = 'none';
});
    RegistrationForm.addEventListener('submit', (event) => {
        const passwordsMatch = validateMatching();
        const passwordIsValid = validatePassword();
        if (!passwordsMatch || !passwordIsValid) {
            event.preventDefault(); // Prevent form submission
            alert('Please correct the errors before submitting.');
        }
    });

    Password.addEventListener('input', () => {
        validatePassword();
        validateMatching();
    });

    confirmPassword.addEventListener('input', validateMatching);
});
    </script>
</body>
</html>
