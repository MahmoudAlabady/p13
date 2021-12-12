<?php

// 

class contract {
    public $employeeName;
    public $mangerName;
    public $company;
    public $startDate;
    public $endDate;
    public $salary;
    public $position;
    public $ensurance = true;
}


$firstEmployee = new contract;
$firstEmployee->employeeName = 'Esraa';
$firstEmployee->mangerName = 'ahmed';
$firstEmployee->startDate = '1-1-2022';
$firstEmployee->endDate = '1-1-2023';
$firstEmployee->company = 'NTI';
$firstEmployee->salary = 10000;
$firstEmployee->position = 'backend';
print_r($firstEmployee);

$secondEmployee = new contract;
$secondEmployee->employeeName = 'Aya';
$secondEmployee->mangerName = 'ahmed';
$secondEmployee->startDate = '1-1-2022';
$secondEmployee->endDate = '1-1-2023';
$secondEmployee->company = 'NTI';
$secondEmployee->salary = 10000;
$secondEmployee->position = 'backend';
$secondEmployee->ensurance = false;
$secondEmployee->weekend = '3 days';
print_r($secondEmployee);
