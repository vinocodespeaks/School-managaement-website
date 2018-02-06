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



$result = mysql_query("select  opinion, count(*)as voted from polls group by opinion  order by opinion desc") or  die(mysql_error());
$count=0;
echo  "<center>";
echo "<h1><strong> the result</strong><h1>";
echo "<br>";
$res= mysql_query("select  count(id) as res  from polls ") or die(mysql_error());
if($row1=mysql_fetch_assoc($res))
{
echo "<h2><strong> total  voted =".$row1['res']."</strong><h2>";
}
echo "<br>";
echo "1= yes<br>";
echo "0=no<br>";
echo  "<center>";
echo "<table border='' height='100' cellspacing='10' cellpadding='10' bordercolor='#21DBD9' bgcolor='#E5F4F4'>";
$first_row = true;
while ($row = mysql_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
		
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
			
		
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';

}
echo("</table>");
?>