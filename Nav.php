<nav class="navbar navbar-expand-lg navbar-light  bg-light">
 <a class="navbar-brand" href="#">    <?php 
    include_once "UserClass.php";

if(!empty($_SESSION['UserID'])) {

    $UserObject=new User($_SESSION["UserID"]);}
  //  echo "<h1>Welcome ".$UserObject->UserName."</h1>";
 if (isset($_SESSION["UserID"])): ?>
       <p><font color="purple">Welcome <strong><?php echo $UserObject->UserName; ?> </strong></font></p>
       
    <?php endif ?></a>


    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewprofile.php">Start Order</a>
        </li>
      
        <?php  if(!empty($_SESSION['UserID'])) {

        echo "<!-- Dropdown -->
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true'
            aria-expanded='false'>User Settings</a>
          <div class='dropdown-menu dropdown-primary' aria-labelledby='navbarDropdownMenuLink'>
            <a class='dropdown-item' href='viewprofile.php'>View Profile</a>
            <a class='dropdown-item' href='profilesettings.php'>Edit Profile</a>
            <a class='dropdown-item' href='#'>Later will add</a>
          </div>
        </li>";
    }?>

      </ul>
      <!-- Links -->

     
        <div class="md-form my-0">
   <?php  if(!empty($_SESSION['UserID'])) {
          echo "<a class='btn' href='signout.php' >Signout</a>";
      }
      else {
        echo "<a class='btn' href='login.php' >Login</a>";
      } ?>
        </li>
        </div>
      
    </div>
    <!-- Collapsible content -->

  </div>
<?php if (isset($_SESSION["username"])): ?><p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>     <?php endif ?>
</nav>
</header>


