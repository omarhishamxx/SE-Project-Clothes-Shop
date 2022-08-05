

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


<!--Main Navigation-->
<header>
<!--Navbar-->
<body>
<!--/.Navbar-->

<!--Mask-->
  <div class="header">
    <h2><font size=4>Create your account to start shopping</font></h2>
  </div>
  <form action="" method="post">
    <!--display vladilatioin errors here-->
 <?php
include_once "UserClass.php";


if(isset($_POST['Submit'])){ //check if form was submitted

	$Password1=$_POST['password_1'];
	$Password2=$_POST['password_2'];

	$UserName=$_POST['UserName'];
	$Password=$_POST['password_1'];
	$Email=$_POST['Email'];
if ($Password1 != $Password2){
        	echo "<div class='error'>Password doesn't match</div>";
        } 
        else{

	
	User::InsertinDB_Static($UserName,$Password1,$Email);
		header("Location:index.php");
	
	
}
}
?>
  <div class="input-group">
    <label><font color="white">Username</font></label>
    <input type="text" placeholder="Username" name="UserName" required > 
    </div>

    
  <div class="input-group">
        <label><font color="white">Email</font></label>
    <input type="text" placeholder="Email"  name="Email"  required>
    </div>
   
  <div class="input-group">
        <label><font color="white">Password</font></label>
    <input type="password" placeholder="Password" name="password_1" required>
    </div>


  <div class="input-group">
        <label><font color="white">Confirm Password</font></label>
    <input type="password" placeholder="Confirm Password" name="password_2" required>
    </div>

  <div class="input-group">
    <button type="Submit" name="Submit" class="btn">Register</button>
  </div>

  <p>
    <font color="white">  Already a member?</font> <a href="login.php">Sign in</a>
  </p>

 </form>
 </body>
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