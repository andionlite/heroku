<?php 
$serveri="illyrianrace.com";
$username="YOURPPA";
$password="YOURPASS";
$databaza="pizzadb";
 


$link = mysqli_connect($serveri, $username, $password);

mysqli_select_db($link,$databaza);
 
$conn = new mysqli($serveri, $username, $password, $databaza);

if ($conn->connect_error) {
    die("Error with    the db con  try this link  <a href='https://illyrianrace.com/piza/'>  click to open app   </a> "  );
} 
 

?>