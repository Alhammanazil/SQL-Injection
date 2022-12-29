<?php

include 'koneksi.php';

$id = intval($_GET['id']);
$sql  = mysqli_query($conn, "SELECT * FROM mhs WHERE id_mhs = {$id}") or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="logo3.png" rel="shortcut icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keamanan Sistem</title>
</head>
<body style="background-image: url(bg.png) ; "  >
<h2 align="center">Profil Mahasiswa  </h2>
<hr>
<div style="width: 1000px; padding-top: 20px; height: 100px;background-color: gold; margin: auto; border: 2px white solid; border-radius: 1rem; " >

<table width='90%'   border=1 style="margin: auto; " >
    <tr>
        <th><a href='tampil_data_aman.php'>Kembali</a></th>
    </tr>
    <tr>
       <th>NIM</th> <th>NAMA MAHASISWA</th> <th>MATA KULIAH</th> <th>JUMLAH SKS</th> <th>SEMESTER</th> <th>TANGGAL INPUT</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($sql)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim_mhs']."</td>";
        echo "<td>".$user_data['nama_mhs']."</td>";
        echo "<td>".$user_data['matakuliah_mhs']."</td>";
        echo "<td>".$user_data['jumlahsks_mhs']."</td>";
        echo "<td>".$user_data['semester_mhs']."</td>";
        echo "<td>".$user_data['tglinput_mhs']."</td>";  

                
    }
    ?>
    </table>
    

</div>


    


</body>
</html>