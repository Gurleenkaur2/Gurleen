<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="col-sm-12 top"></div>
              <div class="col-sm-12 head"><i class="fa fa-user-shield" style="font-size:45px; color:black;"></i>ADMIN WORKSPACE</div>
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
                 <div class="col-sm-10"> <!-- 3 -->
                    <div class="box_head">
                        <p><i class="fa fa-chalkboard-teacher" style="font-size:45px;color:black;"></i>ADD NEW TEACHER</p>
                    </div>
                    <div class="col-sm-1"></div>
                        <div class="col-sm-10"> <!-- 2 -->
                            <div class="loginform" id="loginform"> <!-- 1 -->
                            <form>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label> First Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your first name">
                                    </div>
                            </div>
                             <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter your Last name">
                                    </div>
                            </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label>University</label>
                                        <div class="list" id="list" style="width:100%; float:left;"></div>
                                </div>
                                <div class="form-group">
                                    <label>Class</label>
                                        <div class="list" id="listclass" style="width:100%; float:left;"></div>
                                </div>
                                <div style="text-align:center;">
                                    <input class="form-submit-button" type="submit" name="submit" id="submit" onclick="adduser();">
                                </div>
                            </form>
                        </div> <!--1-->
                    <div> <!-- 2 -->
                    <div class="col-sm-1"></div>
                    <div class="teacherlist " id="teacherlist">
                        
                    </div>
                </div><!--  3 -->
<script type="text/javascript">
    getuni();
    
    function getuni()
    {
        var token = '<?php echo password_hash("getuni", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/getuni.php",
            data:{token:token},
            success:function(data)
            {
                $('#list').html(data);
            }
        });
    }
    function getclass()
    {
        var uid= document.getElementById('university').value;
        var token = '<?php echo password_hash("getclass", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/getclass.php",
            data:{token:token,uid:uid},
            success:function(data)
            {
                $('#listclass').html(data);
            }
        });
    }
    function adduser()
    {
        var email= document.getElementById('email').value;
        var name=document.getElementById('fname').value + " " +document.getElementById('lname').value;
        var classid= document.getElementById('class').value;
        var token = '<?php echo password_hash("addteacher", PASSWORD_DEFAULT);?>';
        if(email!="")
        {
            $.ajax(
            {
                type:'POST',
                url:"ajax/addteacher.php",
                data:{email:email,classid:classid,token:token,name:name},
                success:function(data)
                {
                   if(data == 0)
                   {
                    alert('Teacher added succesfully');
                    window.location.reload();
                   }
                   else
                   {
                    alert('Error');
                   }
                }
            });
        }
    }
    getallteacher();
    function getallteacher()
    {
        var token = '<?php echo password_hash("getteacher", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/getteacher.php",
            data:{token:token},
            success:function(data)
            {
                $('#teacherlist').html(data);
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