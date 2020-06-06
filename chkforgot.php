<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password</title>
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
if(!isset($_POST["submit"]))
{
 header("Location:forgot.php");
}

$email=$_POST["txtemail"];
$sec=$_POST["selques"];
$ans=$_POST["txtans"];


include "connect.php";
$q="select * from signup where (email='$email' and sec='$sec' and ans='$ans')";
$res=mysql_query($q);
$cnt=mysql_num_rows($res);
if($cnt>0)
{
 while($arr=mysql_fetch_array($res))
 {
   echo "<h1>your password is :</h1><u> ".$arr['pwd']."</u><br><center><a href=index.php>LOGIN</a></center>";
 }
}
 else
 {
  echo "<h4 align=center><font color=#FFFFFF>Sorry You entered Wrong Details</font><br><a href=forgot.php>Try Again</a></h4>";
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
