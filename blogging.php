<?php
session_start();
echo $_SESSION["id"];
if(isset($_SESSION["id"])){
	$blogy=$_POST["ublog"];
	$e=$_POST["id"];
$connect=mysqli_connect("localhost","root","","jotter");
$query="insert into blogs(id,blog) values ('$e','$blogy')";
if(mysqli_query($connect,$query)){
 echo "<script>alert('your post is saved')</script>
 <a href='userpage.php'?id=$e;>go back</a>";
}
else{
	mysqli_error($connect);
}
}
?>