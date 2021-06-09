<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            min-height: 100vh;
            background-color: indigo;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .form-container {
            background-color: white;
            width: 500px;
            padding: 50px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
        }

        input {
            display: block;
            width: 100%;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>
        <form method="POST" action="">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" required>

            <label for="password">Password</label>
            <input id="password" name="password" type="password" required>

            <button type="submit">Login</button>
        </form>

        <a href="signup.php">Sign up</a>
    </div>
</body>
</html>