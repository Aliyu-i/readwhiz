<?php
try {
    $dbUser = "root";
    $dbPass = "";
    $dbh = new PDO('mysql:host=localhost;dbname=readwhiz', $dbUser, $dbPass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    exit();
}
?>