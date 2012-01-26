<html><body>
<?php
$con = mysql_connect("localhost","root","golfing25");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("tigers", $con);

$sql2="INSERT INTO names(name,SH_ID)
VALUES('$_POST[show]','$_POST[show_id]')";


if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con)
?>

<meta HTTP-EQUIV="REFRESH" content="0; url=http://shows.borek.home/addShow.php">

</body></html>
