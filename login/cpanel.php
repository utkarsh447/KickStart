<?php
/*session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}*/ 
?>
<?php
    require ('../header.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body background="../login/images/wonder_woman.jpg">
    <div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <!-- <form class="form-signin" name="form1" method="post" action="../index1.php"> --><br><br><br><br> 
        <h2 class="form-signin-heading" ><center>CONTROL PANEL</center></h2><br>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Administerator Name" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password" >
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <!-- <h3>Sign in<br><h3> -->
        <br>
        
        <div class="alert alert-success" role="alert" style="text-decoration : none" align="center" style="background-color: BLACK">
        <script type="text/javascript">
          var uname = document.getElementById("myusername");
          var upass = document.getElementById("mypassword");
          if(uname=="admin" && upass=="password")
            window.location="../cpanel_in.php";
        </script>
        <a href="../login/cpanel_in.php">
            <h4 style="color:#000000">Login</h4>
            </a>
        </div>

        <!-- <a href="user_signup.php" class="btn btn-lg btn-primary btn-block" style="background-color: #006064">Register</a> -->




        <div id="message"></div>
      <!-- </form> -->
      </div>
      <div class="col-sm-4"></div>
      </div>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- The AJAX login script -->
    <script src="js/login.js"></script>

  </body>
</html>
