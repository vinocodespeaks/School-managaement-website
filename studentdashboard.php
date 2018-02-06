<?php
session_start();
if((!isset($_SESSION['stduid2']))&&(!isset($_SESSION['stdpwd2'])))
{
header('Location: student.php') ;
}
include("connectdatabase.php");
include("template3.php");
include_once("background.php");
ob_start();

$wel="welcome ";
$s= $wel.$_SESSION['stuname2']."!";
echo "<center><h1><i><font color ='#FF0000'>".$s."</font></i></h1></center>";
echo "&nbsp"."&nbsp";
echo "<br>";
echo '<input type="button" style="width:150px;height:30px"  value="Click here to Logout" onclick="window.location =\'studentlogout.php\'" />';
$admno=$_SESSION['stduid2'];
$result = mysql_query("SELECT * FROM stud_adm WHERE adm_no='$admno'");
$row = mysql_fetch_array($result);
$_SESSION['class']=$row['cls_adm'];

echo "<center><font color='green'>"."your photo"."</font><center>";
echo "<center><a href='images/student/".$row['img']."' target='_blank'><img style='border:8px solid grey' width='180' height='180' src=images/student/".$row['img'].">";
echo "</a><br>";
?>



<br><br><br></br></br></br></br></br></br>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header {
    padding: 1em;
    color: white;
    background-color: blue;
    clear: left;
    text-align:center;
}

nav {
    
    max-width: px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
   
    border-left: 1px solid gray;
    padding: 1em;
    overflow: auto;
}
</style>
</head>
<body>


<?php
$result=mysql_query("SELECT * FROM a WHERE id='1' ");

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
while ($row = mysql_fetch_array($result))
	{	

    $s= $row['text'];
	$v=$row['full'];
echo "<div class='container'>";

echo "<header>";
  echo " <h1>"."Daily Article"."</h1>";
echo "</header>";
echo "<article>";
 echo  "<h1>"."<font color='blue'>".$s."</font>"."</h1>";
 echo "<br>";
  echo  "<p>"."<font size='' color ='red'>".$v."</font>"."</p>";
echo "</article>";
echo "<footer></footer>";

echo "</div>";


echo "</body>";
echo "</html>";
	}
?>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align:center;
}

nav {
    
    max-width: px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
   
    border-left: 1px solid gray;
    padding: 1em;
    overflow: auto;
}
</style>
</head>
<body>

<div class='container'>";

<header>
   <h1>Rules and Regulations</h1>";
</header>
<article>
<h1><font size="75" color='blue'>rules</font></h1>";
 <br>
  
</article>

<footer>Copyright &copy; 2017 VinSL Datum Inc.</footer>

</div>


</body>
</html>
	}
