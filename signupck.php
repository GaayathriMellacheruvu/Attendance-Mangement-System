<?Php

include "config.php"; // database connection details stored here
// Collect the data from post method of form submission //
$userid=$_POST['userid'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$agree=$_POST['agree'];
$todo=$_POST['todo'];
$email=$_POST['email'];
$name=$_POST['name'];
$gender=$_POST['gender'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>

</head>
<style>
body {background-color: #C0A4CB;}
  </style>
  <center>
<body >
<?Php
if(isset($todo) and $todo=="post"){

$status = "OK";
$msg="";

// if userid is less than 3 char then status is not ok
if(!isset($userid) or strlen($userid) <3){
$msg=$msg."User id should be =3 or more than 3 char length<BR>";
$status= "NOTOK";}

if(!ctype_alnum($userid)){
$msg=$msg."User id should contain alphanumeric  chars only<BR>";
$status= "NOTOK";}


$count=$dbo->prepare("select userid from plus_signup where userid=:userid");
$count->bindParam(":userid",$userid);
$count->execute();
$no=$count->rowCount();

if($no >0 ){
$msg=$msg."User Name already exists. Choose a different User Name<br>";
$status= "NOTOK";
}

$count=$dbo->prepare("select email from plus_signup where email=:email");
$count->bindParam(":email",$email);
$count->execute();
$no=$count->rowCount();
if($no >0 ){
$msg=$msg."This email address is there with us. If you forgot your password you can activate it by using forgot password link. Or Please try another one<BR>";
$status= "NOTOK";
}



if ( strlen($password) < 3 ){
$msg=$msg."Password must be more than 3 char legth<BR>";
$status= "NOTOK";}

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $status="NOTOK";
  $msg=$msg."Check email address not correct <br>";
}

if ($agree<>"yes") {
$msg=$msg."You must agree to terms and conditions<BR>";
$status= "NOTOK";}
if($status<>"OK"){
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
}else{ // if all validations are passed.
$password_original = $password;
$password=md5($password); // Encrypt the password before storing
$sql=$dbo->prepare("insert into plus_signup(userid,password,email,name,gender) values(:userid,:password,:email,:name,:gender)");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 15);
$sql->bindParam(':password',$password,PDO::PARAM_STR, 32);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 75);
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':gender',$gender,PDO::PARAM_STR);
if($sql->execute()){
//echo " Inside ok loop ";
$mem_id=$dbo->lastInsertId();
echo " <font face='Verdana' size='2'><b>Your User Id : </b>".$userid;
echo "<br><font face='Verdana' size='4'><b> You can now </b><a href=login.php><b>LOGIN</b></a>";

}// if sql executed
else{print_r($sql->errorInfo()); }

}
} // end of todo if condition
?>
<centre>
<br><br></centre>
</center>
</body>
</html>
