<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("student",$_POST['token']))
{
$sname = test_input($_POST['sname']);
$classid = test_input($_POST['classid']);
$password_hash=password_hash(substr($sname,0,4)."1234",PASSWORD_DEFAULT);
    $query= $db->prepare('INSERT INTO student(name,classid,password) VALUES(?,?,?)');
    $data = array($sname,$classid,$password_hash);
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


