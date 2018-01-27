<?php
$count=10000;
$startTime=microtime(1);
$str="Loremipsum dolorem";
//var_dump(count($a));
for ($k=0; $k<$count; $k++) {
	$newstr = explode(" ", $str);
}
echo "PHP_VERSION ". "Apache: разбиение строки по разделителю ". $count. "
раз = " .round((microtime(1)-$startTime)*1000, 3). " мс \n";