<?php 
$fname = "aya";
$lname = "ahmed";
// $nameTag = "<h1 class='h1'>" . $fname . ' ' . $lname . "</h1>";
// $nameTag = "<h1 class='h1'> $fname $lname </h1>";
$message = 'car\'s';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .h1 {
            color : red;
        }
    </style>
    <?php echo $message; ?>
</body>
</html>