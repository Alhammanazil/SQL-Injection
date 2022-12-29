<?php

session_start();
if (!$_SESSION['tampil_data']) {
	header("Location: index.php");
}

include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM mhs");
if (isset($_GET['data_ditambahkan'])) {
	?>
	<script> 
     alert("Data Berhasil Ditambahkan"); 
	</script>
<?php
}
if (isset($_GET['data_dihapus'])) {
	?>
	<script> 
     alert("Data Berhasil Dihapus . . . !"); 
	</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kemanan Sistem</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="logo3.png" rel="shortcut icon">
</head>

<body style="background-image: url(bg.png);" >
	<h1 style="text-align: center">Anggota Kelompok 3</h1>
	<hr>

	<div style="width: 1000px; padding-top: 20px; height: 600px;background-color: gold; margin: auto; border: 2px white solid; border-radius: 1rem; " >
	<table width='90%'   border=1 style="margin: auto; text-align: center;  " >
	<tr>
	<th> <p><a href='index_aman.php'>Keluar</a></p> </th><th> </th> <th> <p><a href='tambah_data_aman.php'>Tambah Data</a></p> </th>
	</tr>
    <tr>
		
        <th>NIM</th> <th>NAMA MAHASISWA</th> <th>AKSI</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim_mhs']."</td>";
        echo "<td>".$user_data['nama_mhs']."</td>";
		echo "<td><hr><a href='detail_aman.php?id={$user_data['id_mhs']}&aman=1'>Lihat Profil</a> <hr> <a href='hapus.php?id={$user_data['id_mhs']}'>Hapus Data </a><hr> </td>";
        
		

                
    }
    ?>
    </table>
	</div>
	
	
</body>
</html>