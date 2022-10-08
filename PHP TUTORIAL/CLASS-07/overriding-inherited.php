<?php
class Students
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
class Name extends Students
{
    public $rollNo;
    public function __construct($name, $rollNo)
    {
        $this->name = $name;
        $this->rollNo = $rollNo;
    }
    public function display()
    {
        echo "My name is {$this->name} and my roll is {$this->rollNo}";
    }
}
$object = new Name("Arfan Khan", "20");
$object->display();
