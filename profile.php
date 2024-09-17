<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login_register.php');
    exit();
}

// Ensure $user is set and not null
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

$passwordUpdated = isset($_SESSION['password_updated']) ? $_SESSION['password_updated'] : null;
unset($_SESSION['password_updated']);

include('DBconnection.php'); // Include the database connection file
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
        .outerbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(232, 232, 236);
        }
        #username{
          font-size:xx-large;
          font-weight: 700;
        }
        .box {
          margin-top:500px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .box img {
            width: 300px;
            border-radius: 50%;
            margin-bottom: 0px;
            margin-top:100px;
        }
        .para p {
            font-size: xx-large;
            font-weight: 350;
            margin: 10px 0;
        }
        .para span {
            font-weight: 100;
        }
    </style>
</head>
<body style="background-color: rgb(232, 232, 236);">
    <!-- Navbar -->
     <?php include("navbar.php"); ?>
    <div class="outerbox mt-5 ">
        <div class="box">
            <img src="img/profile.png" alt="Profile Picture">
            <p id="username"><?php echo htmlspecialchars($user['Username']); ?></p>
            <div class="para">
                <p>First Name: <span><?php echo htmlspecialchars($user['First_Name']); ?></span></p>
                <p>Last Name: <span><?php echo htmlspecialchars($user['Last_Name']); ?></span></p>
                <p>Phone Number: <span><?php echo htmlspecialchars($user['Phone_Number']); ?></span></p>
                <p>Email: <span><?php echo htmlspecialchars($user['Email']); ?></span></p>
                <p>Country: <span><?php echo htmlspecialchars($user['Country']); ?></span></p>
                <p>University: <span><?php echo htmlspecialchars($user['University']); ?></span></p>
            </div>
            <div class="infoButtons mt-5">
<!--Change Information Modal -->
<div class="modal fade" id="ChangeInfo" tabindex="-1" role="dialog" aria-labelledby="cInfo_ID" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document"> <!-- Added 'modal-lg' for a larger modal -->
    <div class="modal-content">
      <div class="modal-header bg-primary text-white"> <!-- Added background color and white text for the header -->
        <h5 class="modal-title" id="cInfo_ID">Update Personal Information</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="changeInfoForm" method="post" action="update_profile.php">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="userFirstName">First Name</label>
                <input type="text" class="form-control" id="userFirstName" name="First_Name" value="<?php echo htmlspecialchars($user['First_Name']); ?>" required>
              </div>
              <div class="form-group">
                <label for="userPhone">Phone Number</label>
                <input type="text" class="form-control" id="userPhone" name="Phone_Number" value="<?php echo htmlspecialchars($user['Phone_Number']); ?>" required>
              </div>
              <div class="form-group">
                <label for="userCountry">Country</label>
                <input type="text" class="form-control" id="userCountry" name="Country" value="<?php echo htmlspecialchars($user['Country']); ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="userLastName">Last Name</label>
                <input type="text" class="form-control" id="userLastName" name="Last_Name" value="<?php echo htmlspecialchars($user['Last_Name']); ?>" required>
              </div>
              <div class="form-group">
                <label for="userEmail">Email</label>
                <input type="email" class="form-control" id="userEmail" name="Email" value="<?php echo htmlspecialchars($user['Email']); ?>" required>
              </div>
              <div class="form-group">
                <label for="userUniversity">University</label>
                <input type="text" class="form-control" id="userUniversity" name="University" value="<?php echo htmlspecialchars($user['University']); ?>" required>
              </div>
            </div>
          </div>
          <small id="changesMessage" class="form-text text-info" style="display: none;">You have unsaved changes!</small>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" form="changeInfoForm">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!--Change Password Modal -->
<input type="hidden" id="submissionStatus" value="<?php echo isset($_SESSION['password_updated']) ? htmlspecialchars($_SESSION['password_updated']) : htmlspecialchars(''); ?>">
<div class="modal fade" id="ChangePass" tabindex="-1" role="dialog" aria-labelledby="cPass_ID" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document"> <!-- Medium-sized modal -->
    <div class="modal-content">
      <div class="modal-header bg-danger text-white"> <!-- Red background for the header -->
        <h5 class="modal-title" id="cPass_ID">Change Password</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="changePasswordForm" method="post" action="update_password.php">
          <!-- Current Password Field -->
          <div class="form-group">
            <label for="currentPassword">Current Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="currentPassword" name="current_password" required>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword">
                  <i class="fa fa-eye"></i>
                </button>
              </div>
            </div>
          </div>
          
          <!-- New Password Field -->
          <div class="form-group">
            <label for="newPassword">New Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="newPassword" name="new_password" required>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                  <i class="fa fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Confirm New Password Field -->
          <div class="form-group">
              <label for="confirmNewPassword">Confirm New Password</label>
              <div class="input-group">
                  <input type="password" class="form-control" id="confirmNewPassword" name="confirm_new_password" required>
                  <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="toggleConfirmNewPassword">
                          <i class="fa fa-eye"></i>
                      </button>
                  </div>
              </div>
              <small id="passwordMatchError" class="form-text text-danger" style="display: none;"><i class="fa fa-times-circle"></i>Passwords do not match!</small>
          </div>

          <!-- Password Strength Indicator -->
          <div class="form-group">
            <label>Password Strength</label>
            <div class="progress">
              <div class="progress-bar" id="passwordStrengthBar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small id="passwordStrengthText" class="form-text text-muted">Enter a strong password.</small>
            
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Save Changes</button>

      </div>
      <?php if ($passwordUpdated == 'success'): ?>
        <!-- Success message -->
        <div class="alert alert-success mt-2" id="valid">
            Password updated successfully.
        </div>
    <?php elseif ($passwordUpdated == 'fail'): ?>
        <!-- Error message -->
        <div class="alert alert-danger mt-2" id="invalid">
            Wrong Current Password !
        </div>
    <?php endif; ?>
      </form>
    </div>
  </div>
</div>

            <button type="button" class="btn btn-info bInfo mr-5" data-toggle="modal" data-target="#ChangeInfo">Change Information</button>
            <button type="button" class="btn btn-danger bPassword" data-toggle="modal" data-target="#ChangePass">Change Password</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/src.js"></script>
</body>
</html>
