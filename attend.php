<?php
include_once("background5.php");
include_once("connectdatabase.php");
ob_start();
session_start();

if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
	

INCLUDE("template2.php");
?>
<html>
<head></head>
<title></title>
<body>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<h3>insert date</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="attend.php">
<TR>
<TD>
<b>DATE.</b>
</TD>
<TD>
<input type="date" name="dat" style="width:150px;height:20px" required autofocus>
</TD>
<TD>
<input type="submit" name="view" value="insert" style="height:30px;width:90px">
</form>
</table>
<?php
if(isset($_GET['view']))
{
	$admno=$_SESSION['std'];
	$da=$_GET['dat'];
	$class=$_SESSION['class'];
	$sql = mysql_query( "INSERT INTO attend VALUE( '$admno', '$da','$class')" ) or die ( mysql_error() );
echo "<font  color= '#FFFF00' >inserted successfully!</font>";
	
	//$result=mysql_fetch_array($sq);
	//if($result)
	//{
	//	echo "inserted successfully";
	//}
	//else
	// echo '<script type="text/javascript">alert("cannot insert the data!");</script>';

	
}
?>
