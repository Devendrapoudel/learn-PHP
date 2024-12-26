<?php
 $name="Sagar poudel";
function getName(){
 //$name="devendra";
  global $name;
  $name="devendra";
  echo "local var :$name";
  
}
getName();
echo"<br/>";
echo$name;

// variable nested function
$name="Sagar poudel";
function test(){
  $name="devendra";
  echo $name;
  function innerTest(){
$name="vai"; 
echo $name;
 }
}
test();
echo"<br>";
echo $name;
?>