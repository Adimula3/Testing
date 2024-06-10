<?php 
include 'database.php';

//Reterive data from the form 

$email = $_POST['email'];
$password = password_hash($POST['passowrd'], PASSWORD_BCRYPT);

//insert into database 

$sql = "INSERT INTO users(email, password) VALUES ('$email', '$password')";

if ($con->query($sql)=== TRUE) {
    echo "data inserted succesfully";
}else {
    echo "Error: ". $sql . "<br>". $con->error;
}

?>