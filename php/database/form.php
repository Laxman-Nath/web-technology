<?php
      require_once('connection.php');
      if(isset($_POST['name'])){
        $firstname=$_POST['name'];
        $email=$_POST['mail'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $phone=$_POST['number'];
        $quali=$_POST['quali'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $sql="INSERT INTO student2(name,email,password,gender,dob,phone,qualification,fname,mname) VALUES ('$firstname','$email','$password','$gender','$dob','$phone','$quali','$fname','$mname')";

        if($conn->query($sql)===TRUE){
          // echo "new record inserted successfully";
          header('Location:select.php?success=New Record Added');
          exit();
        }
        else{
          echo "Error $conn->error";
        }
      }

?>
   
    <form action="" method="POST" name="signup>
        <label for="">Fullname:</label>
        <input type="text" name="name" id=""><br><br>
        <label for="">Email:</label>
        <input type="email" name="mail" id=""><br><br>
        <label for="">Password:</label>
        <input type="password" name="password"><br><br>
        <label for="">Gender:</label>
        Male: <input type="radio" name="gender" value="m">
        Female: <input type="radio" name="gender" value="f">
        Other: <input type="radio" name="gender" other="o"><br><br>
        <label for="">Date of birth:</label>
        <input type="date" name="dob"><br><br>
        <label for="">Phone</label>
        <input type="number" name="number"><br><br>
        <label for="">Qualification:</label>
          <input type="text" name="quali"><br><br>
        <label for="">Fathers name:</label>
        <input type="text" name="fname"><br><br>
        <label for="">Mothers name:</label>
        <input type="text" name="mname"><br><br>
        <input type="submit" value="submit">
    </form>
