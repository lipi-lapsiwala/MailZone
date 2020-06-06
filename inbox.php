<html>
<head>
<link rel="stylesheet" href="css1.css" />
<title>Inbox</title>
</head>

<body>
<table width="900" border="0" cellpadding="0" cellspacing="0">
<tr>
<?php
include "struct-1.php";

$un=$_SESSION["un"];
include "connect.php";


if(!isset($_GET['page']))
{
 $page=1;
}
else
{
 $page=$_GET['page'];
}
$s=0;
echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0 bgcolor=#0033FF><tr>";
echo "<tr><th colspan=3 align=left>"; 
$ty="send";
$q="select * from msg where rec='$un' and type='$ty' and inbox='$s'";
$r=mysql_query($q) or die("Query error 2");
$c=mysql_num_rows($r);
echo "<font color=#FFFFFF>INBOX(".$c.")</font>";
  
echo "</th></tr>";
echo "</table>";
 
 $t="send";
 $q1="select * from msg where rec='$un' and type='$t' and inbox='$s'";
 $r1=mysql_query($q1) or die("Query error 1");
 $cnt=mysql_num_rows($r1);
 $rowsperpage=10;
 $totalpages=ceil($cnt/$rowsperpage);
 $start=($page-1)*$rowsperpage;
 $q3="select * from msg where rec='$un' and type='$t' and inbox='$s' order by id desc limit $start,$rowsperpage";
 $r3=mysql_query($q3) or die("Query error2"); 

 
 echo "<form name=frmchk method=post action=delete.php>";  
 while($arr=mysql_fetch_array($r3))
 {
  if($arr['status']==0)
  {
  echo "<hr width=915 align=center />";
  echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0 bgcolor=#9D8EF2><tr>";
  $i=$arr['id'];
  echo "<td width=500>";
  
  echo "<a href=msg.php?id=".$i.">".$arr['frm']."</a>&nbsp;&nbsp;<font color=#0033FF>New</font>";
  echo "</td><td width=400>";
  if($arr['sub']==null)
  {
   echo "Subject:&nbsp;<a href=msg.php?id=".$i.">&lt;No Subject&gt;</a>";
  }
  else
  {
  echo "Subject:&nbsp;<a href=msg.php?id=".$i.">".$arr['sub']."</a>";
  }
  echo "</b></td><td>";
//  echo "<a href=delete.php?id=".$i.">Delete</a>";
  echo "<input type=checkbox name=chk[] value=".$arr['id'].">";
  echo "</td></tr>";
  echo "</table>";
  }
 

 else
 {
 echo "<hr width=915 align=center />";
 echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0><tr>";
  $i=$arr['id'];
  echo "<td width=500>";
  echo "<a href=msg.php?id=".$i.">".$arr['frm']."</a>";
  echo "</td><td width=400>";
  if($arr['sub']==null)
  {
   echo "Subject:&nbsp;<a href=msg.php?id=".$i.">No Subject</a>";
  }
  else
  {
  echo "Subject:&nbsp;<a href=msg.php?id=".$i.">".$arr['sub']."</a>";
  }
  echo "</td><td>";
//  echo "<a href=delete.php?id=".$i.">Delete</a>";
  
  echo "<input type=checkbox name=chk[] value=".$arr['id'].">";
  echo "</form>";
  echo "</td></tr>";
  echo "</table>";
 }
}

echo "<hr width=900 align=center />";
echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0><tr>";
echo "<tr>";
echo "<td colspan=3>Page:&nbsp;";
for($i=1;$i<=$totalpages;$i++)
{
	  if($i!=$page)
	  {
	   echo "<a href=inbox.php?page=".$i.">&nbsp;".$i."&nbsp;</a>";
	  }
	  else
	  {
	   echo "&nbsp;".$i."&nbsp;";
	  }
}
echo "</td>";
echo "</tr>";
echo "<tr><td colspan=3 align=right>";
echo "<input type=submit name=submit value=delete>";
echo "</td></tr>";
echo "</table>";
echo "</form>";
?>

<?php include "footer.php"; ?>

</body>
</html>