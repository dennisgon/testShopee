<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

	class User{ 
		private $table = "User";

		public function insert_data($username, $password, $email, $con){

		    $result = 0;



		    $text = "INSERT INTO $this->table (username, password, email) VALUES('$username', '$password', '$email')";

		    $query = mysqli_query($con, $text);

		    if($query){

		        $result = 1;

		    }else{
		    	printf("Error: %s\n", mysqli_error($con));
		    }

		    return $result;

		}
		public function login($username, $password, $con){
			$text = "SELECT id, username FROM $this->table WHERE username = '$username' AND password = '$password' LIMIT 0,1";
			$query = mysqli_query($con, $text);

			if(mysqli_num_rows($query) == 1){

			    $row = mysqli_fetch_array($query,MYSQL_ASSOC);

			    $_SESSION['username'] = $username;

			    $_SESSION['id'] = $row['id'];

			    $result = 1;

			}
			return $result;

		}
	}

?>