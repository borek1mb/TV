<html><body>
<?php
$con = mysql_connect("localhost","root","golfing25");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 ?>
<?php if ( $_POST['id_person'] > 4 || $_POST['id_person'] < 1 || !is_numeric($_POST['id_person']) ): ?>
	<meta HTTP-EQUIV="REFRESH" content="0; url=http://shows.borek.home/user_error.html">

<?php else: ?>

<?php
mysql_select_db("tigers", $con);
	
$sql2="INSERT INTO date(SH_ID,date,id_number)
VALUES('$_POST[show_id]','$_POST[date_watched]', '$_POST[id_person]')";

$sql3="INSERT INTO watched(id_number,SH_ID, date)
VALUES('$_POST[id_person]','$_POST[show_id]','$_POST[date_watched]')";

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
<?php endif; ?>


<meta HTTP-EQUIV="REFRESH" content="0; url=http://shows.borek.home/database.php">
</body></html>
