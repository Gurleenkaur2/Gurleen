<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("addteacher",$_POST['token']))
{
$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$classid = test_input($_POST['classid']);
$password1_hash=password_hash(substr($name,0,4)."9876",PASSWORD_DEFAULT);
    $query= $db->prepare('INSERT INTO teacher(name,email,password,classid) VALUES(?,?,?,?)');
    $data = array($name,$email,$password1_hash,$classid);
    $execute = $query->execute($data);
    if($execute)
    {

       echo 0;
    }
    else
    {
       echo 1;
    }
 }

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>