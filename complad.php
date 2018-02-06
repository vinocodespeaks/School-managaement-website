<?php
include('connectdatabase.php');
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}
include("template2.php");
include_once("background5.php");
ob_start();
?>
<html>
<head></head>
<title></title>
<body>
<center>
<input type="button"  style="height:40px;width:200px" value="Go to Home" onclick="window.location ='dashboard.php'">

<h3>Select Class</h3>
<table border="10" height="100" cellspacing="10" cellpadding="10" bordercolor ='#21DBD9' bgcolor='#E5F4F4'>
<form method="POST" action="#">
<TR>
<TD>
<select name="cls_adm"  required>
<option>ALL</option>
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
<input type="submit" name="view" value="view" style="height:30px;width:90px">
</form>
</table>
<br>
<?php 
if(isset($_POST['view'])){
  function mysql_query_or_die($query) {
    $result = mysql_query($query);
    if ($result)
        return $result;
    else {
        $err = mysql_error();
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
	
	
	
	
	
}
$s=$_POST['cls_adm'];
$count=0;
$sno=1;
echo "<center><h1><strong> <font color ='blue'> Complaints</font></strong></h1></center>";
if($s=='ALL')
{
	$query = "SELECT  * FROM complain ";
}
else{
$query = "SELECT  * FROM complain where   class='$s' ";
}
$result = mysql_query_or_die($query);
echo"<br>"."<br>"."<br>"."<br>";
echo "<center>";
echo "<table  height='100' cellspacing='10' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>";
$first_row = true;
while ($row = mysql_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
		//echo'<th>'."serialno"."</th>";
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';

    foreach($row as $key => $field) {
		//if($count==0)
		//{
				//echo'<td>'.$sno."</td>";
		
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
	
	$sno++;
	$count++;
	
    echo '</tr>';
}
echo("</table>");
echo "</center>";
echo"<br>"."<br>"."<br>"."<br>";
if ($count==0)
{
	echo "<strong color='red'>no complaints well done!";
}
}
?>