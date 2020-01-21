<?php
mysql_connect("localhost","root","");
mysql_select_db("jotter");
$name=$_POST["name"];
$password=$_POST["password"];
$sql="INSERT INTO pratu(name,pass) values('$name','$password')";
mysql_query($sql);
?>