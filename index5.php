<?php
$count=100000;
$arr=["HelloWorld","Hello World!"];
$startTime=microtime(1);
for ($i=0; $i<$count; $i++) {
	$result=strcmp($arr[0], $arr[1]);
}
echo "PHP_VERSION ". "Apache: сравнение двух элементов массива строк ". $count. "
раз = " .round((microtime(1)-$startTime)*1000, 3). " мс \n";