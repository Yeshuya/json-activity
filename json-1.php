<?php 
include 'config.php';
include 'class.articles.php';
header('Content-Type: application/json-activity');
$articles = new Articles();
$list=$articles->get_articles();
echo "{\"articles\":";
echo json_encode($list);
echo "}";
?>
