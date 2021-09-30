<?php
$host='localhost';
$username='root';
$Password='';
$db='promotion_website';




$con=mysqli_connect($host , $username, $Password, $db);
//print_r($con);

// Check connection
if ($con) {
 
echo " connection successfully";
}
else
{
    echo "Not Connected";
}
?>