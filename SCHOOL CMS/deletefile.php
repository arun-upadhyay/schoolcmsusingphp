<?PHP
require_once('conn.php');
$val=$_REQUEST['id'];
if($_REQUEST['n']=="gallery")
{
$edittable=$_REQUEST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
$sql="select * from photos where id=$edittable[$i]";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
unlink($row['location']);
}
$sql = "DELETE FROM photos where id=$edittable[$i]";
mysql_query($sql);
}
header("location:photodelete.php?err");
}
if($_REQUEST['n']=="feed")
{
 $sql="delete from feedback where id='$val'";
 mysql_query($sql);
 header("location:feedbackmanage.php?err");
}
if($_REQUEST['n']=="notes")
{
$edittable=$_REQUEST['selector'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
$sql="select * from notes where id=$edittable[$i]";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
unlink($row['location']);
}
$sql = "DELETE FROM notes where id=$edittable[$i]";
mysql_query($sql);
}
header("location:notes.php?err&msg&selectnote=All");

}
?>