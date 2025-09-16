<?php session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['newuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $uid=$_SESSION['newuid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];    
    $email=$_POST['emailid'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $county=$_POST['county'];
    $country=$_POST['country'];    
    $phone=$_POST['phone'];
    
    $query=mysqli_query($con, "update users set firstname='$fname', lastname='$lname',age='$age',city='$city',county='$county',country='$country',phone='$phone' where uid='$uid'");
    if ($query) {
  
    echo "<script>alert('Your profile has been updated.');</script>"; 
  }
  else
    {
     echo "<script>alert('Something went wrong. Please try again.');</script>"; 
    }

}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> User Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
<style type="text/css">
  .custom{
  margin-top:2%;
}

  body {
  padding: 25px;
  background-color: white;
  color: black;
}

.dark-mode {
  background-color: black;
  color: white;
}
</style>
  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

      <h1 class="mt-4 mb-3">User Profile</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">User Profile</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">
<form  method="post">
  <?php
$uid=$_SESSION['newuid'];
$ret=mysqli_query($con,"select * from users where uid='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>  
          <div class="row">
            
            <div class="col-2">Username</div>
 <div class="col-6">
  <input type="text" class="form-control" name="username" readonly="true" value="<?php  echo $row['username'];?>">
 </div>
          </div>



<div class="row custom">
<div class="col-2 col-offset-1">First Name</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name="fname" required="true" value="<?php  echo $row['firstname'];?>">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Last Name</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name="lname" required="true" value="<?php  echo $row['lastname'];?>">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Email Id</div>
<div class="col-6 col-offset-1">
<input type="email" class="form-control" name="emailid" readonly="true" value="<?php  echo $row['email'];?>">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Age</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name="age" required="true" value="<?php  echo $row['age'];?>">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">City</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name="city" required="true" value="<?php  echo $row['city'];?>">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">County</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name="county" required="true" value="<?php  echo $row['county'];?>">
</div>
</div>
<div class="row custom">
<div class="col-2 col-offset-1">Country</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name="country" required="true" value="<?php  echo $row['country'];?>">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Phone</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name="phone" required="true" value="<?php  echo $row['phone'];?>">
</div>
</div>
<div class="row custom">
<div class="col-2 col-offset-1">Registraton Date</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" name=""  value="<?php  echo $row['regDate'];?>"  readonly="true">
</div>
</div>
<?php } ?>
<div class="row custom">

<div class="form-group col-md-6" align="center">
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Update now</button>
              </div>
</div>
          </div>

</form>
        </div>
      </div>
      <!-- /.row -->
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php } ?>