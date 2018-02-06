<?php
include_once("background.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
include_once("template3.php");
?>

<?php


$admno=$_SESSION['stduid2'];
$result =mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");

if($row = mysql_fetch_array($result))
{


$c=$_SESSION['class']=$row['cls_adm'];
;
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


?>
<BR>
<BR>
<CENTER>

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
<?php
$res =mysql_query("SELECT * FROM result where adm_no='$admno' and class ='$c' ") or mysql_error();

while($row= mysql_fetch_assoc($res))
{
	?>
<tr>
<td> <?php echo $row['courseid'];?> </td></td>

<td><?php echo $row['mark'] ?></td></td>

</tr>
<?php
} 
?>

</table>
</body>
</html>


<br>
<table  height="50" cellspacing="3" cellpadding="8" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR bgcolor='#E5F4F4'>

<TD><center><input type="button" value="back" style="width:120px; height:30px" onclick="window.location ='studentdashboard.php'"></TD>
</TR>
</table>
</body>
</html
