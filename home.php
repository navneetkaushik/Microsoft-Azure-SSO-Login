<?php session_start(); error_reporting( E_ALL );
if (!isset($_SESSION['authenticated'])){
	header('Location: index.php');
    exit;
}else{
   //if the user did login, then you load the page normally
}

?>

Access Code: 
<?php 
	echo $_SESSION['access_code']; 
?>