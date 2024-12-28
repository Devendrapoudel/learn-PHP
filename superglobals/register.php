<?php
print_r($_REQUEST);

//for loop
foreach($_REQUEST as $data){
  echo $data;
  echo "<br/>";
}

// or we can do this also for loop 
foreach($_REQUEST as $key=> $data){
  echo $key." is ". $data;
  echo "<br/>";
}
?>