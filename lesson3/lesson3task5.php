<?php

$string = "Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания.";

function withoutSpace (string $str) {
 return preg_replace('/\s/','_', $str). "<br>";
}

echo withoutSpace($string);