<?php
require('connection.php');
$id=$_GET['id'];
$sql="DELETE FROM student2 where id=$id";
if($conn->query($sql) === TRUE){
    header('Location:select.php?success=Record deleted');
    exit();
}
else{
    echo "Error ".$sql."<br>" .$conn->error;
}
?>