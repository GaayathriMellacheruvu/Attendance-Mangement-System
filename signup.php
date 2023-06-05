<?Php


include "config.php"; // database connection details stored here

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>signup</title>
<script type="text/javascript">
function validate(form) {
if (!document.form1.agree.checked) { alert("Please Read the guidlines and check the box below  .");
 return false; }
return true;
}
</script>

</head>

<body>
<style>
body {background-color: #C0A4CB;}
  </style>
<table border='0' width='50%' cellspacing='0' cellpadding='0' align=center><form name=form1 method=post action=signupck.php onsubmit='return validate(this)'><input type=hidden name=todo value=post>

<tr><td align=center colspan=2><font face='Verdana' size='7' ><b>Signup</b></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='4' >User ID (alphanumeric  chars only)</td><td ><font face='Verdana' size='2'><input type=text name=userid></td></tr>

<tr><td >&nbsp;<font face='Verdana' size='4' >Password</td><td ><font face='Verdana' size='2'><input type=password name='password'></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='4' >Re-enter Password</td><td ><font face='Verdana' size='2'><input type=password name='password2'></td></tr>


<tr><td ><font face='Verdana' size='4' >&nbsp;Email</td><td  ><input type=text name=email></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='4' >Name</td><td ><font face='Verdana' size='2'><input type=text name=name></td></tr>

<tr><td >&nbsp;<font face='Verdana' size='4' >Gender</td><td ><font face='Verdana' size='2'>  <input type='radio' value=male checked name='gender'>Male <input type='radio' value=female  name='gender'>Female <input type='radio' value='other'  name='gender'>Others</td> </tr>

<tr ><td >&nbsp;<font face='Verdana' size='4' >I agree to terms and conditions</td><td ><font face='Verdana' size='2'><input type=checkbox name=agree value='yes'></td></tr>

<tr><td align=center colspan=2 ><font face='Verdana' size='4' ><a href=login.php><b>Login</b></a> <br><input type=submit value=Signup></td></tr>
</table>

<?Php
require "bottom.php"; // Tracking who is online
?>

<center>
<br><br><font face='Verdana' size='4' ></font></center>

</body>

</html>
