<?php
$host="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($host,$username,$password,$database);

// $sql1="CREATE table student5(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(20) NOT NULL,
//     address VARCHAR(20) NOT NULL,
//     phone VARCHAR(20) NOT NULL)";
// if($conn->query($sql1)){
//     echo "Table created successfully";
// }

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $sql2="INSERT INTO student5(name,address,phone)
    VALUES ('$name','$address','$phone')";
    if($conn->query($sql2)){
        echo "Record inserted successfully";
    }
    else{
        echo "Error inserting record:".$conn->error;
    }
}

$sql3="SELECT * FROM student5";
$result=$conn->query($sql3);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo"<br>";
        echo "Id:".$row['id']." ";
        echo "Name:".$row['name']." ";
        echo "Address:".$row['address']." ";
        echo "Phone:".$row['phone']." "."<br>";
    }
}

?>