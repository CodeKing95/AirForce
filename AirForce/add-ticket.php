<?php
$host="localhost";
$Username="root";
$password="";
$db_name="test";
$tbl_name="ticket";

mysqli_connect("$host","$username","$password")or die('cannot connect server');
mysqli_select_db("$db_name")or die('cannot select DB');

$date=$_POST["date"];
$time=$_POST["time"];
$from=$_POST["from"];
$to=$_POST["to"];
$airline=$_POST["airline"];
$seat=$_POST["seat"];
$row=$_POST["row"];
$input=$_POST["input"];
$radio=$_POST["radio"];
$date=$_POST["date"];
$time=$_POST["time"];

$sql="INSERT INTO ticket VALUES('$date','$time','$from','$to','$airline','$seat','$row','$input','$radio','$date','$time')";
$result=mysql_query($sql);

if(result){
    echo"Successful"."<BR>";
    echo "<a href='view-ticket.php'>View Ticket</a>";
}
mysql_close();
?>