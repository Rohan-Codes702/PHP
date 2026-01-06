<?php
$arr=array(1,2,3,4,5,6,7,8,9,10);
$n=count($arr);

for($i=1;$i<=$n;$i++){
    echo $i;
    if($i<$n){
        echo"-";
    }
}
?>