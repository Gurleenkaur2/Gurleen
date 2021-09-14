<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("studentlogintoken",$_POST['token']))
{

$name = $_POST['name'];
$password = $_POST['pass'];

$query = $db->prepare('SELECT * FROM student_login WHERE name = ?');
$data = array($name);
$execute = $query->execute($data);
if($query -> rowcount() > 0)
{
   while($datarow = $query->fetch())
   {
   	if(password_verify($password, $datarow['password']))
   	{
   		$_SESSION['id'] = $datarow['uid'];
   		$_SESSION['name'] = $datarow['name'];
   		echo 0;
   	}
      
   }
}
else
{
	echo "Please signup no data found.";
}

}
else
{
	echo "server error";
}
?>