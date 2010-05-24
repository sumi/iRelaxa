<?php
//$first_name = $_POST[\'first_name\'];
//$last_name = $_POST[\'last_name\'];
//$company = $_POST[\'company\'];
//$email = $_POST[\'email\'];
//$phone = $_POST[\'phone\'];
//connect to database
$usr = "qnick_seo";
$pwd = "S6D%v3qt7D#U";
$db = "qnick_seo";
$host = "localhost";
$con = mysql_connect($host, $usr, $pwd);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($db, $con);

//sql insert statement
$sql = "INSERT INTO getstarted values('$_POST[first_name]', '$_POST[last_name]', '$_POST[company]', '$_POST[email]', '$_POST[phone]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Thanks for your interest in Quasnick. Our Sales rep will contact you within 24 hrs";

mysql_close($con)

?>

