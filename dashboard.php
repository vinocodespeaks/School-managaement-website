<?php
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}

include_once("background5.php");
include_once("template2.php");
include_once("connectdatabase.php");

ob_start();
echo "&nbsp"."&nbsp";
echo "&nbsp"."&nbsp";
echo "&nbsp"."&nbsp";
echo "&nbsp"."&nbsp";
echo "<center>";
$wel=" You are Logged in as<br> ";
 echo "<span style='color:#AFA;text-align:center;'>".$wel.$_SESSION['stduid2']."</span><br>";

 //echo "<h1> <font size='18'>   <span text-align:center;'> Welcome Admin!</font></h1>";
//echo  $wel.$_SESSION['stduid2'] ;
//echo "<br><br>";
 echo "<span style='color:'red';text-align:center;'><h1>"."welcome Admin!"."<h1></span>";
//echo "&nbsp"."&nbsp";
//echo "&nbsp"."&nbsp";
echo "</center><br>";

echo '<input type="button" style="width:150px;height:30px"  value="Click here to Logout" onclick="window.location =\'logout.php\'" />';
//include_once("template.php");
?>

<html>
<head>
</head>
<title><</title>
<body>
<br><br><br><br><br><br><br><br><br>






</table>
</center>
</body>

<html>
<head></head>
<title></title>
<body>
<center>

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
echo "<center><h1><strong> <font color ='blue'> student  list</font></strong></h1></center>";
if($s=='ALL')
{
	$query = "SELECT  name,adm_no,cls_adm FROM stud_adm group by name ";
}
else{
$query = "SELECT name,adm_no  FROM stud_adm where   cls_adm='$s' group by name ";
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
	echo "empty";
}


}
?>

<?php
ob_end_flush();
?>
<?php
unset($_SESSION['maspwd2']);
?>