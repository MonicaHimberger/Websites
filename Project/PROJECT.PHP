<?php /* open PHP */
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "books";
/* opening an attempt to connecting to MYSQL server databse with defult settings */
$link = new mysqli($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Could not connect: " . $link->connect_error);
} 
echo '<br>';
echo '<br>'; 

mysqli_close($link);
?>

<!DOCTYPE html> <!-- html begins -->
<html lang="en">
<!-- FIRST PAGE OF APP, TO ENTER BOOKS READ IN HTML FORMAT -->
<head>
<meta charset="UTF-8">
<title>Finished a book?</title>

 <link rel="stylesheet" type="text/css" href="PROJECTCSS.CSS">

</head>

<body>
<form method="get">
<br><br><br>
	<h2> Finished a book? </h2> 

<form method="post">
    <p>
        <label for="name"> Book name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="author"> Author: <label>
        <input type="text" name="author" id="author">
    </p>
    <p>
        <label for="due">Date started:</label>
        <input type="text" name="due" id="due" placeholder="mm/dd/yyyy">
        <br>
        <label for="due_date">Date finished:</label>
        <input type="text" name="due_date" id="due_date" placeholder="mm/dd/yyyy">
    </p>
    <p>
        <label for="pages"> Number of pages: </label>
        <input type="text" name="pages" id="pages">
    </p>


<h3> Type </h3>
  <input type="radio" name="genre" value="fic"> Fiction <br> 
  <input type="radio" name="genre" value="nonfic"> Nonfiction <br>

<h3> Genre </h3>
  <input type="radio" name="genre" value="mystery"> Anthology <br> 
  <input type="radio" name="genre" value="art"> Art <br>
  <input type="radio" name="genre" value="autobio"> Autobiography <br> 
  <input type="radio" name="genre" value="bio"> Biography <br>
  <input type="radio" name="genre" value="childrens"> Children's <br>
  <input type="radio" name="genre" value="comic"> Comic <br> 
  <input type="radio" name="genre" value="cook"> Cooking <br>
  <input type="radio" name="genre" value="drama"> Drama <br>
  <input type="radio" name="genre" value="fantasy" checked> Fantasy <br>
  <input type="radio" name="genre" value="health"> Health <br>
  <input type="radio" name="genre" value="history"> History <br> 
  <input type="radio" name="genre" value="horror"> Horror <br>
  <input type="radio" name="genre" value="manga"> Manga <br>
  <input type="radio" name="genre" value="mystery"> Mystery <br> 
  <input type="radio" name="genre" value="poetry"> Poetry <br>
  <input type="radio" name="genre" value="romance"> Romance <br>
  <input type="radio" name="genre" value="science"> Science <br>
  <input type="radio" name="genre" value="religion"> Religion & Spirt <br>
  <input type="radio" name="genre" value="travel"> Travel <br> 
  <input type="radio" name="genre" value="other"> Other:   <input type="text" name="other" id="other"><br><br> 

   <input type="submit" value="Record my book!" onclick="addtoDB()">
 <br><br><br><br><br><br><br><br>  
</form>

<p id=”submitted></p>

<script>
function addtoDB() {
  var xhttp; 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("submitted").innerHTML = "form submitted";
    }
  };

$name = mysqli_real_escape_string($link, $_GET['name']);
$author = mysqli_real_escape_string($link, $_GET['author']);
$due = mysqli_real_escape_string($link, $_GET['due']);
$due_date = mysqli_real_escape_string($link, $_GET['due_date']);
$pages = mysqli_real_escape_string($link, $_GET['pages']);

$sql = "INSERT INTO books (name, author, due, due_date, pages) VALUES ('name', 'author', 'due', 'due_date', 'pages')";
if(mysqli_query($link, $sql)){ 
// letting you know if our records were added successfully or not
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not execute. " . mysqli_error($link);
}

   console.log(queryString);
   xhttp.open("GET", "project2.php" + queryString, true);
   xhttp.send(null); 


}
</script>
</body>
</html>