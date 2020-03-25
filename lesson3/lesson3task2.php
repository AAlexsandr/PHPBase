<?php
$i = 0;
do {
	$string = "нечетное число";
	if ($i == 0) {
		$string = "ноль";
	} elseif (($i % 2) == 0) {
		$string = "четное число";
	}
	echo "$i - это " . $string . ".<br>";
} 
while (++$i <= 10);