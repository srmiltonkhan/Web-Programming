<?php
$cars = array("Apple", "Samsung", "Xioami", "HTC", "LG", "NOKIA", "VIVO", "OPPO");
echo "There are some mobile brands: "
    . $cars[0] . ", "
    . $cars[1] . ", "
    . $cars[2] . ", "
    . $cars[3] . ", "
    . $cars[4] . ", "
    . $cars[5] . " and "
    . $cars[6] . ".";

?>


<?php

$carsArray = array("Apple", "Samsung", "Xioami", "HTC", "LG", "NOKIA", "VIVO", "OPPO");

echo "There are some mobile brand name: ";
for ($i = 0; $i < count($carsArray); $i++) {
    echo  $carsArray[$i] . ", ";
}
?>