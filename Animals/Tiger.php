<?php
include_once (dirname(__FILE__) . '/../AbstractClass/Animal.php');
class Tiger extends Animal
{
public function makesound()
{
    return "Tiger1: roarrrrr!";
    // TODO: Implement makesound() method.
}
}