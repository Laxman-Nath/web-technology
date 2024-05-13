<?php
$hostname="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($hostname,$username,$password,$database); // Creating connection
// if($conn->connect_error){
//     die("Connection error ".$conn->connect_error);
// }
// else{
//     echo "connected successfully";
// }

//  $sql1="CREATE TABLE student3(
//     id INT SIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(20) NOT NULL,
//     address VARCHAR(20) NOT NULL,
//     age INT(6) NOT NULL,
//     phone VARCHAR(20) NOT NULL,
//     password VARCHAR(20) NOT NULL)";

// if($conn->query($sql1) === TRUE){
//     echo "Table created successfully";
//  }
//  else{
//      echo "Error creating table $conn->error";
//  } 

if(isset($_POST['name'])){
$name=$_POST['name'];
$address=$_POST['address'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$sql2="INSERT INTO student3(name,address,age,phone,password)
VALUES('$name','$address','$age','$phone','$password')";
if($conn->query($sql2)===TRUE){
    echo "New record inserted successfully";
}
else{
    echo "Error creating recore $conn->error";
}
}



$sql3="Select * from student3";
$result=$conn->query($sql3);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id:" .$row["id"].","."name:" .$row["name"].","."address:" .$row["address"].","."age:" .$row["age"].","."Phone:" .$row["phone"].","."password:" .$row["password"]."<br>";
    }
}
else{
    echo "0 records";
}
$conn->close();

?>