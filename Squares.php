<?php
require_once 'Rectangle.php';

/**
 *
 */
class Squares extends Rectangle
{
  public function perimeter(){

    return ($this->height * 2) + ($this->width * 2);

  }
}

 ?>
