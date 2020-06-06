<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Your Profile Pic</title>
<link rel="stylesheet" href="css1.css" />
</head>

<body>
<?php
    include "struct-1.php";
	
?>

<table align="center" width="915" border="0" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td>
      <table width="400" border="0" cellspacing="0" cellpadding="5">
	  <tr align=center><td><?php
$fn=$_FILES["file1"]["name"];
$un=$_SESSION["un"];



$path=".";

if($_FILES["file1"]["type"]=="image/jpeg")
{

 if(move_uploaded_file($_FILES["file1"]["tmp_name"],$path."/profile/".$un.".jpg"))
 {
 // echo "<br>Success";
 header("Location:viewprofile.php");
 }
 
 else
 {
  echo "<br>Fail";
 }

}

else
{
 echo "<br>";
 echo "<h3 align=center><font color=#FFFFFF>Invalid file type</font><br><br><a href=profile_pic.php>Try Again</a></h3>";
}


?>
</td>
</tr>
</table>
  <tr>
    <td>
<?php include "footer.php"; ?>
</td>
</tr>
</table>
</body>
</html>