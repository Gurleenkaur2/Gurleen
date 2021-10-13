<?php
include('connection.php');
session_start();
if(isset($_POST['token'])&&password_verify("getstudent",$_POST['token']))
{
$query = $db->prepare('SELECT * FROM student JOIN class ON student.classid  = class.id');
$data = array();
$execute = $query->execute($data);
?>
<table class="table table-bordered">
	<tr>
		<td>Sr no.</td> 
		<td>Name</td>
		<td>Class</td>
	</tr>
	<?php
	$srno=1; 
	while($datarow = $query->fetch())
	{
	?>
	<tr>
        <td><?php echo $srno?></td>
		<td><?php echo $datarow['name']?></td>
		<td><?php echo $datarow['cname']?></td>
	</tr>

<?php 
$srno++;
} ?>
</table>
<?php 
}
?>