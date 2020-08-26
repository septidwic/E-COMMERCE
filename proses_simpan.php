<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama_brg = $_POST['nama_brg'];
$spek = $_POST['spek'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$kategori = $_POST['kategori'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

//Rename nama_brg fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat penyimpanan fotonya
$path = "gambar/".$fotobaru;

// Proses upload
if (move_uploaded_file($tmp, $path)) { // Cek gambar berhasil diupload atau tidak
	//Proses simpan database
	$query = "INSERT INTO barang VALUES ('','".$nama_brg."', '".$spek."', '".$stok."', 
	'".$harga."', '".$diskon."', '".$kategori."', '".$fotobaru."')";
	
	$sql = mysqli_query($koneksi, $query); //Eksekusi/ Jalankan query dari variabel $query

	if ($sql) { // cek jika proses simpan ke database sukses atau tidak
		// jika sukses, lakukan :
		echo '<script language="javascript" type="text/javascript">
		alert("Data Tersimpan !");</script>';
		echo "<meta http-equiv='refresh' content='0; url =data_barang.php'>";
	}else{
		// Jika gagal Lakukan :
		echo '<script language="javascript" type="text/javascript">
		alert("Terjadi Kesalahan saat mencoba untuk menyimpan data ke database !")
		;</script>';
		echo "<meta http-equiv='refresh' content='0; url =data_barang.php'>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo '<script language="javascript" type="text/javascript">
		alert("Gambar gagal untuk diupload !");</script>';
		echo "<meta http-equiv='refresh' content='0; url =data_barang.php'>";
}
?>