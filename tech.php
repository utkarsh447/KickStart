<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KickStart</title>
        <style>
            h1{
            color:white;
            }
        </style>
    </head>
    <body background="img/101.png">
    <?php
      require ('header.php');
    function connect()
    {
      $host = 'localhost';  
      $user = 'root';  
      $pass = 'sample';  
      $dbname = 'login';  
      

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
 
        <div class="container">
            <br>
            <b>
                <center>
                    <h1>WEB DEVELOPERS</h1>
                </center>
            </b>
            <br>
<div class="row">
            <?php 
            $sql = "SELECT m . * , s . * FROM members m LEFT JOIN services s ON m . username = s . username WHERE s . websiteB = 1";            
            $result=display($sql);
            //echo "TEST";
            //echo $result;
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {?>
              <!-- <div class="container"> -->
                
              
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <header class="w3-container w3-light-grey">
                            <center>
                                <h4><h4>Call: <?php echo $row["phone"] ?></h4></h4>
                            </center>
                        </header>
                        <div class="caption">
                            <center>
                                <b>
                                    <h3>Company Name: <?php echo $row["cname"] ?>
                                    </h3>
                                    <h4>Location <?php echo $row["location"] ?></h4>
                                </b>
                                <p><?php echo $row["website"] ?></p>
                            </center>
                            <br>
                            <button type="button" class="w3-button w3-block w3-dark-grey"data-toggle="modal" data-target="#myModal">+ Show More</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Services It can also Provide: </h3>
                                        </div>
                                        <div class="logo" align="center" >                                            
                                            <!-- <a href="http://www.saccindia.org/india">
                                                <h6>http://www.saccindia.org/india</h6>
                                            </a> -->
                                        </div>
                                        <div class="modal-body">
                                            <h6>
                                                <ul>
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
                                            </h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
              <?php }
            }

        ?>

        <div class="container">
            <br>
            <b>
                <center>
                    <h1>ANDROID/IOS DEVELOPERS</h1>
                </center>
            </b>
            <br>

            <?php 
            $sql = "SELECT m . * , s . * FROM members m LEFT JOIN services s ON m . username = s . username WHERE s . appB = 1";            
            $result=display($sql);
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {?>
              <!-- <div class="container"> -->
                
              <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <header class="w3-container w3-light-grey">
                            <center>
                                <h4><h4>Call: <?php echo $row["phone"] ?></h4></h4>
                            </center>
                        </header>
                        <div class="caption">
                            <center>
                                <b>
                                    <h3>Company Name: <?php echo $row["cname"] ?>
                                    </h3>
                                    <h4>Location <?php echo $row["location"] ?></h4>
                                </b>
                                <p><?php echo $row["website"] ?></p>
                            </center>
                            <br>
                            <button type="button" class="w3-button w3-block w3-dark-grey"data-toggle="modal" data-target="#myModal">+ Show More</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Services It can also Provide: </h3>
                                        </div>
                                        <div class="logo" align="center" >                                            
                                            <!-- <a href="http://www.saccindia.org/india">
                                                <h6>http://www.saccindia.org/india</h6>
                                            </a> -->
                                        </div>
                                        <div class="modal-body">
                                            <h6>
                                                <ul>
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
                                            </h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
              <?php }
            }

        ?>

        <div class="container">
            <br>
            <b>
                <center>
                    <h1>DESIGN</h1>
                </center>
            </b>
            <br>

            <?php 
            $sql = "SELECT m . * , s . * FROM members m LEFT JOIN services s ON m . username = s . username WHERE s . design = 1";            
            $result=display($sql);
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {?>
              <!-- <div class="container"> -->
                
              <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <header class="w3-container w3-light-grey">
                            <center>
                                <h4><h4>Call: <?php echo $row["phone"] ?></h4></h4>
                            </center>
                        </header>
                        <div class="caption">
                            <center>
                                <b>
                                    <h3>Company Name: <?php echo $row["cname"] ?>
                                    </h3>
                                    <h4>Location <?php echo $row["location"] ?></h4>
                                </b>
                                <p><?php echo $row["website"] ?></p>
                            </center>
                            <br>
                            <button type="button" class="w3-button w3-block w3-dark-grey"data-toggle="modal" data-target="#myModal">+ Show More</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Services It can also Provide: </h3>
                                        </div>
                                        <div class="logo" align="center" >                                            
                                            <!-- <a href="http://www.saccindia.org/india">
                                                <h6>http://www.saccindia.org/india</h6>
                                            </a> -->
                                        </div>
                                        <div class="modal-body">
                                            <h6>
                                                <ul>
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
                                            </h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
              <?php }
            }

        ?>

        <div class="container">
            <br>
            <b>
                <center>
                    <h1>SOFTWARE SUPPORT</h1>
                </center>
            </b>
            <br>

            <?php 
            $sql = "SELECT m . * , s . * FROM members m LEFT JOIN services s ON m . username = s . username WHERE s . softwares = 1";            
            $result=display($sql);
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {?>
              <!-- <div class="container"> -->
                
              <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <header class="w3-container w3-light-grey">
                            <center>
                                <h4><h4>Call: <?php echo $row["phone"] ?></h4></h4>
                            </center>
                        </header>
                        <div class="caption">
                            <center>
                                <b>
                                    <h3>Company Name: <?php echo $row["cname"] ?>
                                    </h3>
                                    <h4>Location <?php echo $row["location"] ?></h4>
                                </b>
                                <p><?php echo $row["website"] ?></p>
                            </center>
                            <br>
                            <button type="button" class="w3-button w3-block w3-dark-grey"data-toggle="modal" data-target="#myModal">+ Show More</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Services It can also Provide: </h3>
                                        </div>
                                        <div class="logo" align="center" >                                            
                                            <!-- <a href="http://www.saccindia.org/india">
                                                <h6>http://www.saccindia.org/india</h6>
                                            </a> -->
                                        </div>
                                        <div class="modal-body">
                                            <h6>
                                                <ul>
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
                                            </h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
              <?php }
            }

        ?>

        <div class="container">
            <br>
            <b>
                <center>
                    <h1>HARDWARE SUPPORT</h1>
                </center>
            </b>
            <br>

            <?php 
            $sql = "SELECT m . * , s . * FROM members m LEFT JOIN services s ON m . username = s . username WHERE s . hardwares = 1";            
            $result=display($sql);
            if($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {?>
              <!-- <div class="container"> -->
                
              <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <header class="w3-container w3-light-grey">
                            <center>
                                <h4><h4>Call: <?php echo $row["phone"] ?></h4></h4>
                            </center>
                        </header>
                        <div class="caption">
                            <center>
                                <b>
                                    <h3>Company Name: <?php echo $row["cname"] ?>
                                    </h3>
                                    <h4>Location <?php echo $row["location"] ?></h4>
                                </b>
                                <p><?php echo $row["website"] ?></p>
                            </center>
                            <br>
                            <button type="button" class="w3-button w3-block w3-dark-grey"data-toggle="modal" data-target="#myModal">+ Show More</button>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Services It can also Provide: </h3>
                                        </div>
                                        <div class="logo" align="center" >                                            
                                            <!-- <a href="http://www.saccindia.org/india">
                                                <h6>http://www.saccindia.org/india</h6>
                                            </a> -->
                                        </div>
                                        <div class="modal-body">
                                            <h6>
                                                <ul>
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
                                            </h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
              <?php }
            }

        ?>
            
        </div>
    </body>
</html>