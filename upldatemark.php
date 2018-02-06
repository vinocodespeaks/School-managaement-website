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
<br><br>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<br><br>
<table border="20" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="POST" action="#.php">
<TR>

<TD>
<b>COURSE ID</b>
</TD>
<TD>
<input type="text" name="mark1" style="width:40px;height:20px" required autofocus>
</TD>
</TR>
<TR>

<TD>
<b>new mark.</b>
</TD>
<TD>
<input type="text" name="mark2" style="width:150px;height:20px" required autofocus>
</TD>


</TR>
<BR><BR><BR><BR>


&nbsp;
<input type="submit" name="enroll" value="Enroll" style="height:30px; width:90px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Clear" style="height:30px;width:90px">
</form>
</table>
</center>
</body>
<?php
if(isset($_POST['enroll']))
{
	
	$m1=$_SESSION['std'];
	$m2=$_POST['mark2'];
	$id1=$_POST['id1'];
	$id2=$_POST['id1'];
	$result=mysql_query("update result set mark='$m1' where adm_no='$m1' and courseid='$id1' ") or die(mysql_error());
	echo "updated";
}
?>