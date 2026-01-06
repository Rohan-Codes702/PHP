<?php

if($_POST['name']|| $_POST['phone']){
    $name=$_POST['name'];
    $phone=$_POST['phone'];

    echo 'name:'.$name."<br>";
    echo 'phone:'.$phone;
}
?>  