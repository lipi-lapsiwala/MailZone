<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css1.css" />
</head>

<body>
<table width="200" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr>
    <td>
      <p>
        <?php
	
	session_start();
	
	include "connect.php";
	$un=$_SESSION["un"];
    echo "<img src=profile/".$un.".jpg alt=Image width=200 height=200 />";
	echo "<font size=+1><a href=profile_pic.php>Change Picture</a>&nbsp;&nbsp;&nbsp;</font>";
	?>
      </p>
    </td>
  </tr>
  <tr>
    <td>    
      <p>
        <?php
    $q="select * from signup where email='$un'";
	$res=mysql_query($q) or die("Query error");
    while($arr=mysql_fetch_array($res))
	{
	 $f=$arr['fname'];
	 $l=$arr['lname'];
	} 
    //echo "</td>";
    echo "<a href=viewprofile.php><h3>".$f."&nbsp;".$l."</a>";
    echo "</h3>";
   ?>
      </p>
    
    </td>
  </tr>
  <tr>
    <td>
    <hr width="200" />
    <a href="compose_mail.php">COMPOSE</a></td>
  </tr>
  <tr>
    <td>
    <hr width="200" />
    </td>
    </tr>
    <tr>
    <td>
    <a href="inbox.php">
    <?php 
     $t="send";
     $q1="select * from msg where rec='$un' and type='$t' and inbox=0";
     $r=mysql_query($q1) or die("Query error 2");
     $cnt=mysql_num_rows($r);
     echo "INBOX(".$cnt.")";
    ?></a>
    </td>
  </tr>
<tr>
    <td>
    <hr width="200" />
    </td>
    </tr>
    <tr>
    <td>
    <a href="sent_mail.php">
    <?php    
     $type="send";
     $q1="select * from msg where frm='$un' and type='$type' and sent=0";
     $r=mysql_query($q1) or die("Query error 2");
     $cnt=mysql_num_rows($r);
     echo "SENT MAIL(".$cnt.")";
    ?></a>
    </td>
  </tr>
<tr>
    <td>
    <hr width="200" />
    </td>
    </tr>
    <tr>
    <td>
    <a href="draft.php">
    <?php    
     $type="draft";
     $q1="select * from msg where frm='$un' and type='$type'";
     $r=mysql_query($q1) or die("Query error 2");
     $cnt=mysql_num_rows($r);
     echo "DRAFTS(".$cnt.")";
    ?></a>
    </td></tr>
    <tr><td>
    <hr width="200" />
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
 </td>
  </tr>
</table>

<table width="915" border="0" cellspacing="0" cellpadding="5" align="center">
<tr>
<td></td>
</tr>
<tr border=0>
<td colspan="2"><?php
include"header.php";
?></td></tr>
<tr><td>&nbsp;</td></tr>
</table>
<hr width="915" />
<table width="915" border="0" align="center" cellspacing="0" cellpadding="5" bgcolor="#0033FF">
  <tr>
    <td colspan="2">
    <font color="#FFFFFF" size=+1>
    <a href="viewprofile.php">View Profile</a>&nbsp;&nbsp;&nbsp; 
    <a href="changepwd.php">Change Password</a>&nbsp;&nbsp;&nbsp;
    <a href="index.php">Logout</a> 
  <?php
	include "connect.php";
	
     $t="send";
	 $s=0;
     $q1="select * from msg where rec='$un' and type='$t' and status='$s'";
     $r=mysql_query($q1) or die("Query error 2");
     $cnt=mysql_num_rows($r);
	 echo "&nbsp;&nbsp;&nbsp;<u><a href=inbox.php>Unread(".$cnt.")</a></u>";
    
	?>  
   </font>
  </td>
  </tr>



</table>
<hr width="915" /> 
</body>
</html>
