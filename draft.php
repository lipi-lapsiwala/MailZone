<html>
<head>
<link rel="stylesheet" href="css1.css" />
<title>Drafts</title>
</head>

<?php
if(!isset($_GET['page']))
{
$page=1;


}
else
{
 $page=$_GET['page'];

}


include "struct-1.php";
$un=$_SESSION["un"];
include "connect.php";

echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0 bgcolor=#0033FF><tr>";
echo "<tr><th colspan=3 align=left>"; 
$type="draft";
$q="select * from msg where frm='$un' and type='$type'";
$r=mysql_query($q) or die("Query error 2");
$c=mysql_num_rows($r);
echo "<font color=#FFFFFF>DRAFTS(".$c.")</font>";  
echo "</th></tr>";
echo "</table>";


$t="draft";
$q1="select * from msg where frm='$un' and type='$t'";
$r1=mysql_query($q1) or die("Query error 1");
$cnt=mysql_num_rows($r1);
$rowsperpage=10;
$totalpages=ceil($cnt/$rowsperpage);
$start=($page-1)*$rowsperpage;
$q2="select * from msg where frm='$un' and type='$t' order by id desc limit $start,$rowsperpage";
$r2=mysql_query($q2) or die("Query error2"); 

echo "<form name=frmchk method=post action=delete.php>";

while($arr=mysql_fetch_array($r2))
 {
  echo "<hr width=915 align=center />";
  echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0><tr>";
  $i=$arr['id'];
  echo "<td width=400>";
  echo "<a href=msg.php?id=".$i.">".$arr['rec']."</a>";
  echo "</td><td width=500>";
  if($arr['sub']==null)
  {
   echo "Subject:&nbsp;<a href=msg.php?id=".$i.">&lt;No Subject&gt;</a>";
  }
  else
  {
  echo "Subject:&nbsp;<a href=msg.php?id=".$i.">".$arr['sub']."</a>";
  }
  echo "</td><td>";
//  echo "<a href=delete.php?id=".$i.">Delete</a>";
  echo "<input type=checkbox name=chk[] value=".$arr['id'].">";
  echo "</td></tr>";
  echo "</table>";
 }
echo "<hr width=915 align=center />";
echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0><tr>";
echo "<tr>";
echo "<td colspan=3>Page:&nbsp;";
for($i=1;$i<=$totalpages;$i++)
{
	  if($i!=$page)
	  {
	   echo "<a href=draft.php?page=".$i.">&nbsp;".$i."&nbsp;</a>";
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