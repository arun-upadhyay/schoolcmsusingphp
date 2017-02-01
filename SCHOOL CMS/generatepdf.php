<?php
require_once('conn.php');
$idval=$_REQUEST['pag'];
$query  = "SELECT * FROM articles where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$html ='<h2 style="color:#06F;">'.$row['title'].'</h2><hr /><p align="left">'.$row['content'].'</p>';
include("PDF/mpdf.php");
$mpdf=new mPDF(); 
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>