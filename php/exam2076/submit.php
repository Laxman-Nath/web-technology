<?php
$host="localhost";
$username="root";
$password="";
$database="webtech";
$conn=new mysqli($host,$username,$password,$database);

$sql1="CREATE table student6(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    search VARCHAR(20) NOT NULL,
    name VARCHAR(20) NOT NULL,
    download VARCHAR(20) NOT NULL)";
    if($conn->query($sql1)){
        echo "Table created successfully";
    }
    else{
        echo "Error creating table ".$conn->error;
    }

if(isset($_POST['name'])){
    $search=$_POST['search'];
    $name=$_POST['name'];
    $download=$_POST['download'];
    $sql2="INSERT INTO student6(search,name,download)
    VALUES ('$search','$name','$download')";
    if($conn->query($sql2)){
        echo "Record inserted successfully";
    }
    else{
        echo "Error inserting record:".$conn->error;
    }
}

$sql3="SELECT * FROM student6";
$result=$conn->query($sql3);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying date_add</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Search type</th>
            <th>Book name</th>
            <th>Download</th>
        </tr>
        
     <?php
     while($row=$result->fetch_assoc())
     {
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['search']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['download']; ?></td>
        </tr>
    <?php }?>
    </table>
    <a href="form.php">Search book again</a>
</body>
</html>

