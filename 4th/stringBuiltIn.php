<?php

// $users = ['galal','abdelwahed','husseny'];
// 'galal abdelwahed husseny';
// echo implode(' ',$users);
$activties = ['gym','swimming','running'];
// my fav activities is :gym , swimming , running
$message =  "my fav activities is :" . implode(' , ',$activties);
// echo $message;


// print_r(explode(' ',$message));
$password = 123456;

// echo sha1($password);
echo "<br>";
// echo md5($password);
echo "<br>";
// echo crypt($password,rand(121212,2121212121).'sss')."\n<br>"; 
