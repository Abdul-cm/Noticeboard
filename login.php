<?php session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['login']))
  {
    $emailus=$_POST['emailus'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select uid from users where  (email='$emailus' || username='$emailus') && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['newuid']=$ret['uid'];
     header('location:profile.php');
    }
    else{
    
    echo "<script>alert('Invalid Details.');</script>"; 
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

    <title> Login</title>

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

      <h1 class="mt-4 mb-3">User Login</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Login</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">
<form  method="post" name="login">
          <div class="row">
            
            <div class="col-2">Username</div>
 <div class="col-6">
  <input type="text" class="form-control" name="emailus" placeholder="Registered Email or Username" required="true">
 </div>
          </div>

<div class="row custom">
<div class="col-2 col-offset-1">Password</div>
<div class="col-6 col-offset-1">
<input type="password" class="form-control" name="password" required="true" placeholder="Password">
</div>
</div>


<div class="row custom">

<div class="form-group col-md-6" align="center">
                <button type="submit" value="submit" name="login" class="btn btn-primary">Login</button>
              </div>
              <hr color="#000" />
              <div class="form-group col-md-8" align="center">
               Not Registered yet |  <a href="signup.php">Signup Here</a>
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
