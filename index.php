<?php

$age = [
    "bill" =>25,
    "steve " =>28,
    "elon" =>20,
];
echo "<ul>";
foreach($age as $key => $value){
    echo  "<li>$key = $value </li>";
}
echo "</ul>";

?>