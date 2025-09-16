<?php session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['newuid']==0)) {
  header('location:logout.php');
  } else{

if($_GET['pid'])
{
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"delete from posts where postid='$postid'");
if($query)
{

echo "<script>alert('Post deleted.');</script>";
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

    <title>Manage Posts</title>

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

      <h1 class="mt-4 mb-3">Add Posts</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Add Posts</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">
<table class="table table-colored table-centered table-inverse m-0">
   

<thead>
<tr>
                                           
<th>Title</th>
<th>Creation Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
$uid=$_SESSION['newuid'];
$query=mysqli_query($con,"select * from posts where uid='$uid'");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
<tr>
<?php 
} else {
while($row=mysqli_fetch_array($query))
{
?>
 <tr>
<td><?php echo ($row['title']);?></td>
<td width="200"><?php echo htmlentities($row['created'])?></td>
<td width="200"><a href="edit-post.php?pid=<?php echo htmlentities($row['postid']);?>" class="btn btn-primary">Edit</a>
    &nbsp;
    <a href="manage-post.php?pid=<?php echo htmlentities($row['postid']);?>&&action=del" onclick="return confirm('Do you really want to delete ?')" class="btn btn-danger"> Delete</a> </td>
 </tr>
<?php } }?>
                                               
                                            </tbody>
</table>
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