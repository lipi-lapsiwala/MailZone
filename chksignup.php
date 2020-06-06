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
if(!isset($_POST["submit"]))
{
 header("Location:signup.php");
}

$fname=$_POST["txtfname"]; 
$lname=$_POST["txtlname"];
$city=$_POST["selcity"];
$email=$_POST["txtemail"]."@mailzone.esy.es";
$pwd=$_POST["txtpwd"];
$cpwd=$_POST["txtcpwd"];
$sec=$_POST["selques"];
$ans=$_POST["txtans"];
$mno=$_POST["txtmno"];
$path=".";
include "connect.php";
$q1="select * from signup where email='$email'";
$res1=mysql_query($q1) or die("Select error");
$cnt=mysql_num_rows($res1);
if($cnt>0)
{
 echo "<h4 align=center><font color=#FFFFFF>Sorry! User Already Exists</font><br><a href=signup.php>Try Again</a></h4>";
}
else
{
/*if($_FILES["image"]["type"]=="image/jpeg")
{

 if(move_uploaded_file($_FILES["file1"]["tmp_name"],$path."/profile/".$email.".jpg"))
 {
  //echo "<br>Success";
  //echo $_SESSION["no"];

 }
}*/
$q="insert into signup (fname,lname,email,pwd,mno,city,sec,ans)values('$fname','$lname','$email','$pwd','$mno','$city','$sec','$ans')";
$res=mysql_query($q) or die("Query error");
//echo "Done<br>";
//echo "<a href=index.php>Click here To login</a>";
//echo $email;
header("Location:index.php");
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
