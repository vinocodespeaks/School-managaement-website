<?php
include_once("background5.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
include_once("template2.php");
?>

<?php
if(isset($_GET['edit']))
{
$admno=$_GET['admno'];
$result =mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");
$row = mysql_fetch_array($result);
?>
<body>
<?php
if(!$row)
{ echo "<br>"."<br>";
	echo "<center><h4><font  color='black'>Can't Find The Student!<br><br> I think u just entered  incorrect one... please try again!</font></h4></center>"; 
	echo "<br>"."<br>";
	echo '<p><center><input type="button" style="height:40px;width:200px" value="try again" onclick="window.location =\'edit_adm_prof.php\'" /></p>';
	 
	 	exit;
}

echo "<center><img style='border:8px solid grey' width='120' height='120' src=images/student/".$row['img'].">";
echo "</a>";

?>
<form action="ph_upload.php" method="POST" enctype="multipart/form-data">
Add/Change Photo<input type="file" name="image" required style="width:180px">
<input type="text" name="adm_no" value="<?php echo $row['adm_no'];?>" hidden>
<input type="submit" value="Click to Update" name="phupd" style="height:30px;width:100px">
</form>
<form action="edit_adm_prof_pro1.php" method="POST">
<input type="text" name="adm_no" value="<?php echo $row['adm_no'];?>" hidden>
<b>ADMISSION NO.</b>
<b><font color="red"><?php echo $row['adm_no'];?></font></b>
<table border="20" width="700" height="100" cellspacing="3" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR bgcolor='#E5F4F4'>
<TD><b><font color="blue">1.NAME OF STUDENT</b></TD>
<TD>
<center><?php echo $row['name'];?>
</TD>
</TR>

<TR bgcolor='#E5F4F4'>
<center>
<TD>
<b><font color="blue">2.ADMSSION YEAR</font></b>
</TD>
<TD><center>
<select name="year">
<option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>

<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
</select>
</TD>
</TR>
<TD>
<b><font color='blue'>3.TRANSFER CERTIFICATE</b>
</TD>
<TD><center>
<select name="tc_issue" required>
<option value="<?php echo $row['tc_issue'];?>"><?php echo $row['tc_issue'];?></option>
<option>ISSUED</option>
<option>NOT-ISSUED</option>
</select>
</TD>
</TR>
<TR>
<TD bgcolor='#E5F4F4'><b><font color='blue'>4.NAME OF THE VILLAGE/TOWN</b></TD>
<TD><center><input type="text" name="twnvill" value="<?php echo $row['twnvill'];?>" required maxlength="30"></TD>
</TR>
<TD><b><font color='blue'>5.DATE OF BIRTH</b></TD>
<TD><center><input type="date" name="dob" value="<?php echo $row['dob'];?>" required></TD>
</TR>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>6.GENDER</b></TD>
<TD><center>
<select name="gen" required>
<option value="<?php echo $row['gen'];?>"><?php echo $row['gen'];?></option>
<option>----------</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</TD>
</TR>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>7.RELIGION</b></TD>
<TD><center><input type="text" name="religion" value="<?php echo $row['religion'];?>" required maxlength="15"></TD>
</TR>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>8.CASTE</b></TD>
<TD><center><input type="text" name="caste" value="<?php echo $row['caste'];?>" required maxlength="40"></TD>
</TR>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>9.COMMUNITY</b></TD>
<TD><center>
<select name="comunit" required>
<option value="<?php echo $row['comunit'];?>"><?php echo $row['comunit'];?></option>
<option>----------</option>
<option>OC</option>
<option>BC</option>
<option>MBC</option>
<option>SC</option>
<option>ST</option>
<option>others</option>
</select>
</TD>
</TR>
</table>
<br>


<table border="20" width="700" height="100" cellspacing="3" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<center><b>10.LIVING WITH PARENTS/GUARDIAN</center>


<TR bgcolor='#E5F4F4'>
<TD><i><font color='blue'>(a)Name of the father/Guardian</i></TD>
<TD><center><input type="text" name="fname" value="<?php echo $row['fname'];?>" required maxlength="50"></TD>
</TR>

<TR bgcolor='#E5F4F4'>
<TD><i><font color='blue'>(b)Father/Guardian's Educational Qualification & Occupation</i></TD>
<TD><center><textarea name="f_ed_qua" rows="4" cols="27" required maxlength="100"><?php echo $row['f_ed_qua'];?></textarea></TD>
</TR>

<TR bgcolor='#E5F4F4'>
<TD><i><font color='blue'>(c)Full Address with Pin Code</i></TD>
<TD><center><textarea name="f_add_pin_phno" rows="4" cols="27" required maxlength="100"><?php echo $row['f_add_pin_phno'];?></textarea></TD>
</TR>

<TR bgcolor='#E5F4F4'>
<TD><i><font color='blue'>(d)Contact No.</i></TD>
<TD><center> <input type="text" name="ph_no" value="<?php echo $row['ph_no'];?> "required maxlength="18">
</TD>
</TR>
</TABLE>
<br>
<center><b>FOR OFFICE USE</b></center>
<table border="20" height="100"  cellspacing="3" cellpadding="1" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>11.CLASS</b></TD>
<TD><center>
<select name="cls_adm" required>
<option value="<?php echo $row['cls_adm'];?>"><?php echo $row['cls_adm'];?></option>
<option>----------</option>
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
<select name="cls_sec" required>
<option value="<?php echo $row['cls_sec'];?>"><?php echo $row['cls_sec'];?></option>
<option>----------</option>
<option>A</option>
<option>B</option>
<option>C</option>
<option>D</option>
<option>E</option>
<option>F</option>
<option>G</option>
<option>H</option>
<option>I</option>
</select>
</TD>
<TD><b><font color='blue'>12.MEDIUM</b></TD>
<TD><center>
<select name="med_adm" required>
<option value="<?php echo $row['med_adm'];?>"><?php echo $row['med_adm'];?></option>
<option>----------</option>
<option>English</option>
<option>Tamil</option>
</select>
</TD>

<TD><b><font color='blue'>13.GROUP</b></TD>
<TD><center>
<select name="grop_adm" required>
<option value="<?php echo $row['grop_adm'];?>"><?php echo $row['grop_adm'];?></option>
<option>NIL</option>
<option>Group-102(Phy,Chem,Comp.Sci,Mat)</option>
<option>Group-103(Phy,Chem,Bio,Mat)</option>
<option>Group-201(Phy,Chem,Bio,Comp.Sci)</option>
</select>
</TD>
</TR>
<TR bgcolor='#E5F4F4'>
<TD><b><font color='blue'>14.DATE OF ADMISSION</b></TD>
<TD><center><input type="date" name="dat_adm" value="<?php echo $row['dat_adm'];?>" required></TD>
<TD><b><font color='blue'>15.EMAIL ID</b></TD>
<TD><center><input type="text" name="emis_no" value="<?php echo $row['emis_no'];?>"></TD>
</TR>
</table>



<table  height="50" cellspacing="3" cellpadding="8" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<TR bgcolor='#E5F4F4'>
<TD><center><input type="submit" value="Conform & Update" name="upd" style="height:30px;width:130px"></TD>
<TD><center><input type="button" value="Cancel" style="width:120px; height:30px" onclick="window.location ='dashboard.php'"></TD>
</TR>
</table>
</form>
 <?php
}
else
{
	die();
}
ob_end_flush();
?>