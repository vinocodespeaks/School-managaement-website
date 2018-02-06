
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
echo "<center><h1><strong> <font color ='blue'> NOTIFICATIONS</font></strong></h1></center>";
//$uid=$_SESSION['stduid2'];
$class=$_SESSION['class'];
$query = "SELECT  text ,date FROM circular where   class='$class' or class='ALL' ";
$result = mysql_query_or_die($query);
echo"<br>"."<br>"."<br>"."<br>";
echo "<center>";
echo "<table border='10' height='100' cellspacing='10' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>";
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

?>