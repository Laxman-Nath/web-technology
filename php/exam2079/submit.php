<?php 

$host="localhost";
$username="root";
$password="";
$dbname="student";
$conn=new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
    echo "Connection failed ".$conn->connect_error;
}
// else{
//     echo "connection successful";
// }

$sql2="CREATE TABLE student1(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(10) NOT NULL,
    password VARCHAR(10) NOT NULL)";
    $conn->query($sql2);

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql3="INSERT INTO student1(name,password)
    VALUES('$name','$password')";
    $conn->query($sql3);
    // if($conn->query($sql3)){
    //     echo "Inserted record successfully";
    // }
    // else{
    //     echo "Error inserting record ".$conn->error;
    // }
}

$sql4="SELECT * FROM student1";
$result=$conn->query($sql4);
while($row=$result->fetch_assoc()){
    echo "Id:".$row['id']."<br>";
    echo "Name:".$row['name']."<br>";
    echo "Password:".$row['password']."<br>";
}


?>