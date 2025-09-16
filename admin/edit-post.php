<?php session_start();
include_once('includes/config.php');
if(strlen( $_SESSION["aid"])==0)
{   
header('location:logout.php');
} else {

//For Edit Posts
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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Post</title>
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
                        <h1 class="mt-4">Edit Post</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Post</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
<?php
$pid=$_GET['pid'];
$query=mysqli_query($con,"select * from posts where postid='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>                            	
<form  method="post">                                
<div class="row">
<div class="col-2">Post Title</div>
<div class="col-6">     <input type="text" class="form-control" name="title" required="true" value="<?php echo htmlentities($row['title']);?>"></div>
</div>

<div class="row" style="margin-top:1%;">
<div class="col-2">Category Description</div>
<div class="col-6"> <textarea type="text" class="form-control" name="content" required="true" rows="10"><?php echo htmlentities($row['content']);?></textarea></div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-2">Post Image</div>
<div class="col-6">      <?php if($row['image']==''):?>
 <img class="img-fluid rounded" src="../postimages/no-image.png" alt="<?php echo htmlentities($row['title']);?>" height="350">
<?php else: ?>
 <img class="img-fluid rounded" src="../postimages/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['title']);?>">
<?php endif; ?></div>
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
