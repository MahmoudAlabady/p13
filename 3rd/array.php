<?php

# indexed array
// $array = [1,1.5,'string',true,null,[],(object)[],];

$names = ['ahmed','mohamed','aya','abeer','hossam','kero','ahmed',5,null];
// element => (index,value)
// array -> 6 elements
// last index -> 5
// last index = count - 1
// $lastIndex = count($names) - 1;



// echo $names[5]; // get value
$names[7] = 'hassan'; // set value
$names[10] = 'donya';
$names[-10] = 'abdo';
$names[-9] = 'eslam';
$names[8] = 'galal';
$names[1] = 'ahmed'; // edit value
// print_r($names);


# associative array
$products = [
    'product1'=>'laptop',
    'product2'=>null,
    'product3'=>55,
    'product4'=>'tshirt'
];
// element => (key,value)
// echo $products['product3']; // geet value
$products['product5'] = 'desktop'; // set value
$products['product3'] = 'mouse'; // edit value
// print_r($products);


# OBJECT
$user = (object)[
    'id'=>5,
    'name'=>'galal',
    'status'=>1,
    'code'=>12345,
    'email'=>'galal@gmail.com'
];
// element(property,value)
// -> object operator

// echo $user->code; // get value
$user->phone = 1000498488; // set value;
$user->name = 'kero'; /// edit value
// print_r($user);


