<?php
$a=10;
$b=10;
$c=10;
$d=5; 
var_dump($a==$b); //point 5 and 6 are for Equal
var_dump($a==$c);
var_dump($a===$b);//for identical
var_dump($a!=$d);//point 9 and 10 are for not equal to
var_dump($a!=$b);
var_dump($a!==$c); //for not identical
var_dump($a>$d);//for greater
var_dump($a<$d); //for less then
var_dump($a>=$d); //for greater then equal to
var_dump($a<=$d); //for less then equal to
var_dump($a<=>$d); //for spaceship
?>