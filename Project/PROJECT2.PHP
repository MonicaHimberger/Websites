<html> 
<!-- SECOND PAGE OF APP, TO SEE RECORDED LIST OF BOOKS READ RECORDED THROUGH HTML FORM AND PHP -->
<head>
<meta charset="UTF-8">
<title>Your book list!</title>
<style>
html
{
	background-image: url("boookborder.png");
	background-repeat: no-repeat;
	background-attachment: fixed;
    background-position: center; 
    background-size: 450px;
    text-align: center;
	font-family: cursive;
	font-size: 12pt;
}
 <link rel="stylesheet" type="text/css" href="PROJECTCSS.CSS">

</style>
</head>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";

$link = new mysqli($servername, $username, $password);
if ($link->connect_error) 

echo '<br>'; echo '<br>';
echo '<br>'; echo '<br>';

echo "<h3>Here is the list of all the books you have read:</h3>";


  
 if(mysqli_num_rows($result) > 0){ 

		echo "<table>";
			 "<tr>";
			 "<th>Name</th>";
			 "<th>Author</th>";
			 "<th>Started</th>";
			 "<th>Finished</th>";
			 "<th>Number of pages</th>";

			echo "</tr>";   
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";    
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['due'] . "</td>";
                echo "<td>" . $row['due_date'] . "</td>";        
                echo "<td>" . $row['pages'] . "</td>";        
            echo "</tr>";
        }
        	echo "</table>";

  

mysqli_close($link);
<a href="project.php">Add a book</a>


mysqli_close($con);
?>


