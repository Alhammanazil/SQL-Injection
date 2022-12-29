<?php
ob_start();
require('koneksi.php');
$id = $_GET['id'];
 
$sql = "DELETE FROM mhs WHERE id_mhs='$id'";

if ($conn->query($sql) === TRUE) {
  if ($_GET['aman']) {
  header("Location:tampil_data_aman.php?data_dihapus=1");    
  } else {
  header("Location:tampil_data.php?data_dihapus=1");}
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>