<?php
	include 'login.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($_POST['username']) || empty($_POST['password'])){
		$sql = mysqli_query($connect, "SELECT*FROM user WHERE username = '$username' AND password = '$password'");
		$result = mysqli_num_rows($sql);
		if($result){
			echo "Selamat Datang Admin";
		}else{
			echo "Username dan Password Salah";
		}
	}else{
		echo "Email dan Passwors anda kosong, silahkan diisi.";
	}
?>