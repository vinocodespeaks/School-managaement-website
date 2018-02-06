<?php
include_once("background5.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
include("template2.php");
?>
<html>
<head></head>
<title></title>
<body>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">

<h3>Select Class</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor ='#21DBD9' bgcolor='#E5F4F4'>
<form method="POST" action="notifications.php">
<TR>
<TD>
<select name="cls_adm" required>
<option>ALL</option>
<option>LKG</option>
<option>UKG</option>
<option>I-STD</option>
<option>II-STD</option>
<option>III-STD</option>
<option>IV-STD</option>
<option>V-STD</option>
<option>VI-STD</option>
<option>VII-STD</option>
<option>VIII-STD</option>
<option>IX-STD</option>
<option>X-STD</option>
<option>XI-STD</option>
<option>XII-STD</option>
</select>
</TD>
<TD>
<input type="submit" name="view" value="add" style="height:30px;width:90px">
</form>
</table>
<br>
<?php
if(isset($_POST['view']))
{
	$_SESSION['class_not']=$_POST['cls_adm'];
echo"<label for='text'>Body :</label><br ><br>";
echo "<table border='10' height='170' cellspacing='15' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>";
echo "<form method='GET' action='notifications.php'>";

echo "<td>";
echo "<textarea id='textid' name='circular' rows='15' cols='45'></textarea>";

echo "</TD>";
echo "</table>";
echo "<input type='submit' name='text' value='upload' style='height:30px;width:90px'>";
echo "</form>";
}



if(isset($_GET['text']))
{
	$text=$_GET['circular'];
$class=	$_SESSION['class_not'];

		$result= mysql_query("insert into circular (text,class) values ('$text','$class' )");
		if($result)
		{
			echo "<br>"."updated successfully"."</br>";
			exit;
		}
		else
		{
			die('cant');
		}
	}
	


?>

</center>
</body>