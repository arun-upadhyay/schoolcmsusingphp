<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="background:#FC6;">
<style type="text/css">
<!--
#content {
  margin:0 auto;
  width:990px;
  margin-top:20px;
}
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:20px;
width:200px;
height:200px;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 200px;
width:200px;
}
-->
</style>
<?php
session_start();
$sid=session_id();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
?>
<script>
function validate(){
	
if(addroom.image.value==''){
	document.getElementById("error").innerHTML="Please select the image!!!";
	addroom.image.focus();
	return false;
	}
	if(addroom.caption.value==''){
	document.getElementById("error").innerHTML="Please insert the caption!!!";
	addroom.caption.focus();
	return false;
	}
	
	var fileName = addroom.image.value
        if (fileName.split(".")[1].toUpperCase() == "GIF"||fileName.split(".")[1].toUpperCase() == "JPG"||fileName.split(".")[1].toUpperCase() == "JPEG"||fileName.split(".")[1].toUpperCase() == "PJPEG"||fileName.split(".")[1].toUpperCase() == "PNG")
            return true;
        else 
		{
			document.getElementById("error").innerHTML="Invalid Image!!!";
			addroom.image.focus();
            return false;
        }
        return true;

}
</script>

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validate();">
<table>
<tr>
<th  align="left">Select Image: </th>
 <td><input type="file" name="image" class="ed"></td></tr>
 <tr><th  align="left">Caption:</th>
 <td><input name="caption" type="text" class="ed" id="brnu" /></td></tr>
 <tr><td><input style="background:#03C; height:30px; width:60px;" type="submit" name="Submit" value="Upload" id="button1" /></td>
 <td id="error" style="color:#F00; font-weight:bold;"><?php echo "$_REQUEST[msg]"; ?> </td> </tr>
 </table>
 </form>
 <div style="margin-left: 350px; margin-top: 10px; font-weight: bold; color: #903; position: absolute; left: 109px; top: 10px;"><a href="logout.php">Log Out</a></div>  
 <div style="margin-left: 550px; margin-top: 10px; font-weight: bold; color: #903; position: absolute; left: 109px; top: 10px;"><a href="photogall.php">View Gallery</a></div> 
 <div style="margin-left: 760px; margin-top: 10px; font-weight: bold; color: #903; position: absolute; left: 109px; top: 10px;"><a href="home.php">Home</a></div> 
 <br />
Photo Gallery
<div id="content">
<?php
include('conn.php');
// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM photos";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
$r = mysql_fetch_row($result);
$numrows = $r[0];
// number of rows to show per page
$rowsperpage = 8;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT location, caption FROM photos LIMIT $offset, $rowsperpage";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);

// while there are rows to be fetched...
while ($list = mysql_fetch_assoc($result)) {
   // echo data
  	 echo '<div id="imagelist">';
echo '<p><img src="'.$list['location'].'"></p>';
echo '<p id="caption">'.$list['caption'].' </p>';
echo '</div>';
}
}
else{header("location:index.php");}
//   echo $list['location'] . " : " . $list['caption'] . "<br />";
 // end while

/******  build the pagination links ******/
// range of num links to show
$range = 3;
echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1&msg'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&msg'><</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
		  	
         // 'highlight' it but don't make a link
         echo "<font color=#FF0000> [<b>$x</b>]</font> ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x&msg'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
	if($totalpages!=0)
	{
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&msg'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&msg'>>></a> ";
	}
}
// end if
/****** end build pagination links ******/
?>
</div>
</body>
</html>


