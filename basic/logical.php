<?php
$a=10;
$b=20;
$c=30;
if($a==10 && $b==20){ // and operator
  echo "Var a has 10 value";
}
if($a==10 and $b==20){
  echo "Var a has 10 value";
}
if($a==10 || $b==20){ //OR operator
  echo "condition is true";
}
if($a==50 xor $b==20){ //xor operator
  echo "condition is true";
}
if($a!==11){ // Not equal to operator
  echo "condition is true";
}
if($a==10 && $b==20 && $c==30){ // multiple condition
    echo "condition is true";
  }
?>
