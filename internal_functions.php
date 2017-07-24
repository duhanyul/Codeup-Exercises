<?php

// TODO: Create your inspect() function here
  function inspect($input){
    if ($input === NULL) {
      return "NULL";
    }elseif ($input == '') {
      return "Empty String";
    }elseif (gettype($input) === false) {
      return "FALSE";
    }elseif (gettype($input) === true) {
      return "TRUE";
    }elseif ($input == []) {
      return "EMPTY ARRAY";
    }else {
      return gettype($input);
    }
  }
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo "The type of $num1 is : " . inspect($num1) .PHP_EOL;
echo 'Inspecting $num2:' . PHP_EOL;
echo "The type of $num2 is : " . inspect($num2) .PHP_EOL;
echo 'Inspecting $num3:' . PHP_EOL;
echo "The type of $num3 is : " . inspect($num3) .PHP_EOL;
echo 'Inspecting $num4:' . PHP_EOL;
echo "The type of $num4 is : " . inspect($num4) .PHP_EOL;
echo 'Inspecting $null:' . PHP_EOL;
echo 'The type of $null is : ' . inspect($null) .PHP_EOL;
echo 'Inspecting $bool1' . PHP_EOL;
echo "The type of $bool1 is : " . inspect($bool1) .PHP_EOL;
echo 'Inspecting $bool2' . PHP_EOL;
echo "The type of $bool2 is : " . inspect($bool2) .PHP_EOL;
echo 'Inspecting $string1' . PHP_EOL;
echo "The type of $string1 is : " . inspect($string1) .PHP_EOL;
echo 'Inspecting $string2' . PHP_EOL;
echo "The type of $string2 is : " . inspect($string2) .PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
echo "The type is : " . inspect($array1) .PHP_EOL;
echo 'Inspecting $array2' . PHP_EOL;
echo 'The type of $array2 is: ' . inspect($array2) .PHP_EOL;



function counts($input){
  foreach (count_chars($input,1) as $key => $value) {
    if ($key !== " ") {
      echo "There are $value of " . chr($key) . PHP_EOL;
    }
  }
}
counts("MynameisDanielRojo");
