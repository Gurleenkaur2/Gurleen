<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-sm-12 top"></div>
              <div class="col-sm-12 head"><i class="fa fa-user" style="font-size:50px; color:black;"></i>TEACHER WORKSPACE</div>

                <div class="col-sm-2 left">
                    <div class="list">
                        <ul>
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="dashboardteacher.php">Dashboard</a></li><br>
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="addstudent.php">Add Student</a></li><br>
                        <li><i class="fa fa-book" aria-hidden="true"></i><a href="addtest.php">Add Test</a></li><br>
                        <li><i class="fa fa-book-open" aria-hidden="true"></i><a href="addquestions.php">Add questions</a></li><br>
                        <li><i class="fa fa-sign-out-alt" aria-hidden="true"></i><a href="signout.php">SignOut</a></li>
                        </ul>
                    </div>            
                </div>         
                 <div class="col-sm-10">
                    <div class="box_head">
                        <p><i class="fa fa-user" style="font-size: 50px; color: black;"></i>ADD STUDENT</p>
                    </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <div class="loginform" id="loginform">
                            <form> 
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">   
                               
                                <div class="form-group">
                                    <label>Class</label>
                                        <div class="list" id="list" style="width:100%; float:left;"></div>
                                </div>                             
                              <div class="form-group">
                                    <label>Student Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                </div>
                                <div style="text-align:center;">
                                    <input class="form-submit-button" type="submit" name="submit" id="submit" onclick="addstudent();">
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                     <div class="studentlist " id="studentlist">
                        
                    </div>
                </div>
<script type="text/javascript">
    getclass();
    
    function getclass()
    {
        var token = '<?php echo password_hash("getclass", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/optionclass.php",
            data:{token:token},
            success:function(data)
            {
                $('#list').html(data);
            }
        });
    }
  function addstudent()
  {
    var sname= document.getElementById('name').value;
    var classid = document.getElementById('class').value;
    alert(sname);
    var token = '<?php echo password_hash("student", PASSWORD_DEFAULT);?>';
    if(sname!="")
    {
        $.ajax(
        {
            type:'POST',
            url:'ajax/addstudent.php',
            data:{sname:sname,classid:classid,token:token},
            success:function(data)
            {
               if(data == 0)
               {
                alert("Student added succesfully");
                    window.location.reload();
               }
            }
        });
    }
  }
  
    getallstudent();
    function getallstudent()
    {
        var token = '<?php echo password_hash("getstudent", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/getstudent.php",
            data:{token:token},
            success:function(data)
            {
                $('#studentlist').html(data);
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