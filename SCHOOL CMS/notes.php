<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="background:#FC6;">
<?php
session_start();
$sid=session_id();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
?>
<script>
function validate(){
	if(addroom.select_note.value=='Select')
	{
		document.getElementById("error").innerHTML="Please select the category!!!";
		addroom.select_note.focus();
	return false;
	}
	
if(addroom.image.value==''){
	document.getElementById("error").innerHTML="Please select the image!!!";
	addroom.image.focus();
	return false;
	}
	if(addroom.caption.value==''){
	document.getElementById("error").innerHTML="Please insert the file name!!!";
	addroom.caption.focus();
	return false;
	}
	
	var fileName = addroom.image.value
        if (fileName.split(".")[1].toUpperCase() == "PDF"||fileName.split(".")[1].toUpperCase() == "DOC"||fileName.split(".")[1].toUpperCase() == "DOCX")
            return true;
        else 
		{
			document.getElementById("error").innerHTML="Invalid File Formate!!!";
			addroom.image.focus();
            return false;
        }
        return true;

}
</script>
<form action="addexecnotes.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validate();">
<table>
<tr><th align="left">Category</th>
      <td><label>
        <select name="select_note" class="style9">
		<option selected="selected">Select</option>
          <option>Class XI</option>
          <option>Class XII</option>
          <option>School Level</option>
          <option>Extra</option>
        </select>
      </label></td></tr>
<tr>
<th  align="left">Select Note: </th>
 <td><input type="file" name="image" class="ed"></td></tr>
 <tr><th  align="left">File Name:</th>
 <td><input name="caption" type="text" class="ed" id="brnu" /></td></tr>
 <tr><td><input style="background:#03C; height:30px; width:70px;" type="submit" name="Submit" value="Upload" id="button1" /></td>
 <td id="error" style="color:#F00; font-weight:bold;"> <?php echo "$_REQUEST[msg]"; ?> </td> </tr>
 </table>
 </form>
<div style="margin-left: 260px; margin-top: 10px; font-weight: bold; color: #903; position: absolute; left: 109px; top: 10px;"><a href="logout.php">Log Out</a></div>  
<div style="margin-left: 260px; margin-top: 10px; font-weight: bold; color: #903; position: absolute; left: 300px; top: 10px;"><a href="home.php">Home</a></div>  
<h2 style="color:#06F; text-align:left; text-decoration:underline;">Note List</h2>
<style>
.mytable h3{
	color:#06F;
	text-decoration:underline;
}
.mytablee{
	background:#9F6;	
}
.mytablee a{
	color:#009;
}
.mytablee a:hover{
	color:#900;
}
</style>
<div class="mytable">
<form name="selectt" method="post" action="notes.php?msg">
<table>
<tr><th align="left">Category</th>
      <td><label>
        <select name="selectnote" class="style9" onchange="javascript:this.form.submit();">
       <option <?php if($_REQUEST['selectnote']=='All'){echo'selected="selected"';}?>>All</option>
          <option <?php if($_REQUEST['selectnote']=='Class XI'){echo'selected="selected"';}?>>Class XI</option>
          <option <?php if($_REQUEST['selectnote']=='Class XII'){echo'selected="selected"';}?>>Class XII</option>
          <option <?php if($_REQUEST['selectnote']=='School Level'){echo'selected="selected"';}?>>School Level</option>
          <option <?php if($_REQUEST['selectnote']=='Extra'){echo'selected="selected"';}?>>Extra</option>
        </select>
      </label></td></tr>
    </table>
      </form>
<form action="deletefile.php?n=notes" method="post">
<?PHP
include('conn.php');
if($_REQUEST['selectnote']=='Class XI')
{
$sql = "SELECT COUNT(*) FROM notes where category='Class XI'";
}
if($_REQUEST['selectnote']=='Class XII')
{
$sql = "SELECT COUNT(*) FROM notes where category='Class XII'";
}
if($_REQUEST['selectnote']=='School Level')
{
$sql = "SELECT COUNT(*) FROM notes where category='School Level'";
}
if($_REQUEST['selectnote']=='Extra')
{
$sql = "SELECT COUNT(*) FROM notes where category='Extra'";
}
if($_REQUEST['selectnote']=='All')
{
$sql = "SELECT COUNT(*) FROM notes";
}
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
$r = mysql_fetch_row($result);
$numrows = $r[0];
// number of rows to show per page
$rowsperpage = 12;
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
if($_REQUEST['selectnote']=='Class XI')
{
$sql = "SELECT * FROM notes where category='Class XI' order by id desc LIMIT $offset, $rowsperpage";
}
if($_REQUEST['selectnote']=='Class XII')
{
$sql = "SELECT * FROM notes where category='Class XII' order by id desc LIMIT $offset, $rowsperpage";
}
if($_REQUEST['selectnote']=='School Level')
{
$sql = "SELECT * FROM notes where category='School Level' order by id desc LIMIT $offset, $rowsperpage";
}
if($_REQUEST['selectnote']=='Extra')
{
$sql = "SELECT * FROM notes where category='Extra' order by id desc LIMIT $offset, $rowsperpage";
}
if($_REQUEST['selectnote']=='All')
{
$sql = "SELECT * FROM notes order by id desc LIMIT $offset, $rowsperpage";
}
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
echo "<h3>"."$_REQUEST[selectnote]"."</h3>";
echo "<table class=mytablee border=1 bgcolor=#009999 bordercolor=#FFFFFF width=800>";
echo "<tr><th>Title</th><th>Download List</th><th>Delete Files</th></tr>";
while ($list = mysql_fetch_assoc($result)) {
   // echo data
echo "<tr>";
if(strlen($list['caption'])>50){
	echo '<td width=400>'.substr($list['caption'],0,60).'........'.' </td>';
}
else
{
echo '<td width=400>'.$list['caption'].' </td>';
}
echo "<td><a href=$list[location] target=_blank>Click Here to Download</a></td>";
echo '<td>' . '<input name=selector[] type=checkbox value='.$list['id'].'>' . '</td>';
echo "</tr>";
}
echo "</table>";
//   echo $list['location'] . " : " . $list['caption'] . "<br />";
 // end while

/******  build the pagination links ******/
// range of num links to show
$range = 3;
echo"<br/>";
// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1&err&msg&selectnote=$_REQUEST[selectnote]'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&err&msg&selectnote=$_REQUEST[selectnote]'><</a> ";
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
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x&err&msg&selectnote=$_REQUEST[selectnote]'>$x</a> ";
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
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&err&msg&selectnote=$_REQUEST[selectnote]'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&err&msg&selectnote=$_REQUEST[selectnote]'>>></a> ";}
}
}
else{header("location:index.php");} 
?>
<input name="" style="background:#03C; height:30px; width:50px;" type="submit" value="Delete" />
</form>
</div>
</body>
</html>

 



