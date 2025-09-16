<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
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

        <title>Newsportal |Edit Users Details</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Users Details</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Edit Users Details</a>
                                        </li>
                                        <li>
                                            <a href="#">Edit Users Details </a>
                                        </li>
                                        <li class="active">
                                            Edit Users Details
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Edit Users Details</b></h4>
                                    <hr />
                        		




<?php 
$aid=intval($_GET['said']);
$query=mysqli_query($con,"Select * from  users where uid='$aid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>




                        			<div class="row">
                        				<div class="col-md-6">
                        		<form class="form-horizontal" name="users" method="post">
	                                            <div class="form-group">
	                                   <label class="col-md-2 control-label">Username</label>
	                                   <div class="col-md-10">
	                                      <input type="text" class="form-control" name="username" readonly="true" value="<?php  echo $row['username'];?>">
	                                                </div>
	                                            </div>
	                                     
            <div class="form-group">
            <label class="col-md-2 control-label">First Name</label>
            <div class="col-md-10">
            <input type="text" class="form-control" name="fname" required="true" value="<?php  echo $row['firstname'];?>">
           </div>
           </div>
           <div class="form-group">
            <label class="col-md-2 control-label">Last Name</label>
            <div class="col-md-10">
            <input type="text" class="form-control" name="lname" required="true" value="<?php  echo $row['lastname'];?>">
           </div>
           </div>
           <div class="form-group">
            <label class="col-md-2 control-label">Email Id</label>
            <div class="col-md-10">
           <input type="email" class="form-control" name="emailid" readonly="true" value="<?php  echo $row['email'];?>">
           </div>
           </div>
           <div class="form-group">
            <label class="col-md-2 control-label">Age</label>
            <div class="col-md-10">
           <input type="text" class="form-control" name="age" required="true" value="<?php  echo $row['age'];?>">
           </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">City</label>
            <div class="col-md-10">
           <input type="text" class="form-control" name="city" required="true" value="<?php  echo $row['city'];?>">
           </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">County</label>
            <div class="col-md-10">
           <input type="text" class="form-control" name="county" required="true" value="<?php  echo $row['county'];?>">
           </div>
           </div>
            <div class="form-group">
            <label class="col-md-2 control-label">Country</label>
            <div class="col-md-10">
           <input type="text" class="form-control" name="country" required="true" value="<?php  echo $row['country'];?>">
           </div>
           </div>

             <div class="form-group">
            <label class="col-md-2 control-label">Phone</label>
            <div class="col-md-10">
            <input type="text" class="form-control" name="phone" required="true" value="<?php  echo $row['phone'];?>">
           </div>
           </div>

             <div class="form-group">
            <label class="col-md-2 control-label">Registraton Date</label>
            <div class="col-md-10">
           <input type="text" class="form-control" name=""  value="<?php  echo $row['regDate'];?>"  readonly="true">
           </div>
           </div>
<?php } ?>
        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Update
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>