<?php
/*
//if else condition
$mark=80;

if($mark >= 80 && $mark <= 100){
    echo "you are in merit.";
}elseif($mark >= 60 && $mark < 80){
    echo "you are in the 1st division";
}elseif($mark >= 45 && $mark < 60){
    echo "you are in the 2nd division";
}elseif($mark  >= 33 && $mark < 45){
    echo "You are in 3rd division";
}elseif($mark < 33){
    echo "You are fail.";
}else{
    echo "please enter valid Percentage.";
}
 */

$Weekday = 6;

switch($Weekday){
    case 1:
        echo "Twoday is monday";
    break;
    case 2:
        echo "Twoday is tuesday";
    break;
    case 3:
        echo "Twoday is wednessday";
    break;
    case 4:
        echo "Twoday is thirsday";
    break;
    case 5:
        echo "Twoday is friday";
    break;
    case 6:
        echo "Twoday is saturday";
    break;
    case 7:
        echo "Twoday is sunday";
    break;    
    default:
        echo "Enter the valid week day";
}

?>