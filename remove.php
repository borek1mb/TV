<html><body>
<?php
$con = mysql_connect("localhost","root","golfing25");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("tigers", $con);

$sql2="DELETE FROM date WHERE
SH_ID = ('$_POST[show_id]') and date = ('$_POST[date_watched]') and id_number = ('$_POST[id_person]')";

$sql3= "DELETE FROM watched WHERE
id_number = ('$_POST[id_person]') and SH_ID = ('$_POST[show_id]') and date = ('$_POST[date_watched]')";


if (!mysql_query($sql2,$con))
  {
  die('Error: ' . mysql_error());
  }

if (!mysql_query($sql3,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con)
?>

<meta HTTP-EQUIV="REFRESH" content="0; url=http://shows.borek.home/delete.php">
</body></html>
