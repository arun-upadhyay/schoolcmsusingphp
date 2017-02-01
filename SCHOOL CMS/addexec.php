<?php
session_start();
$sid=session_id();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
include('conn.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
		if (($_FILES["image"]["type"] == "image/jpg")
|| ($_FILES["image"]["type"] == "image/jpeg")
|| ($_FILES["image"]["type"] == "image/png")
&& ($_FILES["file1"]["size"] < 5242880))
{
		
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="photos/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			$save=mysql_query("INSERT INTO photos (location, caption) VALUES ('$location','$caption')");
			header("location:upload.php?msg=Suceessfully uploaded!!!");
			exit();		
}
	}
	}else{header("location:index.php");}
?>
