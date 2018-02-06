<?php
include('background.php');
include('connectdatabase.php');
?>
<html>
<head>
<center>
 <br><BR><BR>
  <title>forgot password</title>
</head>
<body>

<h1>forgot password<h1>
  <form method="post" action="forgot.php">
  <table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>

<TR>
<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:150px;height:20px" required autofocus>
</form>
</table>
<center><h3><font  color='pink'></font></h3></center>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR>
<TD>
<b>Email Id</b>
</TD>
<TD>
<input type="text" name="email" style="width:180px;height:20px" required>
</TD>
</table><br>    <input type="submit" name="submit" style="height:30px;width:90px" value="enter" />
  </form>
  
  </center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$s=$_POST['admno'];
$p=$_POST['email'];
$result = mysql_query("SELECT * FROM stud_adm WHERE adm_no='$s'");
$row = mysql_fetch_array($result);
$_SESSION['email']=$row['emis_no'];
$q=$_SESSION['email'];

if($p!=$q)
{

unset($_SESSION['email']);
	echo '<script type="text/javascript">alert("Invalid input!");</script>';
}
else
{
	$s=$_POST['admno'];
$p=$_POST['email'];
$res = mysql_query("SELECT * FROM extra1 WHERE adm_no='$s' ");
if($row = mysql_fetch_assoc($res))
{
	echo "<center>";
	echo "<h3>"."<font  color='black'>"."your password is" .$row['password']."</font></h3>";

	echo "</center>";
}
}


}
?>


