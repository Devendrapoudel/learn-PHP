<?php
// for string
$a=500;
$a= (string)$a;
var_dump($a);

// for boolean
// $a=500; //if we put true also it gives same output as well
$a= (boolean)$a;
$b="300";
$b=(int)$b;
var_dump($a);

// for float
$a=500;
$a= (float)$a;
var_dump($a);

// for array
$e=10;
$e=(array)$e;
var_dump($e);

// for object
$f=5;
$f= (object)$f;
var_dump($f);

?>