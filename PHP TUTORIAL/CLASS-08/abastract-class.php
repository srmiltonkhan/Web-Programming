<!DOCTYPE html>
<html>

<body>

    <?php
    abstract class ParentClass{
        // Abstract method with an argument
        abstract protected function prefixName($name);
    }
    class ChildClass extends ParentClass {
        public function prefixName($name){
            if ($name == "Arfan Khan") {
                $prefix = "Mr.";
            } elseif ($name == "Arifa Khan") {
                $prefix = "Mrs.";
            } else {
                $prefix = "";
            }
            return "{$prefix} {$name}";
        }
    }
    $class = new ChildClass;
    echo $class->prefixName("Arfan Khan");
    echo "<br>";
    echo $class->prefixName("Arifa Khan");
    ?>

</body>

</html>