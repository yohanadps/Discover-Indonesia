<?php
$servername = "10.151.64.105";
$username = "pweb";
$password = "pweb";
// Create connection

$conn=new PDO("mysql:host=$servername;dbname=pweb3_5113100169", $username, $password);
if($conn)
{

}
else
{
	$error=oci_error();
	echo "cannot connect db";
}
?>