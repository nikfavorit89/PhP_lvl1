<?php
// задание первое
$a = 1
$b = 2
if ($a >= 0 && $b >= 0){
    return  $a - $b;
}
else if ($a <= 0 && $b <= 0){
    return  $a * $b;
}
else if ($a >= 0 && $b <= 0 || $a <= 0 && $b >= 0){
    return  $a + $b;
}
<br>


// задание второе

$a = rand(0,15)
switch $a {
    case $a = 0:
       echo "a = 0"."<br>";
    case $a = 1:
       echo "a = 1"."<br>";
    case $a = 2:
       echo "a = 2"."<br>";
    case $a = 3:
       echo "a = 3"."<br>";
    case $a = 4:
       echo "a = 4"."<br>";
    case $a = 5:
       echo "a = 5"."<br>";
    case $a = 6:
       echo "a = 6"."<br>";
    case $a = 7:
       echo "a = 7"."<br>";
    case $a = 8:
       echo "a = 8"."<br>";
    case $a = 9:
       echo "a = 9"."<br>";
    case $a = 10:
       echo "a = 10"."<br>";
    case $a = 11:
       echo "a = 11"."<br>";
    case $a = 12:
       echo "a = 12"."<br>";
    case $a = 13:
       echo "a = 13"."<br>";
    case $a = 14:
       echo "a = 14"."<br>";
    case $a = 15:
       echo "a = 15"."<br>";
       break;
}
<br>

// звдание 3
function summ ($a, $b){
    return $a + $b;
}
function razn ($a, $b){
    return $a - $b;
}
function proizv ($a, $b){
    return $a * $b;
}
function del ($a, $b){
   if ($b === 0){
      echo "на ноль делить нельзя";
   }
    return $a / $b;
}
<br>

// задание 4
$operation = [summ ($arg1,  $arg2), razn ($arg1, $arg2), proizv ($arg1,  $arg2), del ($arg1,  $arg2)];
$operation1 = $operation[rand(0,3)];
function mathOperation($arg1, $arg2, $operation1) {
    switch ($operation1) {
        case "summ ($arg1,  $arg2)":
            echo "сумма arg1 и arg2 = ".summ ($arg1,  $arg2);
            break;
        case "razn ($arg1, $arg2)":
            echo "разность arg1 и arg2 = ".razn ($arg1, $arg2);
            break;
        case "proizv ($arg1,  $arg2)":
            echo "произведение arg1 и arg2 = ".proizv ($arg1,  $arg2);
            break;
        case "del ($arg1,  $arg2)":
            echo "деление arg1 на arg2 = ".del ($arg1,  $arg2);
            break;
        default:
            echo "несуществующее значение операции";
    }
}
<br>

// задание 5
function power($val, $pow){
        if ($pow == 0);
        return 1;
    return $val * power ($val, ($pow - 1));

}