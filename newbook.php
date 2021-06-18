<?php
require "includes/protect.php";
require "includes/connect.php";

if (isset($_POST["booktitle"])){
  $booktitle = $_POST["booktitle"];
  $author = $_POST["author"];
  $interestedbooktitle = $_POST["interestedbooktitle"];
  $interestedbookauthor = $_POST["interestedbookauthor"];
  $bookcondition = $_POST["bookcondition"];

  $sql = "INSERT INTO `trade`( `book_title`, `book_author`, `interested_book_title`, `interested_book_author`, `book_condition`, `initiator_id`) 
  VALUES (:book_title,:book_author,:interested_book_title,:interested_book_author,:book_condition,:initiator_id)";

  $stmt=$dbh->prepare($sql);

  $stmt->bindParam(":book_title", $booktitle);
  $stmt->bindParam(":book_author", $author);
  $stmt->bindParam(":interested_book_title", $interestedbooktitle);
  $stmt->bindParam(":interested_book_author", $interestedbookauthor);
  $stmt->bindParam(":book_condition", $bookcondition);
  $stmt->bindParam(":initiator_id", $_SESSION["user"]["username"]);

  if($stmt->execute()){
    header("location:trade.php");
  }
  else{
    echo "Could not add book";
  }
}



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

        <form action="" method="POST">
          
          <div class="row">
              <div class="col">
                <input type="text" name="booktitle" class="form-control" placeholder="Book Title" aria-label="Book Title">
              </div>
              <div class="col">
                <input type="text" name="author" class="form-control" placeholder="Author" aria-label="Author">
              </div>
          </div><br>

          <div class="row">
              <div class="col">
                <input type="text" name="interestedbooktitle" class="form-control" placeholder="Title of interested Book to trade for" aria-label="Interested Book Title">
              </div>
              <div class="col">
                  <input type="text" name="interestedbookauthor" class="form-control" placeholder="Interested Book Author" aria-label="Interested Book Author">
              </div>
          </div><br>
          <select class="form-select" name="bookcondition" aria-label="Default select example">
              <option selected>Select Book condition</option>
              <option value="new">New</option>
              <option value="fairly used">Fairly Used</option>
              <option value="old">Old</option>
            </select>
          </div><br><br><br>
          <center>
            <button type="submit" class="btn btn-success">Submit</button>
          </center>
        </form>
</body>
</html>