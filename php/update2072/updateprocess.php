<?php
$host="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($host,$username,$password,$database);
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];

$sql="UPDATE student8 SET name='$name',address='$address' WHERE id=$id";
if($conn->query($sql)){
    echo "Record updated successuflly";
}
else{
    echo "Error updating record:".$conn->error;
}
?>