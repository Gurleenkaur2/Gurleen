<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("logintoken",$_POST['token']))
{
$sid = test_input($_POST['sid']);
$studentname = test_input($_POST['name']);
$password = test_input($_POST['password']);

$query = $db->prepare('SELECT * FROM student WHERE name = ?');
$data = array($studentname);
$execute = $query->execute($data);
if($query -> rowcount() > 0)
{
   while($datarow = $query->fetch())
   {
      if(password_verify($sid, $datarow['sid']))
      {
      if(password_verify($password, $datarow['password']))
      {
         $_SESSION['studentname']=$datarow['name'];
         echo 0;
      }
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
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


