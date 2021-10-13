<?php
include('connection.php');
session_start();
if(isset($_POST['token'])&&password_verify("gettest",$_POST['token']))
{
	$classid=$_POST['classid'];
$query = $db->prepare('SELECT * FROM test WHERE classid=?');
$data = array($classid);
$execute = $query->execute($data);
?>
<select name="test" id="test" class="form-control">
	<?php
	while($datarow = $query->fetch())
	{


	?>
	<option value="<?php echo $datarow['id'];?>" ><?php echo $datarow['tname'];?></option>
<?php } ?>
</select>
<?php 
}
?>