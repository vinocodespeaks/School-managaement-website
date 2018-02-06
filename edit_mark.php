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
if(isset($_GET['edit']))
{
$admno=$_GET['admno'];
$result =mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");

if($row = mysql_fetch_array($result))
{
$_SESSION['std']=$admno;
$_SESSION['class']=$row['cls_adm'];
$_SESSION['name']=$row['name'];
}

?>
<body>
<?php
if(!$row)
{ echo "<br>"."<br>";
	echo "<center><h4><font  color='black'>Can't Find The Student!<br><br> I think u just entered  incorrect one... please try again!</font></h4></center>"; 
	echo "<br>"."<br>";
	echo '<p><center><input type="button" style="height:40px;width:200px" value="try again" onclick="window.location =\'mark.php\'" /></p>';
	 
	 	exit;
}

$res =mysql_query("SELECT * FROM result where adm_no='$admno' ") or mysql_error();
$row = mysql_fetch_assoc($res);
?>
<BR>
<BR>
<CENTER>
<form action="uploadmark.php" method="POST">
<html>
<head>
<title></title>
</head>
<body>
<table border="20" width="700" height="100" cellspacing="3" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<tr>

<td>&nbsp; COURSE ID&nbsp;</br>

<td>&nbsp; MARKS &nbsp;</td>
</tr>
<tr>
<td><input type="text" name="id1" value="<?php echo $row['courseid'];?>" required maxlength="100" ></td></td>

<td><input type="text" name="mark1" value="<?php echo $row['mark'];?>" required maxlength="100"></td></td>

</tr>
<tr>
<td><input type="text" name="id2" value="<?php echo $row['courseid'];?>" required maxlength="100"></td></td>

<td><input type="text" name="mark2" value="<?php echo $row['mark'];?>" required maxlength="100"></td></td>

</tr>
<tr>
<td><input type="text" name="id3" value="<?php echo $row['courseid'];?>" required maxlength="100"></td></td>

<td><input type="text" name="mark3" value="<?php echo $row['mark'];?>" required maxlength="100"></td></td>
<?php
$s=$_SESSION['class'];
if(($s!='LKG')||($s!='UKG'))
{
	?>
</tr>
<tr>
<td><input type="text" name="id4" value="<?php echo $row['courseid'];?>" required maxlength="100"></td></td>

<td><input type="text" name="mark4" value="<?php echo $row['mark'];?>" required maxlength="100"></td></td>

</tr>
<tr>
<td><input type="text" name="id5" value="<?php echo $row['courseid'];?>" required maxlength="100"></td></td>

<td><input type="text" name="mark5" value="<?php echo $row['mark'];?>" required maxlength="100"></td></td>
<?php
$s=$_SESSION['class'];
if(($s=='XI')||($s=='XII'))
{
	?>
</tr><tr>
<td><input type="text" name="id6" value="<?php echo $row['courseid'];?>" required maxlength="100"></td></td>

<td><input type="text" name="mark6" value="<?php echo $row['mark'];?>" required maxlength="100"></td></td>

</tr>
<?php } ?>
<?php } ?>

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
</html
 <?php
}
else
{
	die();
}
ob_end_flush();
?>