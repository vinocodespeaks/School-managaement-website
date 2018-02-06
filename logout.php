<?php
include_once("background5.php");
ob_start();
session_start();
unset($_SESSION['stduid2']);
unset($_SESSION['stdpwd2']);
unset($_SESSION['maspwd2']);
unset($_SESSION['std']);
unset($_SESSION['class']);
unset($_SESSION['class_not']);
unset($_SESSION['email']);
unset($_SESSION['stuname2']);
?>

<?php
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
echo "<br/>"."</br>"."<br/>"."</br>"."<br/>"."</br>";
echo "<b><center><h1>You are Logged out</h1></b>";
echo '<p><input type="button" style="height:30px" value="Click here to Log-In Again" onclick="window.location =\'default1.php\'" /></p>';
echo '<input type="button" style="height:30px" value="go to home" onclick="window.location =\'default.php\'" /></p>';
}
?>