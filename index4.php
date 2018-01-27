<?php
$count=100;
$startTime=microtime(1);
$a=range(0, 30);
shuffle($a);
//var_dump(count($a));
for ($k=0; $k<$count; $k++) {
	$sort_length = count($a) - 1;
	$step = ceil(($sort_length + 1)/2);
	do
	{
	   $i = ceil($step);
	   do
	   {
	     $j=$i-$step;
	     $c=1;
	     do
	     {
	       if($a[$j]<=$a[$j+$step])
	       {
		  	$c=0;
	       }
	       else
		   {
		      $tmp=$a[$j];
		      $a[$j]=$a[$j+$step];
		      $a[$j+$step]=$tmp;
		   }
		$j=$j-1;
	     }
	     while($j>=0 && ($c==1));
	      $i = $i+1;
	    }
	    while($i<=$sort_length);
	    $step = $step/2;
	}
	while($step>0);
}
echo "PHP_VERSION ". "Apache: сортировка Шелла ". $count. "
раз = " .round((microtime(1)-$startTime)*1000, 3). " мс \n";