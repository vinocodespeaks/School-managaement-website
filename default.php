<?php
include_once("background2.php");
include_once("connectdatabase.php");
session_start();
ob_start();

?>
<center><img draggable='false' width='200' height='120' src="images/background/log.png">
<center>
<h2>VinSL Higher Secondary School<h2>
<h2><font color='blue'><strong>chennai</strong></font><h2>
<h3><font color='red'>Student Portal& Management system</font></h3>
<input type="submit" value="Login as student" name="loger1" style="height:50px;width:250px" onclick="window.location='student.php'">
<br><br><br>
<input type="submit" value="Log-In as adninistrator" name="loger2" style="height:50px;width:250px" onclick="window.location ='default1.php'">
<br><br><br>
<input type="submit" value="About us" name="loger2" style="height:50px;width:250px" onclick="window.location ='credit.php'">
<html>
<body>

<p></p>
<hr  color ='#888888' width="75%">
<p><small><font color='white'>Copy right © VinSL Datum Inc.</font></small></p>

</body>
</html>

