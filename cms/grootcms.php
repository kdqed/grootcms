<?php
  include 'Parsedown.php';
  $Parsedown = new Parsedown();
  $uri = rtrim($_SERVER["REQUEST_URI"],'/ ');
  $path1 = 'content'.$uri.'/index.md';
  $path2 = 'content'.$uri.'.md';
  if (file_exists($path1)){
    $content = fopen($path1,'r') or die('File Open Error');
    echo $Parsedown->text(fread($content,filesize($path1)));
    fclose($content);
  }
  elseif (file_exists($path2)){
    $content = fopen($path2,'r') or die('File Open Error');
    echo $Parsedown->text(fread($content,filesize($path2)));
    fclose($content);
  }
  else{
    echo 'File not found';
  }
?>
