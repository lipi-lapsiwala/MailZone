<?php
session_start();
include "connect.php";
$un=$_SESSION["un"];
$rec=$_POST["txtto"];
$sub=$_POST["txtsub"];
$body=$_POST["txtbody"];

$fn=$_FILES["file1"]["name"];
$type="draft";

$path=".";
$type=$_FILES["file1"]["type"];

 if(move_uploaded_file($_FILES["file1"]["tmp_name"],$path."/files/".$fn))
 {
//  echo "<br>Success";
 }

$q="insert into msg (rec,frm,sub,body,filename,type) values ('$rec','$un','$sub','$body','$fn','$type')";
$res=mysql_query($q);



?>