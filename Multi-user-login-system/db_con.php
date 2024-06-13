<?php

$username="localhost";
$name="root";
$password="";

$db_name= "my_db";

$conn = mysqli_connect($username,$name,$password,$db_name);
if(!$conn){
echo"connection failed!";
exit;
}