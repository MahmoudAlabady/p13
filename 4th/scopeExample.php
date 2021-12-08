<?php

$number = 7; 

function incement($number){
    global $number;
    return ++$number;
}


function decrement($number){
    return $number--; // 6
}


// echo decrement($number);  // 7
// echo "<br>";
// echo incement(10);  8
// echo "<br>";
// echo $number; 
// echo "<br>";
// echo decrement($number); 
// echo "<br>";
// echo incement(10); 
// echo "<br>";
// echo $number;

// $num1 = 10;
// $num2 = 5;

// $result = null;

// function sumTwoNums () {
//     global $num1,$num2,$result;
//     $result = $num1 + $num2;
// }

// sumTwoNums();

// echo $result;