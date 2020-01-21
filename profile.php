<html>
<head><link rel="stylesheet" type="text/css" href="profile.css"></head>
<body>
<div id="userbio">
<?php
session_start();
$connect=mysqli_connect("localhost","root","","jotter");
if(!isset($_POST['username'])){
die(mysql_error());
}
$_SESSION['USERNAME']=$user;
$query="SELECT (name,profession,bio) from signup";
$res=mysqli_query($connect,$query);
var_dump($res);
$record=mysqli_fetch_assoc( mysql_result($res));
var_dump($record);
echo"welcome";
echo"$record";
?>
</div>
<div id="makepost">
</div>
<div id="postype">
</div>
<div id="blogs">
</div>
</html>