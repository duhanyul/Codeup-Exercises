<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ',$physicistsString);

function humanize($list,$on_off){
  if ($on_off) {
    sort($list);
  }
  $endingArray = [];
  array_push($endingArray,array_pop($list));
  array_push($endingArray,array_pop($list));

  $reverseArray = array_reverse($endingArray);

  $ending = implode(' and ',$reverseArray);

  array_push($list,$ending);

  $humanizedList = implode(', ',$list);

  return $humanizedList;
}
$on_off = false;
$humanizedList = humanize($physicistsArray,$on_off);
echo $humanizedList;
