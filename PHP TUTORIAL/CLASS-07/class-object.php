<!DOCTYPE html>
<html>

<body>

    <?php
    // class is defined using class key word
    class Students
    {
        public $name;
        public $rollNo;
        //Store Method
        function setName($namePara)
        {
            // $name argument variable is stored in the $name propery of Students Class
            $this->name = $namePara;
        }
        function setRollNo($rollNoPara)
        {
            $this->rollNo = $rollNoPara;
        }

        // display method

        function display()
        {
            return "Student Name: " . $this->name . "<br/>" . "Roll No: " . $this->rollNo;
        }
    }

    //call object using new key word outside class block
    $object = new Students;

    $object->setName("Jenna");
    $object->setRollNo("R005");

    echo $object->display();

    echo "<br/>";
    echo "<br/>";

    $object->setName("John");
    $object->setRollNo("R010");
    echo $object->display();
    ?>

</body>

</html>