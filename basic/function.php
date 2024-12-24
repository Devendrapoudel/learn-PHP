<!-- //create a function -->
function myName(){
  echo"Sagar poudel";
}
<?php
// call a function
function myName(){
  echo"Sagar poudel";
}
myName();

// function arguments
function fruitsName($fname){
  echo"$fname fruit.<br>";
}
fruitsName("Apple");
fruitsName("Banana");
fruitsName("Orange");
fruitsName("Kiwi");

// function with two argument.
function yearName($fyear,$month){
  echo "$fyear month born in $month<br>";
}
yearName("Sagar","1999");
yearName("sarita","1996");
yearName("laxmi","1994");

// default argument value
function setHeight($minheight = 90) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 90
setHeight(135);
setHeight(80);

// returning values
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "8 + 18 = " . sum(8, 18) . "<br>";
echo "4 + 6 = " . sum(4, 6) . "<br>";
echo "6 + 9 = " . sum(6, 9);

// passing arguments by reference
function add_nine(&$value) {
  $value += 9;
}

$num = 2;
add_nine($num);
echo $num;

// variable number by arguments
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 16, 7, 10);
echo $a;

// php return type declaration
declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
?>