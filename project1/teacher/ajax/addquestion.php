<?php
include('connection.php');
session_start();
if(isset($_POST['token']) && password_verify("addquestion",$_POST['token']))
{
$testid = test_input($_POST['testid']);
$question = test_input($_POST['question']);
$option1 = test_input($_POST['option1']);
$option2 = test_input($_POST['option2']);
$option3 = test_input($_POST['option3']);
$option4 = test_input($_POST['option4']);
$optioncorrect = test_input($_POST['optioncorrect']);
    $query= $db->prepare('INSERT INTO question(testid,question,option1,option2,option3,option4,optioncorrect) VALUES(?,?,?,?,?,?,?)');
    $data = array($testid,$question,$option1,$option2,$option3,$option4,$optioncorrect);
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