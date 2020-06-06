<?php
session_start();
$email=$_SESSION["un"];
$fname=$_POST["fname"]; 
$lname=$_POST["lname"];
$city=$_POST["city"];
$mno=$_POST["mno"];


include "connect.php";
$q="update signup set fname='$fname',lname='$lname',city='$city',mno='$mno' where email='$email'"; 
$res=mysql_query($q) or die("Query Error");
header("Location:viewprofile.php");
?>