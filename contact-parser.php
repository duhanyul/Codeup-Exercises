<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename,'r');

    $contents = trim(fread($handle, filesize($filename)));

    $contentsArray = explode("\n",$contents);

    foreach ($contentsArray as $key => $person) {
      $person = explode('|',$person);
      $personInfo['name'] = $person[0];
      $personInfo['number'] = $person[1];
      $contacts[$key] = $personInfo;
    }
    fclose($handle);

    return $contacts;
}


var_dump(parseContacts('contacts.txt'));
