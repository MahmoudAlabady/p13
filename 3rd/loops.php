<?php
# for loop
// for(intial counter; condition ; step){
//     something to repeat
// }

// for($counter = 2; $counter <= 10 ;$counter+=2){
//     echo "hello<br>";
// }



$names = ['ahmed','mohamed','aya','abeer','hossam','kero'];
$lastIndex = count($names) - 1;

// for ($i=0; $i <= $lastIndex; $i++) { 
//     echo $names[$i].'<br>';
// }

// for($i = $lastIndex; $i >= 0 ;$i--){
//     echo $names[$i].'<br>';
// }
/*************************************************************************** */
# while loop
// intial counter
// while(condition){
//     something to repeat


//     step
// }

// $counter = 0;
// while($counter <= $lastIndex){
//     echo $names[$counter].'<br>';

//     $counter++;
// }

// $counter = $lastIndex;
// while($counter >= 0){
//     echo $names[$counter].'<br>';

//     $counter--;
// }

// $counter = 10;
// while($counter <= 100){
//     echo 'hello<br>';
//     $counter+=10;
// }


/*************************************************************************** */
# do while loop
// intial counter
// do {
    // something to repeat 

    // step 
// }while(condition);

// $counter = 0;
// do { 
//     echo $names[$counter] . '<br>';
//     $counter ++;
// }while($counter <= $lastIndex);

// $i = $lastIndex;
// do {
//     echo $names[$i].'<br>';

//     $i--;
// }while($i >= 0);

// $counter =2;
// do {
//     echo "hello<br>";

//     $counter+=2;
// }while($counter <= 4);


/******************************************************************************** */

# foreach loop

// foreach ($container AS $v1=>$v2){
    // something to repeat 
// }
// indexed (index,value);
// foreach($names AS $index=>$value){
//     echo $index.'=>'.$value.'<br>';
// }


// $products = ['id'=>5,'name'=>'laptop','price'=>12000];

// foreach($products AS $key=>$value){
//     echo $key.'=>'.$value.'<br>';
// }


// $products = (object)['id'=>5,'name'=>'laptop','price'=>12000];
// foreach($products as $property=>$value){
//     echo $property.'=>'.$value.'<br>';
// }
