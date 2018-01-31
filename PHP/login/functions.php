<?php
	

	
	function check_input($value){
		$value=trim($value); //remove the unwanted spaces
		$value=stripslashes($value); //remove the slashes
		$value=htmlspecialchars($value); //convert tags into special character format like from  < tag to < 
		return $value;
	}
			
	function ValidateUser($username,$password){
		//validate the user & password
		if(empty($username)){
			return "Username is empty.";
		}else if(empty($password)){
			return "Password is empty";
		}
	}
	function CheckUser($usr,$pwd){
		require_once("db.php"); //Include the Database Login and other Details
		//Connect to database and verify the data
		$conn=new mysqli($server,$username,$password,$db);
		
		if($conn->connect_error){
			die("Error:".$conn->connect_error);
		}
		
		$SelectQuery="SELECT id FROM users WHERE username='".$usr."' and password='".$pwd."'";
		$result=$conn->query($SelectQuery);

		if(!empty($result) && $result->num_rows>0){
			$row=$result->fetch_assoc();
			if($row['id']>0){
				return true;
			}
		}
		else 
			return false;
	}
	
	
	

?>