<?php 
session_start();
error_reporting(0);
include('includes/config.php');


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Post Details</title>

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


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
  
          <!-- Blog Post -->
<?php
$pid=intval($_GET['pid']);
$currenturl="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
 $query=mysqli_query($con,"select  * from posts left join users on users.uid=posts.uid   where posts.postid='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo ($row['title']);?></h2>
<!--Author-->
  <?php if($row['uid']==''):?>
     <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff">Anonymus</a>
    <?php else: ?>
 <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['firstname']." ".$row['lastname']);?></a>
<?php endif;?><br />
<strong>Posted on:</strong> <?php echo htmlentities($row['created']);?>
                <hr />
            <?php if($row['image']==''):?>
 <img class="img-fluid rounded" src="postimages/no-image.png" alt="<?php echo htmlentities($row['title']);?>" height="350">
<?php else: ?>
 <img class="img-fluid rounded" src="postimages/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['title']);?>" width="100%">
<?php endif; ?>
  <hr />
              <p class="card-text"><?php 
$pt=$row['content'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
       

      

     

        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->
<!---Comment Section --->


    </div>

  
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
