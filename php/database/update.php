<?php
require_once('connection.php');
$id=$_GET['id'];
$sql="Select * from student2 where id = $id";
$result=$conn->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
}
$conn->close();
?>


<form action="updateprocess.php" method="POST" name="signup">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <label for="">Fullname:</label>
        <input type="text" name="name" id="" value="<?php echo $row["name"];?>"><br><br>
        <label for="">Email:</label>
        <input type="email" name="mail" id="" value="<?php echo $row["email"];?>"><br><br>
        <label for="">Password:</label>
        <input type="password" name="password" value="<?php echo $row["password"];?>"><br><br>
        <label for="">Gender:</label>
        Male: <input type="radio" name="gender" value="m">
        Female: <input type="radio" name="gender" value="f">
        Other: <input type="radio" name="gender" value="o"><br><br>
        <label for="">Date of birth:</label>
        <input type="date" name="dob" value="<?php echo $row["dob"];?>"><br><br>
        <label for="">Phone</label>
        <input type="number" name="number" value="<?php echo $row["phone"];?>"><br><br>
        <label for="">Qualification:</label>
          <input type="text" name="quali" value="<?php echo $row["qualification"];?>"><br><br>
        <label for="">Fathers name:</label>
        <input type="text" name="fname" value="<?php echo $row["fname"];?>"><br><br>
        <label for="">Mothers name:</label>
        <input type="text" name="mname" value="<?php echo $row["mname"];?>"><br><br>
        <input type="submit" value="submit">
    </form>