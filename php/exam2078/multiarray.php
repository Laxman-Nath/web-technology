<!-- Write a php script to create a multidimensional array named product that will contain pcode,pname and price.Initialize with at least three instances.A;lso write html script to display the initialized values of array in html table. -->

<?php
$Product=array([1,"comb",2000],
              [2,"oil",1000],
              [3,"cycle",5000]);
    // for($i=0;$i<count($Product);$i++){
        // for($j=0;$j<count($Product[$i]);$j++){
    //         echo $Product[$i][$j];
    //     }
    // }

    echo '<table border="1">  ';
    echo '<tr><th>Pcode </th><th>Pname </th><th> Pcost</th></tr>';
    for($i=0;$i<count($Product);$i++){
        echo '<tr>';
          for($j=0;$j<count($Product[$i]);$j++){
            echo '<td>'.$Product[$i][$j].'</td>';
          }
            echo '</tr>';
        }   
        echo '</table>';  

?>