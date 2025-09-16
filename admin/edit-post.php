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
$posttitle=$_POST['title'];
$postdetails=$_POST['content'];
$pid=$_GET['pid'];
$query=mysqli_query($con,"update posts set title='$posttitle',content='$postdetails' where postid='$pid'");
if($query)
{

echo "<script>alert('Post updated successfully.');</script>";
echo "<script>window.location.href ='manage-posts.php'</script>";
}
else{
echo "<script>alert('Something went wrong. Please try again.');</script>"; 
} 

}



?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Newsportal | Edit Posts</title>

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
                                    <h4 class="page-title">Edit Posts</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts </a>
                                        </li>
                                        <li class="active">
                                            Edit Posts
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
                                    <h4 class="m-t-0 header-title"><b>Edit Posts </b></h4>
                                    <hr />
                        		




<?php
$pid=$_GET['pid'];
$query=mysqli_query($con,"select * from posts where postid='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>



                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" method="post">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Post Title</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" name="title" required="true" value="<?php echo htmlentities($row['title']);?>">
	                                                </div>
	                                            </div>
	                                     
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Post Content</label>
	                                                <div class="col-md-10">
 <textarea type="text" class="form-control" name="content" required="true" rows="10"><?php echo htmlentities($row['content']);?></textarea>
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Post Image</label>
                                                    <div class="col-md-10">
 <?php if($row['image']==''):?>
 <img class="img-fluid rounded" src="../postimages/no-image.png" alt="<?php echo htmlentities($row['title']);?>" height="350">
<?php else: ?>
 <img class="img-fluid rounded" src="../postimages/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['title']);?>">
<?php endif; ?>
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