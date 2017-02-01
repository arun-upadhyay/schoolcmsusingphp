<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>

<form action="" name="frmpages" method="get"><table width="490" border="0">
  <tr>
    <td width="89"><div align="right">Select Page </div></td>
    <td width="379">
      <select name="select" onChange="javascript:this.form.submit();" >
	  <option>Select</option>
        <option>>Home<</option>
        <option>>Principal Message<</option>
        <option>>Director Message<</option>
        <option>>Faculty Members<</option>
		<option>>Our Services<</option>
		<option>>Curriculum<</option>
        <option>>Rules for admission<</option>
        <option>>Fees and fines<</option>
        <option>>Why to choose Suryodaya?<</option>
        <option>>Student facilities<</option>
        <option>>Scholarship scheme<</option>
        <option>>Rules and regulations<</option>
        <option>>Contact Us<</option>
      </select>
    </td>
    </tr>
</table>
</form>
<?php
if($_REQUEST['select']=='>Home<'){

include('conn.php');
$query  = "SELECT * FROM articles where id='1'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$intro_txt=$row['content'];
$flname='welcome';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Principal Message<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='2'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$prin_txt=$row['content'];
$flname='principal_message';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Our Services<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='3'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$our_txt=$row['content'];
$flname='our_services';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Curriculum<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='4'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$cur_txt=$row['content'];
$flname='curriculum';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Rules for admission<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='5'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$rulesadd_txt=$row['content'];
$flname='rules_for_admission';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Fees and fines<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='6'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$fs_txt=$row['content'];
$flname='fees';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Why to choose Suryodaya?<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='7'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$sur_txt=$row['content'];
$flname='choose';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Student facilities<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='8'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$fac_txt=$row['content'];
$flname='facilities';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Scholarship scheme<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='9'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$sch_txt=$row['content'];
$flname='scholarship';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Rules and regulations<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='10'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$rulesreg_txt=$row['content'];
$flname='rules';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Contact Us<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='11'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$cont_txt=$row['content'];
$flname='contact';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}

if($_REQUEST['select']=='>Faculty Members<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='12'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$mem_txt=$row['content'];
$flname='members';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
if($_REQUEST['select']=='>Director Message<'){
include('conn.php');
$query  = "SELECT * FROM articles where id='13'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
$dir_txt=$row['content'];
$flname='director';
$mt=$row['metatag'];
$mtd=$row['metadesc'];

}
?>
<table  border="0" width="850">
  <tr>
    <td bgcolor="#0A3152" ><div align="center"><font color="#FFFFFF">Manage my <?php echo $_REQUEST['select']; ?> Page</font></div></td>
</table>

<form action="SaveEdited.php?FileName=<?php echo $flname; ?> & select= <?php echo ">Select<"; ?> " method="POST">
<?php

if($_REQUEST['select']=='>Home<')
{
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $intro_txt;
$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Principal Message<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $prin_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Our Services<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $our_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Curriculum<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $cur_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Rules for admission<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $rulesadd_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Fees and fines<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $fs_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Why to choose Suryodaya?<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $sur_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Student facilities<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $fac_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Scholarship scheme<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $sch_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Rules and regulations<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $rulesreg_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Contact Us<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $cont_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Faculty Members<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $mem_txt;$oFCKeditor->Create() ;
}
if($_REQUEST['select']=='>Director Message<'){
include_once("../fckeditor/fckeditor.php");
$oFCKeditor = new FCKeditor('EditorDefault') ;
$oFCKeditor->BasePath	= '../fckeditor/';
$oFCKeditor->Width = 850;
$oFCKeditor->Height = 500;
$oFCKeditor->Value = $dir_txt;$oFCKeditor->Create() ;
}
?><br  />
<table><tr>
<td>
KeyWords</td>
<td><textarea name="meta" style="border:1px solid; width:250px; height:100px;">
<?PHP echo $mt; ?>
</textarea></td>
<td>Description</td>
<td><textarea name="metad" style="border:1px solid;width:250px; height:100px;">
<?PHP echo $mtd; ?>
</textarea></td></tr></table>

<input name="" type="submit" value="Save" />
 <input type="hidden" name="FileName" value="<?php echo $flname ?>" />
</form>
<table>
<tr>
<td width="100"><a style="font-weight:bold; position:absolute; margin-left:100px; margin-top:7px;" href="../Home.php">Home</a>  </td>
  </tr>
 </table>
<table>
<tr>
<td width="100"><a style="font-weight:bold;" href="../logout.php">Log Out</a>  </td>
  </tr>
 </table>

