<?php
	session_start();
	include '../include/config.php';

	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	$r = $con->query("SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
	if ($r -> num_rows > 0){
		while ($rr = $r->fetch_array()){
			$_SESSION['username'] = $rr['username'];
			$_SESSION['fullname'] = $rr['fullname'];
			$_SESSION['otorisasi'] = $rr['otorisasi'];
		}
		header("location:../index.php");
	}else{
		$_SESSION['error'] = '<span style="color: red;"><em>Kombinasi username dan password salah</em></span><br>';
		header("location:../login.php");
	}
?>