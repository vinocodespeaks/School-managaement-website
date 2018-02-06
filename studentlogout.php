<?php
include_once("background.php");
ob_start();
session_start();
unset($_SESSION['stduid2']);
unset($_SESSION['stdpwd2']);
unset($_SESSION['std']);
unset($_SESSION['class']);
unset($_SESSION['stuname2']);

if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
echo "<br/>"."</br>"."<br/>"."</br>"."<br/>"."</br>";
echo "<b><center><h1>You are Logged out</h1></b>";
echo '<p><input type="button" style="height:30px" value="Click here to Log-In Again" onclick="window.location =\'student.php\'" /></p>';
echo '<br>';
echo '<input type="button" style="width:150px;height:30px"  value="Goto Home" onclick="window.location =\'default.php\'" />';
}
?>