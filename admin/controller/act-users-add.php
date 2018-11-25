<?php

include ('../include/config.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$fullname = $_POST['fullname'];
$otorisasi = $_POST['otorisasi'];

$con->query("INSERT INTO users VALUES ('$username', '$password', '$fullname', '$otorisasi')");

if ($con->affected_rows > 0){
    echo "<script>alert('User telah berhasil disimpan');window.location='../index.php?page=users'</script>";
}else{
    echo "<script>alert('User telah gagal disimpan');window.location='../index.php?page=users'</script>";
}