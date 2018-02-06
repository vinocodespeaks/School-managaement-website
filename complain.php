 
<?php
include_once("background.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: student.php') ;
}
include_once("template3.php");
?>
<center>
<h1><strong>Enter your complains here<strong><h1>
<?php
echo"<label for='text'>Body :</label><br ><br>";
echo "you dont need to mention your name"."<br>";
echo "<table border='10' height='170' cellspacing='15' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>";
echo "<form method='GET' action='complain.php'>";

echo "<td>";
echo "<textarea id='textid' name='circular' rows='15' cols='45'></textarea>";

echo "</TD>";
echo "</table>";
echo "<input type='submit' name='text' value='upload' style='height:30px;width:90px'>";
echo "</form>";
echo "</center>";
echo "<br>";
echo "<br>";


if(isset($_GET['text']))
{
	$text=$_GET['circular'];
$class=	$_SESSION['class'];

		$result= mysql_query("insert into  complain (text ,class) values ('$text','$class')") or (die(mysql_error));
	
 if($result)
	
{	?>
		your complain has been senrt
	<script type="text/javascript">
    alert("dont worry ");
</script>
<?php }
}
?>

