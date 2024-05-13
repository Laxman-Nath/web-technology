<!-- Write a php function to create an array of type integer and print its elements -->

<?php
function create_array(){
    $numbers=array(1,3,4,5,6,7,8,9);
    echo "The numbers are:<br>";
    for($i=0;$i<count($numbers);$i++){
        echo "$numbers[$i]<br>";
    }
}
create_array();
?>