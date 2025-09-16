<?php session_start();
include_once('includes/config.php');
if(strlen( $_SESSION["aid"])==0)
{   
header('location:logout.php');
} else {

if(isset($_POST['submit']))
{
$aid=intval($_GET['said']);
$fname=$_POST['fname'];
    $lname=$_POST['lname'];    
    $email=$_POST['emailid'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $county=$_POST['county'];
    $country=$_POST['country'];    
    $phone=$_POST['phone'];
$query=mysqli_query($con,"update users set firstname='$fname', lastname='$lname',age='$age',city='$city',county='$county',country='$country',phone='$phone'  where uid='$aid'");
if($query)
{
echo "<script>alert('Users detail has been updated.');</script>";
echo "<script>window.location.href ='manage-users.php'</script>";
}
else{
echo "<script>alert('Something went wrong . Please try again.');</script>";
} 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit User</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
   <?php include_once('includes/header.php');?>
        <div id="layoutSidenav">
   <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
<?php 
$aid=intval($_GET['said']);
$query=mysqli_query($con,"Select * from  users where uid='$aid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                            	
<form  method="post">                                
<div class="row">
<div class="col-2">Username</div>
<div class="col-6"> <input type="text" class="form-control" name="username" readonly="true" value="<?php  echo $row['username'];?>"></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">First Name</div>
<div class="col-6">           <input type="text" class="form-control" name="fname" required="true" value="<?php  echo $row['firstname'];?>"></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">Last Name</div>
<div class="col-6">  <input type="text" class="form-control" name="lname" required="true" value="<?php  echo $row['lastname'];?>"></div>
</div>


<div class="row" style="margin-top:1%">
<div class="col-2">Email Id</div>
<div class="col-6">  <input type="email" class="form-control" name="emailid" readonly="true" value="<?php  echo $row['email'];?>"></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">Age</div>
<div class="col-6">   <input type="text" class="form-control" name="age" required="true" value="<?php  echo $row['age'];?>"></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">City</div>
<div class="col-6">    <input type="text" class="form-control" name="city" required="true" value="<?php  echo $row['city'];?>"></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">County</div>
<div class="col-6">          <input type="text" class="form-control" name="county" required="true" value="<?php  echo $row['county'];?>"></div>
</div>



<div class="row" style="margin-top:1%">
<div class="col-2">Country</div>
<div class="col-6">  <input type="text" class="form-control" name="country" required="true" value="<?php  echo $row['country'];?>"></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">Phone</div>
<div class="col-6">  <input type="text" class="form-control" name="phone" required="true" value="<?php  echo $row['phone'];?>"></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">Registraton Date</div>
<div class="col-6">  <input type="text" class="form-control" name=""  value="<?php  echo $row['regDate'];?>"  readonly="true"></div>
</div>

<div class="row" style="margin-top:1%"><div class="col-4"></div>
<div class="col-4"><button type="submit" name="submit" class="btn btn-primary">Update</button></div>
</div>

</form>
<?php } ?>
                            </div>
                        </div>
                    </div>
                </main>
          <?php include_once('includes/footer.php');?>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php } ?>
