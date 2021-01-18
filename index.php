<?php

$sayHello = function($name){
    echo "Hello $name <br>";
};

$sayHello("yahoo baba");

//recursive function

function factorial($n){
    if($n == 0){
      return 1;
    }else{
      return ($n * factorial($n-1));   
    }
}
echo factorial(7);

?>