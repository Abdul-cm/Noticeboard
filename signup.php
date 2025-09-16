<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
    $username=$_POST['username'];
    $password=$_POST['inputpassword'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];    
    $email=$_POST['emailid'];
    $age=$_POST['age'];

    $city=$_POST['city'];
    $county=$_POST['county'];
    $country=$_POST['country'];    
    $phone=$_POST['phone'];
    
    $ret=mysqli_query($con, "select email,username from users where email='$email' || username='$username'");
    $result=mysqli_fetch_array($ret);
    if($result>0){

echo "<script>alert('This email or Username already associated with another account.');</script>";
    }
    else{
    $query=mysqli_query($con, "insert into users(username, password, firstname, lastname, email,age,city,county,country,phone) value('$username', '$password','$fname', '$lname', '$email','$age','$city','$county','$country','$phone' )");
    if ($query) {
  
    echo "<script>alert('You have successfully registered.');</script>"; 
  }
  else
    {
     echo "<script>alert('Something went wrong. Please try again.');</script>"; 
    }
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

    <title>Sign up</title>

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

      <h1 class="mt-4 mb-3">User Signup</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Signup</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">
<form  method="post">
          <div class="row">
            
            <div class="col-2">Username</div>
 <div class="col-6">
  <input type="text" class="form-control" name="username" required="true" placeholder="Username">
 </div>
          </div>

<div class="row custom">
<div class="col-2 col-offset-1">Password</div>
<div class="col-6 col-offset-1">
<input type="password" class="form-control" name="inputpassword" required="true" placeholder="Password">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">First Name</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" pattern="[A-Za-z]+" title="letters only" name="fname" required="true" placeholder="First Name">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Last Name</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" pattern="[A-Za-z]+" title="letters only" name="lname" required="true" placeholder="Last Name">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Email Id</div>
<div class="col-6 col-offset-1">
<input type="email" class="form-control" name="emailid" required="true" placeholder="Email Id">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Age</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" pattern="[0-9]" title="Numeric characters only" name="age" required="true" placeholder="Age" maxlength="2">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">City</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" pattern="[A-Za-z]+" title="letters only" name="city" required="true" placeholder="City">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">County</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" pattern="[A-Za-z]+" title="letters only" name="county" required="true" placeholder="County">
</div>
</div>
<div class="row custom">
<div class="col-2 col-offset-1">Country</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" pattern="[A-Za-z]+" title="letters only" name="country" required="true" placeholder="Country">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Phone</div>
<div class="col-6 col-offset-1">
<input type="text" class="form-control" pattern="[0-9]+" title="only numbers" name="phone" required="true" placeholder="Phone">
</div>
</div>

<div class="row custom">

<div class="form-group col-md-6" align="center">
                <button type="submit" value="submit" name="submit" class="btn btn-primary">submit now</button>
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
