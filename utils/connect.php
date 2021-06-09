<?php
try {
    $dbUser = "root";
    $dbPass = "a";
    $dbh = new PDO('mysql:host=localhost;dbname=readwhiz', $dbUser, $dbPass);
    // foreach($dbh->query('SELECT * from FOO') as $row) {
    //     print_r($row);
    // }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    exit();
}
?>