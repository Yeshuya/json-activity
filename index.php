<?php
$json = file_get_contents('http://localhost/json-activity/json.php');

$data = json_decode($json,true);

$list = $data['articles'][1];

//var_dump($data);
//echo "<pre>";

print_r($list);

?>
