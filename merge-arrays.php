<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam','Sammy','Sally'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael','Jimmy','Johnny','Billy'];

function search($input,$array){
  if (array_search($input,$array) === false) {
    return false;
  }else{
    return true;
  }
}

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

function combineArray($value1,$value2,$combinedArray){
  if ($value1 === null) {
    array_push($combinedArray, $value2);
  }elseif ($value2 === null) {
    array_push($combinedArray,$value1);
  }elseif ($value1 !== $value2 ) {
    array_push($combinedArray,$value1);
    array_push($combinedArray, $value2);
  }
  else {
    array_push($combinedArray,$value1);
  }
  return $combinedArray;
}
function length($array1,$array2){
  if (count($array1) <= count($array2)) {
    $count = count($array1);
    return $count;
  }else {
    $count = count($array2);
    echo "$count";
    return $count;
  }
}
$combinedArray =[];
$count = length($names,$compare);
for ($i=0; $i <$count ; $i++) {
  $combinedArray = combineArray($names[$i],$compare[$i],$combinedArray);
}
$count = $count + abs(count($names)-count($compare));
$start = $count - abs(count($names)-count($compare));

for ($start; $start<$count; $start++) {
  if (count($names) > count($compare)) {
    array_push($combinedArray,$names[$i]);
  }else {
    array_push($combinedArray,$compare[$i]);
  }
}
print_r($combinedArray);
