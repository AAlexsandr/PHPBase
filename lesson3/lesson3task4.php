<?php

$str = "Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания.";

function translit ($str) {

  $alphabet = [
    'а' => 'a',   
	'б' => 'b',   
	'в' => 'v',
    'г' => 'g',   
	'д' => 'd',   
	'е' => 'e',
    'ё' => 'e',   
	'ж' => 'zh',  
	'з' => 'z',
    'и' => 'i',   
	'й' => 'y',   
	'к' => 'k',
    'л' => 'l',   
	'м' => 'm',   
	'н' => 'n',
    'о' => 'o',   
	'п' => 'p',   
	'р' => 'r',
    'с' => 's',   
	'т' => 't',   
	'у' => 'u',
    'ф' => 'f',   
	'х' => 'h',   
	'ц' => 'c',
    'ч' => 'ch',  
	'ш' => 'sh',  
	'щ' => 'sch',
    'ь' => '\'',  
	'ы' => 'y',   
	'ъ' => '\'',
    'э' => 'e',   
	'ю' => 'yu',  
	'я' => 'ya'
  ];
  
  
    $array1 = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($array1 as $key => $character) {
        foreach ($alphabet as $rus => $trans) {
            if ($character == $rus) {
                $array1[$key] = $trans;
                break;
            } elseif ($character == mb_strtoupper($rus)) {
                $array1[$key] = mb_strtoupper($trans);
                break;
            }
        }
    }
    return implode($array1);
}
echo "<b>Исходная строка:</b> $str <hr>";
echo "<b>Преобразованная:</b>" . translit($str);