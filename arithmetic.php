<?php

function add($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  }else {
    return "Invalid inputs must be numeric";
  }
}

function subtract($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a - $b;
  }else {
    return "Invalid inputs must be numeric";
  }
}

function multiply($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a * $b;
  }else {
    return "Invalid inputs must be numeric";
  }
}

function divide($a, $b)
{
  if (is_numeric($a) && is_numeric($b)) {
    if ($b != 0) {
      return $a / $b;
    }else {
      return "ERROR CANNOT DIVIDE BY ZERO";
      break;
    }
  }else {
    return "Invalid inputs must be numeric";
  }
}
function modulus($a,$b)
{
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  }else {
    return "Invalid inputs must be numeric";
  }
}
$input1 = 4;
$input2 = 'bob';
echo "The addition of $input1 and $input2 is equal to : " . add($input1,$input2) . PHP_EOL;
echo "The subtraction of $input1 and $input2 is equal to : " . subtract($input1,$input2) . PHP_EOL;
echo "The multiplication of $input1 and $input2 is equal to : " . multiply($input1,$input2) . PHP_EOL;
echo "The division of $input1 and $input2 is equal to : " . divide($input1,$input2) . PHP_EOL;
echo "The modulus of $input1 and $input2 is equal to : " . modulus($input1,$input2) . PHP_EOL;
