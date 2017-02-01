 <?php
session_start(); 
include("conn.php");
	  $_SESSION["userloggedin"]="";
	   header("location:index.php?pag=1&Result");

?>




