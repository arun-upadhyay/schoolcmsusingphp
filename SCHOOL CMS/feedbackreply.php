<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="email.php">
      <table width="579" border="0" align="center">
        <tr>
          <td width="127">Name</td>
          <td width="442"><label for="uname"></label>
          <input type="text" name="uname" id="uname" value="<?php echo $_REQUEST['name'];  ?>" /></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><label for="email"></label>
          <input type="text" name="email" id="email" value="<?php echo $_REQUEST['email'];  ?>" readonly="readonly" /></td>
        </tr>
        <tr>
          <td>Subject</td>
          <td><label for="subject"></label>
          <input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'];  ?>" /></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><label for="message"></label>
          <textarea name="message" id="message" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" name="button2" id="button2" value="Send" /></td>
          <td></td>
        </tr>
      </table>
    </form>
</body>
</html>