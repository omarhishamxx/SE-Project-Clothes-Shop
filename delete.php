<?php
session_start();
if(!empty($_SESSION['UserID'])) {
	include_once "UserClass.php";
	

	$UserObject=new User($_SESSION["UserID"]);
		$USer=User::deleteUser($UserObject);
	if($USer==True)
	{
echo"test";
header('location: signout.php');
}

}
?>