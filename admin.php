<?php

require "includes/protect.php";

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
    
      <div class="container mb-5">
        <h1>
            Admin Page
        </h1>
        <br><br>

      <div class="container mb-5">
        <h1>
          Update Library
        </h1>
        <p>Add books or articles here</p>
        <a href="updatelib.html" type="button" class="btn btn-outline-secondary">Add Book</a>
      </div><br><br>

      </div>
</body>
</html>