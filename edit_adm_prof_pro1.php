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
if(isset($_POST['upd']))
{
$adm_no=$_POST['adm_no'];
$tc_issue=$_POST['tc_issue'];
$year=$_POST['year'];
$twnvill= $_POST['twnvill'];
$dob= $_POST['dob'];
$gen= $_POST['gen'];
$religion= $_POST['religion'];
$caste= $_POST['caste'];
$comunit= $_POST['comunit'];
$fname= $_POST['fname'];
$f_ed_qua= $_POST['f_ed_qua'];
$f_add_pin_phno= $_POST['f_add_pin_phno'];
$ph_no= $_POST['ph_no'];
$cls_adm= $_POST['cls_adm'];
$cls_sec= $_POST['cls_sec'];
$grop_adm= $_POST['grop_adm'];
$med_adm=$_POST['med_adm'];
$dat_adm=$_POST['dat_adm'];
$emis_no=$_POST['emis_no'];

$sql="UPDATE stud_adm SET f_ed_qua='$f_ed_qua',f_add_pin_phno='$f_add_pin_phno',ph_no= '$ph_no',tc_issue='$tc_issue',year='$year',twnvill='$twnvill',dob='$dob',gen='$gen',religion='$religion',caste='$caste',comunit='$comunit',fname='$fname',cls_adm='$cls_adm',cls_sec='$cls_sec',grop_adm='$grop_adm',med_adm='$med_adm',dat_adm='$dat_adm',emis_no='$emis_no' WHERE adm_no='$adm_no'";

$result= mysql_query($sql);

if($result)
{
	
echo "<br><br>";
echo "<center><font size='100' color='AQUA'>Updated Successfully</font></center>";
}

else
{ 
echo "<p><font size='100' color='AQUA'>Can't Find The Student! I think u just entered  incorrect one... please try again!</font></p>";


}
}
?>
<br><br>
<center>
<input type="button" style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">