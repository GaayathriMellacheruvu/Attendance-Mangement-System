<?Php

include "include/session.php";

include "config.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>


</head>

<body>
<style>
body {background-color: #C0A4CB;}
  </style>
<form action='loginck.php' method=post>
<table border='0' cellspacing='0' cellpadding='0' align=center>
  <tr id='cat'>
  <tr> <td  ><b><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Login ID  &nbsp; &nbsp</b>
</font></td> <td  align='center'><b><font face='verdana, arial, helvetica' size='2' ></b><br>
<input type ='text' class='bginput' name='userid' ></font></td></tr>



<tr> <td  ><b><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Password</b>
</font></td> <td  align='center'><b><font face='verdana, arial, helvetica' size='2' ></b><br>
<input type ='password' class='bginput' name='password' ></font></td></tr>



<br><tr> <td colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'><br>
<input type='submit' value='Submit'> <input type='reset' value='Reset'>
</font></td> </tr>


<tr> <td colspan='2' align='center'><font face='helvetica' size='3' align='center'> &nbsp;<a href='signup.php'><br><b>New Member Sign UP</b></a></font></td></tr>
<tr> <td colspan='2' align='center'><font face='helvetica' size='3' align='center'> &nbsp;<a href='forgot-password.php'><br><b>Forgot Password?</b></a></font></td></tr>




<tr> <td colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>
&nbsp;</font></td> </tr>


</table></center></form>
<?Php
require "bottom.php";
?>
<center>
<br><br></center>

</body>

</html>
