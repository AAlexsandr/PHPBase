<?php 

$a = 10;
$b = 6;

if ($a >= 0 && $b >= 0) {
            echo ($a - $b);
        } elseif ($a < 0 && $b < 0) {
            echo ($a * $b);
        } elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
            echo ($a + $b);
        }