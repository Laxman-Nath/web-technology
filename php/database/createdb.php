<?php
  require_once('connection.php');
  $sql="Create database snscmis";
  if($conn->query($sql)===TRUE){
    // echo "Database created";
  }
  else{
    echo "Error $conn->error";
  }
?>