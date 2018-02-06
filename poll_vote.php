<?php
include_once("background.php");
include_once("connectdatabase.php");
ob_start();
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: default1.php') ;
}

?>
<h2>Result:</h2>

<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$s=$_SESSION['stduid2'];

//get value from database based on logged user.
$result = mysql_query(
        "SELECT * FROM polls WHERE id='$s' LIMIT 1");

    if(mysql_fetch_array($result) !== false)
	{
		echo "<strong> <font size =1000 color ='red'> you' ve already voted dont try to cheat the admin!</font></strong>";
	}
else 
{
$res=mysql_query("insert into polls  values ('$s',$vote)") or die(mysql_error());


$result = mysql_query("select  opinion, count(*)as voted from polls group by opinion  order by opinion desc") or  die(mysql_error());
$count=0;
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
echo "<br>";

echo "<strong ><font size =300 >yes =1</font><strong>";
echo "<br>";
echo '<br>';
echo "<strong><font size =300> no = 0</font><strong>";
 echo "<br>";
 echo "<br>";
 echo"<br>";
 echo "<strong> <font size =750 color ='red'>Thanks for voting!</font></strong>";
echo "<br>";

}

?>

