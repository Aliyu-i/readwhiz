<?php

require "includes/protect.php";
require "includes/connect.php";

$sql = "SELECT * FROM `genre`";
$stmt = $dbh->prepare($sql);

$stmt->execute();
$genres = $stmt->fetchAll();

if (isset($_POST["BookTitle"])) {
  $BookTitle = $_POST["BookTitle"];
  $ISBN = $_POST["ISBN"];
  $Author = $_POST["Author"];
  $BookGenre = $_POST["BookGenre"];
  $Chatroomlink = $_POST["Chatroomlink"];
  $Videochatlink = $_POST["Videochatlink"];
  $Booklink = $_POST["Booklink"];
  $Summary = $_POST["Summary"];

  $uploaddir = 'images/bookcovers/';
  // Store the image in the bookcovers directory with its ISBN
  $uploadfile = $uploaddir . $ISBN;

  if (move_uploaded_file($_FILES['Image']['tmp_name'], $uploadfile)) {
    // Add genre first to database, if it's not already there.
    $sql = "INSERT IGNORE INTO `genre`(`name`) VALUES (:genre)";

    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":genre", $BookGenre);
    if($stmt->execute()){
      
      $sql =" INSERT INTO `book`(`isbn`, `title`, `author`, `link`, `chatroom_link`, `videochat_link`, `about`, `admin_id`, `genre`, `in_library`) 
      VALUES (:isbn, :title, :author, :link, :chatroom_link, :videochat_link, :about, :admin_id, :genre,1) ";
    
      $stmt = $dbh->prepare($sql);
    
      $stmt->bindParam(":isbn", $ISBN);
      $stmt->bindParam(":title", $BookTitle);
      $stmt->bindParam(":author", $Author);
      $stmt->bindParam(":link", $Booklink);
      $stmt->bindParam(":chatroom_link", $Chatroomlink);
      $stmt->bindParam(":videochat_link", $Videochatlink);
      $stmt->bindParam(":about", $Summary);
      $stmt->bindParam(":admin_id", $_SESSION["user"]["username"]);
      $stmt->bindParam(":genre", $BookGenre);

      if($stmt->execute()) {
        header("Location: library.php");
        exit();
      } else {
        echo "Failed to add book\n";
      }
      
    } 
    else {
      echo "Failed to add book\n";
    };


      
  } else {
      echo "Failed to save book cover. Try again.\n";
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
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
              <div class="col">
                <input type="text"name="BookTitle" class="form-control" placeholder="Book Title" aria-label="Book Title">
              </div>
              <div class="col">
                <input type="text" name="ISBN" class="form-control" placeholder="ISBN" aria-label="ISBN">
              </div>
          </div><br>

          <div class="row">
              <div class="col">
                <input type="text"name="Author" class="form-control" placeholder="Author" aria-label="Author">
              </div>
              <div class="col">
                  <input list="genres" type="text" name="BookGenre" class="form-control" placeholder="Book Genre" aria-label="Book Genre">
                  <datalist id="genres">
                    <?php foreach ($genres as $genre): ?>
                      <option value="<?php echo $genre["name"] ?>">
                    <?php endforeach; ?>
                  </datalist>
              </div>
          </div><br>
          <div class="row">
              <div class="col">
                <input type="text" name="Chatroomlink" class="form-control" placeholder="Chatroom link" aria-label="Chatroom link">
              </div>
              <div class="col">
                  <input type="text" name="Videochatlink" class="form-control" placeholder="Video chat link" aria-label="Video chat link">
              </div>
              <div class="col">
                  <input type="text"name="Booklink" class="form-control" placeholder="Book link" aria-label="Book link">
              </div>
          </div><br>
          <div class="row">
              <div class="col">
                  <input type="text" name="Summary" class="form-control" placeholder="Summary" aria-label="Summary">
              </div>
          </div><br>
          <div class="row">
              <div class="col">
                  <label for="bookcover">Book cover</label>
                  <input type="file" id="bookcover" name="Image" accept="image/*" class="form-control" placeholder="Book cover">
              </div>
          </div><br>
        </div>

        <center>
          <button type="submit" class="btn btn-success">Submit</button>
        </center>
      </form>

</body>
</html>