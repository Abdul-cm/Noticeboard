<?php session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['newuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$userid=$_SESSION['newuid'];
$cpassword=$_POST['currentpassword'];
$newpassword=$_POST['newpassword'];
$query=mysqli_query($con,"select uid from users where uid='$userid' and   password='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($con,"update users set password='$newpassword' where uid='$userid'");

echo "<script>alert('Your password successully changed.');</script>";
} else {


echo "<script>alert('Your current password is wrong.');</script>"; 
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

    <title> Change Password</title>

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
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

      <h1 class="mt-4 mb-3">Change Password</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Change Password</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">
<form  method="post" name="changepassword" onsubmit="return checkpass();">
   
          <div class="row">
            
            <div class="col-2">Current Password</div>
 <div class="col-6">
  <input type="password" class="form-control" id="currentpassword" name="currentpassword" value="" required="true">
 </div>
          </div>



<div class="row custom">
<div class="col-2 col-offset-1">New Password</div>
<div class="col-6 col-offset-1">
<input type="password" class="form-control" id="newpassword" name="newpassword" value="" required="true">
</div>
</div>

<div class="row custom">
<div class="col-2 col-offset-1">Confirm Password</div>
<div class="col-6 col-offset-1">
<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value=""  required="true">
</div>
</div>



<div class="row custom">

<div class="form-group col-md-6" align="center">
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Change now</button>
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