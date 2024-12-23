<?php
$table=15;
for ($a = 0; $a <= 10; $a++) {
  echo "The number is: $a <br>";
  echo $a; // point 4 and 5 produce result in vertical order.
  echo $table*$a; // point 2 and 6 is for multiplication.
  echo "<br>";
}
for ($b = 0; $b <= 10; $b++) {
  if ($b == 3) continue;
  echo "The number is: $b <br>";
}
?>