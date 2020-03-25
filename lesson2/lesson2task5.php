<?php
$title = 'Lesson2';
$content = 'HELLO World!!';
$year = date('Y');
$html = file_get_contents('lesson2task5.html');
$html = str_replace('{TITLE}', $title, $html);
$html = str_replace('{CONTENT}', $content, $html);
$html = str_replace('{YEAR}', $year, $html);
echo $html;