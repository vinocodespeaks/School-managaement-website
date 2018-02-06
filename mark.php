<?php
include_once("background5.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
include('template5.php');

?>
<html>
<head></head>
<title></title>
<body>
<center>
<br>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<h3>Enter record by Admission number</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="edit_mark.php">
<TR>
<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:150px;height:20px">
</TD>
<TD>
<input type="submit" name="edit" value="Search" style="height:30px;width:90px">
</form>
</table>
