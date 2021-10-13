<?php
include('connection.php');
session_start();
if(isset($_POST['token'])&&password_verify("getclass",$_POST['token']))
{
	$uid=$_POST['uid'];
$query = $db->prepare('SELECT * FROM class WHERE uid=?');
$data = array($uid);
$execute = $query->execute($data);
?>
<select name="class" id="class" class="form-control">
	<?php
	while($datarow = $query->fetch())
	{


	?>
	<option value="<?php echo $datarow['id'];?>" ><?php echo $datarow['cname'];?></option>
<?php } ?>
</select>
<?php 
}
?>