<?php
include_once("background5.php");
//include_once("template2.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}

?>
<html>
<head></head>
<title></title>
<body>
<?php
include_once("template2.php");
$sql="SELECT * FROM last_entry WHERE id='1'";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
	$wel="Last entry for admission";
echo "<span style='color:#AFA;text-align:center;'>".$wel.$row['adm_no']."</span>";
	
}
else
{
echo "Last Entry not Found";
}
?>
<br><br>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<br><br>
<table border="20" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="POST" action="enrollpro.php">
<TR>

<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:150px;height:20px" required autofocus>
</TD>
</TR>

<TR>
<TD>
<b>STUDENT NAME</b>
</TD>
<TD>
<input type="text" name="name" style="width:150px;height:20px" required>
</TD>
</TR>
<TR>
<TD></TD>
<TD>
&nbsp;
<input type="submit" name="enroll" value="Enroll" style="height:30px; width:90px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Clear" style="height:30px;width:90px">
</form>
</table>
</center>
</body>