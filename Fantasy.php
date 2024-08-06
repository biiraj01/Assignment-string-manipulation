<?php

$string = "Gandalf,Aragorn,Legolas";
$arr = explode(",", $string);

foreach ($arr as &$name) {
    $name = strtolower($name);
}

$new_arr = implode("*", $arr);
echo $new_arr;
?>