<?php
$json = file_get_contents('https://json-activity.herokuapp.com/json-1.php');

$data = json_decode($json,true);
$list = $data['articles'];

foreach($list as $value){
?>
<ul>
  <li> <?php echo $value['article_id'];?> </li>
  <li> <?php echo $value['article_title'];?> </li>
  <li> <?php echo $value['description'];?> </li>
  <li> <?php echo $value['author'];?> </li>
  <li> <?php echo $value['date_created'];?> </li>
</ul>
<?php
}
?>
