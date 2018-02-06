<?php

include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
include_once("template2.php");
include_once("background5.php");
?>

<?php
if(isset($_GET['view']))
{
$admno=mysql_real_escape_string($_GET['admno']);
$result = mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");
$row = mysql_fetch_array($result);
if(!$row)
{ echo "<br>"."<br>";
	echo "<center><h4><font  color='black'>Can't Find The Student!<br><br> I think u just entered  incorrect one... please try again!</font></h4></center>"; 
	echo "<br>"."<br>";
	echo '<p><center><input type="button" style="height:40px;width:200px" value="try again" onclick="window.location =\'view_adm_prof.php\'" /></p>';
	 
	 	exit;
}
?>
<body>
<center>
<?php
echo "<center><a href='images/student/".$row['img']."' target='_blank'><img style='border:8px solid grey' width='120' height='120' src=images/student/".$row['img'].">";
echo "</a><br>";
?>
<input type="text" name="adm_no" value="<?php echo $row['adm_no'];?>" hidden>
<b>ADMISSION NO.</b>
<b><font color="red"><?php echo $row['adm_no'];?></font></b>
<table border="20" width="700" height="100" cellspacing="3" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR>
<TD><b><font color="blue">1.NAME OF STUDENT</b></TD>
<TD><center><?php echo $row['name'];?></TD>
</TR>
<TR>
<center>
<TD>
<b><font color="blue">2.ADMSSION YEAR</font></b>
</TD>
<TD><center>
<?php echo $row['year'];?>
</TD>
</TR>
<TD>
<b><font color='red'>3.TRANSFER CERTIFICATE</b>
</TD>
<TD><center>
<?php echo $row['tc_issue'];?>
</TD>
</TR>
<TR>
<TD><b><font color='blue'>4.NAME OF THE VILLAGE/TOWN</b></TD>
<TD><center><?php echo $row['twnvill'];?></TD>
</TR>
<TD><b><font color='blue'>5.DATE OF BIRTH</b></TD>
<TD><center><?php echo $row['dob'];?></TD>
</TR>
<TR>
<TD><b><font color='blue'>6.GENDER</b></TD>
<TD><center>
<?php echo $row['gen'];?>
</TD>
</TR>
<TR>
<TD><b><font color='blue'>7.RELIGION</b></TD>
<TD><center><?php echo $row['religion'];?></TD>
</TR>
<TR>
<TD><b><font color='blue'>8.CASTE</b></TD>
<TD><center><?php echo $row['caste'];?></TD>
</TR>
<TR>
<TD><b><font color='blue'>9.COMMUNITY</b></TD>
<TD><center>
<?php echo $row['comunit'];?>
</TD>
</TR>
</table>
<br>
<table border="20" width="700" height="100" cellspacing="3" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<center><b>10.LIVING WITH PARENTS/GUARDIAN</center>
<TR>
<TD><i><font color='blue'>(a)Name of the father/Guardian</i></TD>
<TD><center><?php echo $row['fname'];?></TD>
</TR>
<TR>
<TD><i><font color='blue'>(b)Father/Guardian's Educational Qualification & Occupation</i></TD>
<TD><center><?php echo $row['f_ed_qua'];?></TD>
</TR>
<TR>
<TD><i><font color='blue'>(c)Full Address with Pin Code</i></TD>
<TD><center><?php echo $row['f_add_pin_phno'];?></TD>
</TR>
<TR>
<TD><i><font color='blue'>(c)Contact No.</i></TD>
<TD><center><?php echo $row['ph_no'];?></TD>
</TR>
</TABLE>
<br>
<center><b>FOR OFFICE USE</b></center>
<table border="20" height="100"  cellspacing="5" cellpadding="33" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>11.CLASS ADMITTED</b></TD>
<TD><center>
<?php echo $row['cls_adm'];?>&nbsp
'<?php echo $row['cls_sec'];?>'
</TD>
<TD><b><font color='blue'>12.MEDIUM</b></TD>
<TD><center>
<?php echo $row['med_adm'];?>
</TD>
<TD><b><font color='blue'>13.GROUP</b></TD>
<TD><center>
<?php echo $row['grop_adm'];?>
</TD>
</TR>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>14.DATE</b></TD>
<TD><center><?php echo $row['dat_adm'];?></TD>
<TD><b><font color='blue'>15.EMAIL</b></TD>
<TD><center><?php echo $row['emis_no'];?></TD>
</TR>
</table>
<hr class="vertical"/>
<STYLE>
hr.vertical
{
   width: 0px;
   height: 5%;
}
</STYLE>
<table  height="50" cellspacing="3" cellpadding="8" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR bgcolor='#E5F4F4'>
<TD><center><input type="button" value="Go Home" style="width:120px; height:30px" onclick="window.location ='dashboard.php'"></TD>
</TR>
</table>
</form>

<?php
}
ob_end_flush();
?>