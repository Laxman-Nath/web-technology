<?php
$host="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($host,$username,$password,$database);

$id=$_GET['id'];
$sql1="Select * from student8 where id=$id";
$result=$conn->query($sql1);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating</title>
</head>
<body>
<form action="updateprocess.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" value="<?php echo $row['name'];?>">
        </div><br>
        <div>
            <label for="">Address:</label>
            <input type="text" name="address" value="<?php echo $row['address'];?>">
        </div><br>
        <button>Submit</button>
    </form>
</body>
</html>