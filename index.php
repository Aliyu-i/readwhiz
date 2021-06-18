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
          Readwhiz</h1><p>offers the best quality platform for reading discussions on the internet.</p><br>
          <p>It is all free for readers. We are not a book store, and we do not sell books. 
            We are a free online community for readers with 
            all sorts of awesome free features and free tools for book lovers. </p><br><br>
      </div>

      <div class="container mb-5">
        <h2>
          Some featured books:
        </h2><br>
        <div class="row align-items-start">
          <img class="col" src="images/bookcovers/prettyreckless.jpg" alt="" style="height: 280px; width: 150px;">
          <img class="col" src="images/bookcovers/econ_polscience.jpg" alt="" style="height: 280px; width: 150px;">
          <img class="col" src="images/bookcovers/red_queen.jpg" alt="" style="height: 280px; width: 150px;">
          <img class="col" src="images/bookcovers/psych_mart.jpg" alt="" style="height: 280px; width: 150px;">
          <img class="col" src="images/bookcovers/the_mistake_book.jpg" alt="" style="height: 280px; width: 150px;">
        </div>
      </div><br>

      <div class="container mb-5">
        <h1>
          Get started 
        </h1>
        <p>Pick a book from our Library and join a discussion.</p>
        <a href="library.php" type="button" class="btn btn-outline-secondary">Library</a>
      </div><br><br>

      <div class="container mb-5">
        <h1>
          Trade zone
        </h1>
        <p>Have a book you would like to trade for another ?</p>
        <p>Check out our book trade zone now!</p>
        <a href="trade.php" type="button" class="btn btn-outline-secondary">Trade</a>
      </div><br><br>

      <div class="container mb-5">
        <h1>
          Suggestions?
        </h1>
        <p>
          Please feel free to contact us with opinions and problems so we can make your experience better.
        </p>
        <a href="contact.php" type="button" class="btn btn-outline-secondary">Contact</a>
      </div>
</body>
</html>