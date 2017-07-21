<?php
/* File: loginform.inc
* Desc: Contains the code for a Web page that displays the login
* form.
*/
include("Vars.inc");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"    content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Food Order and Delivery System">
  <meta name="author"      content="Akhaine Joy Ese (SU12201001)">
    <link rel="shortcut icon" href="assets/images/webicon.png">

<title>Foodie.net - Customer Login</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
<script src="assets/js/prefixfree.min.js"></script>

<style>
/* Include the webfont Sofia through a @font-face declaration */
@font-face {
    font-family: 'Sofia';
    src: url('assets/fonts/sofia-regular-webfont.woff') format('woff'),
    url('assets/fonts/sofia-regular-webfont.ttf') format('truetype');
}
</style>

<style type='text/css'>
<!--
 @import url(http://weloveiconfonts.com/api/?family=iconicfill);
@import url(http://fonts.googleapis.com/css?family=Arvo);

/* iconicfill */

[class*="iconicfill-"]:before {
  font-family: 'IconicFill', sans-serif;
}

body,
html {
  width: 100%;
  height: 100%;
}

.wrap {
  width: 300px;
}

input {
  display: block;
  width: 300px;
  left: 30px;
  padding: 15px 0 15px 12px;
  font-weight: 400;
  color: #377D6A;
  background: rgba(0, 0, 0, 0.3);
  border: none;
  outline: none;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(0, 0, 0, 0.3);
  border-radius: 4px;
  box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.2), 0 1px 1px rgba(255, 255, 255, 0.2);
  text-indent: 60px;
  transition: all .3s ease-in-out;
  position: relative;
  font-size: 13px;
}

input:focus {
  text-indent: 12px;
  box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.4), 0 1px 1px rgba(255, 255, 255, 0.2);
}

label {
	font-family: Sofia;
  display: block;
  position: static;
  margin: 0;
  padding: 0;
  color: #990000;
  font-weight: bold;
  font-size: 18px;
}

.center {
  top: 50%;
  transform: translateY(-50%);
  position: relative;
  margin: auto;
}

.wrap-label {
  width: 300px;
  height: 34px;
  position: relative;
  padding: 0;
  margin: 0;
  bottom: -15px;
  overflow: hidden;
}

.iconicfill-pen-alt2 {
  position: absolute;
  left: 50px;
  color: #990000;
  font-size: 19px;
  opacity: 1;
  top: 0;
  transform: translateX(-100px);
}


/* ==== Pen animation ==== */

.move-pen {
  animation: move-pen 1s ease-in infinite alternate;
}

@keyframes move-pen {
  from {
    transform: translateX(-4px) rotate(6deg);
  }
  to {
    transform: translateX(4px) rotate(-3deg);
  }
}
legend {
	font-family: Sofia;
font-weight: bold;
font-size: 2em;
margin-bottom: .5em;
color: #990000;
}
#field {padding-bottom: .5em;}
.errors {
font-weight: bold;
font-style: italic;
font-size: 90%;
color: #FFFFCC;
margin-top: 0;
}
.submit{
	font-family: Sofia;
  background: #FFFFCC;
  font-size: 22px;
  color: #990000;
  width: 200px;
  height: 52px;
}
p{
	font-family: Sofia;
	color: #990000;
}
-->
</style>
</head>
<body bgcolor="#FF9933;">
<center>
<?php
$fields_1 = array("fusername" => "USERNAME", "fpassword" => "PASSWORD");
?>
<form action=<?php echo $_SERVER['PHP_SELF']?> method="POST">
<fieldset style='border: 2px solid #FFFFCC;'>
<legend>Foodie.net - Customer Login</legend>
<?php 
if (isset($message_1))
{
echo "<p class='errors'><font color = 'red' size = '+1' face = 'Sans'>$message_1</font></p>\n";
}
if (isset($reset_message))
{
echo "<p class='errors'><font color = 'red' size = '+1' face = 'Sans'>$reset_message</font></p>\n";
}
foreach($fields_1 as $field => $value)
{
if(preg_match("/pass/i",$field))
$type = "password";
else
$type = "text";
echo "<div id='field'>
<div class = 'wrap-label'>
<label for='$field'>&nbsp;&nbsp;&nbsp;$value</label>
<p class='iconicfill-pen-alt2'></p>
    </div>
   <BR>
<input id='$field' id = 'name' name='$field' type='$type' value='".@$$field."' size='20' maxlength='50' />
</div>\n";
}
?>
<input type="submit" name="Button" class="submit" style='margin-left: 15%; margin-bottom: .5em' value="LOGIN" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "reset.php" data-toggle="modal" data-target="#myModal">Forgot Password?</a>
</fieldset>
</form>
<p style='text-align: center; margin: 1em'><font size="+1">
If you do not have an account, <a href = "Reg.php">Register</a> now.<br>Return to <a href="index.php">Home</a></font></p>
<div class="modal fade" id="myModal" role = "dialog">
    <div class="modal-dialog">
    <div class="modal-content" style="background-color:#FF9933;">
<div class="modal-header">
<h2 class="modal-title">Reset Password</h2>
</div>
<div class="modal-body">
<form action="reset-password.php" action="POST">
  <center>
  <div class = "wrap-label">
  <label>Email</label>
  <p class="iconicfill-pen-alt2"></p>
    </div>
    <input type="email" placeholder = "Enter Email"><br>
  
  <div class = "wrap-label">
    <label>Username</label>
    <p class='iconicfill-pen-alt2'></p>
    </div>
    <input type="text" name = "user" placeholder = "Enter Username"><br>
  
  <div class = "wrap-label">
    <label>New Password</label>

    <p class='iconicfill-pen-alt2'></p>
    </div>
    <input type="password" name="newpass" placeholder = "Enter New Password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="Button" type="submit" class="submit" value="SUBMIT">
  </center>
</form>
</div>
<div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
    <script src="assets/css/jquery.min.js"></script>
  	<script src="assets/css/jquery.transit.min.js"></script>
    <script src="assets/css/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
    </center>
</body>
</html>