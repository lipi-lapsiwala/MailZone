<html>
<head>
<link rel="stylesheet" href="css1.css" />
<title>Reply</title>
</head>
<body>

<?php
include "struct-1.php";
$un=$_SESSION["un"];

include "connect.php";
$path=".";
$i=$_GET["id"];
$sub=$_POST["txtsub"];
$body=$_POST["txtbody"];
$fn=$_FILES["file1"]["name"];
if(move_uploaded_file($_FILES["file1"]["tmp_name"],$path."/files/".$fn))
 {
//  echo "<br>Success";
 }

$q="select * from msg where id='$i'";
$r=mysql_query($q) or die("query error");
while($arr=mysql_fetch_array($r))
{
 $offset= strtotime("+5 hours 30 minutes"); 
 $d=date("F d,Y \a\\t g.i a",$offset);
 $s=0;
 $typ="send";
 $to=$arr['frm'];
 $q1="insert into msg (rec,frm,sub,body,filename,type,status,d,sent,inbox) values ('$to','$un','$sub','$body','$fn','$typ','$s','$d','$s','$s')";
 $r1=mysql_query($q1) or die("query error");
 echo "<br><br>";
 echo "<h3 align=center><font color=#FFFFFF>Your Message has been sent successfully</font></h3>";
  echo "<br><br>";
}

include"footer.php";
?>
