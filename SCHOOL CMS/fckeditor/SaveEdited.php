
<?php
if($_REQUEST['FileName']=="welcome")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='1'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Home<");
	}
	if($_REQUEST['FileName']=="principal_message")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='2'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Principal Message<");
	}
	if($_REQUEST['FileName']=="our_services")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='3'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Our Services<");
	}
	if($_REQUEST['FileName']=="curriculum")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='4'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Curriculum<");
	}
	if($_REQUEST['FileName']=="rules_for_admission")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='5'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Rules for admission<");
	}
	
	if($_REQUEST['FileName']=="fees")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='6'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Fees and fines<");
	}
	if($_REQUEST['FileName']=="choose")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='7'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Why to choose Suryodaya?<");
	}
	if($_REQUEST['FileName']=="facilities")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='8'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Student facilities<");
	}
	if($_REQUEST['FileName']=="scholarship")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='9'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Scholarship scheme<");
	}
	if($_REQUEST['FileName']=="rules")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='10'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Rules and regulations<");
	}
	if($_REQUEST['FileName']=="contact")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='11'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Contact Us<");
	}
	
	if($_REQUEST['FileName']=="members")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='12'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Faculty Members<");
	}
	if($_REQUEST['FileName']=="director")
	{  	include('conn.php');
		$pmsg=mysql_real_escape_string($_POST['EditorDefault']);
		$qry = "UPDATE articles SET content='$pmsg',metatag='$_POST[meta]', metadesc='$_POST[metad]' WHERE id='13'";
		mysql_query($qry) or die("can not update articles");	
		header("location:manage_webpage.php?select=>Director Message<");
	}
?>