<?php
require "includes/protect.php";
require "includes/connect.php";

$sql = "SELECT * FROM `user` WHERE username = :username";
$stmt = $dbh->prepare($sql);

$sessionUser = $_SESSION["user"];
$stmt->bindParam(":username", $sessionUser["username"]);

$stmt->execute();

$user = $stmt->fetch();

if ($user == false) {
    // Error, something's wrong
    exit();
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
    <div class="container">

    Username: <?php echo $user["username"] ?> <br>
    First Name: <?php echo $user["firstname"] ?> <br>
    Last Name: <?php echo $user["lastname"] ?> <br>
    Email: <?php echo $user["email"] ?> <br>
    Phone: <?php echo $user["phone"] ?> <br>

    <center>
        <button type="button" class="btn btn-success">Update Profile</button>
      </center>

    </div>

</body>
</html>