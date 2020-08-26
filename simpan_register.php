<?php
include 'koneksi.php';
if(isset($_POST['register'])){
// menyimpan data kedalam variabel
$namauser       = $_POST['namauser'];
$passuser       = $_POST['passuser'];
$email         	= $_POST['email'];
$phone       	= $_POST['phone'];
$vvvv = mysqli_query($koneksi,"select * from users where namauser='$namauser'");
//$vv_row = mysqli_num_rows($v);
//	if($vv_row>0){
//	}else{
// query SQL untuk insert data
mysqli_query($koneksi,"insert into users(namauser,passuser,email,phone)values('$namauser','$passuser','$email','$phone')");

// mengalihkan ke halaman tampil.php
//header("location:index.php");
header("location:tampil_register.php");
} 

?>