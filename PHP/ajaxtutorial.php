<?php

$link = mysqli_connect("localhost", "root", "root", "php");


if ($link->connect_error) {
    die("Could not connect: " . $link->connect_error);
} 
echo "Connected successfully";

echo '<br>';
echo '<br>';


$animal = mysqli_real_escape_string($link, $_GET['animal']);
$gender = mysqli_real_escape_string($link, $_GET['gender']);
$color = mysqli_real_escape_string($link, $_GET['color']);
$car = mysqli_real_escape_string($link, $_GET['car']);

$sql = "INSERT INTO demo (animal, gender, color, car) VALUES ('$animal', '$gender', '$color', '$car')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 



mysqli_close($link);
?>


