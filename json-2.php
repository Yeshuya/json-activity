<style>

    .content{
        display: flex;
        justify-content: center;
    }
	table{
		border: 1px solid black;
		width: 100%;
		text-align: center;
		
	}
	th, td{
		border: 1px solid #ddd;
		padding: 10px;

	}
    tr:nth-child(even) {background-color: pink;}
	a {
		color: #66fcf1;
	}
    .head{
		background-color: #45a29e;
		color: #1f2833;
		font-weight: bold;
	}
</style>


<?php
$json = file_get_contents('https://json-activity.herokuapp.com/json-1.php');

$data = json_decode($json,true);
$list = $data['articles'];
//$list = $data['pets'][1];


//var_dump($data);
//echo "<pre>";

//print_r($list);
?>
<div class="content">
<h1>ARTICLES</h1>
</div>
<div class="content">
<table border="1px">
    <tr class="head">
        <td>Article ID</td>
        <td>Article Title</td>
        <td>Content</td>
        <td>Author</td>
        <td>Date Created</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['article_id'];?></td>
        <td><?php echo $value['article_title'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['author'];?></td>
        <td><?php echo $value['date_created'];?></td>
    </tr>
<?php
}
?>
</table>
</div>
