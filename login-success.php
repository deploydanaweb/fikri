<?php
session_start();
if (!isset($_SESSION['username'])) {header("Location: login.php");
}
if (isset($_POST['submit'])) {
header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/fontawesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style-login.css">
<title>SUCCESS</title>
</head>
<body>
<div class="container-logout">
<form action=""method="POST"class="login-email">
<p class="login-text"style="font-size: 2rem; font-weight:800;"> Selamat Datang,
<?php echo $_SESSION['username'] ?> ! </p></br>
<div class="input-group"><button name="submit"class="btn">Logout</button></div>
</form>
</div>
</body>
</html>