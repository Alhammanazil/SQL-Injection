<?php
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Input'])) {
     require('koneksi.php');
     $nim = mysqli_real_escape_string($conn,$_POST['nim']);
     $nama = mysqli_real_escape_string($conn,$_POST['nama']);
     $makul = $_POST['makul'];
     $sks = $_POST['sks'];
     $semester = $_POST['semester'];
     $tanggal = $_POST['tanggal'];
     
     // include database connection file
     
             
     // Insert user data into table
     $sql =  "INSERT INTO mhs (nim_mhs,nama_mhs,matakuliah_mhs,jumlahsks_mhs,semester_mhs,tglinput_mhs) VALUES('$nim','$nama','$makul','$sks','$semester','$tanggal')";
     if ($conn->query($sql) === TRUE) {
      header("Location:tampil_data_aman.php?data_ditambahkan=1");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
     // Show message when user added
     
 }
 ?>

