<?php

$num1 = $_POST['num1'] ;
$num2 = $_POST['num2'] ;

if ($num1 && $num2) {
    echo "Number 1: $num1.\n";
    echo "Number 2: $num2\n";
    echo "Addition: " . ($num1 + $num2) . "\n";
    echo "Subtraction: " . ($num1 - $num2) . "\n";
    echo "Multiplication: " . ($num1 * $num2) . "\n";
    echo "Division:".($num1/$num2)."\n";
}
else {
    echo "Error: Please enter valid numbers.\n";
}
