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

      <div class="container mb-5">
        <h3 style="color: white;">
            Book details
        </h3>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Book Title" aria-label="Book Title">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Author" aria-label="Author">
            </div>
        </div><br>

        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Book Edition" aria-label="Book Edition">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Book Genre" aria-label="Book Genre">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Title of interested Book to trade for" aria-label="Interested Book">
            </div>
        </div><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Select Book condition</option>
            <option value="1">New</option>
            <option value="2">Fairly Used</option>
            <option value="3">Manageable</option>
          </select>
      </div><br><br><br>
      <center>
        <button type="button" class="btn btn-success">Submit</button>
      </center>
</body>
</html>