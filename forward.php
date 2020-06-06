<html>
<head>
<link rel="stylesheet" href="css1.css" />
<title>Forward</title>
</head>
<body>

<?php
include "connect.php";
include "struct-1.php";
$un=$_SESSION["un"];
$i=$_GET["id"];
$to=$_POST["txtto"];
$q="select * from msg where id='$i'";
$r=mysql_query($q) or die("query error");
while($arr=mysql_fetch_array($r))
{
 $offset= strtotime("+5 hours 30 minutes"); 
 $d=date("F d,Y \a\\t g.i a",$offset);
 $s=0;
 $typ="send";
 $sub=$arr['sub'];
 $body=$arr['body'];
 $fn=$arr['filename'];
 $q1="insert into msg (rec,frm,sub,body,filename,type,status,d) values ('$to','$un','$sub','$body','$fn','$typ','$s','$d')";
 $r1=mysql_query($q1) or die("query error");
  echo "<br><br>";
 echo "<h3 align=center><font color=#FFFFFF>Your Message has been sent successfully</font></h3>";
  echo "<br><br>";
}
include"footer.php";
?>