<?php
session_start();
if (isset($_SESSION["user"])) {
	header("Location: main.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
	width: 450px;
	height: 430px;
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
</head>
<body>
	<div class="container">
		<?php
		if(isset($_POST["login"])) {
			$Email = $_POST["Email"];
			$Password = $_POST["Password"];
			require_once "database.php";
			$sql = "SELECT * FROM user WHERE Email = '$Email'";
			$result = mysqli_query($conn, $sql);
			$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if ($user) {
				if (Password_verify($Password, $user["Password"])) {
					session_start();
					$_SESSION["user"] = "yes";
					header("Location: main.php");
					die();
				}else{
					echo "<div class='alert alert-danger'>Password does not match</div>";
				}
			}else{
				echo "<div class='alert alert-danger'>Email does not match</div>";
			}
		}
		?>
		<form action="login.php" method="post">
			<h2>Login</h2>
			<div class="form-group">
				<input type="Email" placeholder="Enter Email:" name="Email" class="form-control">
			</div>
			<div  class="form-group">
				<input type="Password" placeholder="Enter Password:" name="Password" class="form-control">
			</div>
			<div class="form-btn">
				<input type="submit" value="Login" name="login" class="btn btn-primary">
			</div>
		</form>
		<br>
		<div><p>Not Register Yet: <a href="register.php">Register Here</a></p></div>
	</div>
</body>
</html>