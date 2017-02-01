<?php
session_start();
$sid=session_id();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
?>
<div style="margin-left: 200px; margin-top: 10px; font-weight: bold; color: #903; position: absolute; left: 109px; top: 10px;"><a href="logout.php">Log Out</a></div>  
<h2 style="color:#06F; text-align:left; text-decoration:underline;">Feedback List</h2>
<div id="content">
<?php
include('conn.php');
// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM feedback";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
$r = mysql_fetch_row($result);
$numrows = $r[0];
// number of rows to show per page
$rowsperpage = 10;
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
$sql = "SELECT * FROM feedback order by id desc LIMIT $offset, $rowsperpage";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
echo "<table border=1 bgcolor=#CC3366 bordercolor=#FFFFFF>";
echo "<tr><th>Name</th><th>E-mail</th><th>Subject</th><th>Messages</th><th>Delete Files</th></tr>";
while ($list = mysql_fetch_assoc($result)) {
   // echo data
echo "<tr>";
echo '<td >'.$list['name'].' </td>';
echo '<td >'.$list['email'].' </td>';
echo '<td >'.$list['subject'].' </td>';
echo "<td><a href=feedbackview.php?id=$list[id]> View Message </a></td>";
echo "<td><a href=deletefile.php?id=$list[id]&n=feed> Delete </a></td>";
echo "</tr>";
}
echo "</table>";
}
else{header("location:index.php");}
//   echo $list['location'] . " : " . $list['caption'] . "<br />";
 // end while

/******  build the pagination links ******/
// range of num links to show
$range = 3;
echo"<br/>";
// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1&err'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&err'><</a> ";
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
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x&err'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&err'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&err'>>></a> ";
}
// end if
/****** end build pagination links ******/

?>
<h3 style="color:#00C; text-decoration:underline;">By:-    <?PHP $q=mysql_query("select * from feedback where id=$_REQUEST[id]");
$row=mysql_fetch_array($q); echo"   $row[name]";  ?></h3>
<form id="form1" name="form1" method="post" action="email.php">
  <table width="200" border="0">
    <tr>
      <td><label for="textarea"></label>
        <textarea style="color:#00C; font-weight:bold;" name="textarea" id="textarea" cols="70" rows="10" readonly="readonly"><?PHP 
	echo $row['message']; 
?></textarea></td>
    </tr>
    <tr>
      <td><a href="feedbackreply.php?name=<?php echo $row['name']; ?>&email=<?php echo $row['email']; ?>&subject=<?php echo $row['subject']; ?>">Reply</a></td>
    </tr>
  </table>
</form>

</div>


