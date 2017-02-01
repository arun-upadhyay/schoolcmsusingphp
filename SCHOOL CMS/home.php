<?php
session_start();
$sid=session_id();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="stylehome.css" />
</head>
<body>
<div class="main">
<h1>Welcome To Admin Panel</h1>
<div id="menu">
		<ul>
			 <li><a href="fckeditor/manage_webpage.php?select=>Home<">Manage Webpage</a></li>
     		 <li><a href="photogall.php">Manage Photo Gallery</a></li>
             <li><a href="notes.php?err&selectnote=All&msg">Manage notes download</a></li>
             <li><a href="feedbackmanage.php?err">Feedback List</a></li>
		</ul>
	</div>
    <div class="log"><a href="logout.php">Log Out</a></div>  
    </div>
    </body>
</html>
<?PHP 
}else{header("location:index.php");}


?>