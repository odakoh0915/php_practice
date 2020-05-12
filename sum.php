<?php
//課題1
function sum($number) {
    return $number*2;
}
echo sum(10);

//課題2
function f($a,$b) {
    return $a + $b;
}
echo f(1,1);

//課題3
function sub($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo sub(array(1, 3, 5 ,7, 9));

//課題4

//課題5
$string = '<a href="tech-boost.jp">techboost</a>';
$result = strip_tags($string);
echo $result;

$date = array("A", "B", "C",);
array_push($date,"D", "E");
echo $date;

?>
