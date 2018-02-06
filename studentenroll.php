<?php
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}

include_once("background5.php");
include_once("template2.php");


ob_start();
/*echo "&nbsp"."&nbsp";
echo "&nbsp"."&nbsp";
echo "&nbsp"."&nbsp";
echo "&nbsp"."&nbsp";
$wel="                 You are Logged in as ";
echo $wel.$_SESSION['stduid2'];
echo "&nbsp"."&nbsp";
echo '<input type="button" style="width:150px;height:30px"  value="Click here to Logout" onclick="window.location =\'logout.php\'" />';
//include_once("template.php");*/
?>

<html>
<head>
</head>
<title><</title>
<body>
<br><br><br><br>


<center><table border="5" height =10 width="250" bordercolor='#21DBD9' bgcolor='#E5F4F4' ><TR><TD><font color='black'><center>ADMIN-MENU</center> </font></TD></TR></table></center>
<center>

<table border="5" height="100" width="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>


<TR>
<td>


<input type="button" style="height:50px;width:200px" value="Enroll New Student" onclick="window.location ='enroll.php'">
</td>
</tr>

<tr>
<td>
<input type="button" style="height:50px;width:200px" value="Edit Student Details" onclick="window.location ='edit_adm_prof.php'">
</tr>
</TR>

<TR>
<TD>
<input type="button" style="height:50px;width:200px" value="View Student Details" onclick="window.location ='view_adm_prof.php'">
</TD>
</tr>
<tr>
<TD>
<input type="button" style="height:50px;width:200px" value="Delete Student Details" onclick="window.location ='deladmin.php'">
</TD>
</TR>




</table>
</center>
</body>
<?php
ob_end_flush();
?>
<?php
unset($_SESSION['maspwd2']);
?>