<?php
$things = array('Sgt. Pepper', "11", null, [1,2,3], 3.14, "12 + 7", false, (string) 11);
foreach ($things as $value) {
  $type = gettype($value);
  echo "The type is: $type" . PHP_EOL;
}
echo PHP_EOL;
foreach ($things as $value) {
  $type = gettype($value);
  if (is_scalar($type)) {
    echo "$type is scalar" . PHP_EOL;
  }
}

echo PHP_EOL;

foreach ($things as $value) {
  if (is_array($value)) {
      foreach ($value as $key) {
        echo "$key" . PHP_EOL;
      }
  }else {
    echo "$value" . PHP_EOL;
  }
}
