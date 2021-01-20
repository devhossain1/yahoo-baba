<?php

$age = [
    100 => 25,
    "bill" =>28.5,
    32 =>22
];

echo "<pre>";
var_dump($age);
echo "</pre>";

echo $age[100] . "<br>";
echo $age["bill"] . "<br>";
echo $age[32] . "<br>";

?>