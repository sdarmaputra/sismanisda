<?php
$server = "localhost";
$user = "smanisda";
$pass = "smanisda123!";
$dbname = "sismanisda";
$conn = mysqli_connect($server, $user, $pass, $dbname);
if (!$conn) echo "Error connecting to database!";
?>