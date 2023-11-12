<?php
$host="localhost";
$user="root";
$passwd="";
$database="test";
$tbl_name="ticket";

mysql_connect($host,$user,$passwd)or die('cannot connect server');
mysql_select_db($database)or die('cannot select DB');

$result=mysql_query("SELECT * FROM $tbl_name");

while($rows=mysql_fetch_array($result)){
    echo $rows['date']."".$rows['time']."".$rows['from']."".$rows['to']."".$rows['airline']."".$rows['seat']."".$rows['row']."".$rows['input']."".$rows['radio']."".$rows['date']."".$rows['time']."<br>";
}
mysql_close();
?>