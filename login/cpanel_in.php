<?php
/*session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}*/ 

function connect()
{
    $host = 'localhost';  
    $user = 'root';  
    $pass = 'sample';  
    $dbname = 'login';  
    $table = 'services';

    $conn = mysqli_connect($host, $user, $pass, $dbname); 

    if($conn===0)
        die("fatal error".mysql_error());

    return $conn;
}

function insert($sql)
{
    $conn=connect();
    if(mysqli_query($conn, $sql))
    {    
        return 1;
    }
    else
    {
        return 0;
    }
}

function display($sql)
{
    $conn=connect();
    $data=0;
    $result= $conn->query($sql);
    return $result;
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

  <body>
    <div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
     <br><br><br><br> 
<?php 
  //$status=1;
  $sql="SELECT * from `members` WHERE verified = 1";
  $result=display($sql);
  /*echo "yayy result1: ";*/
  if($result->num_rows > 0)
    $result1 = 1; //detail present in DB
  else $result1 = 0; //detail not present in DB
  /*echo $result1;*/
  

  ?>
  <h3>Members Needed to be Verified</h3>
  <?php 

  //if detail not present ($result = 0) or status = 2
    while($row = $result->fetch_assoc()){ //Be careful(while loop missing, so one output), this shit may get serious
?>
    
    <h4 style="color: #a00" font face="arial"><?php echo $row["username"]; ?>
    <!-- <label class="checkbox"> -->
      <input type="checkbox" value="confirm"> Verify</h4>
    <!-- </label> -->
    
 <?php } 
  ?>

  <?php 
  //$status=1;
  $sql="SELECT * from `services` WHERE status = 1";
  $result=display($sql);
  /*echo "yayy result1: ";*/
  if($result->num_rows > 0)
    $result1 = 1; //detail present in DB
  else $result1 = 0; //detail not present in DB
  /*echo $result1;*/
  

  ?>
  <h3>Services Needed to be Verified</h3>
  <?php 

  //if detail not present ($result = 0) or status = 2
    while($row = $result->fetch_assoc()){ //Be careful(while loop missing, so one output), this shit may get serious
?>
    
    <h4 style="color: #a00" font face="arial"><?php echo $row["username"]; ?>
    <!-- <label class="checkbox"> -->
      <input type="checkbox" value="confirm"> Verify</h4>
    <!-- </label> -->
    
 <?php } 
  ?>
<br>
  <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #006064">Confirm</button>
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
