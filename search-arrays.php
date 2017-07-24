<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($input,$array){
  if (array_search($input,$array) === false) {
    return "FALSE";
  }else{
    return "TRUE";
  }
}

echo search("Tina",$names) . PHP_EOL;

function compareCount($array1,$array2){
  $count = 0;
  for ($i=0; $i < count($array1) ; $i++) {
    $result = array_search($array1[$i],$array2);
    if ($result !== false ) {
      $count += 1;
    }
  }
  return $count;
}
echo "There are " . compareCount($names,$compare) . " similarites" . PHP_EOL;
