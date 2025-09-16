
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="font-size:24px; font-weight:bold;">Notice Board</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
     
                 <li class="nav-item">
              <a class="nav-link" href="index.php">Posts</a>
            </li>
            <?php if (strlen($_SESSION['newuid']==0)) {?>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
                  <li class="nav-item">
              <a class="nav-link" href="admin/">Admin</a>
            </li>
            </li><?php } ?>
           
            <?php if (strlen($_SESSION['newuid']>0)) {?>

    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Posts</a>
                        <div class="dropdown-menu">
                            <a href="add-post.php" class="dropdown-item">Add</a>
                            <a href="manage-post.php" class="dropdown-item">Manage</a>
                
                    </li>
       
         <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Account</a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="setting.php" class="dropdown-item">Change Password</a>
                          
                            <div class="dropdown-divider"></div>
                              <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>

     
       
          <?php } ?>


          </ul>

        </div>
      </div>
    </nav><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <p style="margin-top:3%;">
    <button onclick="myFunction()" class="btn btn-primary">Dark mode</button>
     <div  id="clock" style="font-family:'Hind'; font-size:50px; color:navy; ">>8:10:45</div>
  
    <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
  
            let currentTime = hour + ":" 
                + min + ":" + sec + am_pm;
  
            document.getElementById("clock")
                .innerHTML = currentTime;
        }
  
        showTime();
    </script>   </p>

