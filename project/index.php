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
</head>
<body>
      <section>
        <div class="col-sm-12">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <div class="group">
                         <div class="col-sm-6">
                            <div class="btn">
                                <button id="login" onclick="showteacherlogin();">Login as a teacher</button>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="btn">
                                <button id="signup" onclick="showlogin();">LOGIN</button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn">
                                <button id="signup" onclick="showsignup();">SIGNUP</button>
                            </div>
                        </div> -->
                        <div class="col-sm-6">
                            <div class="btn">
                                <button id="login" onclick="showstudentlogin();">Login as a student</button>
                            </div>
                        </div>
                </div>
                    <div class="forms">
                        <div class="loginform" id="teacherloginform">
                            <form>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" id="submit" onclick="sendteacherlogin();">
                                </div>
                            </form>
                        </div>  
                        <div class="loginform hidden" id="studentloginform">
                            <form>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="password" id="password1" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" id="submit" onclick="sendstudentlogin();">
                                </div>
                            </form>
                        </div>
                          <!--   <div class="forms">
                        <div class="loginform" id="loginform">
                            <form>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" id="submit" onclick="sendlogin();">
                                </div>
                            </form>
                        </div> -->
                        <!-- <div class="signupform hidden" id="signupform">
                            <form>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email1" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="password" id="password1" placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <label>CONFIRM PASSWORD</label>
                                    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your firstname">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter your lastname">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" id="username1" placeholder="What should we call you?">
                                </div>
                                <div class="form-group">
                                    <label id="gender">Gender</label>
                                    <select>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label id="age">Age</label><br>
                                    <input type="radio" value="10">0-10<br>
                                    <input type="radio" value="20">11-20<br>
                                    <input type="radio" value="30">21-30
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" id="submit1" onclick="sendsignup();">
                                </div>
                            </form>
                        </div>
                    </div> -->
                </div>
                <div class="col-sm-4"></div>
            </div>
     </section>
<script type="text/javascript">
  
    //  function showlogin()
    //{
    // document.getElementById('signupform').classList.add('hidden');
    //document.getElementById('loginform').classList.remove('hidden');
   // document.getElementById('loginform').classList.add('show');
    //}

 //function showsignup()
   // {
    //document.getElementById('loginform').classList.add('hidden');
    //document.getElementById('signupform').classList.remove('hidden');
    //document.getElementById('signupform').classList.add('show');
    //}  
      function showteacherlogin()
    {
     document.getElementById('studentloginform').classList.add('hidden');
    document.getElementById('teacherloginform').classList.remove('hidden');
    document.getElementById('teacherloginform').classList.add('show');
    }

 function showstudentlogin()
    {
    document.getElementById('teacherloginform').classList.add('hidden');
    document.getElementById('studentloginform').classList.remove('hidden');
    document.getElementById('studentloginform').classList.add('show');
    }

    function sendteacherlogin()
    {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var token = "<?php echo password_hash("teacherlogintoken", PASSWORD_DEFAULT)?>";
        if(email!="" && password!="")
        {
           $.ajax(
            {
                type:'POST',
                url:"ajax/teacherlogin.php",
                data:{mail:email,pass:password,token:token},
                success:function(data)
                {
                   if(data == 0)
                   {
                    window.location = "dashboard teacher.php";
                   }
                }
            });
        }
        else
        {
            alert("please input all the fields");
        }
     }
         function sendstudentlogin()
    {
        var name = document.getElementById('name').value;
        var password = document.getElementById('password1').value;
        var token = "<?php echo password_hash("studentlogintoken", PASSWORD_DEFAULT)?>";
        if(name!="" && password!="")
        {
           $.ajax(
            {
                type:'POST',
                url:"ajax/studentlogin.php",
                data:{name:name,pass:password,token:token},
                success:function(data)
                {
                   if(data == 0)
                   {
                    window.location = "dashboard student.php";
                   }
                }
            });
        }
        else
        {
            alert("please input all the fields");
        }
     }
    //    function sendlogin()
    // {
    //     var email = document.getElementById('email').value;
    //     var password = document.getElementById('password').value;
    //     var token = "<?php echo password_hash("logintoken", PASSWORD_DEFAULT)?>";
    //     if(email!="" && password!="")
    //     {
    //        $.ajax(
    //         {
    //             type:'POST',
    //             url:"ajax/login.php",
    //             data:{mail:email,pass:password,token:token},
    //             success:function(data)
    //             {
    //                if(data == 0)
    //                {
    //                 window.location = "dashboard teacher.php";
    //                }
    //             }
    //         });
    //     }
    //     else
    //     {
    //         alert("please input all the fields");
    //     }
    //  }  
    // function sendsignup()
    // {
    //     var email = document.getElementById('email1').value;
    //     var password = document.getElementById('password1').value;
    //     var cpassword = document.getElementById('cpassword').value;        
    //     var firstname = document.getElementById('firstname').value;
    //     var lastname = document.getElementById('lastname').value;
    //     var username = document.getElementById('username1').value;        
    //     var gender = document.getElementById('gender').value;
    //     var token = "<?php echo password_hash("signuptoken", PASSWORD_DEFAULT)?>";
    //     if(email!="" && firstname!="" && lastname!="" && gender!="" && username!="" && password!="" && cpassword!="")
    //     {
    //         if(password==cpassword)
    //         {
    //            $.ajax(
    //           {
    //             type:'POST',
    //             url:"ajax/signup.php",
    //             data:{email:email,password:password,cpassword:cpassword,token:token},
    //             success:function(data)
    //               {
    //                if(data == 0)
    //                {
    //                 window.location = "index.php";
    //                }
    //               }
    //           });
    //         }
    //         else
    //         {
    //           alert("password not equal to  confirm password");
    //         }
          
    //     }
    //     else
    //     {
    //         alert("please input all the fields");
    //     }
        
    // }



</script>
<script type="text/javascript">
    $('form').submit(function(e){
    e.preventDefault();
    });
    </script>
</script>

</body>

</html>