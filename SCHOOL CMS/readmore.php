<?PHP require_once('conn.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM articles where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);

  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<title><?PHP  echo $row['title'];?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?PHP echo $row['metatag'] ?>" />
<meta name="description" content="<?PHP echo $row['metadesc'] ?>" />

<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/5/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
    <script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
</head>

<link rel="stylesheet" type="text/css" href="style.css" />
<div style="position:fixed;left:0;bottom:240px;width:37px;z-index:1000;">
  <img src="images/phoneno.jpg" />
</div>
<div style="position:fixed;right:0;bottom:20px;width:37px;z-index:1000; margin-right:15px;">
<a href="#">  <img src="images/facebook1.png" /></a>
</div>
<div style="position:fixed;right:0;bottom:75px;width:37px;z-index:1000; margin-right:15px;">
<a href="#">  <img src="images/google1.png" /></a>
</div>
<div style="position:fixed;right:0;bottom:130px;width:37px;z-index:1000; margin-right:15px;">
<a href="#">  <img src="images/digg1.png" /></a>
</div>
<div style="position:fixed;right:0;bottom:185px;width:37px;z-index:1000; margin-right:15px;">
<a href="#">  <img src="images/delicious1.png" /></a>
</div>
<div style="position:fixed;right:0;bottom:240px;width:37px;z-index:1000; margin-right:15px;">
<a href="#">  <img src="images/twitter1.png" /></a>
</div>
<div class="container">
<div class="header"><img src="images/logo.png" width="140" style="margin-top:6px; margin-left:10px;" height="145px;" />
  <div class="orgname" ><a style="text-decoration:none" href="index.php?Result&pag"><h1>SURYODAYA HIGHER SECONDARY </h1>
  <h2>ENGLISH BOARDING SCHOOL</h2></a>
<div class="slogan"><h3>In Persuit Of Knowledge....</h3></div>
  </div>
<div style="position: absolute; height: 78px; width: 177px; left: 1039px; top: 54px; right: 2px;"><form name="searchform" method="get" action="search.php?Result">
                <table width="175" height="94">
                    <tbody>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" maxlength="300" size="23" name="q" style="color:#999;" value="Search......" onblur="if(this.value=='') this.value='Search......';" onfocus="if(this.value=='Search......') this.value='';"/></td>
                        </tr>
                        <tr>
                            <td align="right" width="25">
                            <div align="left"><span style="color: rgb(204, 255, 204);"><input type="submit" name="submit" value="Go" /></span></div> 
                            </td>
                        </tr>
                    </tbody>
                </table>
    </form> </div>
  <div class="menu">
  <ul>
    <li><a href="index.php?pag=1&Result">Home</a></li>
    <li><a id="current" href="#">Management</a>
    <ul>
        <li><a href="readmore.php?pag=2&Result">From Principal's Desk</a></li>
        <li><a href="readmore.php?pag=13&Result">Director's Message</a></li>
        <li><a href="readmore.php?pag=12&Result">Faculty Members</a></li>
        <li><a href="readmore.php?pag=3&Result">Our Services</a></li>
        <li><a href="readmore.php?pag=4&Result">Faculties</a></li>

    </ul>
    </li>
    <li><a id="current" href="readmore.php?pag=6&Result">Admission</a>
    <ul>
        <li><a href="readmore.php?pag=5&Result">Rules for admission</a></li>
        <li><a href="readmore.php?pag=6&Result">Fees and fines</a></li>
    </ul>
    </li>
    <li><a id="current" href="gal.php?Result">Photo Gallery</a>  </li>
    
     <li><a id="current" href="readmore.php?pag=6&Result">About Us</a>
    <ul>
    	<li><a href="readmore.php?pag=1&Result">Introduction</a></li>
        <li><a href="readmore.php?pag=7&Result">Why Suryodaya?</a></li>
        <li><a href="readmore.php?pag=8&Result">Student facilities</a></li>
        <li><a href="readmore.php?pag=9&Result">Scholarship scheme</a></li>
        <li><a href="readmore.php?pag=10&Result">Rules and regulations</a></li>
    </ul>
    </li>
    
    <li><a id="current" href="readmore.php?pag=11&Result">Contact Us</a>   </li>
    <li><a id="current" href="feedback.php?Result&msg">Feedback Us</a>   </li>
     
    
    <li>&nbsp;</li>
</ul>
  </div>
  
  <!-- end .header --></div>
  <div class="sidebar1">
   <div class="side">
   <h3>Quick Links</h3>
   
    <ul class="nav">
      <li><a href="index.php?pag=1&Result">Home</a></li>
      <li><a href="gal.php?Result">Photo Gallery</a></li>
      <li><a href="download.php?Result&selectnote=All">Download Notes</a></li>
      <li><a href="admin.php?key=123&Result" target="_blank">Login</a></li>
      <li><a href="http://slc.ntc.net.np/" target="_blank" >SLC Result</a></li>
      <li><a href="http://hseb.ntc.net.np/" target="_blank">HSEB Result</a></li>
      <li><a href="http://www.hseb.edu.np/" target="_blank">HSEB Board</a></li>
    </ul>
    </div>
   <!-- end .sidebar1 -->
   <br />
  <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSuryodaya-HSEBS-Kakarvitta%2F213109858825143&amp;width=190&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:290px;" allowTransparency="true"></iframe>
   </div>
    
    
  <div class="content">
    <?PHP require_once('conn.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM articles where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);

  ?>
   <h2 style="color:#06F;"><?PHP echo $row['title']; ?></h2><br /><div style="margin-top:-30px; margin-left:820px; margin-right:30px;"><a href="generatepdf.php?pag=<?PHP echo $idval;?>" target="_blank"><img src="images/pdf_button.png" alt="pdf"></a>
    <a href="#" target="_blank"><img src="images/print_button.png" alt="Print"></a>
    <a href="#" target="_blank"><img src="images/email_button.png" alt="E-mail"></a></div>
    <p><?PHP echo $row['content'];?></p><br /><br />
    <hr />
  <div>

  
<h3 style="color: #CCC; font-style: italic; font-family: 'monotype Corsiva'; width: 113px; background: #3B5998; font-size: 20px; padding:0px; ">Share us with</h3>
 <table width="200" style="margin:0px; padding:0px;">
  <tr>
 <td><a href="#"> <img src="images/facebook.png" /></a></td>
 <td><a href="#"><img src="images/google.png" /></a></td>
 <td><a href="#"> <img src="images/twitter.png" /></a></td>
 <td><a href="#"> <img src="images/digg.png" /></a></td>
 <td><a href="#"><img src="images/linkedin.png" /></a></td>
  </tr>
  </table>
  
  </div>
   
    <!-- end .content --></div>
  
  <div class="footer">
  <div class="footerlink">
    <table width="200" border="0" class="ftab1">
      <tr>
        <th> Quick Links</th>
      </tr>
      <tr>
        <td><a href="http://www.facebook.com/pages/Suryodaya-HSEBS-Kakarvitta/213109858825143" target="_blank">Facebook</a></td></tr>
        <tr><td><a href="feedback.php?Result&msg">Feedback Us!</a></td></tr>
        <tr><td><a href="#">Sitemap!</a></td></tr>
        <tr><td><a href="download.php?Result&selectnote=All">Download!</a></td></tr>
        <tr><td><a href="#">Calender</a></td></tr>
    </table>
    <table width="200" border="0" class="ftab2">
      <tr>
        <th> About Us</th>
      </tr>
        <tr><td><a href="readmore.php?pag=1">Introduction</a></td></tr>
        <tr><td><a href="readmore.php?pag=12">Faculty Members</a></td></tr>
        <tr><td><a href="readmore.php?pag=7">Our Features</a></td></tr>
        <tr><td><a href="readmore.php?pag=9">Scholarship Scheme</a></td></tr>
        <tr><td><a href="readmore.php?pag=11">Contact Us</a></td></tr>
    </table>
    
     <table width="200" border="0" class="ftab3">
      <tr>
        <th> Visitor's Counter</th>
      </tr>
        <tr><td><a href="#">Facilities</a></td></tr>
    </table>
    
  </div>
  <hr />
  <div style="background:#C03; height:60px; margin-bottom:-10px; margin-top:-7px;">
    <p>Suryodaya HSEBS, Mechinagar-10, Jhapa, Nepal Phone:- 00977-023-562676</p>
    <p>Copyright&copy;2012 suryodaya.edu.np by Webmaster <a href="http://www.arunupadhayay.com.np" target="_blank">Arun Kumar Upadhyay</a></p>
  </div>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>