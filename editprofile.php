<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Your Profile</title>
<script language="javascript">
function validateform()
{
var err="";
mno=document.forms["frmedit"]["mno"].value;

var ph = /^\d{10}$/;
var ph1 = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

if(mno.length!=10 && mno!=ph && mno!=ph1)
{
 err=err+"Please enter valid mobile number\n";
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
<link rel="stylesheet" href="css1.css" />
</head>

<body>
<?php
    include "struct-1.php";
	include "connect.php";
?>

<form name="frmedit" action="chkedit.php" method="post" onsubmit="return validateform()">

<table width="915" border="0" align=center cellspacing="0" cellpadding="5">
  <tr>
    <td><div align="center"><h3>::Edit Your Profile::</h3></div></td>
  </tr>
  <tr>
    <td><?php
	$name=$_SESSION["un"];
	 $q="select * from signup where email='$name'";
	 $res=mysql_query($q);
	 echo "<table width=400 border=0 cellspacing=0 cellpadding=5 align=center>";
	 while($arr=mysql_fetch_array($res))
	 {
      echo "<tr><td width=60%>First Name:</td><td width=40%>";
	  echo "<input type=text name=fname value=".$arr['fname']."></td></tr>";
      echo "<tr><td>Last Name:</td><td>";
	  echo "<input type=text name=lname value=".$arr['lname']."></td></tr>";
      echo "<tr><td>City:</td><td>";
	  echo "<input type=text name=city value=".$arr['city']."></td></tr>";
      echo "<tr><td>Mobile No:</td><td>";
	  echo "<input type=text name=mno value=".$arr['mno']."></td></tr>";

	 }
	 echo "</table>";
   
    ?></td>
  </tr>
  <tr>
  <td colspan=2>&nbsp;</td>
  </tr>
  <tr>
    <td colspan=2><div align="center">
      <input name="submit" type="submit" value="Update" />
    </div></td>
  </tr>
  <tr>
  <td colspan=2><?php
  include"footer.php";
  ?></td></tr>
</table>
</body>
</html>
