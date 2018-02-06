<?php

include_once("connectdatabase.php");
include_once("background5.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}

include_once("template2.php");
if(isset($_POST['enroll']))
{
$admno=mysql_real_escape_string($_POST['admno']);
$name=mysql_real_escape_string($_POST['name']);
$sql1="INSERT INTO stud_id(adm_no) VALUES('$admno')";
//$admno=$_POST['admno'];
$result =mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");

if($row = mysql_fetch_array($result))
{
$_SESSION['std']=$row['adm_no'];
$_SESSION['class']=$row['cls_adm'];
$_SESSION['name']=$row['name'];
}
$result1 = mysql_query($sql1);
if($result1)
{
//Admission entry
$sql2="INSERT INTO stud_adm(adm_no,name) 
VALUES('$admno','$name')";
$result2 = mysql_query($sql2);

//Last Entry
$sql5="UPDATE last_entry SET adm_no='$admno',name='$name' WHERE id='1'";
$result5 = mysql_query($sql5);

//extra1 entry
$sql6="INSERT INTO extra1(adm_no,name) 
VALUES('$admno','$name')";
$result6 = mysql_query($sql6);

//extra2 entry
$sql7="INSERT INTO extra2(adm_no,name) 
VALUES('$admno','$name')";
$result7 = mysql_query($sql7);

//extra3 entry
$sql8="INSERT INTO extra3(adm_no,name) 
VALUES('$admno','$name')";
$result8 = mysql_query($sql8);
$sql9="INSERT INTO mark(id) 
VALUE('$admno')";
$result9=mysql_query($sql9);

echo "</br></br>";
echo "<center><h3><font size='10000' color='green'>"."Enrolled Successfully!"."</font>"."</h3></center>";
echo '<center><input type="button" style="height:30px" value="Go Home" onclick="window.location =\'dashboard.php\'" />';
}
else 
{
echo "</br></br></br>";
echo "<center><h3>"."Admission Number already Exists/ Invalid details"."</h3></center>";
echo '<p><center><input type="button" style="height:70px/;width:150px" value="Retry" onclick="window.location =\'enroll.php\'" /></p>';
echo '<p><center><input type="button" style="height:70px/;width:150px" value="Goto Home" onclick="window.location =\'dashboard.php\'" /></p>';
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