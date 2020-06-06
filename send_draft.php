<html>
<head>
<link rel="stylesheet" href="css1.css" />
<title>Draft Sent</title>
</head>
<body>

<?php
include "connect.php";
include "struct-1.php";
echo "<br>";
$id=$_GET['id'];
$t="send";
$q="update msg set type='$t' where id='$id'";
$r=mysql_query($q) or die("query error");
//header("Location:struct-1.php");
echo "<br><br>";
echo "<h3 align=center><font color=#FFFFFF>Your Message has been sent successfully<font color=#FFFFFF></h3>";
echo"<br><br>";
include"footer.php";
?>