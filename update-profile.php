<?Php

include "include/session.php";
include "config.php";



?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>


</head>
<centre>
<style>
body {background-color: #C0A4CB;}
  </style>
<body >
<?Php
// check the login details of the user and stop execution if not logged in
require "check.php";

// If member has logged in then below script will be execuated.
// let us collect all data of the member
$count=$dbo->prepare("select * from plus_signup where userid='$_SESSION[userid]'");
if(!($count->execute())){
echo "Database Problem ";
exit;
}else{
$row = $count->fetch(PDO::FETCH_OBJ);
}

//Let us set the period button based on the data of the sex field
// You can see male button is checked if it is set to male
// else it is  set to female
switch($row->gender)
{
case 'male':
$ck1='checked';
$ck2='';
$ck3='';
break;
case 'female':
$ck1='';
 $ck2='checked';
 $ck3='';
 break;
case 'other':
$ck1='';
 $ck2='';
 $ck3='checked';
 break;
}
//echo $row->gender . "ck1".$ck1, "ck2".$ck2,"ck3". $ck3;
$ckb="<input type='radio' value=male  name='gender' $ck1>Male
<input type='radio' value=female  name='gender' $ck2>Female
<input type='radio' value=other  name='gender' $ck3>Others ";

// One form with a hidden field is prepared with default values taken from field.
echo "<form action='update-profileck.php' method=post>
<input type=hidden name=todo value=update-profile>

<table border='0' cellspacing='0' cellpadding='0' align=center width='30%'>
 <tr> <td colspan='2' align='center'>
<font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>Update Profile</b>
</font></td> </tr>

<tr><td ><font face='Verdana' size='2' >&nbsp;Email</td>
<td  ><input type=text name=email value='$row->email'></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='2' >Name</td>
<td ><font face='Verdana' size='2'><input type=text name=name value='$row->name'></td></tr>

<tr ><td >&nbsp;<font face='Verdana' size='2' >Gender</td>
<td ><font face='Verdana' size='2'>  $ckb</td></tr>
<tr><td align=center colspan=2><input type=submit value=Update></td></tr>


";


echo "</table>";
require "bottom.php";

?>
<center>
<br><br></center>
</centre>
</body>

</html>
