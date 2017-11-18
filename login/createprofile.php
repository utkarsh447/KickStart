<?php
require 'includes/functions.php';
include_once 'config.php';

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

function procDB($sql){
	if(insert($sql))
	{
		$url = '../index.php';
		echo "Done";
		header('Location: '.$url);
	}
	else
	{
		echo " Try again Later";
	}
}

$id;
//Pull username, generate new ID and hash password
$newid = uniqid(rand(), false);
$website = $_POST['website'];
/*$about =$_POST['about'];
$services = $_POST['services'];
$portfolio = $_POST['portfolio'];*/

$phone = $_POST['phone'];
$username = $_POST['username'];
$status = '1';
//echo $userid;
//if ($_POST['test'] == 'value1')
$mentor = $_POST['mentor'];
$websiteB = $_POST['websiteB'];
$appB = $_POST['appB'];
$design = $_POST['design'];
$softwares = $_POST['softwares'];
$hardwares = $_POST['hardwares'];
$lawf = $_POST['lawf'];
$consult = $_POST['consult'];
$incub = $_POST['incub'];
$invest = $_POST['invest'];
$sponser = $_POST['sponser'];
$dataA = $_POST['dataA'];
$digiM = $_POST['digiM'];
$humanr = $_POST['humanr'];
$bussD = $_POST['bussD'];
$gstin = $_POST['gstin'];
$tan = $_POST['tan'];
/*echo $websiteB;
echo " test";*/
if($_POST['status']!=2){
	$sql="INSERT INTO services(id, username, website, phone, status, mentor, websiteB, appB, design, softwares, hardwares, lawf, consult, incub, invest, sponser, dataA, digiM, humanr, bussD, GSTIN, TAN) 
					VALUES('$newid', '$username', '$website','$phone', '$status', '$mentor', '$websiteB', '$appB', '$design', '$softwares', '$hardwares', '$lawf', '$consult', '$incub', '$invest', '$sponser', '$dataA', '$digiM', '$humanr', '$bussD', '$gstin', '$tan')";

/*	if(insert($sql))
	{
		$url = '../index.php';
		echo "Done";
		header('Location: '.$url);
	}
	else
	{
		echo " Try again Later";
	}*/

	procDB($sql);
}
else{
	/*$sql = "UPDATE services	SET website = CONCAT(website,'$website'), about = CONCAT(about,'$about'), services = CONCAT(services,'$services'), portfolio = CONCAT(portfolio,'$portfolio'), phone = CONCAT(phone,'$phone'), status = '$status', mentor = '$mentor' WHERE  username = '" . $username . "'";*/	
	//procDB($sql);
	//$count=5;
	//while($count!=0)
	
	//	$count--;
	if("" == trim($_POST['website'])){ //it is empty
	    $website = '';
	} 
	else {
		$sql = "UPDATE services	SET website = '$website', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	
	if("" == trim($_POST['phone'])){ //it is empty
	    $phone = '';
	} 
	else {
		$sql = "UPDATE services	SET phone = '$phone', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	//checkboxes, if not filled gives 0 and submitted gives 1, 
	//if before submitted 1, then next time unchecked should be kept as 1
	//if before submitted 0, then next time checked should update to 1.
	//1->1
	// Goddamit, gotta show the updated form with ticks, and more ticks means updates, and unticks means update

	if('0' == trim($_POST['mentor'])){ //it is empty
		//Dafuq issues with mentor only
	    //$mentor = ''; //root of problem, 0 is also storing in DB replacing 1, but it should not
	    /*$sql = "UPDATE services	SET mentor = CONCAT(mentor,'$mentor'), status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);*/
		$sql = "UPDATE services	SET mentor = '$mentor', status = '$status' WHERE  username = '" . $username . "'"; 
	    procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET mentor = '$mentor', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['websiteB'])){ //it is empty
	    //$websiteB = '';
	    $sql = "UPDATE services	SET websiteB = '$websiteB', status = '$status' WHERE  username = '" . $username . "'"; 
	    procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET websiteB = '$websiteB', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['appB'])){ //it is empty
	    $sql = "UPDATE services	SET appB = '$appB', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET appB = '$appB', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['design'])){ //it is empty
	    $sql = "UPDATE services	SET design = '$design', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET design = '$design', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['softwares'])){ //it is empty
	    $sql = "UPDATE services	SET softwares = '$softwares', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET softwares = '$softwares', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['hardwares'])){ //it is empty
	    $sql = "UPDATE services	SET hardwares = '$hardwares', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET hardwares = '$hardwares', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['lawf'])){ //it is empty
	    $sql = "UPDATE services	SET lawf = '$lawf', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET lawf = '$lawf', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['consult'])){ //it is empty
	    $sql = "UPDATE services	SET consult = '$consult', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET consult = '$consult', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['incub'])){ //it is empty
	    $sql = "UPDATE services	SET incub = '$incub', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET incub = '$incub', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}
	
	if('0' == trim($_POST['invest'])){ //it is empty
	    $sql = "UPDATE services	SET invest = '$invest', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET invest = '$invest', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['sponser'])){ //it is empty
	    $sql = "UPDATE services	SET sponser = '$sponser', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET sponser = '$sponser', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['dataA'])){ //it is empty
	    $sql = "UPDATE services	SET dataA = '$dataA', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET dataA = '$dataA', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['digiM'])){ //it is empty
	    $sql = "UPDATE services	SET digiM = '$digiM', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET digiM = '$digiM', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['humanr'])){ //it is empty
	    $sql = "UPDATE services	SET humanr = '$humanr', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET humanr = '$humanr', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}

	if('0' == trim($_POST['bussD'])){ //it is empty
	    $sql = "UPDATE services	SET bussD = '$bussD', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	} 
	else {
		$sql = "UPDATE services	SET bussD = '$bussD', status = '$status' WHERE  username = '" . $username . "'"; //if website is empty
		procDB($sql);
	}
}

	//this above shit needs some more watching	and one of the worst coding i have ever done
	//I will improve if i have time			

//$sql 

/*if(insert($sql))
{
	$url = '../index.php';
	echo "Done";
	header('Location: '.$url);
}
else
{
	echo " Try again Later";
}*/

//$id=$id+1;
    //Enables moderator verification (overrides user self-verification emails)
/*if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}*/
//Validation rules