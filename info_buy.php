<?php
//connection to the database
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("computer_accessories"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
//get data
$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['mi'];
$d = $_POST['lname'];
$e = $_POST['addres_line'];
$f = $_POST['city'];
$g = $_POST['state'];
$h = $_POST['zip_code']; 
$i = $_POST['home_phone'];
$k = $_POST['security'];
$l = $_POST['dob'];
$q = $_POST['email'];
$t = $_POST['mother_name'];
$m = $_POST['net_income'];

//insert into the table
$sql = "insert into information(id,name,mi,lname,addres_line,city,state,email,zip_code,home_phone,security,dob,mother_name,net_income) values('$a', '$b', '$c', '$d', '$e', '$f','$g', '$q', '$h', '$i', '$k','$l', '$t', '$m')";
$done = mysql_query($sql) or die ("is not connect");

header("location:index.php")



?>