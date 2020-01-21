<html>
<head><link rel="stylesheet" type="text/css" href="profile.css"></head>
<body>

<?php
include"header.php";
echo"<div id='userbio'>";
session_start();
$connect=mysqli_connect("localhost","root","","jotter");
if(!isset($_POST['email'])){
die(mysql_error());
}
$user=$_POST['email'];
$passwd=$_POST['passwd'];
$query="SELECT * from signup where email='$user' and password='$passwd'";
$res=mysqli_query($connect,$query);
$row=mysqli_num_rows($res);
if($row==1){
$_SESSION['email']=$user;
echo"<div id='dp'>";
echo"<img src='images/avatar.jpg' class='avatar'>";
echo"</div>";

$query="SELECT name,email, profession, bio from signup where email='$user'";
$res=mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($res);
echo"<div id='profile'>";
echo "" . $row['name']. "<BR>" . $row['profession']."<BR>".$row['email']."<BR>" . $row['bio']. "<br>";

echo"</div>";

echo"</div>";


echo"<div id='makepost'>";

$q="SELECT * from signup where email='$user'";
$r=mysqli_query($connect,$q);
$p=mysqli_fetch_array($r);
$id=$p["id"];
$_SESSION["id"]=$id;
echo"<form name='blogform' method='post' action='blogging.php'>
your id is genearted as=$id;
<input type='hidden' name='id' value='$id'>
<input type='textbox' id='blog' name='ublog' placeholder='Feeling Something, Write it out...' required></input>

<input type='submit' value='Make a post'></input>
</form>";


echo"</div>";
echo"<div id='postype'>";
echo"</div>";
echo"<div id='blogs'>";
echo"</div>";


}
else{
header('loction:index.php');
echo "<script type='text/javascript'>alert('ENTER CORRECT EMAIL & PASSWORD')</script>";
}

?>
</body>
</html>