<?php
include_once("background2.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
} 
include("template3.php");
?>
<html>
<head></head>
<title></title>
<body>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='studentdashboard.php'">


<h3>password changing port</h3>

<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="POST" action="changepassword.php">

<TR>

<TD>
<b>new password</b>
</TD>

<TD>
<input type="text" name="old" style="width:150px;height:20px" required>
</TD>

<TD>
<input type="submit" name="enter" value="Enter" style="height:30px;width:90px">
</TD>

</TR>


<TR>

<TD>
<b> re enter new password</b>
</TD>

<TD>
<input type="text" name="new" style="width:150px;height:20px" required>
</TD>

<TD>
<input type="submit" name="change" value="Change" style="height:30px;width:90px">
</TD>

</TR>

</form>
</table>
<br>

<?php
if(isset($_POST['change']))
{
$old=$_POST['old'];
$new=$_POST['new'];
if($old!=$new)
{
	die('incorrect');
}
$id=$_SESSION['stduid2'];
$result = mysql_query("UPDATE extra1 SET password='$new' WHERE  adm_no='$id' ");
if($result)
{
echo "<b>"."<font color ='yellow'>password updated success fully!</font>";

}
}
?>
</center>
</body>