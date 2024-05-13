<?php
$host="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($host,$username,$password,$database);

$id=$_GET['id'];
$sql="DELETE FROM student8 WHERE id=$id";
if($conn->query($sql)){
    header('Location:submit.php?success=Record deleted');
}
else{
    echo "Error deleting record:".$conn->error;
}
?>