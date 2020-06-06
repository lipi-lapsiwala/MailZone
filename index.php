<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In</title>
<link rel="stylesheet" href="css2.css" />
</head>

<body>
<table width="900" border="0" cellspacing="0" cellpadding="0" align=center>
  <tr>
    <td colspan="2"><?php
    include"header.php";
	?></td>
  </tr>
  <tr>
    <td colspan=2 align="center">
    <form name="frmlogin" method="post" action="chklogin.php">
      <table width="300" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td colspan="2"><div align="center"><h1><u>Log In</u></h1></div></td>
          </tr>
        <tr>
          <td width=50%>Username:</td>
          <td width=50%><label>
              <?php
		 	if(isset($_COOKIE["un"]))
			{
			echo "<input type=text name=txtuname value=".$_COOKIE['un'].">";
			}
			else
			{
			echo "<input type=text name=txtuname autofocus required>";
			} 
		  ?>
          </label></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><label>
                <?php
		 	if(isset($_COOKIE["up"]))
			{
			echo "<input type=password name=txtpwd value=".$_COOKIE['up'].">";
			}
			else
			{
			echo "<input type=password name=txtpwd autofocus required>";
			} 
		  ?>
          </label></td>
        </tr>
         <tr align="center">
          <td colspan="2"><label>
            <input type="checkbox" name="chkrem" id="chkrem" />
          Remember Me</label></td>
        </tr>
       
        <tr>
          <td colspan="2"><label>
            <div align="center">
              <input type="submit" name="submit" id="submit" value="Log In" />
              </div>
          </label></td>
          </tr>
          <tr>
          <td ><a href="signup.php">Signup</a></td>
          <td><a href="forgot.php">Forgot password?</a></td>
        </tr>
              </table>
                </form>    </td>
  </tr>
  <tr>
    <td colspan="2"><?php
  include"footer.php";
  ?></td>
  </tr>
</table>
</body>
</html>


