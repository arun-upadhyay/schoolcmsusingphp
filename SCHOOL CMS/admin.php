<?php   
if ($_REQUEST['key']=="123"){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="margin:0px; background:#0CC;">
<div style="width:300px;  margin:100px 100px 100px 300px; background-color:#F2F2F2;">
<?php
ob_start();
session_start();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
 header("location:home.php");
}
else
{?>
<form action="" method="post">
  <table>
  <tr><td style="font-weight:bold; color:red;">Login</td></tr>
    <tr>
      <td>Username</td>
      </tr>
      <tr>
      <td><label for="textfield"></label>
      <input type="text" name="textfield1" id="textfield"/></td>
    </tr>
    <tr>
      <td>Password</td>
      </tr>
      <td><label for="textfield2"></label>
      <input type="password" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="Submit" /><?php echo "<font color='#FF0000'>"; echo $_REQUEST['Result']; echo "</font>";?></td>
    </tr>
  </table>
</form>
<?PHP
}

?>
<?php require_once('conn.php'); 
if(isset($_POST['button']))
{	$un = mysql_real_escape_string($_POST['textfield1']);
	$psd = mysql_real_escape_string($_POST['textfield2']);

	$result = mysql_query("SELECT * FROM login where id='$un' and password='$psd' ") or die('Error, query failed');
	$rowcount=mysql_numrows($result);
	if ($rowcount>0)
	{ 
	 
	$_SESSION['userloggedin']="loggedin";
	 header('location:home.php');
	}
	else
	{
		header('location:admin.php?key=123&Result=Invalid Username or Password!!!');
		//echo $un.$psd;
		

	 
	}
	
}


?>
</div>



</body>
</html>
<?PHP
}
?>