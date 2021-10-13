<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Questions</title>
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
                 <div class="col-sm-10"> <!-- 3 -->
                    <div class="box_head">
                        <p><i class="fa fa-book-open" style="font-size: 50px; color: black;"></i>ADD QUESTION</p>
                    </div>
                    <div class="col-sm-1"></div>
                        <div class="col-sm-10"> <!-- 2 -->
                            <div class="loginform" id="loginform"> <!-- 1 -->
                            <form>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Class</label>
                                        <div class="list" id="list" style="width:100%; float:left;"></div>
                                </div>
                                <div class="form-group">
                                    <label>Test</label>
                                        <div class="list" id="listtest" style="width:100%; float:left;"></div>
                                </div>
                            </div>
                                 <div class="col-sm-2"></div>
                                 <div class="col-sm-12">
                                 <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" class="form-control" name="question" id="question" placeholder="Enter Question">
                                </div>
                                <div class="form-group">
                                    <label>First Option</label>
                                    <input type="text" class="form-control" name="opt1" id="opt1" placeholder="Enter first option">
                                </div>
                                <div class="form-group">
                                    <label>Second Option</label>
                                    <input type="text" class="form-control" name="opt2" id="opt2" placeholder="Enter second option">
                                </div>
                                <div class="form-group">
                                    <label>Third Option</label>
                                    <input type="text" class="form-control" name="opt3" id="opt3" placeholder="Enter third option">
                                </div>                                
                                <div class="form-group">
                                    <label>Fourth Option</label>
                                    <input type="text" class="form-control" name="opt4" id="opt4" placeholder="Enter fourth option">
                                </div>                                
                                <div class="form-group">
                                    <label>Correct Option</label>
                                    <input type="text" class="form-control" name="optcorrect" id="optcorrect" placeholder="Enter correct option">
                                </div>
                                <div style="text-align:center;">
                                    <input class="form-submit-button" type="submit" name="submit" id="submit" onclick="addquestion();">
                                </div>
                            </div>
                            </form>
                        </div> <!--1-->
                    <div> <!-- 2 -->
                    <div class="col-sm-1"></div>
                  <!--   <div class="teacherlist " id="teacherlist">
                        
                    </div> -->
                </div><!--  3 -->
<script type="text/javascript">
    getclass();
    
    function getclass()
    {
        var token = '<?php echo password_hash("getclass", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/getclass.php",
            data:{token:token},
            success:function(data)
            {
                $('#list').html(data);
            }
        });
    }
    function gettest()
    {
        var classid= document.getElementById('class').value;
        var token = '<?php echo password_hash("gettest", PASSWORD_DEFAULT);?>';
        $.ajax(
        {
            type:'POST',
            url:"ajax/optiontest.php",
            data:{token:token,classid:classid},
            success:function(data)
            {
                $('#listtest').html(data);
            }
        });
    }
    function addquestion()
    {
        var testid= document.getElementById('test').value;
        var question= document.getElementById('question').value;
        var option1= document.getElementById('opt1').value;
        var option2= document.getElementById('opt2').value;
        var option3= document.getElementById('opt3').value;
        var option4= document.getElementById('opt4').value;
        var optioncorrect= document.getElementById('optcorrect').value;
        var token = '<?php echo password_hash("addquestion", PASSWORD_DEFAULT);?>';
        if(question!="")
        {
            $.ajax(
            {
                type:'POST',
                url:"ajax/addquestion.php",
                data:{question:question,option1:option1,option2:option2,option3:option3,option4:option4,optioncorrect:optioncorrect,testid:testid,token:token},
                success:function(data)
                {
                   if(data == 0)
                   {
                    alert('Question added succesfully');
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
</script>

<script type="text/javascript">
    $('form').submit(function(e){
    e.preventDefault();
    });
    </script>

                   

</body>

</html>