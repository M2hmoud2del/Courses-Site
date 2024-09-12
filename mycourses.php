<?php
session_start();
include('DBconnection.php'); // Include the database connection file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Coursaty Website</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center cards horizontally */
            gap: 15px; /* Space between cards */
        }

        .card {
            width: 100%; /* Make cards responsive */
            max-width: 25rem; /* Maximum width for each card */
        }

        @media (min-width: 576px) {
            .card-container {
                gap: 20px; /* Adjust space between cards for larger screens */
            }
        }

        @media (min-width: 768px) {
            .card-container {
                justify-content: flex-start; /* Align cards to the start on medium screens */
            }
        }

        @media (min-width: 992px) {
            .card-container {
                justify-content: space-between; /* Space out cards on large screens */
            }
        }
    </style>
</head>
<body style="background-color: rgb(232, 232, 236);">
    <?=include('navbar.php');?>
      <div class="container mt-5 bg-light text-center text-lg-start p-5 " style="border-radius: 15px;">
        <div class="card-container mycourses">
            <div class="card" >
                <img class="card-img-top" src="img/Ai-1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/Ai-1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="img/Ai-1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <!-- Add more cards here -->
        </div>
    </div>
    <?=include('footer.html');?>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="js/src.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
</body>
</html>