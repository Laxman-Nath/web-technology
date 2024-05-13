<?php
require_once('connection.php');
if(isset($_POST['success'])){
    echo '<div style="border:1px red solid;padding:7px;margin:4px; width:400px;">'.$_POST['success'].'</div>';
}

$sql="SELECT * from student2";
$result=$conn->query($sql);
if($result->num_rows>0){
    ?>
    <table cellpadding="2" cellspacing="4" border="2">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Phone</th>
            <th>Qualification</th>
            <th>Fathersname</th>
            <th>Mothersname</th>
            <th>Action</th>
        </tr>
        <?php
        $i=1;
        while($row =$result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['name']?> </td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['password']?> </td>
                <td><?php echo $row['gender']?> </td>
                <td><?php echo $row['dob']?> </td>
                <td><?php echo $row['phone']?> </td>
                <td><?php echo $row['qualification']?> </td>
                <td><?php echo $row['fname']?> </td>
                <td><?php echo $row['mname']?> </td>
                <td><a href="update.php? id=<?php echo $row['id'];?>">Update</a></td>
                <td><a href="delete.php? id=<?php echo $row['id'];?>">Delete</a></td>
            </tr>
            <?php
            $i++;
        }
        echo '</table>';
    }
    else{
        echo "0 results";
    }
    $conn->close();
    ?>