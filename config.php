<style>
body {background-color: #C0A4CB;}
  </style>
<?Php
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
$dbhost_name = "localhost";
$database = "plus_signup"; // Change your database name
$username = "root";          // Your database user id
$password = "";          // Your password

//////// Do not Edit below /////////
try {
$dbo=new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}


?>
