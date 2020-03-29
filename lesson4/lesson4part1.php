<?php
	include_once('lesson4part2.php');

	$dirname = 'img';
	$method = 'GET';

	if (!empty($_FILES['img'])) { 
		if (move_uploaded_file($_FILES['img']['tmp_name'], $upploadfile)) {
		    echo "Файл был успешно загружен.<br>";
		} else {
		    echo "Ошибка загрузки<br>";
		}
		$method = 'POST';
	}

	$gallery = scandir($dirname);
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-5">
<link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Галерея</h1>
	
	<ul id="gallery">
		<?php
			foreach($gallery as $item) {
				if (in_array(substr($item, -3), array('jpg', 'png'))) {
					$url = $dirname . '/' .$item;
					echo '<li><a href="#"><img onclick="showImg(this)" src="'. $url .'" width="150" /></a>';
				}
			}
		?>
	</ul>
	<div id="modal">
		<img width=700 id="modal_img" src="" onclick="hideImg()">
	</div>
	<div id="veil"></div>
</body>
<script src="main.js"></script>
</html>