<?php
class Students
{
    protected $name;
    public function __construct($namePara)
    {
        $this->name = $namePara;
    }
    protected function intro()
    {
        echo "My name is {$this->name}";
    }
}
class Name extends Students
{
    public function __destruct()
    {
        $this->intro();
    }
}
$object = new Name("Arfan Khan");
$object = new Name("Arfan K2han");
