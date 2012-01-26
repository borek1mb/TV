<html><head><title>Test Database Page</title></head>
<body>

<link rel="stylesheet" type="text/css"
 media="screen" href="style.css">

<!--<form action="add.php" method="post">
Show   : <input type="text" name="show"><br>
Show ID: <input type="text" name="show_id"><br>

<input type="Submit">
</form>
-->

<form id="form" name="form"  action="add.php" method="post">
<legend>Add show to database</legend>
<p><label for ="number">Show:</label><input type="text" name="show" /></p>
<p><label for="name">Show ID:</label><input type="text" name="show_id" /></p>
<p class="submit"><input type="submit" value="Submit" /></p>
</form>

<table class="table5" border="1" cellspacing="2" cellpadding="2">

<ul id="list-nav">
<li><a href="database.php">Home</a></li>
<li><a href="delete.php">Delete</a></li>
<li><a href="addShow.php">Add Show ID</a></li>
<li><a href="connor.php">Connor</a></li>
<li><a href="https://mail.borek.home/squirrelmail">Squirrel Mail</a></li>

</ul>


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
