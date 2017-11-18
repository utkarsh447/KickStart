<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
} 
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
      <form class="form-signin" name="form1" method="post" action="checklogin.php"><br><br><br><br> 
        <h2 class="form-signin-heading" ><center>Log In for Service Providers</center></h2><br>
        <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password" >
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #006064">Sign in</button><br>
        <a href="signup.php" class="btn btn-lg btn-primary btn-block" style="background-color: #006064">Register</a>




        <div id="message"></div>
      </form>
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
