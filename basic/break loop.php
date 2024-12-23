<?php 
//break in for loop 
for ($a = 0; $a < 10; $a++) {
  if ($a == 4) {
    break;
  }
  echo " $a <br>";
}
 //break for while loop
$b = 0;
 
while($b < 10) {
  if ($b == 4) {
    break;
  }
  echo "$b <br>";
  $b++;
} 
//break for do while loop
$i = 1;

do {
  if ($i == 5) break;
  echo $i;
  $i++;
} while ($i < 7);

// break in for each loop
$month = array("january", "feburary", "march", "april");

foreach ($month as $a) {
  if ($a == "april") break;
  echo "$a <br>";
}
?>
