<?php
require_once('connection.php');
$sql="CREATE TABLE student(
    id INT(6) UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
)";

if($conn->query($sql)===TRUE){
    echo "table created";
}

?>