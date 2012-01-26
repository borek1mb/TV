<html><head><title>Enter watched show</title></head>
<body>
<link rel="stylesheet" type="text/css"
 media="screen" href="style.css">

<form id="form" name="form"  action="insert.php" method="post">
<legend>Enter your watched shows</legend>
<p><label for ="number">ID:</label><input type="text" name="id_person" /></p>
<p><label for="name">Show ID:</label><input type="text" name="show_id" /></p>
<p><label for="date">Date:</label> <input type="text" name="date_watched" /><br /></p>
<p class="submit"><input type="submit" value="Submit" /></p>
</form>

<ul id="list-nav">
<li><a href="database.php">Home</a></li>
<li><a href="delete.php">Delete</a></li>
<li><a href="addShow.php">Add Show ID</a></li>
<li><a href="connor.php">Connor</a></li>
<li><a href="https://mail.borek.home/squirrelmail">Squirrel Mail</a></li>

</ul>

<!--Person's Name and Id number table -->
<table class="table1" border="1" cellspacing="2" cellpadding="2">
<?php
$database = 'tigers';
$table = 'lions';

$con = mysql_connect("localhost","root","golfing25");

mysql_select_db("tigers") or die(mysql_error());
$result1 = mysql_query("SELECT firtName, id_number from lions;");
$num1=mysql_numrows($result1);
?>

<tr>
<th><font face="Arial, Helvetica, sans-serif">Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">ID</font></th>
</tr>

<?php
$t=0;
while ($t < $num1) {
$field1_name=mysql_result($result1,$t,"firtName");
$field3_name=mysql_result($result1,$t,"id_number");

?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $field1_name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $field3_name; ?></font></td>
</tr>

<?php
$t++;
}
?>

<!--Show Name and Show Id table -->
<table class="table2" border="1" cellspacing="2" cellpadding="2">

<?php
$result1 = mysql_query("SELECT * FROM names order by SH_ID ASC;");
$num1=mysql_numrows($result1);
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

<!--Watched Shows table -->
<?php
$result = mysql_query("SELECT firtName,name, names.SH_ID, lions.id_number, watched.date FROM lions,watched,names WHERE lions.id_number = watched.id_number and names.SH_ID = watched.SH_ID order by SH_ID,date,id_number ASC;");
$num=mysql_numrows($result);
mysql_close();
?>
<table class="table3" border="1" cellspacing="2" cellpadding="2">
<tr>

<th><font face="Arial, Helvetica, sans-serif">Show</font></th>
<th><font face="Arial, Helvetica, sans-serif">Show ID</font></th>
<th><font face="Arial, Helvetica, sans-serif">Date</font></th>
<th><font face="Arial, Helvetica, sans-serif">Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">ID</font></th>
</tr>

<?php
$i=0;
while ($i < $num) {

$field2_name=mysql_result($result,$i,"name");
$field4_name=mysql_result($result,$i,"SH_ID");
$field3_name=mysql_result($result,$i,"date");
$field1_name=mysql_result($result,$i,"firtName");
$field5_name=mysql_result($result,$i,"id_number");
?>

<tr>

<td><font face="Arial, Helvetica, sans-serif"><?php echo $field2_name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $field4_name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $field3_name; ?></font></td>

<td><font face="Arial, Helvetica, sans-serif"><?php echo $field1_name; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $field5_name; ?></font></td>
</tr>
<?php
$i++;
}
?>


</body></html>
