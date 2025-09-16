<?php session_start();
include_once('includes/config.php');
if(strlen( $_SESSION["aid"])==0)
{   
header('location:logout.php');
} else {

// Code for Forever deletionparmdel
if($_GET['action']=='del' && $_GET['rid'])
{
    $id=intval($_GET['rid']);
    $query=mysqli_query($con,"delete from  users  where uid='$id'");
echo "<script>alert('User details deleted.');</script>";
echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
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
        <title>Manage Users</title>
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
                        <h1 class="mt-4">Manage Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Users</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Users Details
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                           <th>#</th>
                                                                <th> Username</th>
                                                                <th> Name</th>
                                                                <th>Email</th>
                                                                  <th>Registration Date</th>
                                                                <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                      <th>#</th>
                                                                <th> Username</th>
                                                                <th> Name</th>
                                                                <th>Email</th>
                                                                  <th>Registration Date</th>
                                                                <th>Action</th>
                                        </tr>
                                    </tfoot>
                                                        <tbody>
<?php 
$query=mysqli_query($con,"Select * from  users");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>

 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['username']);?></td>
<td><?php echo htmlentities($row['firstname']);?> <?php echo htmlentities($row['lastname']);?></td>
<td><?php echo htmlentities($row['email']);?></td>
<td><?php echo htmlentities($row['regDate']);?></td>
<td><a href="edit-users.php?said=<?php echo htmlentities($row['uid']);?>" class="btn btn-primary">Edit</a> 
    &nbsp;<a href="manage-users.php?rid=<?php echo htmlentities($row['uid']);?>&&action=del" class="btn btn-danger" onclick="return confirm('Do you really want to delete ?')"> Delete</a> </td>
</tr>
<?php
$cnt++;
 } ?>
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
