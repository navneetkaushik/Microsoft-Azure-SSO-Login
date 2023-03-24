<?php session_start();
if(!empty($_REQUEST['code'])){
	$_SESSION['authenticated']=true;
	$_SESSION['access_code']=$_REQUEST['code'];
	header('location: home.php');
}else{
	header('location: login.php');
}
die;
?>