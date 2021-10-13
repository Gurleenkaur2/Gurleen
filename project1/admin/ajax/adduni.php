<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("university",$_POST['token']))
{
$name = test_input($_POST['name']);
    $query= $db->prepare('INSERT INTO uni_details(uname) VALUES(?)');
    $data = array($name);
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