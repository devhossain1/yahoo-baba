<?php

$food=array("orange","apple","apple","banana","grapes");



//$food = array(
//            'fruits'=> array('orange', 'banana', 'apple'),
//            'veggie' => array('carrot','collard','pea')
//        );

//echo count($food['fruits'],1);

//$len= count($food);
//
//for($i= 0; $i < $len; $i++){
//    echo $food[$i] . "<br>";
//}

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";

?>