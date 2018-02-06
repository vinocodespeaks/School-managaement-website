<?php
include_once("background5.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
include_once("template2.php");
?>
<?php

$result =mysql_query("SELECT * FROM course");
if($row = mysql_fetch_array($result))

	if(!$row)
	{
	die();
	}
	?>
<br>
<BR>
<CENTER>
<form action="updatemark.php" method="POST">
<html>
<head>
<title></title>
</head>
<body>
<table border="20" width="700" height="100" cellspacing="3" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<tr>

<td>&nbsp; COURSE ID&nbsp;</br>
<td>&nbsp;SUBJECT NAME &nbsp;</td>

</tr>
<tr>
<td><input type="text" name="id1" value="" required maxlength="100" ></td></td>
<td><input type="text" name="name1" value="" required maxlength="100"></td>

</tr>





</table>
</body>
</html>


<br>
<table  height="50" cellspacing="3" cellpadding="8" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR bgcolor='#E5F4F4'>
<TD><center><input type="submit" value="Conf" name="upd" style="height:30px;width:130px"></TD>
<TD><center><input type="button" value="Cancel" style="width:120px; height:30px" onclick="window.location ='dashboard.php'"></TD>
</TR>
</table>
</form>
</body>
</html>
