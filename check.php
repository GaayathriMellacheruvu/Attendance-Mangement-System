<style>
body {background-color: #C0A4CB;}
  </style>

<?Php
if(!isset($_SESSION['userid'])){
  echo "<center>";
  echo "<font color=red align='center'>Not loggged in : <a href=login.php>Login</a> |
   <a href=signup.php>Signup</a></font> ";
  echo "</center>";
   exit;
}else{
  echo "<center>";
  echo "<font color=black size='6' font face='verdana,arial,helvetica'><b>Welcome $_SESSION[userid],</b><br></font>";
  echo "<a href=change-password.php>Change Password</a> |
  <a href=update-profile.php>Update Profile</a> |
  <a href=logout.php>Logout</a>";
  echo "</center>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
}

echo "<b><center> You can now mark the attendance</b></center>";
echo "<br>";
echo "<br>";
echo "<center><a href=mark.php>HERE</a></center>";
?>
