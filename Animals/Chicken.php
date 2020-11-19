<?php
include_once (dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once (dirname(__FILE__). '/../InterfaceClass/Edible.php');
class Chicken extends Animal implements Edible
{
public function makesound()
{
    return "Chicken1: cluck-cluck!";
    // TODO: Implement makesound() method.
}
public function HowtoEat()
{
    return "could be fried";
    // TODO: Implement HowtoEat() method.
}
}