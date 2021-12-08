<?php

// functions 

// function hello () {
//     echo "nti";
// }

// i/ps , o/p
$number1 = 10;
$number2 = 10;

function addTwoNumbers ($num1,$num2) {
    return $num1 + $num2;
}

$sum =  addTwoNumbers($number1,$number2);
// echo $sum;

// i/ps , no o/p 
function addTwoNumbersV2 ($number1,$number2) {
    echo $number2 + $number1;
}

// addTwoNumbersV2(2,3);

// no i/ps , o/p 
function addTwoNumbersV3 () {
    return 5+9;
}

// no i/ps , no o/p
function addTwoNumbersV4 () {
    echo 5 + 10;
}


// addTwoNumbersV4();



