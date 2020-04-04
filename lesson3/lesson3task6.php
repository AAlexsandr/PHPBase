<?php
$menuArray = [
	'Главная',
	'Новости' => ['Новости о спорте', 'Новости о политике', 'Новости о мире'],
	'Контакты',
	'Справка'
];

$menu = '';

foreach ($menuArray as $key => $item) {
	if (is_array($item)) {
		$menu .= "<div>";
		$menu .= "<a><span>{$key}</span></a>";
		$menu .= "<div>";

		foreach ($item as $subItem) {
			$menu .= "<a>{$subItem}</a>";
		}

		$menu .= "</div>";
		$menu .= "</div>";
	
	} else {
		$menu .= "<div><a><span>{$item}</span></a></div>";
	}
}

$title = 'LESSON3TASK6';

$html = file_get_contents('index66.html');
$html = str_replace('{MENU}', $menu, $html);
$html = str_replace('{TITLE}', $title, $html);

echo $html;