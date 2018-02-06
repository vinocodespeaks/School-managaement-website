<?php
include_once("connectdatabase.php");
include_once("background5.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
?>
<?php
include_once("template2.php");
if(isset($_POST['upd']))
{
$c=$_SESSION['class'];
	$admno=$_SESSION['std'];
$id1=$_POST['id1'];
$id2=$_POST['id2'];

$id3=$_POST['id3'];
$id4=$_POST['id4'];
$id5=$_POST['id5'];
if(($_SESSION['class']=='XI')||($_SESSION['class']=='XII'))
$id6=$_POST['id6'];


$mark1=$_POST['mark1'];
$mark2=$_POST['mark2'];
$mark3=$_POST['mark3'];
$mark4=$_POST['mark4'];
$mark5=$_POST['mark5'];
if(($_SESSION['class']=='XI')||($_SESSION['class']=='XII'))
{
$mark6=$_POST['mark6'];
}
 $sq1=mysql_query("insert into result values('$admno', '$id1','$mark1','$c')") or die(mysql_error());
$sq2=mysql_query("insert into result values ('$admno' , '$id2','$mark2','$c')" )or die(mysql_error());
$sq3=mysql_query("insert into result values ('$admno', '$id3','$mark3','$c')") or die(mysql_error());
$sq4=mysql_query("insert into result values ('$admno', '$id4','$mark4','$c')") or die(mysql_error());
$sq5=mysql_query("insert into result values ('$admno', '$id5','$mark5','$c')") or die(mysql_error());
if(($_SESSION['class']=='XI')||($_SESSION['class']=='XII'))
$sq6=mysql_query("insert into result values ('$admno', '$id6','$mark6','$c')") or die(mysql_error());

	
echo "<br><br>";
echo "<center><font size='100' color='AQUA'>Updated Successfully</font></center>";
echo '<p><center><input type="button" style="height:30px/;width:200px" value="Goto Main Page" onclick="window.location =\'dashboard.php\'" /></p>';

}


?>