<?php
//課題1
function sum($number) {
    return $number*2;
}
echo sum(10);
?>

<?php
//課題2
function f($a,$b) {
    return $a + $b;
}
echo f(1,1);
?>

<?php
//課題3
function product($arr){
    $result = 1;
    foreach($arr as $number){
        $result *= $number;
    }
    return $result;
}
echo product(array(1, 3, 5, 7, 9));
?>

<?php
//課題4
function max_array($arr) {
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;    
}
echo max_array(array(1, 3, 5, 7, 9));
?>

<?php
//課題５
//strip_tags
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
?>

<?php
//array_push
$date = array("A", "B", "C");
array_push($date, "D", "E");
print_r($date);
?>

<?php
//array_merge
$date = array("TV1" => "1000", "TV2" => "1000", "RADIO1" => "600");
$add_date = array("TV1" => "2000", "RADIO2" => "800");
$result = array_merge($date, $add_date);
print_r($result);
?>

<?php
//time
$now = time();
echo $now;
?>

<?php
//mktime
$timestamp = mktime(0, 0, 0, 20, 11, 2015);
print $timestamp;
?>

<?php
//date
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
?>