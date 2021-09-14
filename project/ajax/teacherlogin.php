<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("teacherlogintoken",$_POST['token']))
{

$email = $_POST['mail'];
$password = $_POST['pass'];

$query = $db->prepare('SELECT * FROM teacher WHERE email = ?');
$data = array($email);
$execute = $query->execute($data);
if($query -> rowcount() > 0)
{
   while($datarow = $query->fetch())
   {
   	if(password_verify($password, $datarow['password']))
   	{
         $_SESSION['id'] = $datarow['id'];
   		$_SESSION['email'] = $datarow['email'];
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