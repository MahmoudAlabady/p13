
<?php

$prices = [200, 1500.5, 2000, 5000, 6000];
// i/p 
// < 1000 => no discount
// 1000 - 2000 => discount 10%
// > 2000 => discount 20%

// o/p 
// 200
// 1350
// 1800
// 4000
// 4800

/*************************************************************************************** */

// function discount($price) {
//     // 200
//     if($price < 1000){
//         $discount = 0;
//     }elseif($price >= 1000 && $price <= 2000){
//         $discount = 0.1;
//     }else{
//         $discount = 0.2;
//     }
//     $discountValue = $price * $discount;
//     $priceAfterDiscount = $price - $discountValue;
//     return $priceAfterDiscount;
// }

// function printDiscount($prices){
//     foreach ($prices as  $price) {
//         echo discount($price).'<br>';
//     }
// }

// printDiscount($prices);
/******************************************************************************************************** */
// function discountV2($prices)
// {
//     foreach ($prices as $index => $price) {
//         if ($price < 1000) {
//             $discount = 0;
//         } elseif ($price >= 1000 && $price <= 2000) {
//             $discount = 0.1;
//         } else {
//             $discount = 0.2;
//         }
//         $discountValue = $price * $discount;
//         $priceAfterDiscount = $price - $discountValue;
//         echo $priceAfterDiscount . '<br>';
//     }
// }
// discountV2($prices);


// SOLID principles