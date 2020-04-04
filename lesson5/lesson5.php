<?php
$db = db_connect();

if (!empty($_GET['id'])) {
	$id = (int)$_GET['id'];
	$content = getImage($id, $db);
	increment_view($id, $db);

} else {
	$content = getGallery($db);
}
mysqli_close($db);

$tmpl = file_get_contents('lesson5.html');
echo str_replace('{CONTENT}', $content, $tmpl);


function db_connect() {
	$link = mysqli_connect("127.0.0.1", "root", "", "mybase");

	return $link;
}

function getGallery($db) {

	$sql = <<<sql
		select * from gallery 
		order by name DESC
sql;
	$gallery = mysqli_query($db, $sql);

	$content = '<ul id="gallery">';
	while($res = mysqli_fetch_assoc($gallery)) {
		
		$content .= '<li><a href="?id=' .$res['id'].'"><img onclick="showImg(this)" src="' . $res['url'].'" width="150" height="150"/></a>';
	}
	$content .= '</ul>';

	return $content;
}

function getImage($id, $db) {
	$db = db_connect();

	$sql = <<<sql
		select url from gallery 
		where id = $id
sql;
	$gallery = mysqli_query($db, $sql);

	$img = mysqli_fetch_assoc($gallery);

	if (!$img) {
		redirect();
	}

	return '<img src="'.$img['url'].'"/>';
}

function redirect() {
	header('location: ?');
	exit;
}

function increment_view($id, $db) {
	$sqlUpdate = <<<sql
				update gallery
				set views = views+1
				where id = $id
sql;
	mysqli_query($db, $sqlUpdate);
}
?>