<?php

$servername = "localhost";
$username = "root";
$password = "root";

$link = new mysqli($servername, $username, $password);

if ($link->connect_error) {
    die("Could not connect: " . $link->connect_error);
} 
echo "Connected successfully";

echo '<br>';
echo '<br>';

 $sql = "INSERT INTO demo ('animal', 'gender', 'car', 'color') VALUES ('cat', 'male', 'jeep', 
 'green')";
 
if($result = mysqli_query($link, $sql)){
    echo "Records were succesfully added."
} 
else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>