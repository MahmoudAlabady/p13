<?php

$color = 'red';

// switch (variable){
//     case 'value': 
//         do something
//         break;
//     default: 
//         do something2
// }

switch($color){
    case 'black':
    case 'blue': 
    case 'white':
        echo "i love this color";
        break;
    default:
        echo "i don't love this color";
}