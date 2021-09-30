<?php 

$Contact_no = $_GET["Contact_no"];
$sql="DELETE FROM `signup` WHERE Contact_no='$Contact_no' ";
require_once("config.php");
$detete_query=mysqli_query ($con,$sql);
if($detete_query)
{
echo "Successfully deleted ";
}

?>

