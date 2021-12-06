<?php
// $maxGradePerSubject = 120;

$math = 120;
$physics = 119;
$chem = 118;
$arabic = 117;
$english = 116;

// percentage ? grade ?
// >= 90% => A
// >= 80% => B
// >= 70% => C
// >= 60% => D
// >= 50% => D-
// <  50% => F

/////////////////////// solution ///////////////////////////////
$numberOfSubjects = 5;
$maxGradePerSubject = 120;
$maxGradePerYear = $maxGradePerSubject * $numberOfSubjects; // 600

$totalGradePerStudent = $math + $physics + $chem + $arabic + $english; // 500


$percentage = round(($totalGradePerStudent / $maxGradePerYear) * 100,1); // 80.3333

if($percentage >= 90){
    $grade = 'A';
}elseif($percentage >= 80 && $percentage < 90){
    $grade = "B";
}elseif($percentage >= 70 && $percentage < 80){
    $grade = "C";
}elseif($percentage >= 60 && $percentage < 70){
    $grade = "D";
}
elseif($percentage >= 50 && $percentage < 60){
    $grade = "D -";
}else{
    $grade = 'F';
}

echo "Your Percentage is $percentage% And Your Grade Is $grade";
// echo "Your Percentage is" . $percentage . '% And Your Grade Is' . $grade;