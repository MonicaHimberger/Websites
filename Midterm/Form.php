<?php /* open PHP */

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Assignment";
/* opening an attempt to connecting to MYSQL server databse with defult settings */

$link = new mysqli($servername, $username, $password, $dbname);

if ($link->connect_error) {
    die("Could not connect: " . $link->connect_error);
} 
echo "Connected successfully";
/* print out to let user know there is an error if it could/could not connect */
echo '<br>';
echo '<br>'; 

mysqli_close($link); /* closing connection to MYSQL database */
?>

<!DOCTYPE html> <!-- html begins -->
<html lang="en">
<head>
<meta charset="UTF-8">
<title>School Assignments</title>

<!-- adding css -->
<style>
body 
{
  align: center;
  background-color: #9bf442;
  font-family: Arial;
}

  </style>
</head>
<body>

  <h1> School Assignments </h1> <!-- Form code for adding records -->
<form method="post">
    <p>
        <label for="class">Course:</label>
        <input type="text" name="class" id="class">
    </p>
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="due_date">Due date:</label>
        <input type="text" name="due_date" id="due_date" placeholder="mm/dd/yyyy">

    </p>

    <input type="submit" value="Submit" onclick="addtoDB()"> 
</form>

<p id=”submitted></p>

<!-- javascript to add to my sql database -->
<script>
function addtoDB() {
  var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("submitted").innerHTML = "form submitted";
    }
  };

// matching up the varibles with the ones in my table
$class = mysqli_real_escape_string($link, $_GET['class']);
$name = mysqli_real_escape_string($link, $_GET['name']);
$due_date = mysqli_real_escape_string($link, $_GET['due_date']);

$sql = "INSERT INTO demo (class, name, due_date) VALUES ('$class', '$name', '$due_date')";

if(mysqli_query($link, $sql)){ // letting us know if our records were added successfully or not
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
//closing javascript

</script>

<a href="table.php">See table</a>
<!-- adding a link to see the actual table -->

</body>
</html>
<!-- closing html -->
