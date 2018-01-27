<?php
$count=100000;
$var=0;
$startTime=microtime(1);
$arr=[
	1=>""
];
for ($i=0; $i<$count; $i++) {
	$arr[1]=5;
}
echo "PHP_VERSION ". "Apache: заполнение ассоциативного массива ". $count. "
раз = " .round((microtime(1)-$startTime)*1000, 3). " мс \n";