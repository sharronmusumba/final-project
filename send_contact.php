<?php
//connection to the databse
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("computer_accessories"))
{
     die('oops database selection problem ! --> '.mysql_error());
}

//get value
$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['email'];
$d = $_POST['phone'];
$e = $_POST['subject'];
$f = $_POST['message'];

//inserting into my table
$mysql = "INSERT INTO contact(id,name,email,phone,subject,message) VALUES('$a', '$b', '$c', '$d', '$e', '$f')" or die("never wake up");
$done = mysql_query($mysql) or die("Cannot");

header('location:contact.php');
?>
