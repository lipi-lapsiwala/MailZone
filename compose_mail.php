<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css1.css" />

<title>Compose Mail</title>
<script language="javascript">
function validateform()
{
 var to,subject,txtbody,err;
 to=document.forms["frmcompose"]["txtto"].value;
 subject=document.forms["frmcompose"]["txtsub"].value;
 txtbody=document.forms["frmcompose"]["txtbody"].value;
 if(subject==null || subject=="")
 {
   s=confirm("Do you want to send the message without subject");

 }
 
 err="";
 if(to==null || to=="")
 {
  err=err+"\nPlease enter mail-id";
 }
 if(err.length>0)
 {
  alert(err);
  return false;
 }
 else if(s==false)
 {
  return false;
 }
 else
 {
  return true;
 }
}
</script>
</head>
<?php include "struct-1.php";?>
<body>
<table border=0 width=915 align=center cellpadding=5 cellspacing=0 bgcolor=#0033FF><tr>
	<tr><th colspan=3 align=left>
    <font color="#FFFFFF">	COMPOSE MAIL</font>
	</th></tr>
</table>
<hr width=915 align=center />
<table width="915" border="0" align="center" cellpadding="5" cellspacing="0">
  
  <tr>
    <td colspan="2"><table width="600" border="0">
      <form action="chkcompose.php" method="post" enctype="multipart/form-data" name="frmcompose" id="frmcompose" onsubmit="return validateform()">
        <tr>
          <td>To:</td>
          <td><label>
            <input type="text" name="txtto" id="textfield" />
          </label></td>
        </tr>
        <tr>
          <td>Subject:</td>
          <td><label>
            <input type="text" name="txtsub" id="textfield2" />
          </label></td>
        </tr>
        <tr>
          <td>Body:</td>
          <td><label>
            <textarea name="txtbody" id="textarea" cols="45" rows="5"></textarea>
          </label></td>
        </tr>
        <tr>
          <td>Attach an Image:</td>
          <td><label>
            <input type="file" name="file1" id="file1" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><input type="radio" name="txttype" value="send" checked="checked" />
            Send Mail 
            <input type="radio" name="txttype" value="draft" />
            Save as Draft</td>
        </tr>
        <tr>
          <td colspan="2"><label>
            <input type="submit" name="send" id="submit" value="Proceed" />
          </label></td>
        </tr>
      </form>
    </table></td>
  </tr>
  <tr>
  <td colspan=2><?php
  include"footer.php";
  ?></td></tr>
</table>
</body>
</html>
