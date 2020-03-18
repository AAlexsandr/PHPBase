<?php
$title = 'LESSON1';
$h1 = 'Раскоментировать задания.';
$year = date('d F, Y');
?>

<! doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
	<title><?php echo $title; ?></title>
</head>
<body>

<!-- task 2 -->
<?php
/*$a = 4;
$b = 5;
echo $a + $b . '<br>' ; // сложение
echo $a * $b . '<br>' ; // умножение
echo $a - $b . '<br>' ; // вычитание
echo $a / $b . '<br>' ; // деление
echo $a % $b . '<br>' ; // остаток от деления 4 т.к. меньше 5
echo $a ** $b . '<br>' ; // возведение в степень 4 возводится в 5 степень */
?> 

<?php
/* $a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a; //9 т.к. в строке 25 производится сложение 4+5
$a = 0;		// переменной а присваивается значение 0
echo $a ++; // Постинкремент 0 т.к. выводит значение, а после прибавляет 1
echo ++ $a; // Преинкремент 2 сначала прибавляет 1, а потом выводит значение
echo $a --; // Постдекремент 2 т.к. вывел значение, а потом вычел 1
echo -- $a; // Предекремент 0 т.к. из 1 вычел 1 и потом вывел значение. */
?>

<?php
/* $a = 4;
$b = 5;
var_dump ( $a == $b ); // Сравнение по значению
var_dump ( $a === $b ); // Сравнение по значению и типу
var_dump ( $a > $b ); // Больше
var_dump ( $a < $b ); // Меньше
var_dump ( $a <> $b ); // Не равно
var_dump ( $a != $b ); // Не равно
var_dump ( $a !== $b ); // Не равно без приведения типов
var_dump ( $a <= $b ); // Меньше или равно
var_dump ( $a >= $b ); // Больше или равно 
// по поводу сравнений все елементарно и понятно
*/
?>


<!-- task 3 -->
<?php
   /* $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? переременная b приводится к 5
    var_dump((int)'012345');     // Почему 12345? целое число с 0 не начинается
    var_dump((float)123.0 === (int)123.0); // Почему false? Не совпадает тип 
    var_dump((int)0 === (int)'hello, world'); // Почему true? строку приведет к нулю и одинаковые типы.
*/
?>


<!-- task 4 -->

<h1><?php echo $h1; ?></h1>
<h2><?php echo $year; ?></h2>

<!-- task 5 -->
<?php 
/*	$a = 1;
	$b = 2;
	$a = $a^$b;
	$b = $a^$b;
	$a = $a^$b;
	echo 'Переменная $a=' . $a . '<br>';
	echo 'Переменная $b=' . $b;
	*/
?>

</body>
</html>
