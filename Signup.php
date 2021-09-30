 <?php
//if(isset($_POST['submit'])){
$F_name = $_POST['name'];
$L_name = $_POST['lastname'];
$Contact_no = $_POST['number'];
$E_mail = $_POST['email'];
$password = $_POST['password'];
$Confirm_password = $_POST['password'];







echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") ."<br>";

require_once("config.php");

$sql="INSERT INTO `signup`(`F_name`, `L_name`, `Contact_no`, `E_mail`, `Password`, `Confirm_Password`) VALUES ('$F_name', '$L_name', '$Contact_no', '$E_mail','$password','$Confirm_password')";

$insert_query=mysqli_query($con, $sql);
if($insert_query)

{

    echo "Data inserted Successfully";

    header("location:Login.html");
}
else{
    echo "Not inserted Data";
header("refresh:3, url=Signup.html");
}

// }
// else{
//    echo "Please fill the form... redericting..";
//   header("refresh:1, url=Signup.html" );

// }


?>




</body>
</html>