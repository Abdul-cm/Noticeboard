<?php session_start();
include_once('includes/config.php');
if(strlen( $_SESSION["aid"])==0)
{   
header('location:logout.php');
} else {

//Code for Deletion
if($_GET['pid'])
{
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"delete from posts where postid='$postid'");
if($query)
{

echo "<script>alert('Post deleted.');</script>";
echo "<script>window.location.href ='manage-posts.php'</script>";
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
        <title>Manage Posts</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
 <?php include_once('includes/header.php');?>
        <div id="layoutSidenav">
       <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Posts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Posts</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Post Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                           <th>Title</th>
<th>Creation Date</th>
<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>#</th>
                                        <th>Title</th>
<th>Creation Date</th>
<th>Action</th>
                                        </tr>
                                    </tfoot>
                                                        <tbody>
<?php

$query=mysqli_query($con,"select * from posts");
$rowcount=mysqli_num_rows($query);
$cnt=1;
if($rowcount==0)
{
?>
<tr>

<td colspan="4" align="center"><h3 style="color:red">No record found</h3></td>
</tr>
<?php 
} else {
while($row=mysqli_fetch_array($query))
{
?>

 <tr>
    <td><?php echo $cnt;?></td>
<td><?php echo ($row['title']);?></td>
<td width="200"><?php echo htmlentities($row['created'])?></td>
<td width="200"><a href="edit-post.php?pid=<?php echo htmlentities($row['postid']);?>" class="btn btn-primary">Edit</a>
    &nbsp;
    <a href="manage-posts.php?pid=<?php echo htmlentities($row['postid']);?>&&action=del" onclick="return confirm('Do you really want to delete ?')" class="btn btn-danger"> Delete</a> </td>
 </tr>
<?php $cnt++;} }?>
</tbody>
                                                  
                                                    </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include_once('includes/footer.php');?>
                </footer>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
