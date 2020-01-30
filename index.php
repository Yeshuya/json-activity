<?php
$json = file_get_contents('https://json-activity.herokuapp.com/json-1.php');

$data = json_decode($json,true);
$list = $data['articles'];
//$list = $data['pets'][1];

?>

<h1>ARTICLES</h1>

<table border="1px">
    <tr class="head">
        <td>Article Title</td>
        <td>Content</td>
        <td>Author</td>
        <td>Date Created</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['article_title'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['author'];?></td>
        <td><?php echo $value['date_created'];?></td>
    </tr>
<?php
}
?>
</table>
