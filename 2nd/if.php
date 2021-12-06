<?php


// if(TRUE || FALSE){
    // do something 
// }


$gender = 'm'; // f , m
$salary = 1000; // < 5000 => poor , >= 5000 => rich

// if($gender == 'f'){
//     if($salary >= 5000){
//         echo "rich girl";
//     }else{
//         echo "poor girl";
//     }
// }else{
//    if($salary >= 5000){
//        echo "rich boy";
//    } else{
//        echo "poor boy";
//    }
// }

// if($gender == 'f' AND $salary >= 5000){
//     echo "rich girl";
// }elseif($gender == 'f' AND $salary < 5000){
//     echo "poor girl";
// }elseif($gender == 'm' AND $salary < 5000){
//     echo "poor boy";
// }else{
//     echo "rich boy";
// }

if($gender == 'm'){
    $gender = 'boy';
}

if($gender == 'f'){
    $gender = 'girl';
}

if($salary >= 5000){
    $status = 'rich';
}

if($salary < 5000){
    $status = 'poor';
}


echo $status . ' ' . $gender;