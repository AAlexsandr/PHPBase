<?php
define("PUBLIC_DIR", ".");
$dir = $_GET['dir'];
if (!$dir) $dir = PUBLIC_DIR;

function spaces($path)
{
    $count = substr_count($path, "/") - 1;
    $space = str_repeat("&nbsp; &nbsp; ", $count);
    return $space;
}

function render($directory, $filename){
    if ($filename == "." || $filename == ".."){
        return;
    }
    $path = $directory . "/" . $filename;
    echo spaces($path) . "{$type}{$filename}{$fileInfo}<br>";
}

function viewDir($directory = PUBLIC_DIR)
{
    $dir = opendir($directory);
    while ($filename = readdir($dir)) {
        $path = $directory . "/" . $filename;
        render($directory, $filename);
        if (is_dir($path) && $filename != "." && $filename != "..") {
            viewDir($path);
        }
    }
    closedir($dir);
}

viewDir($dir);