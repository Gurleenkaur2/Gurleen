<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classroom</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="normalize.min.css">
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <section class="loginOption-section" style="background-color: black;">
         <div class="container">
            <div class="loginOption-section__logo text-center">
               <img src="image.png" alt="logo">
            </div>
            <div class="loginOption-section__list">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="loginOption-section__list--card">
                        <span><img src="teacher.png" alt="teacher"></span>
                        <h3>Teacher Login</h3>
                        <div class="card-body">
                           <p>Teacher can login with their id's and email's through this portal </p>
                        </div>
                        <a href="teacher/login.php" target="_blank">Login</a>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="loginOption-section__list--card">
                        <span><img src="student.png" alt="student"></span>
                        <h3>Student Login</h3>
                        <div class="card-body">
                           <p>Student can login with their id's and email's through this portal </p>
                        </div>
                        <a href="student/login.php"  target="_blank">Login</a>
                     </div>
                  </div>
                   <div class="col-sm-4">
                     <div class="loginOption-section__list--card"> 
                        <span><img src="admin.png" alt="admin"></span>
                        <h3>Admin Login</h3>
                        <div class="card-body">
                           <p>Admin can login with their id's and email's through this portal </p>
                        </div>
                        <a href="admin/login.php"  target="_blank">Login</a>
                     </div>
                  </div>
                 
                  
               </div>
            </div>
       
         </div>
      </section>

<script type="text/javascript">
    $('form').submit(function(e){
    e.preventDefault();
    });
</script>

</body>

</html>