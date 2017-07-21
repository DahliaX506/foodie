<?php
include("Vars.inc");
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport"    content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Food Order and Delivery System">
  <meta name="author"      content="Akhaine Joy Ese (SU12201001)">
    <link rel="shortcut icon" href="assets/images/webicon.png">

<title>Foodie.net - Customer Registeration</title>

<script src="assets/js/prefixfree.min.js"></script>
<link rel="stylesheet" href="assets/css/reset.css">

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
color: red;
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
<?php
$fields_2 = array("Username" => "USERNAME", "password" => "PASSWORD", "email" => "E-MAIL", "phone" => "PHONE");
?>
<form action=<?php echo $_SERVER['PHP_SELF']?> method="POST">
<fieldset style='border: 2px solid #FFFFCC;'>
<legend>Foodie.net - Customer Registration</legend>
<?php
if(isset($message_2))
{
echo "<p class='errors'>$message_2</p>\n";
}
foreach($fields_2 as $field => $value)
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
<input id='$field' name='$field' type='$type' value='".@$$field."' size='40' maxlength='65' />
</div>\n";
} // end foreach field 
?>
<input type="submit" class="submit" name="Button" style='margin-left: 25%;' value="REGISTER"><br>
</fieldset>
</form>
<p style='text-align: center; margin: 1em'><font size = "+1">If you already have an account, <a href = "login.php">Login</a> now. <br>Return to <a href="index.php">Home</a></font></p>
<script src="assets/css/jquery.min.js"></script>
  <script src="assets/css/jquery.transit.min.js"></script>
  <script src="assets/js/index.js"></script>
</body>
</html>