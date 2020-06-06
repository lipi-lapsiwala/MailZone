<?php
include "connect.php";
$s=1;

$ch=$_POST['chk'];


foreach($ch as $c)
{
 if($_SERVER['HTTP_REFERER']=="http://localhost/php_SE_final/inbox.php")
 {
    $q1="update msg set inbox='$s' where id='$c'";
    $res1=mysql_query($q1) or die("Query error");
 }
 
 else if($_SERVER['HTTP_REFERER']=="http://localhost/php_SE_final/sent_mail.php")
 {
    $q2="update msg set sent='$s' where id='$c'";
    $res2=mysql_query($q2) or die("Query error");
 }
 else
 {
    $q3="delete from msg where id='$c'";
    $res3=mysql_query($q3) or die("Query error");
 }

 
}
$l=$_SERVER['HTTP_REFERER'];
header("Location:$l");

?>



















