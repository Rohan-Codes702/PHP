<?php

$n1=5;
$n2=3;
$n3=21;

if($n1>$n2 && $n1>$n3){
    echo "Number {$n1} is largest ";
}
elseif ($n2>$n1 && $n2>$n3) {
     echo "Number {$n2} is largest ";
}
else{
     echo "Number {$n3} is largest ";
}
?>