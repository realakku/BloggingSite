<?php
session_start();
$connect=mysqli_connect("localhost","root","","jotter");
if(!isset($_POST['username'])){
die(mysql_error());
}
$user=$_POST['username'];
$passwd=$_POST['passwd'];
$query="SELECT * from signup where username='$user' and password='$passwd'";
$res=mysqli_query($connect,$query);
$row=mysqli_num_rows($res);
if($row==1){
$_SESSION['USERNAME']=$user;
header('location:profile.php');

}
else{
header('loction:index.php');
echo "<script type='text/javascript'>alert('ENTER CORRECT USERNAME & PASSWORD')</script>";
}
var_dump($_SESSION);
?>