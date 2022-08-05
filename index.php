<?php
session_start();
	include_once "UserClass.php";

if(!empty($_SESSION['UserID'])) {
		$UserObject=new User($_SESSION["UserID"]);
	echo "<h1>Welcome ".$UserObject->UserName."</h1>";
	for ($i=0;$i<count($UserObject->UserType_obj->ArrayOfPages);$i++)
	{
		echo "<br><a href=".$UserObject->UserType_obj->ArrayOfPages[$i]->Linkaddress.">".$UserObject->UserType_obj->ArrayOfPages[$i]->FreindlyName."</a>";
	}
}
else{
	$con = mysqli_connect("localhost", "root", "","lab02");
	$sql="	SELECT pages.FreindlyName, pages.Linkaddress
			from pages , usertype_pages where pages.ID=usertype_pages.PageID
			and usertype_pages.UserTypeID=4";
	$result = mysqli_query($con,$sql);
	echo "<h1>Welcome</h1>";
	while($row=mysqli_fetch_array($result)){
		echo "<br><a href=".$row['Linkaddress'].">".$row['FreindlyName']."</a>";
	}
}
?>
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
  <link rel="stylesheet" href="css/style7.css">
</head>
<body>
<!--Main Navigation-->
<header>
<!--Navbar-->
<?php include 'nav.php'?>

<!--/.Navbar-->
<!--Mask-->
  <div class="header">
    <h2><font size=4>Home Page</font></h2>
  </div>
  
  <div class="content">
    <?php if (isset($_SESSION['success'])): ?>
      <div class="error success">
         <h3>
            <?php
               echo $_SESSION['success'];
               unset($_SESSION['success']);
            ?>
          </h3> 
      </div>
    <?php endif ?>


  </div>

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
