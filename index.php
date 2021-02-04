<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Tabel Biodata Mahasiswa</h1>
    <center><a href="input.php">Input Data &Gt; </a></center>
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>Npm</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Kode Pos</th>
        <th>Pilihan</th>
      </tr>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan npm
      $query = "SELECT * FROM mahasiswa ORDER BY npm ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[npm]</td>"; //menampilkan data npm
        echo "<td>$data[nama]</td>"; //menampilkan data nama
        echo "<td>$data[tempat_lahir]</td>"; //menampilkan data tempat lahir
        echo "<td>$data[tanggal_lahir]</td>"; //menampilkan data tanggal lahir
        echo "<td>$data[jenis_kelamin]</td>"; //menampilkan data jenis kelamin
        echo "<td>$data[alamat]</td>"; //menampilkan data alamat
        echo "<td>$data[kode_pos]</td>"; //menampilkan kode pos
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="edit.php?npm='.$data['npm'].'">Edit</a> /
          <a href="hapus.php?npm='.$data['npm'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
  </body>
</html>