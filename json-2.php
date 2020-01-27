<?php
$json = file_get_contents('http://dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com/json-activity/index.php');

$data = json_decode($json,true);

$list = $data['articles'][1];

//var_dump($data);
//echo "<pre>";

print_r($list);

?>
