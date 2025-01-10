<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bee";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");

} catch (PDOException $e) {
    echo '<div class="alert alert-danger">
  <strong>Connection failed:</strong>' . $e->getMessage() .
        '</div>';
}

?>