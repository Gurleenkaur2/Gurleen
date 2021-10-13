<?php
include('connection.php');
session_start();
if(isset($_POST['token'])&&password_verify("getteacher",$_POST['token']))
{
$query = $db->prepare('SELECT * FROM teacher JOIN class ON teacher.classid  = class.id JOIN uni_details ON class.uid = uni_details.id ');
$data = array();
$execute = $query->execute($data);
?>
<table class="table table-bordered">
	<tr>
		<td>Sr no.</td> 
		<td>Name</td>
		<td>Email</td>
		<td>Class</td>
		<td>University</td>
		<td></td>
	</tr>
	<?php
	$srno=1; 
	while($datarow = $query->fetch())
	{
	?>
	<tr>
        <td><?php echo $srno?></td>
		<td><?php echo $datarow['name']?></td>
		<td><?php echo $datarow['email']?></td>
		<td><?php echo $datarow['cname']?></td>
		<td><?php echo $datarow['uname']?></td>
	</tr>
<?php 
$srno++;
} ?>
</table>
<?php 
}
?>
