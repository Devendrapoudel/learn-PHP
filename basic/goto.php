<?php
// $a=20;
// echo "before condition<br/>";
// if($a==20){
//   goto jump;
// }
// $name="sagar <br/>";
// echo $name;
// jump:
// echo"statement is jumped line number 9";
for($i=0;$i<10;$i++){
  echo"$i <br>";
  if($i==5){
    goto outsideLoop;
  }
}
outsideLoop:
echo"loop is break";
?>