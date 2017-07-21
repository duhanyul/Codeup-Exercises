<?php

$result = 0;
$testArray = [3,-4,"sally",1,5,-6,"bob",3];

foreach ($testArray as $value) {

  if (is_numeric($value)) {
    if ($value < 0) {
      $value = $value * (-1);
    }
    if ($value % 2 != 0) {
      $result += $value;
    }else {
      $result = $value * $result;
    }
  }
}
echo "$result" . PHP_EOL;
