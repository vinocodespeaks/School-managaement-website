<?php
ob_start();
session_start();include_once("template2.php");
include_once("background5.php");
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
?>
<?php
//include_once("template2.php");
include("connectdatabase.php");
if(isset($_POST['upd']))
{
	
$id1=$_POST['id1'];

$name1=$_POST['name1'];
$result=mysql_query("insert into course values('$id1','$name1')")or die(mysql_error());

	if(!$result)
	{
echo "</br></br></br>";
echo "<center><h3>"."course  already Exists/ Invalid details"."</h3></center>";
echo '<p><center><input type="button" style="height:70px/;width:150px" value="Retry" onclick="window.location =\'addcourse.php\'" /></p>';
echo '<p><center><input type="button" style="height:70px/;width:150px" value="Goto Home" onclick="window.location =\'dashboard.php\'" /></p>';
	}
else
{
echo "</br></br>";
echo "<center><h3><font size='10000' color='green'>"."inserted Successfully!"."</font>"."</h3></center>";
echo '<center><input type="button" style="height:30px" value="Go Home" onclick="window.location =\'dashboard.php\'" />';
}
}
else
{
echo "</br></br></br>";
echo "<center><h3>"."Unauthorized Entry"."</h3></center>";
echo '<p><center><input type="button" style="height:30px/;width:200px" value="Goto Main Page" onclick="window.location =\'dashboard.php\'" /></p>';

}
ob_end_flush();

?>
	
