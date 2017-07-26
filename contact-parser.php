<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename,'r');

    $contents = trim(fread($handle, filesize($filename)));

    $contentsArray = explode("\n",$contents);

    foreach ($contentsArray as $key => $person) {
      $person = explode('|',$person);
      $person[1] = substr($person[1],0,3) . "-" . substr($person[1],3,3) . "-" . substr($person[1],6,4);
      $personInfo['name'] = $person[0];
      $personInfo['number'] = $person[1];
      $contacts[$key] = $personInfo;
    }
    fclose($handle);

    return $contacts;
}


var_dump(parseContacts('contacts.txt'));
