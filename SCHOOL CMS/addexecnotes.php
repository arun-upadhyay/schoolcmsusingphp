<?php
session_start();
$sid=session_id();
function get_random_no($len) {
			$random = substr(number_format(time() * rand(), 0, '', ''), 0, $len);
			return $random;
			}
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
	
			$rand=get_random_no(20);
	if( $_POST['select_note']=="Class XI")
{
include('conn.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "Error!!!";
	}else{
	if ((($_FILES["image"]["type"] == "application/msword")
|| ($_FILES["image"]["type"] == "application/pdf"))
&& ($_FILES["image"]["size"] < 5242880))
{	
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["image"]["tmp_name"],"notes/class11/" . $_FILES["image"]["name"]);
			$sql="select * from notes";
			$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
     		rename("notes/class11/".$image_name,"notes/class11/".$rand.'.'.$ext);					
			$location="notes/class11/" .$rand.'.'.$ext;
			$caption=$_POST['caption'];
			$category=$_POST['select_note'];
			$save=mysql_query("INSERT INTO notes (location, caption, category) VALUES ('$location','$caption','$category')");
		    header("location:notes.php?selectnote=Class XI&msg=Suceessfully uploaded!!!");
exit();
}
}
}
if( $_POST['select_note']=="Class XII")
{
include('conn.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "Error!!!";
	}else{
			if ((($_FILES["image"]["type"] == "application/msword")
|| ($_FILES["image"]["type"] == "application/pdf"))
&& ($_FILES["image"]["size"] < 5242880))
{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["image"]["tmp_name"],"notes/class12/" . $_FILES["image"]["name"]);
			$sql="select * from notes";
			$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
     		rename("notes/class12/".$image_name,"notes/class12/".$rand.'.'.$ext);					
			$location="notes/class12/" .$rand.'.'.$ext;
			$caption=$_POST['caption'];
			$category=$_POST['select_note'];
			$save=mysql_query("INSERT INTO notes (location, caption, category) VALUES ('$location','$caption','$category')");
		    header("location:notes.php?selectnote=Class XII&msg=Suceessfully uploaded!!!");
			exit();	
}
}
}	if( $_POST['select_note']=="School Level")
{
include('conn.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "Error!!!";
	}else{
			if ((($_FILES["image"]["type"] == "application/msword")
|| ($_FILES["image"]["type"] == "application/pdf"))
&& ($_FILES["image"]["size"] < 5242880))
{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["image"]["tmp_name"],"notes/school/" . $_FILES["image"]["name"]);
			$sql="select * from notes";
			$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
     		rename("notes/school/".$image_name,"notes/school/".$rand.'.'.$ext);					
			$location="notes/school/" .$rand.'.'.$ext;
			$caption=$_POST['caption'];
			$category=$_POST['select_note'];
			$save=mysql_query("INSERT INTO notes (location, caption, category) VALUES ('$location','$caption','$category')");
		    header("location:notes.php?selectnote=School Level&msg=Suceessfully uploaded!!!");
			exit();
}
}
}	if( $_POST['select_note']=="Extra")
{
include('conn.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "Error!!!";
	}else{
			if ((($_FILES["image"]["type"] == "application/msword")
|| ($_FILES["image"]["type"] == "application/pdf"))
&& ($_FILES["image"]["size"] < 5242880))
{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["image"]["tmp_name"],"notes/extra/" . $_FILES["image"]["name"]);
			$sql="select * from notes";
			$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
     		rename("notes/extra/".$image_name,"notes/extra/".$rand.'.'.$ext);					
			$location="notes/extra/" .$rand.'.'.$ext;
			$caption=$_POST['caption'];
			$category=$_POST['select_note'];
			$save=mysql_query("INSERT INTO notes (location, caption, category) VALUES ('$location','$caption','$category')");
		    header("location:notes.php?selectnote=Extra&msg=Suceessfully uploaded!!!");
			exit();	
}
}
}

	}else{header("location:index.php");}
?>
