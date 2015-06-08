<?php 
$connect = mysql_connect("localhost","root","") or die("server die");
mysql_select_db("phpbasic",$connect);
$id = $_GET['id'];
$sql = "DELETE FROM student WHERE id='".$id."'";
mysql_query($sql);
header("location:index.php");