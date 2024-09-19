<?php
require("DBconnection.php");
session_start(); // Start the session to handle messages
$message = ''; // Initialize message
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        // Registration
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $university = $_POST['university'];
        $gender = $_POST['gender']; 
        $userProfile = ($gender == 'male')? 'img/prof.webp' : 'img/proff.webp' ;
            // Prepare SQL statement
            $sql = "INSERT INTO informations (Email, Username, Password, First_Name, Last_Name, Phone_Number, Country, University,gender,userProfile) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?)";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                // Bind parameters
                $stmt->bind_param("ssssssssss", $email, $username, $password, $first_name, $last_name, $phone, $country, $university,$gender,$userProfile);
                // Execute statement
                if ($stmt->execute()) {
                    $message = "Registration successful!";
                } else {
                    $message = "Error registering: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $message = "Error preparing statement: " . $conn->error;
            }
        
    } elseif (isset($_POST['login'])) {
        // Login logic
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM informations WHERE Email = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                // Fetch user data
                $user = $result->fetch_assoc();
                
                // Verify password
                if ($password === $user['Password']) {
                    // Update session with user data
                    $_SESSION['user'] = $user;
                    $_SESSION['message']="Login Success";
                    // Redirect to profile.php
                    header('Location: profile.php');
                    exit();
                } else {
                    $message = "Invalid password.";
                }
            } else {
                $message = "Invalid email.";
            }
            $stmt->close();
        } else {
            $message = "Error preparing statement: " . $conn->error;
        }
        $conn->close();
    }
    $_SESSION['message']=$message;
}
header('Location: login_register.php');
exit();
?>
