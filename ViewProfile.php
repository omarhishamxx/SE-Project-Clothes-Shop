<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home</title>
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
  <link rel="stylesheet" href="css/StyleSett.css">
</head>
<body>

<!--Main Navigation-->
<header>
<!--Navbar-->
<?php include 'nav.php'?>
<!--/.Navbar-->
<!--Mask-->
   <div class="header">

    <h2><font size=4>Your Profile</font></h2>
  </div>  
  <?php


echo"</h1></h1><br>";
echo"<form action='' method='post'>";

include_once "UserClass.php";
if(!empty($_SESSION['UserID'])) {
    $UserObject=new User($_SESSION["UserID"]);
    if(isset($_POST['submit']))
    {
        include_once "UserClass.php";
$UserName=$_POST['UserName'];
$Email=$_POST['Email'];
//$Password=$_POST['password'];
$currentpassword=$_POST['currentpassword'];
$currentpassword=md5($currentpassword);
$UserID=$_SESSION['UserID'];
if($currentpassword==$UserObject->Password)
{
$UserObject=User::UpdateUserSettings($UserName,$currentpassword,$Email,$UserID);
header('location: ProfileSettings.php');
} else echo "<div class='error'>Wrong password</div>";}
if(isset($_POST['Deleteacc']))
    {
      $currentpassword=$_POST['currentpassword'];
$currentpassword=md5($currentpassword);
      if($currentpassword==$UserObject->Password)
{
      header('location: delete.php');
    }
    else  echo "<div class='error'>Wrong password</div>";
    }

//$dec=$UserObject->Password;
//$xPassword=md5($dec);

echo "<label><font color='white'>User name:   ".$UserObject->UserName."</label>
 <br>

  <label><font color='white'>Type:   ".$UserObject->UserType_obj->UserTypeName."</label><br>


     <label><font color='white'>Email:   ".$UserObject->Email."</label><br>
     <center><a href='index.php'  class='btn'>Back</a></form>";

}
?>






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

