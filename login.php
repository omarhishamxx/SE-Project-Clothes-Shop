

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Registeration</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/products.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/syle5.css">
</head>
<body>

<!--Main Navigation-->
<header>
<!--Navbar-->

<!--/.Navbar-->

<!--Mask-->
  <div class="header">

    <h2><font size=4>Login</font></h2>
  </div>
  <form action="" method="post">


    <!--display vladilatioin errors here-->
 <?php
if(isset($_POST['submit'])){
  include_once "UserClass.php";
    
  $UserName=$_POST['UserName'];
  $Password=$_POST['Password'];

  $UserObject=User::login($UserName,$Password);
  if($UserObject!==NULL)
  {
    
    session_start();
    $_SESSION['UserID']=$UserObject->ID;

    header('Location:index.php');
  }
  else echo "<div class='error'>Wrong password or username</div>";
  
}
?>
  
  <div class="input-group">
<i class="far fa-user fa-lg"></i>
    <label><font color="white">Username</font></label>
    <input type="text" placeholder="Username" name="UserName" required="">
    </div>

    
 
  <div class="input-group">
    <i class="fas fa-lock"></i>
        <label><font color="white">Password</font></label>
    <input type="password" placeholder="Password"  name="Password" required="">
    </div>


  <div class="input-group">
    <button type="sumbit" name="submit" class="btn">Login</button>

  </div>

  <p>
    <font color="white">  Not yet a member?</font> <a href="signup.php">Sign up</a>
  </p>

 </form>
<!--/.Mask-->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main>

</main>
<!--Main layout-->

<!--Footer-->
<footer>

</footer>
<!--Footer-->



  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
