<?php
$count=100000;
$startTime=microtime(1);
for ($i=0; $i<$count; $i++) {
	$file=file("123.txt");
}
echo "PHP_VERSION ". "Apache: чтение из текствого файла ". $count. "
раз = " .round((microtime(1)-$startTime)*1000, 3). " мс \n";