<?php
require_once('connection.php');
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    $sql="INSERT INTO student(name,password)
    VALUES ('$name','$password')";
    if($conn->query($sql)==true){
        echo "Inserted successfully";
    }
    else{
        echo "Error $conn->error";
    }
}
?>