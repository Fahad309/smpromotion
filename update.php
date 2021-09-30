<?php
    require_once("config.php");
    $Contact_no=$_GET['Contact_no'];
    $select="SELECT * FROM `signup` WHERE `Contact_no`='$Contact_no'";
    $query=mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($query);

$F_name=$row['F_name'];  // here we get data from so we can write array name as written in database in phpmyadmin
$L_name=$row["L_name"]; 
$Contact_no=$row["Contact_no"];
$E_mail=$row["E_mail"];
$password=$row["Password"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylesheet.css">
    <title>Update</title>
</head>
<body class="body">
    <form class="container" action="" method="POST">
    <p  style="background-color: gray; text-align: center; height: 50px; padding-top: 10px; text-transform: uppercase; text-decoration: underline;"> Update</p>

    <label for="">First Name *</label><br>
<input type="name" placeholder="First Name " name="f_name" required value="<?php echo $F_name ?>"><br>

<label for="">Last Name *</label><br>
 <input type="name" placeholder="Last Name " name="l_name" required value="<?php echo $L_name ?>"><br>

 <label for="">Contact Name *</label><br>
 <input type="number" placeholder="Contact Number " name="number" required value="<?php echo $Contact_no ?>"><br>

 <label for="">E-mail*</label><br>
 <input type="email" placeholder="E-Mail " name="email" required value="<?php echo $E_mail ?>"><br>

 <label for="">Password *</label><br>
 <input type="password" placeholder="password " name="password" required value="<?php echo $password ?>"><br>

 <button class="button" type="submit" name="submit"> Update</button>
</form>

</body>
</html>


<?php
if(isset($_POST['submit']))
{
    $Contact_no=$_GET['Contact_no'];
    $F_name=$_POST["f_name"];
$L_name=$_POST["l_name"];
$Contact_no=$_POST["number"];
$E_mail=$_POST["email"];
$password=$_POST["password"];



$update="UPDATE `signup` SET `F_name`='$F_name',`L_name`='$L_name',`Contact_no`='$Contact_no',`E_mail`='$E_mail',`Password`='$password' WHERE Contact_no='Contact_no'";
    $query=mysqli_query($con,$update);
    if($query){

        header('location:All user.php');
    }
    else{
        echo "not submitted";
    }
}
else{
    echo "Not updated data";
}
?>