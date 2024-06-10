<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'user_data';


//create connection 

$con = new mysqli($servername, $username, $password, $db_name);

//check connection 

if ($con->connect_error) {

    die("connection failed". $con ->connect_error);
}
?>