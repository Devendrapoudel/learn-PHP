<?php
// echo "signup page"; // name the first whatever it be

print_r($_POST); //for post method 

if($_POST){
echo "user name is :".$_POST['user_name'];
echo"<br/>";
echo "user name is :".$_POST['user_password'];
echo"<br/>";
echo "user name is :".$_POST['user_email'];
}
?>