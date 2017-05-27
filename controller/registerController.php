<?php 
session_start();

require_once("../model/Connection.php");
$obj_connect = new Connection();
require_once("../model/User.php");
$obj_user = new User();
if(!isset($_GET['action'])){
	
	$obj_connect->up();
	echo "test";
	$obj_connect->down();

} else if(isset($_GET['action'])){ 

	if($_GET['action'] == 'register'){
		
		$con = $obj_connect->up();
	
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, md5($_POST['password']));
		$konpassword = mysqli_real_escape_string($con, md5($_POST['conpassword']));

		if ($username<6 || $username>15) {
			header("location: ../register.php");
			$message = "wrong answer";
			echo "<script type='text/javascript'>alert('$message');</script>";

		}elseif($password<8 || $password>16){
			header("location: ../register.php");
			$message = "wrong answer";
			echo "<script type='text/javascript'>alert('$message');</script>";


		}else{
			if ($obj_user->insert_data($username, $password, $email, $con) == 1) {
				header("location: ../login.php");
			}else{
				header("location: ../signup.php");
			}
		}

    	$obj_connect->down();

	}
	else if($_GET['action'] == 'login'){
		$con = $obj_connect->up();
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, md5($_POST['password']));
		if ($obj_user->login($username, $password, $con) == 1) {
			header("Location: ../pendaftaraanToko.php");
		}else{
			header("Location: ../login.php");
		}
    	$obj_connect->down();
	}else if($_GET['action'] == 'logout'){
		session_destroy();
		header("location: ../index.php");
	}

}
?>