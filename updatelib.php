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
    <br><br><br>

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
              <input type="text" class="form-control" placeholder="Book Link" aria-label="Book Link">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Chatroom Link" aria-label="Chatroom Link">
            </div>
        </div><br>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Video chat Link" aria-label="Video chat Link">
            </div>
            <div class="col input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
              </div>
        </div><br>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Summary</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write a short summary of book.." rows="3"></textarea>
          </div>

        <center>
            <button type="button" class="btn btn-success">Submit</button>
          </center>
    </div>
    
</body>
</html>