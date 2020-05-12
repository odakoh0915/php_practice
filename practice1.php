<?php
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
