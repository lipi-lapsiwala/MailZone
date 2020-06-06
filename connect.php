<?php
$cn=mysql_connect("localhost","root","") or die("Connection error");
$db=mysql_select_db("proj",$cn) or die("Database error");
?>