<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object</title>
</head>

<body>
    <?php
    class Car
    {
        public $brand;
        public $color;

        public function __construct($brand, $color)
        {
            $this->brand = $brand;
            $this->color = $color;
        }

        public function message()
        {
            return "My car is $this->brand, and its color is  $this->color";
        }
    }

    $car = new Car("Ford", "Green"); // creating object of Ford Car
    echo $car->message();

    echo "<br/>";

    $car = new Car("Toyota", "Red"); // creating object of Toyota Car
    echo $car->message();
    ?>
</body>

</html>