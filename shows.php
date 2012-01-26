<html><head><title>Shows</title><head><body>
<table align="right" border="1" cellspacing="2" cellpadding="2">

<?php
$database = 'tigers';
$table = 'lions';

$con = mysql_connect("localhost","root","golfing25");

mysql_select_db("tigers") or die(mysql_error());
$result1 = mysql_query("SELECT * FROM names order by SH_ID ASC;");
$num1=mysql_numrows($result1);
mysql_close();
?>

<tr align="right">
<th><font face="Arial, Helvetica, sans-serif">Show Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">Show ID</font></th>
</tr>

<?php
$t=0;
while ($t < $num1) {
$field1_name=mysql_result($result1,$t,"name");
$field3_name=mysql_result($result1,$t,"SH_ID");

?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $field1_name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $field3_name; ?></font></td>
</tr>

<?php
$t++;
}
?>


</body></html>
