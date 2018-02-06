
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

  if (isset($_POST['submit'])) {
    $from = 'vinod.aadvik@gmail.com';
    $subject = $_POST['subject'];
    $text = $_POST['email'];
    $output_form = false;

    if (empty($subject) && empty($text)) {
      // We know both $subject AND $text are blank 
      echo "<script type='text/javascript'>alert('you forgot borh');</script>";
      $output_form = true;
    }

    if (empty($subject) && (!empty($text))) {
      echo "<script type='text/javascript'>alert('you forgot subject');</script>";
      $output_form = true;
    }

    if ((!empty($subject)) && empty($text)) {
      echo "<script type='text/javascript'>alert('you forgot the body of mail');</script>";
      $output_form = true;
    }
  }
  else {
    $output_form = true;
  }

  if ((!empty($subject)) && (!empty($text))) {
    $result=mysql_query("SELECT * FROM stud_adm ");
    
     

    while ($row = mysql_fetch_array($result))
	{
		
      $to = $row['emis_no'];
      $name = $row['name'];
      $msg = "Dear $name,\n$text";
      mail($to, $subject, $msg, 'From:' . $from);
      echo 'Email sent to: ' . $to . '<br />';
    } 

    //mysql_close($db);
  }

  if ($output_form) {
?>
<center>
<br>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="subject">Subject of email:</label><br />
    <input id="subject" name="subject" type="text" value="" size="30" /><br />
    <label for="elvismail">Body of email:</label><br />
    <textarea id="email" name="email" rows="8" cols="40"></textarea><br />
    <input type="submit" name="submit" value="Submit" />
  </form>
<center>
<?php
  }
?>

</body>
</html>
