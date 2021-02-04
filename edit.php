<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['npm'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["npm"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM mahasiswa WHERE npm='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $npm = $data["npm"];
    $nama = $data["nama"];
    $tempat_lahir = $data["tempat_lahir"];
    $tanggal_lahir = $data["tanggal_lahir"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $alamat = $data["alamat"];
    $kode_pos = $data["kode_pos"];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="edit_proses.php" method="post">
        <input type="hidden" name="npm" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Mahasiswa</legend>
          <p>
            <label for="npm">NPM : </label>
            <input type="text" name="npm" id="npm" value="<?php echo $npm ?>">
          </p>
          <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
          </p>
          <p>
            <label for="tempat_lahir" >Tempat Lahir: </label>
              <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir ?>">
          </p>
          <p>
                <label for="tanggal_lahir" >Tanggal Lahir: </label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir ?>">
          </p>
          <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="L" <?php if($data['jenis_kelamin'] == 'L'){ echo 'selected'; } ?>>
                Laki - Laki </option>
                <option value="P" <?php if($data['jenis_kelamin'] == 'P'){ echo 'selected'; } ?>>
                Perempuan</option>
            </select>
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
          </p>
          <p >
            <label for="kode_pos">Kode Pos: </label>
            <input type="number" name="kode_pos" id="kode_pos" value="<?php echo $kode_pos ?>">
          </p>
          </p>
          <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>