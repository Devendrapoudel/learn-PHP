<!-- php arrays variable in one function -->
 <?php
 $month = array("january", "feburary", "march"); 

 var_dump($month);

  //  <--array items of four different types-->

  // function example
function myFunction() {
  echo "This is first phase";
}

// create array
$myArr = array("january", 15, ["march", "may"], myFunction);

// calling the function from the arrays items
$myArr[3]();

// counts arrays
$month = array("january", "feburary", "march");
echo count($cars);

// php indexed arrays
$month = array("january", "feburary", "march"); 
var_dump($month);

// access indexed arrays
$month = array("january", "feburary", "march"); 
echo $month[1];

// change value
$month = array("january", "march", "feburary"); 
$month[1] = "march";
var_dump($month);

// loop through an indexed array
$month = array("january", "feburary", "march"); 

foreach ($month as $a) {
  echo "$a <br>";
}

//  php associative arrays
$month = array("month"=>"january", "favourite"=>"october", "year"=>1999);
var_dump($month);

// access associative arrays
$month = array("month"=>"october", "favourite"=>"pokhara", "year"=>1999);
echo $month["year"];

//access array items
$month = array("january", "feburary", "march");
echo $month[1];

//update array items
$month = array("january", "feburary", "march");
echo $month[1];

// remove arrays items
$month = array("janurary", "feburary", "march");
array_splice($month, 1, 1);
var_dump($month);

// sorting array
$month = array("may", "march", "june");
sort($month);

// php multidimentional array for loop inside another for loop
$fruits = array (
  array("apple",22,18),
  array("banana",15,13),
  array("orange",5,2),
  array("kiwi",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$fruits[$row][$col]."</li>";
  }
  echo "</ul>";
}

// We can store the data from the table above in a two-dimensional array, like this:
$fruits = array (
  array("apple",22,18),
  array("banana",15,13),
  array("orange",5,2),
  array("kiwi",17,15)
);
 ?>
