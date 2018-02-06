
<?php
include('connectdatabase.php');
session_start();

if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: student.php') ;
}
include("template3.php");
include_once("background.php");
ob_start();

echo "<center><h1><font color ='black'>Attendance details</font></h1></center>";
    function mysql_query_or_die($query) {
    $result = mysql_query($query);
    if ($result)
        return $result;
    else {
        $err = mysql_error();
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
}
$count=0;
$sno=1;

$uid=$_SESSION['stduid2'];
$class=$_SESSION['class'];
$query = "SELECT date FROM attend where userid='$uid' and attend='$class' ";
$result = mysql_query_or_die($query);
echo"<br>"."<br>"."<br>"."<br>";
echo "<center>";
echo "<table border='' height='100' cellspacing='10' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>";
$first_row = true;
while ($row = mysql_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
		echo'<th>'."serialno"."</th>";
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
				echo'<td>'.$sno."</td>";
		
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
	$count++;
	$sno++;
}
echo("</table>");
echo "</center>";
if($count>0)
echo"<br>"."<br>"."<br>"."<br>";

echo "<center>";
echo "<table border='10' height='100' cellspacing='10' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>";
echo "<TR>";
echo "<TD>";

echo "total no of leaves =".$count;
echo "</TR>";
echo "</TD>";
echo("</table>");
echo "<br>"."<br>";;
if($count==0)
{
	echo "<i><font color = 'red '>no leaves taken in this year</font></i>";
	echo "<br>";
	echo "you have 4 more days ";
	exit ;
}
if($count==1)
{
	//echo "no leaves taken in this year";
	echo "you have 3 more days  ";
	exit;
}
if($count==2)
{
	//echo "no leaves taken in this year";
	echo "you have 2 more days  ";
	exit;
}

if($count==3)
{
	//echo "no leaves taken in this year";
	echo "you have  only one day  ";
	exit;
}
if($count==4)
{
	//echo "no leaves taken in this year";
	echo "you have no more days to take leave ";
	
exit;}
else{
//	if($count==0)
{
	//echo "no leaves taken in this year";
	echo "you're not supposed to take  more  than 4 days to take ";
	echo "pleasepay the fine ";
}
}
echo "</center>";
?>