<?php
# app
// temp <= 0 => snow weather
// temp >= 30 => hot weather
// temp >= 1 => cold weather
// temp >= 15 => warm weather

$temp = 30;

// if($temp <= 0){
//     echo "snow weather";
// }elseif($temp >= 1 && $temp < 15){
//     echo "cold weather";
// }elseif($temp >= 15 && $temp < 30){
//     echo "warm weather";
// }else{
//     echo "hot weather";
// }


if($temp >= 30){
    echo "hot weather";
}elseif($temp >= 15 && $temp < 30){
    echo "warm weather";
}elseif($temp >= 1 && $temp < 15){
    echo "cold weather";
}else{
    echo "snow weather";
}

// echo $temp >= 30  ? 'hot weather' : ($temp >= 15 && $temp < 30 ? 'warm weather' : ($temp >= 1 && $temp < 15 ? 'cold weather' : 'snow weather'))


