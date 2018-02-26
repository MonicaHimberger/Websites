        
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

if($result = mysqli_query($link, $sql)){
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
               echo "<th>animal</th>";    
                echo "<th>gender</th>";
  				echo "<th>car</th>";
                echo "<th>color</th>";


            echo "</tr>";   
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['animal'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['car'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
            echo "</tr>";
        }

 		echo "</table>";

mysqli_close($link);
?>