<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php">
      <img src="images/bhc-logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
     BeeBlogspot.com
    </a>
    <div class="d-flex">
      <?php 
        if(isset($_SESSION["user"])){
          ?>
          <a href="dashboard.php" class="nav-link text-white">Dashboard</a>
          <a href="logout.php" class="nav-link text-danger">Logout</a>
          <?php
        }else{
          ?>
           <a href="login.php" class="nav-link text-white">Login</a>
           <a href="register.php" class="nav-link text-white">Register</a>
          <?php
        }
      ?>
    </div>
  </div>
</nav>