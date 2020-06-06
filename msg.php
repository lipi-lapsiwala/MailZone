<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Mail</title>
<link rel="stylesheet" href="css1.css" />
</head>

<body>

<table width="900" border="0" cellpadding="0" cellspacing="0">
<tr>
<?php 
include "struct-1.php";

//session_start();
$un=$_SESSION["un"];
include "connect.php";

$id = $_GET['id'];
$s = 1;
$q = "select * from msg where id='$id'";
$res = mysql_query($q) or die("query error 2");

while($arr1 = mysql_fetch_array($res))
{
 if($arr1['type']=="send" and $arr1['rec']==$un and $_SERVER['HTTP_REFERER']=="http://localhost/php_SE_final/inbox.php")
 {
  $q1="update msg set status='$s' where id='$id'";
  $result = mysql_query($q1) or die("query error 1");
 }
}
if($_SERVER['HTTP_REFERER']=="http://localhost/php_SE_final/inbox.php")
$h="INBOX";

else if($_SERVER['HTTP_REFERER']=="http://localhost/php_SE_final/sent_mail.php")
$h="SENT MAIL";
	
else if($_SERVER['HTTP_REFERER']=="http://localhost/php_SE_final/draft.php")
$h="DRAFT";	

$r=mysql_query($q) or die("Query Error");
echo "<table width=915 cellspacing=0 cellpadding=5 align=center>";
echo "<tr><td colspan=2>";
echo "<table border=0 width=915 align=center cellpadding=5 cellspacing=0 bgcolor=#0033FF><tr>
	<tr><th colspan=3 align=left>
    	".$h."
	</th></tr>
</table>
<hr width=915 align=center />";
echo "</td></tr>";
echo "</table>";
echo "<table cellpadding=5 cellspacing=0 width=400 align=center>";
while($arr = mysql_fetch_array($r))
{
 if($arr['rec']==$un && $arr['type']=="send")
 {
  
  echo "<tr><td>";
  echo "<table cellpadding=5 cellspacing=0 width=400 align=centers><tr><td>";
  echo "<b>From : </b></td><td>".$arr['frm']."</td></tr>";
  if($arr['sub']!=null)
  {
   echo "<tr><td><b>Subject : </b></td><td>".$arr['sub']."</td></tr>";
  }
  if($arr['body']!=null)
  {
   echo "<tr><td><b>Message : </b></td><td>".$arr['body']."</td></tr>";
  }
  if($arr['filename']!=null)
  {
   echo "<tr><td><b>Attached File : </b></td><td><a href=files/".$arr['filename'].">View Image</a></td></tr>";
  }
  echo "<tr><td colspan=2>&nbsp;</td></tr>";
  echo "<tr><td colspan=2>".$arr['d']."</table></td></tr>";
  echo "<tr><td colspan=2>&nbsp;</td></tr>";
  
  echo "<tr><td colspan=2>";
  echo "<table width=400 border=0 align=center cellspacing=0>
  <tr>
    <td><table width=400 border=0 cellpadding=5 cellspacing=0>
      <form action=reply.php?id=".$arr['id']." method=post enctype=multipart/form-data>
      <tr align=left>
	  <th colspan=2><u>
	  Reply To This Message</u
	  </th>
	  </tr>
	  <tr>
        <td>Subject:</td>
        <td><input name=txtsub type=text size=27 /></td>
      </tr>
      <tr>
        <td valign=top>Body:</td>
        <td><textarea name=txtbody cols=22 rows=5></textarea></td>
      </tr>
	  <tr>
        <td>Attach an Image:</td>
        <td><input type=file name=file1 id=file1 /></td>
      </tr>
      <tr>
        <td colspan=2><input name=submit type=submit value=Send /></td>
        </tr>
     </form>   
    </table></td>
    <td valign=top>
      <table width=450 border=0 cellpadding=5 cellspacing=0>
      <form action=forward.php?id=".$arr['id']." method=post>  
      <tr align=left>
	  <th colspan=2><u>
	  Forward This Message
	  </u></th>
	  </tr>
  
		<tr>
          <td>To:</td>
          <td><input name=txtto type=text /></td>
        </tr>
        <tr>
          <td colspan=2><input name=submit type=submit value=Send /></td>
        </tr>
       </form> 
      </table>   </td> 
  </tr>
</table>";

  echo "</tr></td>";
  
 }
 else if($arr['type']=="draft")
 {
  echo "<tr><td><b>To : </b></td><td>".$arr['rec']."</td></tr>";
  if($arr['sub']!=null)
  {
   echo "<tr><td><b>Subject : </b></td><td>".$arr['sub']."</td></tr>";
  }
  if($arr['body']!=null)
  {
   echo "<tr><td><b>Message : </b></td><td>".$arr['body']."</td></tr>";
  }
  if($arr['filename']!=null)
  {
   echo "<tr><td><b>Attached File : </b></td><td><a href=files/".$arr['filename'].">View Image</a></td></tr>";
  } 

  echo "<tr><td colspan=2>&nbsp;</td></tr>"; 
  echo "<tr><td colspan=2>".$arr['d']."</td></tr>";
  echo "<tr><td colspan=2>&nbsp;</td></tr>";
  
  echo "<tr><td colspan=2><a href=send_draft.php?id=".$arr['id'].">Click Here to Send this mail</a></td></tr>"; 
 }
 
 else if($_SERVER['HTTP_REFERER']=="http://localhost/php_SE_final/sent_mail.php" )
 {
  
  echo "<tr><td><b>To : </b></td><td>".$arr['rec']."</td></tr>";
  if($arr['sub']!=null)
  {
   echo "<tr><td><b>Subject : </b></td><td>".$arr['sub']."</td></tr>";
  }
  if($arr['body']!=null)
  {
   echo "<tr><td><b>Message : </b></td><td>".$arr['body']."</td></tr>";
  }
  if($arr['filename']!=null)
  {
   echo "<tr><td><b>Attached File : </b></td><td><a href=files/".$arr['filename'].".jpg>View Image</a></td></tr>";
  }
    
  echo "<tr><td colspan=2>&nbsp;</td></tr>";
  echo "<tr><td colspan=2>".$arr['d']."</td></tr>"; 
  echo "<tr><td colspan=2>&nbsp;</td></tr>";
  echo "<table width=400 border=0 cellpadding=5 cellspacing=0 align=center>
      <form action=forward.php?id=".$arr['id']." method=post>  
      <tr>
	  <td colspan=2><b><u><font size=+0.5>
	  Forward This Message</font>
	  </u></b></td>
    
	  </tr>
  
		<tr>
          <td width=40%>To:</td>
          <td width=60%><input name=txtto type=text /></td>
        </tr>
        <tr>
          <td colspan=2><input name=submit type=submit value=Send /></td>
        </tr>
       </form> 
      </table>";
 }
 
}
echo "</table>";

include "footer.php";

?>
</tr>
</table>

</body>
</html>