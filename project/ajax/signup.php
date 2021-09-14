<?php
include('connection.php');
if(isset($_POST['token']) && password_verify("signuptoken",$_POST['token']))
{

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($email!="" && $password!="")
{
  $query = $db->prepare("INSERT INTO users(email,password) VALUES(?,?)");
  $data = array($email,password_hash($password,PASSWORD_DEFAULT));
  $execute = $query->execute($data);
  if($execute)
  {
  	echo 0;
  }
  else
  {
  	echo "something went wrong";
  }
}
}
else
{
	echo "server error";
}
?>