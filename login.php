<?php

session_start();

require "includes/connect.php";

if (isset($_POST["registerFirstName"])) {
  // var_dump($_POST);
  // TODO: verify

  $registerFirstName = $_POST["registerFirstName"];
  $registerLastName = $_POST["registerLastName"];
  
  $registerUsername = $_POST["registerUsername"];
  
  $registerEmail = $_POST["registerEmail"];
  
  $registerPhone = $_POST["registerPhone"];
  
  $registerPassword = $_POST["registerPassword"];



  $sql = "INSERT INTO `user`(`username`, `firstname`, `lastname`, `email`, `password`, `phone`, `role`)
  VALUES (:username, :firstname, :lastname, :email, :password, :phone, 'user')";
  $stmt = $dbh->prepare($sql);

  $stmt->bindParam(":firstname", $registerFirstName);
  $stmt->bindParam(":lastname", $registerLastName);
  $stmt->bindParam(":username", $registerUsername);
  $stmt->bindParam(":email", $registerEmail);
  $stmt->bindParam(":phone", $registerPhone);
  $stmt->bindParam(":password", $registerPassword);

  if ($stmt->execute()) {
    $_SESSION["user"] = [
      "username" => $registerUsername,
      "role" => "user"
    ];
    
    header("Location: index.php");
    exit();
  } else {
    $error = "Unable to sign up.";
  }


}


else if (isset($_POST["loginName"])) {
  $loginName = $_POST["loginName"];
  $loginPassword = $_POST["loginPassword"];

  // Find the user in the db whose email or username is loginName
  // and password is loginPassword
  $sql = "SELECT `username`, role FROM `user` WHERE (username = :loginName OR email = :loginName) AND password = :password";
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(":loginName", $loginName);
  $stmt->bindParam(":password", $loginPassword);

  $stmt->execute();

  foreach ($stmt as $row) {
    $_SESSION["user"] = [
      "username" => $row["username"],
      "role" => $row["role"]
    ];

    header("Location: index.php");
    exit();
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <i----Add this to your head---->

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <!-- Pills navs -->
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="tab-login"
      data-mdb-toggle="pill"
      href="#pills-login"
      role="tab"
      aria-controls="pills-login"
      aria-selected="true"
      >Login</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="tab-register"
      data-mdb-toggle="pill"
      href="#pills-register"
      role="tab"
      aria-controls="pills-register"
      aria-selected="false"
      >Register</a
    >
  </li>
</ul>
<!-- Pills navs -->

<!-- Pills content -->
<div class="tab-content">
  <div
    class="tab-pane fade show active"
    id="pills-login"
    role="tabpanel"
    aria-labelledby="tab-login"
  >
    <form method="POST" action="">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="loginName" name="loginName" class="form-control" />
        <label class="form-label" for="loginName">Email or username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" name="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword">Password</label>
      </div>

      <!-- 2 column grid layout -->
      <div class="row mb-4">
        <div class="col-md-6 d-flex justify-content-center">
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
      </div>
    </form>
  </div>
  <div
    class="tab-pane fade"
    id="pills-register"
    role="tabpanel"
    aria-labelledby="tab-register"
  >
    <form method="POST" action="">

      <!-- First Name input -->
      <div class="form-outline mb-4"> 
        <input type="text" id="registerFirstName" name="registerFirstName" class="form-control" />
        <label class="form-label" for="registerFirstName">First Name</label>
      </div>

      <!-- Last Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerLastName" name="registerLastName" class="form-control" />
        <label class="form-label" for="registerLastName">Last Name</label>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerUsername" name="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">Username</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="registerEmail" name="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div>

      <!-- Phone input -->
      <div class="form-outline mb-4">
        <input type="tel" id="registerPhone" name="registerPhone" class="form-control" />
        <label class="form-label" for="registerPhone">Phone</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerPassword" name="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Password</label>
      </div>

      <!-- Repeat Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerRepeatPassword" name="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
    </form>
  </div>
</div>
<!-- Pills content -->
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
></script>
</body>
</html>