<?php
	include 'config.php';
	error_reporting(0);
	session_start();
	if(isset($_SESSION['username'])) {
		header("Location: login.php");
	}

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$sql="SELECT * FROM table_mahasiswa WHERE email='$email' AND password='$password'";
	$result=mysqli_query($conn,$sql);
	if($result->num_rows > 0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] =$row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Email or Password is wrong. Please try again!')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viweport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style-login.css">
	<title>LOGIN</title>
</head>
<body>
	<div class="alert alert-warning" role="alert">
		<?php echo $_SESSION['error']?>
	</div>
	<div class="container">
	<form action=""method="POST"class="login-email">
		<p class="login-text" style="font-size: 2rem; font-weight:800;">Login</p>
		<div class="input-group"><input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"required> 
		</div>
		<div class="input-group"><input type="password" placeholder="Password" name="password" value="<?php echo$_POST['password']; ?>"required>
	    </div>
		<p class="login-password-text"><input type="checkbox" onclick="showHide()"> Remember Me</p></br>
		<div class="input-group"><button name="submit" class="btn">Login</button></div>
		<p class="login-register-text">Don't have an account yet?<a href="register.php">
		<strong>Register</strong></a></p>
	</form>
</div>
<script>function showHide() {
	var inputan = document.getElementById("password"); 
	if (inputan.type === "password") {
		inputan.type = "text";
	} else {
		inputan.type = "password";
	}
}
</body>
 </html>