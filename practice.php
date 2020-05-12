<?php
echo 'hello php!';

$a=3;
$b=7;
echo $a + $b;

$array_month = ["January","February","March","Aplil","May","June","july","August","September","Octorber","Norvember","December"];
echo $array_month [7];

$hello="Hello,";
$name="小田康祐";
$world="s World!";
echo $hello.$name.$world;

$tech_boost="tech";
$tech_boost.="boost";
echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calendar_2018["December"];

//課題1
$name = "小田康祐";
if ($name == 小田康祐) {
    echo "私は小田康祐です。";
} else {
    echo "あなたは小田康祐ではありません。";
}

//課題2
$totle = 0;
for($i=0; $i<=10000; $i++) {
    $totle += $i;
}
echo $totle;

//課題3
$fruits = array("apple, orange, meron, peach, greape");
foreach($fruits as $fluit) {
    echo "好きなフルーツは" .$fluit;
    echo "\n";
}

//課題4
$start = 1;
for($i=1; $i<=100; $i++) {
    if($i % 5 == 0) {
    echo $i;
    }
}