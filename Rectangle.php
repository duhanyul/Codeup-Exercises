<?php

/**
 *
 */
class  Rectangle
{

  public $height;
  public $width;

  function __construct($height = 4, $width = 5)
  {
    $this->height = $height;
    $this->width = $width;
  }

  public function area(){

    return $this->height * $this->width;

  }
}
