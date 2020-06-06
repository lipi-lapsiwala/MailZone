<?php
include "struct-1.php";
//session_start();
$un=$_SESSION["un"];
$cpwd=$_POST["cpwd"];
$pwd=$_POST["pwd"];

include "connect.php";
$q="select * from signup where email='$un' and pwd='$cpwd'";
$res=mysql_query($q) or die("err");
$cnt=mysql_num_rows($res);
if($cnt>0)
{
$qu="update signup set pwd='$pwd' where email='$un'";
$re=mysql_query($qu) or die("e");
//echo "password successfully updated";
header("Location:index.php");
}
else
{
 echo "<h3 align=center><font color=#FFFFFF>You have entered wrong passsword</font><br>
 <a href=changepwd.php>Try Again</a></h3>";
}

include "footer.php";
?>