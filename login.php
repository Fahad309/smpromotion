<?php
$email=$_GET['email'];
$password=$_GET['password'];
require_once("config.php");

$sql="SELECT * FROM signup WHERE E_mail='$email' and Password='$password'"; 
$query=mysqli_query($con, $sql);

if($query)
{
    header("Location: profile.html");

}


else{
    echo("Invalid e-mail and password.");
}
?>