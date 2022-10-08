<!DOCTYPE html>
<html lang="en">

<head>
    <title>echo vs print</title>
</head>

<body>
    <?php
    $name = "Arfan";
    $salary = 50000;
    $language = "PHP";
    // accept multiple data separated with comma
    echo "Your name is $name . Your salary amount is: $salary . You are a $language programmer.";
    echo "<br/>";
    // accept multiple data add with Concatenation using Print function
    print "Your name is " . $name . ". Your salary amount is: " . $salary . ". You are a " . $language . " programmer.";
    ?>
</body>

</html>