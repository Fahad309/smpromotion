<?php
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<div class="container">
  <h2>All Users</h2>
 <table class="table">
    <thead>
      <tr>
    
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Contact Number</th>
        <th>Password</th>
        <th>Confirm Password</th>
    
      </tr>
    </thead>
    <tbody>
        <?php
        $select="Select * from signup";
        $query=mysqli_query($con,$select);
        
       // printf ("%s (%s)\n", $row["id"], $row["E_mail"]);
        while ($row = mysqli_fetch_assoc($query))
      {


    
       
        
        ?>
      <td>
         <?php  echo $row['F_name']?>
      </td>
      <td>
         <?php  echo $row['L_name']?>
      </td>
      <td>
         <?php  echo $row['E_mail']?>
      </td>
      <td>
         <?php  echo $row['Contact_no']?>
      </td>
      <td>
         <?php  echo $row['Password']?>
      </td>
      <td>
      
      <a class="btn btn-danger" href=<?php echo "delete.php/?Contact_no=".$row['Contact_no']?>>Delete</a>
        <a class="btn btn-info" href=<?php echo "update.php/?Contact_no=".$row['Contact_no']?>>Update</a>
      </td>
      </tr>      
      <?php
      }
?>
    </tbody>
  </table>
</div>


</body>
</html>