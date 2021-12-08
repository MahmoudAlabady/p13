<?php

// function hello()
// {
//     return 'ok';
//     echo "hello";
// }

// hello();

$gender = 'm';

function checkGender($gender){
    if($gender == 'm'){
        return 'male';
    }
    return 'female';
}


function checkGender2($gender){
    if($gender == 'm'){
        return 'male';
    }else{
        return 'female';
    }
}


echo checkGender2($gender);

echo checkGender($gender);