<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap and stylesheet linking  -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script type="text/javascript">    
          window.history.forward();
          function noBack() { 
               window.history.forward(); 
          }
        </script>
        
</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">

    <br>
    <div class="navbar navbar-fixed-top " style="background-color:white ">
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.html"><img class="collegelogo"src="collegeheader.jpg" width="300" height="30"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><div class="option"><h4 class="he">Hi, <b> <?php
                    $tname=$_SESSION["studinfo"];
                    echo"$tname";
                    ?></b></h4></div></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
              </ul>
          </div>
        </div>
           <!---------------------------------Body Goes here------------------------>
           <br><br><br>
           <section class="banner_content">
            <center><div class="button_submit"><h4 class="he">Welcome to the Dashboard </h4></div></center><br><br>
             <div class="container">  
               <div class="row">
                  <div class="col-sm-4">
                    <div class="panel panel-danger">
                      <div class="panel-heading">Timetable</div>
                      <div class="panel-body"><img src="img/timetable.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer"><center><a href="timetable.html"><button class="option">Time-Table</button></a></center></div>
                    </div>
                  </div>
                  <div class="col-sm-4"> 
                    <div class="panel panel-warning">
                      <div class="panel-heading">Attendance</div>
                      <div class="panel-body"><img src="img/attendace.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer">Total Attendace : 60%</center></div>
                    </div>
                  </div>
                  <div class="col-sm-4"> 
                    <div class="panel panel-info">
                      <div class="panel-heading">Syllabus</div>
                      <div class="panel-body"><img src="img/syllabus.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer"><center><a href="syllabus.html"><button class="option">Syllabus</button></a></center></div>
                    </div>
                  </div>
                </div>
              </div><br>              
              <div class="container">    
                <div class="row">
                  <div class="col-sm-4">
                    <div class="panel panel-success">
                      <div class="panel-heading">Assignment</div>
                      <div class="panel-body"><img src="img/assignment.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer"><center><a href="timetable.html"><button class="option">Assignment</button></a></center></div>
                    </div>
                  </div>
                  <div class="col-sm-4"> 
                    <div class="panel panel-warning">
                      <div class="panel-heading">Lectures</div>
                      <div class="panel-body"><img src="img/lectures.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer"><center><a href="lectures.html"><button class="option">View Lectures</button></a></center></div>
                    </div>
                  </div>
                  <div class="col-sm-4"> 
                    <div class="panel panel-info">
                      <div class="panel-heading">Resources</div>
                      <div class="panel-body"><img src="img/resources.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                      <div class="panel-footer"><center><a href="resources.html"><button class="option">Get Resources</button></a></center></div>
                    </div>
                  </div>
                </div>
            <br><br>
   <!---------------------------------Body Ends here------------------------>
   <div class="footer">
    <footer>        
            <center>
                <p class="ct">Copyright &copy; Vaibhav ,Nikita and Sakshi. All Rights Reserved</p>	
            </center>
    </footer>
</div>
</body>
</html>