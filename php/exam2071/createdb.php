<?php
require_once('connection.php');
$sql="Create database webtech";
if($conn->query($sql)===TRUE){
    echo "Database created ";
}
?>