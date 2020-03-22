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

//function calc($a, $b, $operation){
//	return $operation($a, $b);
//}


function calc($a, $b, $operation) {
	switch ($operation) {
        case 'sum':
            echo 'Сложение ';
            return sum($a, $b);
        case 'difference':
            echo 'Вычитание ';
            return difference($a, $b);
        case 'increase':
            echo 'Умножение ';
            return increase($a, $b);
        case 'division':
            echo 'Деление ';
            return division($a, $b);
	}
}

echo calc(5, 20, 'sum'), "<br>";
echo calc(5, 20, 'difference'), "<br>";
echo calc(5, 20, 'increase'), "<br>";
echo calc(5, 20, 'division');