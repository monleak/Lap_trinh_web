<?php
require_once "Animal.class.php";

class Cho extends Animal
{
    public $old;

    public function getOld()
    {
        return $this->old;
    }
}
?>