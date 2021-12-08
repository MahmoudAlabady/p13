<?php
//  declare(strict_types=1);
// $argument = 5;

// function aya ($parameter){
//     echo $parameter;
// }

// aya($argument);



function sumNumbers (int $number1 = 0,int $number2 = 0,int $number3 = 0) :int { 
    // echo $number1;
    return $number1 + $number2 + $number3;
}

// echo sumNumbers();
// echo "<br>";
// echo sumNumbers(5);
// echo "<br>";
// echo sumNumbers(5,2);
// echo "<br>";
// echo sumNumbers(5.1,2.9,3.5);


// function multiplyNumbers ($number2,$number3,$number1 = 1){
//     return $number1 * $number2 * $number3;
// }

// echo multiplyNumbers(2,3);

// $number = 5.9;
// $intValue = (string) $number;
// var_dump($number);
// echo "<br>";
// var_dump($intValue);


// function welcome (string $company = "egypt"){
//     echo "welcome " .$company;
// }

// welcome("nti");
// welcome();