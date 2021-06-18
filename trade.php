<?php
require "includes/protect.php";
require "includes/connect.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homecss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <br>
    <?php require "includes/nav.php" ?>
      
      <center>
        <h2>
            Welcome to the Trade Zone
        </h2><br>
        <a class="btn btn-secondary"href="newbook.php">Add new book</a>
      </center>

      <h5>Trader details</h5>
      First Name: 
      Last Name:
      Email: 
      Phone:

      <h5>Book Details</h5>
      Title:
      Authour:
      Condition:
      <br>
      Interested Book Title:
      Author:
</body>
</html>