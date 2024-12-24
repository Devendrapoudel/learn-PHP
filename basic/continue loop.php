<?php
// continue in for loops
// for ($s = 0; $s < 10; $s++) {
//   if ($s == 4) {
//     continue;
//   }
//   echo "$s <br>";
// }
//continue in while loop
// $a = 0;
 
// while($a < 10) {
//   $a++;
//   if ($a == 5) {
//     continue;
//   }
//   echo " $a <br>";
// } 
// continue in Do while loop
// $z = 0;

// do {
//   $z++;
//   if ($z == 3) continue;
//   echo $z;
// } while ($z < 5);
// continue in for each loop
$fruits = array("apple", "banana", "grapes", "orange");

foreach ($fruits as $a) {
  if ($a == "banana") continue;
  echo "$a <br>";
}
?>