<?php
$host="localhost";
$username="root";
$password="";
$conn=new mysqli($host,$username,$password);
$sql1="CREATE database student";
if($conn->query($sql1)){
    echo "Database created successfully";
}
else{
    echo "Error creating database".$conn->error;
}
?>