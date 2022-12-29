<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'");

	if (mysqli_num_rows($login) == 0) {
	?>
		<script> 
    	alert("Username atau Sandi anda Salah!"); 
		</script>
	<?php
	} else {
		$_SESSION['tampil_data'] = 1;
		header("Location: tampil_data_aman.php");
	}
}
?>
<?php
if (isset($_GET['daftar_berhasil'])) {
	?>
	<script> 
     alert("Selamat Anda Berhasil Mendaftar . . . !"); 
	</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Aman</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
</head>

<link href="logo3.png" rel="shortcut icon">
<body style="background-image: url(bg.png);">
	<br>
	<br>
	<div style="width: 350px; margin: auto; padding: 20px;  height:250px;background-color: greenyellow; border: 2px solid white; border-radius: 1rem; ">
	<h3 style="color: black;"><a href="index.php">Login Kurang Aman <<</a> <br></h3>
	<form action="" method="post">
		<p>Username:</p>
		<input type="text" name="username">
		
		<p>Password:</p>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="submit" value="Login">
		<a href='daftar_aman.php'>Mendaftar</a>
	</form>
	
	</div>
</body>
</html>
