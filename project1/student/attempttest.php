<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attempt Test</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="col-sm-12 top"></div>
              <div class="col-sm-12 head"><i class="fa fa-user" style="font-size:50px; color:black;"></i>ADMIN WORKSPACE</div>
                <div class="col-sm-2 left">
                    <div class="list">
                    <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="studentdashboard.php">Dashboard</a></li><br>
                        <li><i class="fa fa-brain" aria-hidden="true"></i><a href="attempttest.php">Attempt Test</a></li><br>
                        <li><i class="fa fa-award" aria-hidden="true"></i><a href="awards.php">Check Scores</a></li><br>
                        <li><i class="fa fa-sign-out-alt" aria-hidden="true"></i><a href="signout.php">SignOut</a></li>
                    </ul>
                    </div> 
                </div>               
                 <div class="col-sm-10"> 
                    <div class="box_head">
                        <p><i class="fa fa-brain" style="font-size:45px; color:black;"></i>ATTEMPT TEST</p>
                    </div>
                    <div class="col-sm-1"></div>
                        <div class="col-sm-10"> 
                           <div class="questionlist " id="questionlist">
                        
                           </div>
                        </div> 
                    <div class="col-sm-1"></div>
                </div>
<script type="text/javascript">
   
    getallquestion();
    function getallquestion()
    {
        var token = '<?php echo password_hash("getquestion", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/getquestion.php",
            data:{token:token},
            success:function(data)
            {
                $('#questionlist').html(data);
            }
        });
    }
</script>

<script type="text/javascript">
    $('form').submit(function(e){
    e.preventDefault();
    });
    </script>

                   

</body>

</html>