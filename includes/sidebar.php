  <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
              </form>
              </div>
            </div>
          </div>

    

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Recent News</h5>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query11=mysqli_query($con,"select postid,title from posts limit 10");
while ($row11=mysqli_fetch_array($query11)) {

?>

  <li>
                      <a href="post-details.php?pid=<?php echo ($row11['postid'])?>"><?php echo ($row11['title']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>



        </div>
