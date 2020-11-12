<?php
abstract class Animal{
    public  $name;
    public abstract function getName();
    public abstract function setName($name);
    public abstract function run();
}
class Buffalo extends Animal{
    public function getName()
    {
        return $this->name;
        // TODO: Implement getName() method.
    }
    public function setName($name)
    {
        $this->name=$name;
        // TODO: Implement setName() method.
    }

    public function run()
    {
        return 2;
        // TODO: Implement run() method.
    }
}
$buffalo= new Buffalo();
$buffalo->setName("con bo");
echo $buffalo->getName()."<br>";
echo $buffalo->run();
