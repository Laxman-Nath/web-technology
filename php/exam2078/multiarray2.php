<!-- Write a php script to create a multidimensional array named product that will contain pcode,pname and price.Initialize with at least three instances.A;lso write html script to display the initialized values of array in html table. -->

<?php
$Product=array([1,"comb",2000],
[2,"oil",3000],
[3,"pen",500]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
      <tr>
        <th>Pid</th>
        <th>Pname</th>
        <th>Price</th>
      </tr>
      <?php
      for($i=0;$i<count($Product);$i++){
        ?>
        <tr>
        <?php
        for($j=0;$j<$Product[$i];$j++){
        ?>
        <td><?php echo $Product[$i][$j];?></td>
        <?php
        }
        ?>
        </tr>
        <?php
      }
      ?>
    </table>
</body>
</html>