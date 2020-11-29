<?php

// 課題１
function one($number) {
    return $number*2;
}
echo one(4);
echo "\n";


// 課題２
function two($a,$b) {
    return $a + $b;
}
echo two(2,5);
echo "\n";


// 課題３
function three($arr) {
  $res = 1;
  foreach ($arr as $value) {
    $res *= $value;
    }
echo ("計算結果：" . $res); 
}
three(array(1,3,5,7,9));
echo "\n";

// 課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
    if ($max_number < $a){
    $max_number = $a;
    }
    }
    return $max_number;
}
echo max_array(array(100,39,49,38,20,3,));
echo "\n";

// 課題５

//strip_tags
$str = "<h1>strip_tags関数</h1>"
       ."<p>タグ取り除く</p>";
echo strip_tags($str)."\n";

//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2, array());
print_r($result);

//time
echo time();
echo "\n";

//mktime date
$date = mktime(0,0,0,11,29);
echo date( "n月j日", $date);

?>


