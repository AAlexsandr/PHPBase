<?php 

function sum($a, $b){
	 return $a + $b;
}

function difference($a, $b){
	return $a - $b;
}

function increase($a, $b){
	return $a * $b;
}

function division($a, $b){
	return $a / $b;
}

echo sum(5, 20), "<br>";
echo difference(5, 20), "<br>";
echo increase(5, 20), "<br>";
echo division(5, 20);