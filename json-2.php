<?php
$json = file_get_contents('http://dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com/json-activity/json-1.php');

$data = json_decode($json,true);
$list = $data['articles'][1];

foreach($list as $value){
  echo $value['article_id'];
  echo $value['article_title'];
  echo $value['description'];
  echo $value['author'];
  echo $value['date_created'];
}

?>
