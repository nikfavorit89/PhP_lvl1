<?php
// задание первое
$a = 1
$b = 2
if ($a >= 0 && $b >= 0){
    return echo $a - $b;
}
else if ($a <= 0 && $b <= 0){
    return echo $a * $b;
}
else if ($a >= 0 && $b <= 0 || $a <= 0 && $b >= 0){
    return echo $a + $b;
}
?>

// задание второе

<?php
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