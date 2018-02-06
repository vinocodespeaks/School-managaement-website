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
<html>
<head></head>
<title></title>
<body>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">
<center><h3><font  color='pink'>Search by Roll number</font></h3></center>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="view_adm_prof1.php">
<TR>
<TD>
<b>ADMISSION NO.</b>
</TD>
<TD>
<input type="text" name="admno" style="width:150px;height:20px" required autofocus>
</TD>
<TD>
<input type="submit" name="view" value="Search" style="height:30px;width:90px">
</form>
</table>
<center><h3><font  color='pink'>Search by student name</font></h3></center>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor='#21DBD9' bgcolor='#E5F4F4'>
<form method="GET" action="view_adm_prof.php">
<TR>
<TD>
<b>STUDENT NAME:</b>
</TD>
<TD>
<input type="text" name="name" style="width:180px;height:20px" required>
</TD>
<TD>
<select name="cls_adm" required>
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
</TD>
<TD>
<input type="submit" name="view" value="Search" style="height:30px;width:90px">
</form>
</table>
<br>
<?php
if(isset($_GET['view']))
{
$name=mysql_real_escape_string($_GET['name']);
$cls_adm=mysql_real_escape_string($_GET['cls_adm']);
$sql = mysql_query("SELECT * FROM stud_adm WHERE name LIKE '%$name%' AND cls_adm='$cls_adm'");
echo mysql_num_rows($sql);
echo "<b>"." result found";
echo "<center>";
echo "<table border='20' height='100' width='900' cellspacing='3' cellpadding='3' bordercolor='#21DBD9'>
<tr>
<th>Photo</th>
<th>Admission No.</th>
<th>Name</th>
<th>Class</th>
<th>More Details</th></tr>";
//And we display the results
while($row = mysql_fetch_assoc($sql))
{
echo "<tr bgcolor='#E5F4F4'>";
$admno=$row['adm_no'];
echo "<td width='3%'>"."<center><img width='120' height='120' src=images/student/".$row['img'].">";
echo "<td width='3%'>"."<center>".$row['adm_no']."</td>";
echo "<td width='3%'>"."<center>".$row['name']."</td>";
echo "<td width='3%'>"."<center>".$row['cls_adm']."&nbsp'".$row['cls_sec']."'</td>";
echo "<td width='3%'>";
echo "<center><a href='view_adm_prof1.php?admno=$admno&view=view'>View More</a>";
echo "</td>";
echo "</tr>";
}
echo "</table></center>";

}
?>
</center>
</body>