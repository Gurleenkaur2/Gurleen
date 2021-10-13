<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="col-sm-12 top"></div>
              <div class="col-sm-12 head">WELCOME TO ADMIN DASHBOARD</div>

                <div class="col-sm-2 left">
                    <div class="list">
                        <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="admindashboard.php">Dashboard</a></li><br>
                        <li><i class="fa fa-chalkboard-teacher" aria-hidden="true"></i><a href="addteacher.php">Add Teacher</a></li><br><!--new line-->
                        <li><i class="fa fa-university" aria-hidden="true"></i><a href="adduni.php">Add University</a></li><br>
                        <li><i class="fa fa-chalkboard" aria-hidden="true"></i><a href="addclass.php">Add Class</a></li><br>
                        <li><i class="fa fa-sign-out-alt" aria-hidden="true"></i><a href="signout.php">SignOut</a></li>
                        </ul>
                    </div>                     

                </div>  
                <div class="col-sm-10">
                   <!--  name display krvauna aaa -->
                    </div>              
                
                </div>

    
<script type="text/javascript">
    $('form').submit(function(e){
    e.preventDefault();
    });
    </script>               

</body>

</html>