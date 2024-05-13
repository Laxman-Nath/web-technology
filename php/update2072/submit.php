<?php
$host="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($host,$username,$password,$database);

// $sql1="CREATE table student8(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(20) NOT NULL,
//     address VARCHAR(20) NOT NULL)";
// if($conn->query($sql1)){
//     echo "Table created successfully";
// }

if(isset($_POST['name'])){
    $name=$_POST['name'];
    $address=$_POST['address'];

    $sql2="INSERT INTO student8(name,address)
    VALUES ('$name','$address')";
    if($conn->query($sql2)){
        echo "Record inserted successfully";
    }
    else{
        echo "Error inserting record:".$conn->error;
    }
}

$sql3="SELECT * FROM student8";
$result=$conn->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying data</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        while($row=$result->fetch_assoc())
        {
         ?>
         <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><a href="update.php? id=<?php echo $row['id'];?>">Update data</a></td>
            <td><a href="delete.php? id=<?php echo $row['id'];?>">Delete data</a></td>
         </tr>   
         <?php
        }?>
    </table>
</body>
</html>

