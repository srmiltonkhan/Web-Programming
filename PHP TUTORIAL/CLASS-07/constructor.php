<?php
    class Students{
        public $name;

        function __construct($namePara)
        {
            $this->name = $namePara;
        }
    }

    $object = new Students("Arfan Khan");
    echo $object->name;
