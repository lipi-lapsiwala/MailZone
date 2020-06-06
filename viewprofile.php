<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Your Profile</title>
<link rel="stylesheet" href="css1.css" />
</head>

</head>

<body>
<?php
    include "struct-1.php";
	include "connect.php";
	?>

<table width="915" border="0" align=center cellspacing="0" cellpadding="5">
    <tr  align="center">
    <td colspan=2>
    <?php
	$name=$_SESSION["un"];
	 
	 $q="select * from signup where email='$name'";
	 $res=mysql_query($q);
	 echo "<table width=400 border=0 cellspacing=0 cellpadding=5>";
	 echo "<tr align=center><td colspan=2><h3>::Your Profile::</h3></td></tr>";
	 while($arr=mysql_fetch_array($res))
	 {
      echo "<tr><td width=70%>First Name:</td><td width=30%>";	 
	  echo $arr['fname']."</tr>";
      echo "<tr><td>Last Name:</td><td>";	 
	  echo $arr['lname']."</tr>";
	  echo "<tr><td>Email:</td><td>";	 
	  echo $arr['email']."</tr>";	 
      echo "<tr><td>City:</td><td>";	 
	  echo $arr['city']."</tr>";	 
	  echo "<tr><td>Mobile No:</td><td>";	 
	  echo $arr['mno']."</tr>";
	 }
	 echo "</table>";
	 
    ?>
    </td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><a href="editprofile.php">Edit Profile</a></div></td>
  </tr>
  <tr>
  <td colspan=2><?php
  include"footer.php";
  ?></td></tr>
</table>
</body>
</html>
