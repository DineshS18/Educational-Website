<?php
session_start();
if (isset($_SESSION["user"])) {
	header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equip="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="style4.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
}
		body{
			display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	background-image: linear-gradient(rgba(0, 0, 50, 0.8),rgba(0, 0, 50, 0.8)),url(home.jpeg);
	background-position: center;
	background-size: cover;
	position: relative;
	padding:50px;
}
.container{
	max-width: 600px;
	margin:0 auto;
	padding: 50px;
	box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.form-group{
	margin-bottom: 30px;
}
.container
{
	position: relative;
	width: 500px;
	height: 780px;
	background: #1c1c1c;
	border-radius: 10px;
	overflow: hidden;
}
.container p{
	color: #fff;
}
.container form h2{
	text-align: center;
	color: #fff;
}
	</style>
}
</head>
<body>
	<div class="container">
		<?php
		if (isset($_POST["submit"])) {
			$Name = $_POST["Name"];
			$Age = $_POST["Age"];
			$MobileNo = $_POST["MobileNo"];
			$Email = $_POST["Email"];
			$Password = $_POST["Password"];
			$PasswordHash = password_hash($Password, PASSWORD_DEFAULT);
			$errors = array();
			if (empty($Name) OR empty($Age) OR empty($MobileNo) OR empty($Email) OR empty($Password)) {
				array_push($errors,"All fields are required");
			}
			if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
				array_push($errors,"Email is not valid");
			}
			if(strlen($Password)<6){
				array_push($errors,"Password must be atleast 6 characters long");
			}
			require_once "database.php";
			$sql = "SELECT * FROM user WHERE Email = '$Email'";
			$result = mysqli_query($conn, $sql);
			$rowCount = mysqli_num_rows($result);
			if($rowCount>0)
			{
				array_push($errors,"Email already registered");
			}
			if (count($errors)>0){
				foreach ($errors as $error) {
					echo "<div class='alert alert-danger'>$error</div>";
				}
			}else {
				require_once "database.php";
				$sql = "INSERT INTO user (Name, Age, MobileNo, Email, Password) VALUES ( ?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				$prepareStmt = mysqli_stmt_prepare($stmt,$sql);
				if($prepareStmt) {
					mysqli_stmt_bind_param($stmt,"sssss",$Name,$Age,$MobileNo,$Email,$PasswordHash);
					mysqli_stmt_execute($stmt);
					echo "<div class='alert alert-success'>You are register successfully.</div>";
				}else {
					die("Somthing went wrong");
				}
			}
		}
		?>
		<form action="register.php" method="post">
			<h2>Register</h2>
			<div class="form-group">
				<input type="text" class="form-control" name="Name" placeholder="Name:">
			</div>
			<div class="form-group">
				<input type="number" class="form-control" name="Age" placeholder="Age:">
			</div>
			<div class="form-group">
				<input type="tel" class="form-control" name="MobileNo" pattern="[0-9]{10}" placeholder="MobileNo:">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="Email" placeholder="Email:">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="Password" placeholder="Password:">
			</div>
			<div class="form-btn">
				<input type="submit" class="btn btn-primary" value="Register" name="submit">
			</div>
		</form>
		<br>
		<div><p>Already Registered: <a href="login.php">Login Here</a></p></div>
	</div>
</body>
</html>