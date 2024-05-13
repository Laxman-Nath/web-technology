<?php
require('connection.php');
$sql="Select * from student";
$result=$conn->query($sql);
if($result->num_rows >0){
    while($row=$result->fetch_assoc()){
        echo "id:".$row['id']." ";
        echo "Name:".$row['name']." ";
        echo "Password:".$row['password']."<br>";
    }
}
else{
    echo "0 results";
}
$conn->close();
?>