<?php
$age=20;

function check($age){
if($age>=18){
    echo "Eligible for Vote";
}
else{
    echo "Not Eligible for vote";
}
}
check($age);
?>