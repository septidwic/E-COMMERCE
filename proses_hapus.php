<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data kd_brg yang dikirim oleh index.php melalui URL
$kd_brg = $_GET['kd_brg'];

// Query untuk menampilkan data barang berdasarkan kd_brg yang dikirim
$query = "SELECT * FROM barang WHERE kd_brg='".$kd_brg."'";
$sql = mysqli_query($koneksi, $query); //Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di dalam folder gambar
if (is_file("gambar/".$data['foto'])) // Jika Foto ada
		unlink("gambar/".$data['foto']); // Hapus file foto sebelumnya yang ada di dalam folder gambar

// Query untuk menghapus data barang berdasarkan kd_brg yang dikirim
$query2 = "DELETE FROM barang WHERE kd_brg='".$kd_brg."'";
$sql2 = mysqli_query($koneksi, $query2); //Eksekusi/Jalankan query dari variabel $query

if ($sql2) { // Cek jika proses simpan ke database sukse atau tidak
	// Jika sukses, lakukan :
	header("location:data_barang.php"); // Redirect ke halaman index.php
}else{
	// Jika gagal, lakukan :
	echo '<script language="javascript" type="text/javascript">
		alret("Data Gagal Dihapus !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
  }
?>