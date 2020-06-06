<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Your Profile Pic</title>
<link rel="stylesheet" href="css1.css" />
</head>

<body>
<?php
    include "struct-1.php";
	
?>

<table align="center" width="915" border="0" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td>
      <table width="400" border="0" cellspacing="0" cellpadding="5">
        <form id="form1" name="form1" method="post" action="chkupload.php" enctype="multipart/form-data">
        <tr align="center">
          <td colspan="2"><h3>::Upload Picture::</h3></td>
          </tr>
        <tr>
          <td width=60%>Select picture:</td>
          <td width=40%><label>
          

            <input type="file" name="file1" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td colspan="2">
           <input type="submit" name="submit" value="Change" />
           </td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
  <tr>
  <td colspan=2><?php
  include"footer.php";
  ?></td></tr>
  
</table>
    
</body>
</html>
