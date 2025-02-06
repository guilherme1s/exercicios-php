<?php 
function adjustSalaryCalc($initialSalary) {
    switch(true) {
        case ($initialSalary <= 280):
            $percent = 20;
            break;
        case ($initialSalary <= 700):
            $percent = 15;
            break;
        case ($initialSalary <= 1500):
            $percent = 10;
            break;
        default:
            $percent = 5;
    }

    $increasedValue = $initialSalary * ($percent / 100);
    $adjustedSalary = $initialSalary + $increasedValue;

    return [
        'initialSalary' => $initialSalary,
        'percent' => $percent,
        'increasedValue' => $increasedValue,
        'adjustedSalary' => $adjustedSalary
    ];
}
?>