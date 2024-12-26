<?php
echo "This is php login file"; // name the first whatever it be


echo $_GET['Username']; //3 and 4 gives the result in sagar123
echo $_GET['Password'];
echo "user name is " . $_GET['Username'];
echo "<br/>";
echo " password is " . $_GET['Password'];


// if address is removed and to be safe from this
if ($_GET) {
  echo "user name is " . $_GET['Username'];
  echo "<br/>";
  echo " password is " . $_GET['Password'];
}
?>
