<?php
	require_once("functions.php");
	if(isset($_POST['btnlogin'])){
		$username=check_input($_POST['txtUserName']);
		$password=check_input($_POST['txtPassword']);
		$result=ValidateUser($username,$password);
		if(empty($result)){
			if(CheckUser($username,$password)){
				session_start();
				$_SESSION['Login']=true;
				header("Location: index.php");
			}else{
				echo 'Username/password is invalid.';
			}
		}else{
			echo $result;
		}
	}
?>
<!doctype html>
<html>
	<head>
		<title>Login Form</title>
	</head>
	<body>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
			User Name:<input type="text" name="txtUserName" required />
			<br />
			Password:<input type="password" name="txtPassword" required />
			<br />
			<input type="submit" Value="Login" name="btnlogin" />
			<input type="reset" />
		</form>
	</body>
</html>