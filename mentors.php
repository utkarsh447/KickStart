<!DOCTYPE html>
<html>
	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Kick Start </title>

	    <!-- Bootstrap Core CSS -->
	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	    <!-- Plugin CSS -->
	    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	    <!-- Theme CSS -->
	    <link href="css/creative.min.css?version=1" rel="stylesheet">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>

	<body>
	<?php
	    require ('header.php');
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

	<!-- <a href="billing.php">Billing </a>
	<a href="mentors.php">Check for mentors</a> -->
	<br><br><br>
	<?php 
  //$status=1;
  $sql="SELECT * from `services` WHERE mentor > 0";
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
    while($row = $result->fetch_assoc()){ ?>
    <h4><?php echo $row['username'] ?></h4>
    <h4>Other Services This Mentor Can also Provide are:</h4>
    <ul>
	    <?php if($row["websiteB"]==1) { ?>
	    
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
	          <li><h4>Hardware Support</h4></li>
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
	      <?php 
	  } 
	?>


	</body>
</html>