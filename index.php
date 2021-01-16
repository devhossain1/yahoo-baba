<?php

function sum($math, $eng, $sci){
    $s= $math+$eng+$sci;
    
    return $s;
     
}
function percentage($st){
  $per = $st / 3; 
    
  echo $per . "%" . "<br>";
}

$total=sum(34,50,100);
percentage($total);

 //=====function refernce======


function testing(&$string){  
  $string .= " and someting extra. <br>"; 
}

$str = "This is a string";
testing($str);
echo $str;

//=====================
function first($num){
   $num +=5;    
}

function second(&$num){
   $num +=8;  
}

$number = 10;
first($number);
echo "original value is $number<br>";

second($number);
echo "original value is $number<br>";
?>