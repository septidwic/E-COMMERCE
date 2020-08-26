<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data kd_brg yang dikirim oleh form_ubah.php melalui URL
$kd_brg=$_GET['kd_brg'];

// Ambil Data Yang Dikirim Dari Form
$nama_brg = $_POST['nama_brg'];
$spek = $_POST['spek'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];
$kategori = $_POST['kategori'];

// Cek Apakah User Ingin Mengubah Fotonya Atau Tidak  
if(isset($_POST['ubah_foto'])){ // Jika user menceklist chekbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	// Rename nama_brg fotonya dengan menambahkan tanggal dan jam upload
	$fotobaru = date('dmYHis').$foto;

	// Set path folder tempat menyimpan fotonya
	$path = "gambar/".$fotobaru;

	// Proses Upload
	if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data barang berdasarkan kd-brg yang dikirim
		$query = "SELECT * FROM barang WHERE kd_brg='".$kd_brg."'";
		$sql = mysqli_query($koneksi, $query); //Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di dalam folder gambar
		if (is_file("gambar/".$data['foto'])) // Jika Foto ada
		unlink("gambar/".$data['foto']); // Hapus file foto sebelumnya yang ada di dalam folder gambar

		// Proses ubah data ke database
		$query = "UPDATE barang SET nama_brg='".$nama_brg."', spek='".$spek."', stok='".$stok."',
		harga='".$harga."', diskon='".$diskon."', kategori='".$kategori."', foto='".$fotobaru."'
		WHERE kd_brg='".$kd_brg."'";
		$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) { // Cek jika proses simpan ke database sukse atau tidak
			// Jika sukses, Lakukan :
		echo '<script language="javascript" type="text/javascript">
		alret("Data berhasil Di ubah !");</script>';
	echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
		}else{
			// Jika Gagal. Lakukan :
		echo '<script language="javascript" type="text/javascript">
		alert("Maaf Terjadi Kesalahan saat mencoba menyimpan data ke database !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
		}
	}else{
		// Jika gambar gagal diupload, lakukan :
		echo '<script language="javascript" type="text/javascript">
		alert("Gambar gagal di upload !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
	}
}else{// Jika User tidak mencheklist checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke database
	$query = "UPDATE barang SET nama_brg='".$nama_brg."', spek='".$spek."', stok='".$stok."',
		harga='".$harga."', diskon='".$diskon."', kategori='".$kategori."' WHERE kd_brg='".$kd_brg."'";
	$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

	if ($sql) { // Cek Jika proses simpan ke database sukses atau tidak
		//Jika sukses, Lakukan :
		echo '<script language="javascript" type="text/javascript">
		alert("Data berhasil diubah !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
	}else{
		//Jika gagal, Lakukan :
		echo '<script language="javascript" type="text/javascript">
		alert("Maaf TerjadiKesalahan Saat Mencoba Untuk Menyimpaan Data Ke Database !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=data_barang.php'>";
	}
}
?>