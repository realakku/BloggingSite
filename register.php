<?php
mysql_connect("localhost","root","");
mysql_select_db("jotter");
$name=$_POST['name'];
$username=$_POST['uname'];
$password=$_POST['pass'];
$dob=$_POST['dob'];
$number=$_POST['num'];
$profession=$_POST['prof'];
$bio=$_POST['bio'];
$age=$_POST['age'];
$mail=$_POST['mailid'];
$sql="INSERT INTO signup(name,username,password,dob,age,number,email,profession,bio)values('$name','$username','$password','$dob','$age','$number','$mail','$profession','$bio')";
mysql_query($sql);

header('location:index.php');
echo"<script type='text/javascript'> alert('submitted successfully!')</script>";
?>
   