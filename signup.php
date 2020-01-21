<html>
<head><link rel="stylesheet" type="text/css" href="signupp.css">
<style>
body {
    background-image: url("images/notebook.jpg");
    background-repeat: no-repeat;
    background-position: right top;
   
}
</style>
</head>
<body>

<div id="a"> "Join US Today !!" </div>
<div id="b">
<form name="form" method="post" action="register.php">
<label id=1 value="NAME">CANDIDATE NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</LABEL>
<INPUT TYPE="textbox" placeholder="ENTER YOUR NAME" name="name" id="box"></Input><BR><BR>

<label id=1 value="PASSWORD">PASSWORD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </LABEL>
<INPUT TYPE="password" placeholder="Choose a Strong Password" name="pass" id="box"></Input><BR><BR>


<label id=1 value="dob">DATE OF BIRTH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </LABEL>
<INPUT TYPE= "date" name="dob" id="box"></Input><BR><BR>
<label id=1 value="age">YOUR AGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</LABEL>
<INPUT TYPE= "number" name="age" id="box"></Input><BR><BR>

<label id=1 value="contactno">CONTACT NUMBER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </LABEL>
<INPUT TYPE="number" name="num" id="box"></Input><BR>
<BR><BR>
<label id=1 value="mail">E-MAIL ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</LABEL>
<INPUT TYPE= "email" name="mailid" id="box"></Input><BR><BR>

<BR><label id=1 value="profession">PROFESSION *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</LABEL><INPUT TYPE="textbox" id="box" name="prof" required></Input><BR><BR>

<label id=1 value="bio">WRITE YOUR BIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</LABEL><INPUT TYPE="textarea" placeholder="your bio will be displayed in your profile" id="box" name="bio"></Input>
<br><br>
<input type="submit"></input>
</form>

</div>
</body>

</html>
