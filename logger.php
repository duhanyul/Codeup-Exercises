<?php

function logMessage($logLevel, $message)
{
  $date = getdate();
  if ($date['mon'] < 10) {
    $date['mon'] = '0' . $date['mon'];
  }
  if ($date['wday'] < 10) {
    $date['wday'] = '0' . $date['wday'];
  }
  $filename = "log " . $date['year'] . '-' . $date['mon'] . '-' . $date['wday'];

  $handle = fopen($filename,'a');

  $logDate = $filename .' ' . $date['hours'] . ':' . $date['minutes'] . ':' . $date['seconds'];

  fwrite($handle,$logDate . " [$logLevel] $message" . PHP_EOL);
}
function logInfo($input){
  logMessage("INFO",$input);
}
function logError($input){
   logMessage("ERROR",$input);
}
logInfo('this is an info message');
logError('this is an error message');
