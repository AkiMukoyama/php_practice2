<?php
//1
function double($num){
    echo $num*2;
}

echo double(5);
echo "\n";

//2
function sum($num1,$num2){
    echo $num1+$num2;
}
sum(1,3);
echo "\n";

//3

$arr = array(1,3,5,7,9);
$result = array_product( $arr ) ;

	echo "\n";
	echo $result;
	echo "\n";

//4
/*
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }

    return $max_number;
 }
 echo $max_number;
 //5
 
$str = "<p><?php var_dump('string'); ?>テスト<br>テキスト</p>";

echo strip_tags( $str, '<h1><br>');*/
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>


