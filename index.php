
<?php 
    require "login/loginheader.php"; 
   /* require "login/createprofile.php";*/
  $var = $_SESSION['username'];

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

  function display($sql)
  {
    $conn=connect();
    $data=0;
    $result= $conn->query($sql);
    return $result;
  }

  ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>

<!-- if status bit does not exists in DB or status is not = 1 -->
  <?php 
  //$status=1;
  $sql="SELECT * from `services` WHERE username = '" . $var . "'";
  $result=display($sql);
  /*echo "yayy result1: ";*/
  if($result->num_rows > 0)
    $result1 = 1; //detail present in DB
  else $result1 = 0; //detail not present in DB
  /*echo $result1;*/
  

  ?>
  <?php 
    $status;$websiteB;$appB;$design;$softwares;$hardwares;$lawf;
    $consult;$incub;$invest;$sponser;$dataA;$digiM;$humanr;$bussD;
    $website1;$phone1;
  //if detail not present ($result = 0) or status = 2
    while($row = $result->fetch_assoc()){ //Be careful(while loop missing, so one output), this shit may get serious
    /*echo $row['status'];*/
    $mentor = $row['mentor'];
    $status = $row['status'];
    $websiteB = $row['websiteB'];
    $appB = $row['appB'];
    $design = $row['design'];
    $softwares = $row['softwares'];
    $hardwares = $row['hardwares'];
    $lawf = $row['lawf'];
    $consult = $row['consult'];
    $incub = $row['incub'];
    $invest = $row['invest'];
    $sponser = $row['sponser'];
    $dataA = $row['dataA'];
    $digiM = $row['digiM'];
    $humanr = $row['humanr'];
    $bussD = $row['bussD'];
    $website1 = $row['website'];
    $phone1 = $row['phone'];
    $gstin = '22AXXXA0000A1ZM';
    //echo $status;
  } 


  function tocreate($ds,$dt,$dw,$status)
  {
    //echo "Test "; echo $ds; echo " t: "; echo $status;
    if($status==2)
    { //echo "Test "; echo $ds;
      if($ds == 1){ ?>  
        <input type="hidden" name=<?php echo "$dt" ?> value="0" />          
        <input type="checkbox" name=<?php echo "$dt" ?> value="1" checked> <?php echo " $dw " ?></p>
      <?php } else if($ds == 0){?>
        <input type="hidden" name=<?php echo "$dt" ?> value="0" />
        <input type="checkbox" name=<?php echo "$dt" ?> value="1"> <?php echo " $dw " ?></p>
      <?php } ?>              
    <?php } 
    else {?>
      <input type="hidden" name=<?php echo "$dt" ?> value="0" />
      <input type="checkbox" name=<?php echo "$dt" ?> value="1"> <?php echo " $dw " ?></p>
    <?php 
    }  
  }?>

  <?php 
  //THe below shit is showing only if result1(detail present in DB) && (its status bit not 2) then form is shown
    //if($result1 == 1 || $row['status']!=2) 
    // form will be shown only to those who has no status bit or status bit as 2 and (No details in DB )result1 = 0
  //THis shit need to be with &&
    if($result1 == 0 || (($status==2) && ($result1 == 1))) { ?>

    <div class="container">
      <div class="form-signin">
        <!-- <div class="alert alert-success">You have been <strong>successfully logged in</strong>.</div> -->
        
        <?php if($status!=2){ ?>
          <h1>Enter your Details</h1>
           <?php }
           else{?>
           <h1><center>Edit your Details</center></h1>
           <?php }?>

        <!-- <h1>Company Details</h1> -->
          <div class="container">

        <form class="form-signup" id="usersignup" name="usersignup" method="post" action="login/createprofile.php">

          <input name="website" id="website" type="text" class="form-control" placeholder='Your current Website name: <?php echo $website1?>' autofocus>
          <input name="phone" id="phone" type="number" class="form-control" placeholder='Your current Phone Number: <?php echo $phone1?>'>
          <input name="gstin" id="gstin" type="text" class="form-control" placeholder='Your GSTIN Number: <?php echo $gstin?>'>
          <input name="tan" id="tan" type="text" class="form-control" placeholder='Your TAN Number: <?php echo $tan?>'>

          <br>
          <h4>Tick the services which you provide</h4><br>
          <h4>Q.1 Guiding budding enterpreneurs as :<br>
          <!-- <input type="hidden" name="mentor" value="0" />
          <input type="checkbox" name="mentor" value="1"> Mentor </p> -->
          <?php tocreate($mentor,"mentor","Mentor",$status); ?>
          <br>
          <p>Q.2 Which technology you will provide?<br>
          <!-- <input type="hidden" name="websiteB" value="0" /> -->
          
          <!-- Backup stored in ~/ppap123.php -->
          <?php tocreate($websiteB,"websiteB","Website Building",$status); ?>


          <!-- <input type="hidden" name="appB" value="0" />
          <input type="checkbox" name="appB" value="1"> Mobile Application Building </p> -->
          <?php tocreate($appB,"appB","Mobile Application Building",$status); ?>
          <!-- <input type="hidden" name="design" value="0" />
          <input type="checkbox" name="design" value="1"> Designing </p> -->
          <?php tocreate($design,"design","Designing",$status); ?>
          <!-- <input type="hidden" name="softwares" value="0" />
          <input type="checkbox" name="softwares" value="1"> Software Support </p> -->
          <?php tocreate($softwares,"softwares","Software Support",$status); ?>
          <!-- <input type="hidden" name="hardwares" value="0" />
          <input type="checkbox" name="hardwares" value="1"> Hardware Support </p> -->
          <?php tocreate($hardwares,"hardwares","Hardware Support",$status); ?>
          <br>
          <p>Q.3 Legal services:<br>
          <!-- <input type="hidden" name="lawf" value="0" />
          <input type="checkbox" name="lawf" value="1"> Law Firm </p> -->
          <?php tocreate($lawf,"lawf","Law Firm",$status); ?>
          <!-- <input type="hidden" name="consult" value="0" />
          <input type="checkbox" name="consult" value="1"> Consulting </p> -->
          <?php tocreate($consult,"consult","Consulting",$status); ?>
          <br>
          <p>Q.4 Are you venture capatalist?<br>
          <!-- <input type="hidden" name="incub" value="0" />
          <input type="checkbox" name="incub" value="1"> Incubation </p> -->
          <?php tocreate($incub,"incub","Incubation",$status); ?>
          <!-- <input type="hidden" name="invest" value="0" />
          <input type="checkbox" name="invest" value="1"> Investor </p> -->
          <?php tocreate($invest,"invest","Investor",$status); ?>
          <!-- <input type="hidden" name="sponser" value="0" />
          <input type="checkbox" name="sponser" value="1"> Sponser </p> -->
          <?php tocreate($sponser,"sponser","Sponser",$status); ?>
          <br>
          <p>Q.5 Business Services:<br>
          <!-- <input type="hidden" name="dataA" value="0" />
          <input type="checkbox" name="dataA" value="1"> Data Analytics </p> -->
          <?php tocreate($dataA,"dataA","Data Analytics",$status); ?>
          <!-- <input type="hidden" name="digiM" value="0" />
          <input type="checkbox" name="digiM" value="1"> Digital Marketing and Networking </p> -->
          <?php tocreate($digiM,"digiM","Digital Marketing and Networking",$status); ?>
          <!-- <input type="hidden" name="humanr" value="0" />
          <input type="checkbox" name="humanr" value="1"> Human Resource </p> -->
          <?php tocreate($humanr,"humanr","Human Resource",$status); ?>
          <!-- <input type="hidden" name="bussD" value="0" />
          <input type="checkbox" name="bussD" value="1"> Business Development </p> -->
          <?php tocreate($bussD,"bussD","Business Development",$status); ?>
          
          
          <?php
          if($status!=2){ ?>
          <!--<p> <input type="hidden" name="foo" value="0" />
            <input type="checkbox" name="foo" value="1">  Check if you are filing as a Mentor</p> -->
            <input type="hidden" name="status" value= '<?php echo "$status" ?>'>
           <?php }
           else{?>
           <input type="hidden" name="status" value= '<?php echo "$status" ?>'>
           <?php }?>
          <br>

          <input type="hidden" name="username" value= '<?php echo "$var";?>' />
          <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color: #006064">Submit</button>

          
          <br>
          <!-- <div id="message"></div> -->
        </form>

    </div> <!-- /container -->

 <?php } 
