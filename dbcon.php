<?php 
$serveri="127.0.0.1";
$username="YOUR_USERNAME";
$password="YOUR_PASSWORD";
$databaza="pizzadb";
 


$link = mysqli_connect($serveri, $username, $password);

mysqli_select_db($link,$databaza);
 
$conn = new mysqli($serveri, $username, $password, $databaza);

if ($conn->connect_error) {
    die("Error withe  the db con " . $conn->connect_error);
} 
 

?>