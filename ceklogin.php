<?php 

// menghubungkan dengan koneksi
include 'dbkoneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM loginpengguna WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ddataukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:registrasipeserta.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>