<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link rel="stylesheet" href="css2.css" />
</head>

<body>
<table width="915" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="2"><?php
    include "header.php";
	?></td>
  </tr>
<tr>
    <td colspan="2"></td>
  </tr>

  <tr>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan=2 align="center">

<?php
session_start();
if(!isset($_POST["submit"]))
{
 header("Location:index.php");
}
$un=$_POST["txtuname"];
$pwd=$_POST["txtpwd"];

if(isset($_POST["chkrem"]))
{
$rem=$_POST["chkrem"];
setcookie("un",$un,time()+3600);
setcookie("up",$pwd,time()+3600);
}
include "connect.php";

$q1="select * from signup where email='$un' and pwd='$pwd'";
$res1=mysql_query($q1) or die("Select error");
$cnt=mysql_num_rows($res1);
if($cnt>0)
{
 $_SESSION["un"]=$un;
 $q="Select * from signup where email='$un'";
 $r=mysql_query($q) or die("Select error");
 header("Location:inbox.php");
}
else
{
 echo "<h4 align=center><font color=#FFFFFF>Sorry! You Have Entered Wrong Details </font><br><a href=index.php>Try Again</a></h4>"; 
}


?>

	  <p>&nbsp;</p>
      <p>&nbsp;</p>
      
      </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<?php include "footer.php"; ?>
</body>


</html>
