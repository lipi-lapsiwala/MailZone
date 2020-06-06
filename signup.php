<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Register Yourselft</title>
<script language="javascript">
function validateform()
{
var err="";
fn=document.forms["frmsignup"]["txtfname"].value;
ln=document.forms["frmsignup"]["txtlname"].value;
em=document.forms["frmsignup"]["txtemail"].value;
pwd=document.forms["frmsignup"]["txtpwd"].value;
cpwd=document.forms["frmsignup"]["txtcpwd"].value;
mno=document.forms["frmsignup"]["txtmno"].value;
ans=document.forms["frmsignup"]["txtans"].value;

var ph = /^\d{10}$/;
var ph1 = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

if(mno.length!=10 && mno!=ph && mno!=ph1)
{
 err=err+"Please enter valid mobile number\n";
}
if(pwd.length<8)
{
 err=err+"Your password should be atleast 8 chracters long\n";
}
if(pwd!=cpwd)
{
err=err+"Please enter the same password\n";
}
if(err.length>0)
{
 alert(err);
 return false;
}
 
else
{
 return true;
}

}
</script>
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
    <td colspan=2 align="center"><form id="frmsignup" name="frmsignup" method="post" action="chksignup.php" onsubmit="return validateform()">
      <table width="450" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td colspan="2"><div align="center"><h1><u>Registration</u></h1></div></td>
          </tr>
        <tr>
          <td width=50%>First name:</td>
          <td width=50%><label>
            <input type="text" name="txtfname" id="txtfname" required autofocus/>
          </label></td>
        </tr>
        <tr>
          <td>Last name:</td>
          <td><label>
            <input type="text" name="txtlname" id="txtlname" required/>
          </label></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><label>
            <input type="text" name="txtemail" id="txtemail" required/>
          <font color="#666666">@mailzone.esy.es</font></label></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><label>
            <input type="password" name="txtpwd" id="txtpwd" required/>
          </label></td>
        </tr>
        <tr>
          <td>Confirm password:</td>
          <td><label>
            <input type="password" name="txtcpwd" id="txtcpwd" required/>
          </label></td>
        </tr>
        <tr>
          <td>Mobile number:</td>
          <td><label>
            <input type="text" name="txtmno" id="txtmno" required/>
          </label></td>
        </tr>
        <tr>
          <td>City:</td>
          <td><label>
<select name="selcity" id="selcity">
  <option>Surat</option>
  <option>Baroda</option>
  <option>Ahmedabad</option>
</select>
<br />
          </label></td>
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
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><label>
            <div align="center">
              <input type="submit" name="submit" id="submit" value="Sign up" />
              </div>
          </label></td>
          </tr>
              </table>
                </form>
    </td>
  </tr>
  <tr>
    <td colspan="2"><?php
  include"footer.php";
  ?></td>
  </tr>
</table>
</body>
</html>
