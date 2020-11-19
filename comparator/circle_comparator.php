<?php
include_once "comparator.php";
class CircleComparator implements Comparator
{
    public function compara($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();
        if($radiusOne > $radiusTwo){
            return 1;
        } elseif ($radiusOne < $radiusTwo){
            return -1;
        } else {
            return 0;
        }
    }
}