//THe below shit is showing only if result1(detail present in DB) && (its status bit not 2) then form is shown

  else if($result1 == 1 && $status==1) { ?> <!-- if($result1==1 && $row['status'])  -->

<!-- if $result = 1 and $status = 1 
  status bit ==1 -->

    <!-- yeah it can work -->
<?php 
    //echo "TT ";
    //echo $row['status'];
    $sql="SELECT * from `services` WHERE username = '" . $var . "'";
    $result=display($sql);
    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {?>
      <div class="container">
        <h4>Name    : <?php echo $row["username"] ?></h4>
        <h4>Website    : <?php echo $row["website"] ?></h4>
        <h4>Phone    : <?php echo $row["phone"] ?></h4>
        <h4>Services Provided By You..</h4>
        <ul>
        <?php if($row["mentor"]==1) {?>
          <li><h4>Mentor</h4></li>
        <?php }?>

        <?php if($row["websiteB"]==1) {?>
          <li><h4>Website Building</h4></li>
        <?php }?>

        <?php if($row["appB"]==1) {?>
          <li><h4>Application Building</h4></li>
        <?php }?>

        <?php if($row["design"]==1) {?>
          <li><h4>Design</h4></li>
        <?php }?>

        <?php if($row["softwares"]==1) {?>
          <li><h4>Software Support</h4></li>
        <?php }?>

        <?php if($row["hardwares"]==1) {?>
          <li><h4>Hardware SUpport</h4></li>
        <?php }?>

        <?php if($row["lawf"]==1) {?>
          <li><h4>Law Firm</h4></li>
        <?php }?>

        <?php if($row["consult"]==1) {?>
          <li><h4>Consulting</h4></li>
        <?php }?>

        <?php if($row["incub"]==1) {?>
          <li><h4>Incubation</h4></li>
        <?php }?>

        <?php if($row["invest"]==1) {?>
          <li><h4>Investor</h4></li>
        <?php }?>

        <?php if($row["sponser"]==1) {?>
          <li><h4>Sponsor</h4></li>
        <?php }?>

        <?php if($row["dataA"]==1) {?>
          <li><h4>Data Analytics</h4></li>
        <?php }?>

        <?php if($row["digiM"]==1) {?>
          <li><h4>Digital Marketing</h4></li>
        <?php }?>

        <?php if($row["humanr"]==1) {?>
          <li><h4>Human Resource</h4></li>
        <?php }?>

        <?php if($row["bussD"]==1) {?>
          <li><h4>Business Development</h4></li>
        <?php }?>
        </ul>
        <br>
        <h4>Your above details are submitted, Please wait for confirmation of your details by Admin</h4>  
      </div>
      <?php }
    }
?>
  <?php } else echo "<br>We will look into this issue very soon, Thanks for informing"; ?>
<!-- dont show form and display message, its under consideration -->

        <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
  </body>
</html>
