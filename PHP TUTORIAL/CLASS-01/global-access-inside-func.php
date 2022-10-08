<?php
$globalVariable = "Global Variable";

function localVariableFunc()
{
    global $globalVariable;
    echo $globalVariable;

    echo "<br/>";

    $localVariable = "Local Variable";
    echo $localVariable;
}

localVariableFunc();  // run function

echo "<br/>";

echo $globalVariable;
