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

    <!-- First Name input -->
    <div class="form-outline mb-4"> 
        <input type="text" id="registerFirstName" name="registerFirstName" class="form-control" />
        <label class="form-label" for="registerFirstName">First Name</label>
      </div><br>

      <!-- Last Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerLastName" name="registerLastName" class="form-control" />
        <label class="form-label" for="registerLastName">Last Name</label>
      </div><br>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerUsername" name="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername">Username</label>
      </div><br>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="registerEmail" name="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail">Email</label>
      </div><br>

      <!-- Phone input -->
      <div class="form-outline mb-4">
        <input type="tel" id="registerPhone" name="registerPhone" class="form-control" />
        <label class="form-label" for="registerPhone">Phone</label>
      </div><br>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerPassword" name="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword">Password</label>
      </div><br>

      <!-- Repeat Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerRepeatPassword" name="registerRepeatPassword" class="form-control" />
        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
      </div><br><br>

      <center>
        <button type="submit" class="btn btn-success">Submit</button>
      </center>
</body>
</html>