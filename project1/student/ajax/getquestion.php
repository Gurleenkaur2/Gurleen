<?php
include('connection.php');
session_start();
if(isset($_POST['token'])&&password_verify("getquestion",$_POST['token']))
{
$query = $db->prepare('SELECT * FROM question');
$data = array();
$execute = $query->execute($data);

	while($datarow = $query->fetch())
	{
?>
<form style="font-size:20px;">
	<p><?php echo $datarow['id'];?>. <?php echo $datarow['question']?></p>
	<p><input id="1" type="radio" name="1" value="<?php echo $datarow['id']?>"> <?php echo $datarow['option1']?></p>
	<p><input id="2" type="radio" name="1" value="<?php echo $datarow['id']?>"> <?php echo $datarow['option2']?></p>
	<p><input id="3" type="radio" name="1" value="<?php echo $datarow['id']?>"> <?php echo $datarow['option3']?></p>
	<p><input id="4" type="radio" name="1" value="<?php echo $datarow['id']?>"> <?php echo $datarow['option4']?></p>
	</form>
<?php } ?>

<?php 
}
?>