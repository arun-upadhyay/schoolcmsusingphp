<?php
session_start();
$sid=session_id();
if(isset($_SESSION['userloggedin']) && $_SESSION["userloggedin"]!="")
{
?>
<form action="addexecnotes.php" method="post" enctype="multipart/form-data" name="addroom">
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
 <tr><td><input type="submit" name="Submit" value="Upload" id="button1" /></td>
 <td><h3 style="color:#F00; font-size:17px;" id="error"></h3>
 </table>
 </form>
<div style="margin-left: 260px; margin-top: 10px; font-weight: bold; color: #903; position: absolute; left: 109px; top: 10px;"><a href="logout.php">Log Out</a></div>  
<h2 style="color:#06F; text-align:left; text-decoration:underline;">Note List</h2>
<style>
.mytable h3{
	color:#06F;
	margin-left:300px;
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
<form name="selectt" method="post" action="notes.php?sp=yes">
<table>
<tr><th align="left">Category</th>
      <td><label>
        <select name="selectnote" class="style9">
		<option selected="selected">Select</option>
       <option>All</option>
          <option>Class XI</option>
          <option>Class XII</option>
          <option>School Level</option>
          <option>Extra</option>
        </select>
      </label></td></tr>
     <tr><td align="left"><input name="" type="submit" value="View Notes"/></td></tr></table>
      </form>

<?PHP
include('conn.php');
if($_REQUEST['sp']!="no"){
if($_POST['selectnote']=='Class XI')
{
echo "<h3>"."Class XI Notes"."</h3>";
$sql = "SELECT * FROM notes where category='Class XI' order by id desc ";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
echo "<table class=mytablee align=center border=1 bgcolor=#009999 bordercolor=#FFFFFF width=750>";
echo "<tr><th>Title</th><th>Download List</th><th>Delete Files</th></tr>";
while ($list = mysql_fetch_assoc($result)) {
   // echo data
echo "<tr>";
if(strlen($list['caption'])>50){
	echo '<td width=340>'.substr($list['caption'],0,45).'........'.' </td>';
}
else
{
echo '<td width=340>'.$list['caption'].' </td>';
}
echo '<td><a href="'.$list['location'].'">Click Here to Download</a></td>';
echo "<td><a href=deletefile.php?id=$list[id]&n=notes&loc=$list[location]> Delete </a></td>";
echo "</tr>";
echo "</table>";
}
}
if($_POST['selectnote']=='Class XII')
{
echo "<h3>"."Class XII Notes"."</h3>";
$sql = "SELECT * FROM notes where category='Class XII' order by id desc ";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
echo "<table class=mytablee align=center border=1 bgcolor=#009999 bordercolor=#FFFFFF width=750>";
echo "<tr><th>Title</th><th>Download List</th><th>Delete Files</th></tr>";
while ($list = mysql_fetch_assoc($result)) {
   // echo data
echo "<tr>";
if(strlen($list['caption'])>50){
	echo '<td width=340>'.substr($list['caption'],0,45).'........'.' </td>';
}
else
{
echo '<td width=340>'.$list['caption'].' </td>';
}
echo '<td><a href="'.$list['location'].'">Click Here to Download</a></td>';
echo "<td><a href=deletefile.php?id=$list[id]&n=notes&loc=$list[location]> Delete </a></td>";
echo "</tr>";
echo "</table>";
}
}
if($_POST['selectnote']=='School Level')
{
echo "<h3>"."School Level Notes"."</h3>";
$sql = "SELECT * FROM notes where category='School Level' order by id desc ";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
echo "<table class=mytablee align=center border=1 bgcolor=#009999 bordercolor=#FFFFFF width=750>";
echo "<tr><th>Title</th><th>Download List</th><th>Delete Files</th></tr>";
while ($list = mysql_fetch_assoc($result)) {
   // echo data
echo "<tr>";
if(strlen($list['caption'])>50){
	echo '<td width=340>'.substr($list['caption'],0,45).'........'.' </td>';
}
else
{
echo '<td width=340>'.$list['caption'].' </td>';
}
echo '<td><a href="'.$list['location'].'">Click Here to Download</a></td>';
echo "<td><a href=deletefile.php?id=$list[id]&n=notes&loc=$list[location]> Delete </a></td>";
echo "</tr>";
echo "</table>";
}
}

if($_POST['selectnote']=='Extra')
{
echo "<h3>"."Extra Notes"."</h3>";
$sql = "SELECT * FROM notes where category='Extra' order by id desc ";
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
echo "<table class=mytablee align=center border=1 bgcolor=#009999 bordercolor=#FFFFFF width=750>";
echo "<tr><th>Title</th><th>Download List</th><th>Delete Files</th></tr>";
while ($list = mysql_fetch_assoc($result)) {
   // echo data
echo "<tr>";
if(strlen($list['caption'])>50){
	echo '<td width=340>'.substr($list['caption'],0,45).'........'.' </td>';
}
else
{
echo '<td width=340>'.$list['caption'].' </td>';
}
echo '<td><a href="'.$list['location'].'">Click Here to Download</a></td>';
echo "<td><a href=deletefile.php?id=$list[id]&n=notes&loc=$list[location]> Delete </a></td>";
echo "</tr>";
echo "</table>";
}
}
if($_POST['selectnote']=='All')
{
echo "<h3>"."All Notes"."</h3>";
$sql = "SELECT * FROM notes order by id desc ";	
$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
echo "<table class=mytablee align=center border=1 bgcolor=#009999 bordercolor=#FFFFFF width=750>";
echo "<tr><th>Title</th><th>Download List</th><th>Delete Files</th></tr>";
while ($list = mysql_fetch_assoc($result)) {
   // echo data
echo "<tr>";
if(strlen($list['caption'])>50){
	echo '<td width=340>'.substr($list['caption'],0,45).'........'.' </td>';
}
else
{
echo '<td width=340>'.$list['caption'].' </td>';
}
echo '<td><a href="'.$list['location'].'">Click Here to Download</a></td>';
echo "<td><a href=deletefile.php?id=$list[id]&n=notes&loc=$list[location]> Delete </a></td>";
echo "</tr>";
echo "</table>";
}
}
}
}
else{header("location:index.php");}
?>
</div>




