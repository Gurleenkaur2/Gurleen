<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("test",$_POST['token']))
{
$testname = test_input($_POST['testname']);
$classid = test_input($_POST['classid']);
    $query= $db->prepare('INSERT INTO test(tname,classid) VALUES(?,?)');
    $data = array($testname,$classid);
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