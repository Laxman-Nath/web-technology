<!-- Write a php script to create a class and its object -->

<?php
class student{
  public  $rollno;
  public $name;

  function setData($r,$n){
    $this->name=$n;
    $this->rollno=$r;
  }
  function display(){
    echo "Name:$this->name<br>";
    echo "Roll no:$this->rollno<br>";
  }
}

$laxman=new student();
$laxman->setData(1,"Laxman");
$laxman->display();
?>