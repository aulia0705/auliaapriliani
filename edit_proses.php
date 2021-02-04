<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $kode_pos = $_POST['kode_pos'];
  

  //buat dan jalankan query UPDATE
  $query  = "UPDATE mahasiswa SET ";
  $query .= "npm ='$npm', nama ='$nama', ";
  $query .= "tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', ";
  $query .= "jenis_kelamin = '$jenis_kelamin',";
  $query .= "alamat='$alamat', kode_pos='$kode_pos'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");

?>