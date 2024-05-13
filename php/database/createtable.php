<?php
require_once('connection.php');
$sql="CREATE TABLE student2 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    password INT(20) NOT NULL,
    gender VARCHAR(20) NOT NULL,
     dob DATE NOT NULL,
    phone INT(20) NOT NULL,
    qualification VARCHAR(60) NOT NULL,
    fname VARCHAR(20) NOT NULL,
    mname VARCHAR(20) NOT NULL)";
  if($conn->query($sql)===TRUE){
    echo "Table created successfully";
  }
  else{
    echo "Error creating table $conn->error";
  }
  ?>