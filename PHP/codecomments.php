<?php /* open PHP code */

$link = mysqli_connect("localhost", "root", "root", "demo");
/* opening an attempt to connecting to MYSQL server databse with defult settings (user 'root', no password) */
 
if($link === false){ /* checking connection */
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
    /* print out to let user know there is an error if it could not connect */
}

$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')"; 
/* attempting to select query execution, inserting data */

if(mysqli_query($link, $sql)){ /* */
    echo "Records added successfully."; /* printing to let user know if records were added */
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
    /* printing to let user know there was an error and records were not added */
}
mysqli_close($link); /* closing connection to MYSQL database */

/* close PHP code */ ?> 