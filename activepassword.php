<?Php


include "config.php"; // database connection details stored here

$ak=$_GET['ak'];
$userid=$_GET['userid'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>

</head>
<style>
body {background-color: #C0A4CB;}
  </style>
<body >
<?Php



$tm=time()-86400; // Durationg within which the key is valid is 86400 sec. 

$sql=$dbo->prepare("SELECT userid  FROM plus_key WHERE pkey=:ak and userid=:userid and time > '$tm' and status='pending'");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 10);
$sql->bindParam(':ak',$ak,PDO::PARAM_STR, 32);
$sql->execute();
$no=$sql->rowCount();
echo " No of records = ".$no; 

if($no <>1){
echo "<center><font face='Verdana' size='2' color=red><b>Wrong activation </b></font> "; 
exit;
}




echo "<form action='activepasswordck.php' method=post><input type=hidden name=todo value=new-password>
<input type=hidden name=ak value=$ak>
<input type=hidden name=userid value=$userid>
<table border='0' cellspacing='0' cellpadding='0' align=center>
 <tr  > <td colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>New  Password</b> </font></td> </tr>

<tr  > <td ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;New Password  
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password' ></font></td></tr>

<tr  > <td ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Re-enter New Password  
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password2' ></font></td></tr>

<tr > <td colspan=2 align=center><input type=submit value='Change Password'><input type=reset value=Reset></form></font></td></tr>

";


echo "</table>";



?>
<center>
<br><br></center> 

</body>

</html>
