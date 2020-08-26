<h2>DATA REGISTER </h2>
<br>
<h2>DATA TERSIMPAN, <a href="login.php">SILAHKAN LOGIN</a> </h2>
<table border="1">
    <tr><th>NO</th><th>namauser</th><th>passuser</th><th>email</th><th>phone</th></tr>
    <?php
    include 'koneksi.php';
    $register = mysqli_query($koneksi, "SELECT * from users");
    $no=1;
    foreach ($register as $row){
            echo "<tr>
            <td>$no</td>
            <td>".$row['namauser']."</td>
            <td>".$row['passuser']."</td>
            <td>".$row['email']."</td>
			<td>".$row['phone']."</td>
            </tr>";
        $no++;
    }
    ?>
</table>