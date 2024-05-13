<?php
$servername="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($servername,$username,$password,$database); // Connection to database
if($conn->connect_error){
    die ("Connection failed". $conn->connect_error);
}
?>