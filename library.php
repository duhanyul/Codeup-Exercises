<?php
$test = [
  'name' => 'Daniel',
  'number' => 2,
  'stuff' => 'dog'
];
$testString = "Daniel";

/************* FUNCTION 1 ************/

function isEven($input){
  if (is_numeric($input)) {
    if ($input % 2 == 0) {
      return true;
    }else {
      return false;
    }
  }else {
    echo "NOT A NUMBER!" . PHP_EOL;
  }
}


/************* FUNCTION 2 *************/

function isVowel($input){
  if (is_string($input)) {
    if (strlen($input) > 1) {
      switch ($input) {
        case 'a':
        return true;
        break;
        case 'e':
        return true;
        break;
        case 'i':
        return true;
        break;
        case 'o':
        return true;
        break;
        case 'u':
        return true;
        break;
        default:
        return false;
        break;
      }
    }
  }else {
    echo "NOT A SINGLE CHARACTER" . PHP_EOL;
  }
}

/************* FUNCTION 3 *************/

function first($input){
  if (is_array($input) || is_string($input)) {
    if (is_array($input)) {
      foreach ($input as $key => $value) {
        $first = $input[$key];
        break;
      }
      return $first;
    }
    return $input[0];
  }else {
    echo "NOT A STRING OR ARRAY INVALID TYPE" . PHP_EOL;
  }
}

/************* FUNCTION 4 *************/

function second($input){
  if (is_array($input) || is_string($input)) {
    if (is_array($input)) {
      $i = 0;
      foreach ($input as $key => $value) {
        if ($i == 1) {
          $first = $input[$key];
          break;
        }
        $first = $input[$key];

      }
      return $first;
    }
    return $input[1];
  }else {
    echo "NOT A STRING OR ARRAY INVALID TYPE" . PHP_EOL;
  }
}

/************* FUNCTION 5 *************/

function last($input){
  if (is_array($input) || is_string($input)) {
    if (is_array($input)) {
      return end($input);
    }
    return substr($input,-1);
  }else {
    echo "NOT A STRING OR ARRAY INVALID TYPE" . PHP_EOL;
  }
}

/************* FUNCTION 6 *************/

function reverse($input){
  if (is_array($input) || is_string($input)) {
    if (is_array($input)) {
      return array_reverse($input);
    }
    return strrev($input);
  }else {
    echo "NOT A VALID INPUT";
  }
}

/************* FUNCTION 7 *************/

function random($input){
  if (is_array($input) || is_string($input)) {
    if (is_array($input)) {
      $key = array_rand($input);
      return $input[$key];
    }
    return $input[mt_rand(0,(strlen($input)-1))];
  }else {
    echo "NOT A VALID INPUT";
  }
}

/**************** FUN STUFF ****************/
function generate(){
  for ($i=0; $i <= 5 ; $i++) {
    $testArray[$i]= mt_rand(0,9);
  }
  return $testArray;
}
function noRepeats($input){
  $number = mt_rand(0,9);
  if (empty($input)) {
    return $number;
  }else{
    while (in_array($number,$input)) {
      $number = mt_rand(0,9);
    }
    return $number;
  }

  return $number;
}
function matching($inputArray){
  $compareArray = [];
  $count = 0;
  $tries = 0;
  $tempArray = $inputArray;
  $fails = [];
  while ($compareArray !== $inputArray) {
    print_r($fails);
    if (!empty($tempArray)) {
      $compareArray[$count] = noRepeats($fails);
      if ($compareArray[$count] == $tempArray[0]) {
        array_shift($tempArray);
        $fails = [];
        $count++;
      }else {
        array_push($fails,$compareArray[$count]);
        $tries++;
      }
    }
  }
  print_r($compareArray);
  echo "It took $tries tries" . PHP_EOL;
  echo "THEY ARE THE SAME" . PHP_EOL;
}


matching(generate());
