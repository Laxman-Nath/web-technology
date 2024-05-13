<?php
$hostname="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($hostname,$username,$password,$database); // Creating connection
// // if($conn->connect_error){
// //     die("Connection error ".$conn->connect_error);
// // }
// // else{
// //     echo "connected successfully";
// // }

// $sql1="CREATE TABLE student4(
//     id INT SIGNED AUTO_INCREMENT PRIMARY KEY,
//     fname VARCHAR(20) NOT NULL,
//     lname VARCHAR(20) NOT NULL,
//     address VARCHAR(20) NOT NULL)";

// if($conn->query($sql1) === TRUE){
//     echo "Table created successfully";
// }
// else{
//     echo "Error creating table $conn->error";
// }

// if(isset($_POST['fname'])){
//     $fname=$_POST['fname'];
//     $lname=$_POST['lname'];
//     $address=$_POST['address'];
//     $sql2="INSERT INTO student4(fname,lname,address)
//     VALUES('$fname','lname','$address')";
//     if($conn->query($sql2)===TRUE){
//         echo "New record inserted successfully";
//     }
//     else{
//         echo "Error inserting record:.$conn->error";
//     }
// }

$sql3="Select * from student4";
$result=$conn->query($sql3);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "Id:".$row['id']." ";
        echo "Firstname:".$row['fname']." ";
        echo "Lastname:".$row['lname']." ";
        echo "Address:".$row['address']." ";
    }
}
else{
    echo "0 records";
}
$conn->close();
?>
