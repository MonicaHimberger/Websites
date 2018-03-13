<?php

$servername = "localhost";
$username = "root";
$password = "root";

$linkcon = new mysqli($servername, $username, $password);

if ($linkcon->connect_error) {
    die("Could not connect: " . $linkcon->connect_error);
} 
echo "Connected successfully";

     
echo '<br>';
echo '<br>';




mysqli_close($link);
?>