<?PHP
require_once("conn.php");
$sql="insert into feedback(name, email, subject, message) values('$_POST[uname]','$_POST[email]','$_POST[subject]','$_POST[message]')";
mysql_query($sql);
header("location:feedback.php?msg=Message Send Sucessfully&Result");
?>