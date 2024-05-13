<?php
 require_once('connection.php');
   $id=$_POST['id'];
   $firstname=$_POST['name'];
   $email=$_POST['mail'];
   $password=$_POST['password'];
//    $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   $phone=$_POST['number'];
   $quali=$_POST['quali'];
   $fname=$_POST['fname'];
   $mname=$_POST['mname'];

   $sql="UPDATE student2 SET name='$firstname',email='$email',password='$password',dob='$dob',phone='$phone',qualification='$quali',fname='$fname',mname='$mname' WHERE id='$id'";

   if($conn->query($sql)===TRUE){
    echo "Record updated successfully";
   }
   else{
    echo "Error updating record ".$conn->error;
   }
?>