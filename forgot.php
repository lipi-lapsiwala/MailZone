<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Your Password</title>
<link rel="stylesheet" href="css2.css" />
</head>

<body>
<?php
//include "struct-1.php";
?>
<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="2"><?php
    include"header.php";
	?></td>
  </tr>
<tr>
    <td colspan="2"></td>
  </tr>

</table>
<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width=900>
    <table width="400" border="0" cellspacing="0" cellpadding="5" align="center">
    <form id="frmforgot" name="frmforgot" method="post" action="chkforgot.php">
	<tr>
          <td colspan="2"><div align="center"><h1><u>Enter Your Details</u></h1>
          </div></td>
          </tr>

      <tr>
        <td width=60%>Your Email Id:</td>
        <td width=40%>
          <label>
            <input type="text" name="txtemail" id="txtemail" required/>
            </label>        </td>
      </tr>
      <tr>
        <td>Security Question:</td>
        <td><label>
          <select name="selques" id="selques">
            <option selected="selected">What is fav colour?</option>
            <option>What is college name?</option>
            <option>Who is your fav actor?</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Answer:</td>
        <td><label>
          <input type="text" name="txtans" id="txtans" required/>
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label>
           <div align="center">
             <input type="submit" name="submit" id="submit" value="Get Your Password" />
            </div>
        </label></td>
        </tr>
        <tr>
          <td><a href="index.php">Login</a></td>
          <td><a href="signup.php">Signup</a></td>
		 </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><?php
  include"footer.php";
  ?></td>
  </tr>
</table>
</body>
</html>
