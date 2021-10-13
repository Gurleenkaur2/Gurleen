<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
      <section>
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="col-sm-3"></div>
              <div class="col-sm-6" style="color:white; font-weight: bold; font-size:18px;" >STUDENT LOGIN</div>   
              <div class="col-sm-3"></div>
                <div class="group">
                    <div class="forms">
                        <div class="loginform" id="loginform">
                            <form>
                                <div class="form-group">
                                    <label>Student Id</label>
                                    <input type="text" class="form-control" name="sid" id="sid" placeholder="Enter your Id">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" id="submit" onclick="sendlogin();">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
     </section>
<script type="text/javascript">
    function sendlogin()
    {
        var name = document.getElementById('name').value;
        var sid = document.getElementById('sid').value;
        var password = document.getElementById('password').value;
        var token = "<?php echo password_hash("logintoken", PASSWORD_DEFAULT)?>";
        if(password!="" && name !="" && sid!="")
        {
           $.ajax(
            {
                type:'POST',
                url:"ajax/studentlogin.php",
                data:{name:name,sid:sid,password:password,token:token},
                success:function(data)
                {
                   if(data == 0)
                   {
                    window.location = "studentdashboard.php";
                   }
                }
            });
        }
        else
        {
            alert("please input all the fields");
        }
     }


</script>
<script type="text/javascript">
    $('form').submit(function(e){
    e.preventDefault();
    });
</script>

</body>

</html>