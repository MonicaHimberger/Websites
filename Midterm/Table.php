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


if($result = mysqli_query($link, $sql)){
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    if(mysqli_num_rows($result) > 0){ 
/* The mysqli_num_rows method returns the number of records in the result */
        
                echo "<table>";
                echo "<tr>";
               echo "<th>Class</th>";    
                echo "<th>Name</th>";
  				echo "<th>Due date</th>"; 
                /* adding a table for dysplay with the corresponding values*/

            echo "</tr>";   
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['class'] . "</td>";    
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['due date'] . "</td>";
            echo "</tr>";
        }

 		echo "</table>";        
/* close table and connction */

mysqli_close($link);
<a href="form.php">Add an assigment</a>

/* link back to form for submitting data */

mysqli_close($con);
?>