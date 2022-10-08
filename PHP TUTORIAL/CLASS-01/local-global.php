<?php

$globalVariable = "Global Variable";

function localVariableFunc()
{

    echo $globalVariable; // undefined

    $localVariable = "Local Variable";
    echo $localVariable;
}

localVariableFunc(); // calling local Variable Function
echo "<br/>";
echo $globalVariable;  // print global variable
