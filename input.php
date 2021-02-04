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
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Mahasiswa</legend>
          <p>
            <label for="nim">Npm:</label>
            <input type="text" name="npm" id="nim" placeholder="Masukkan Npm">
          </p>
          <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
          </p>
          <p>
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
          </p>
          <p>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
          </p>
          <p>
            <label for="jenis_kelamin" >Jenis Kelamin: </label>
              <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="L">L</option>
                <option value="P">P</option>
              </select>
          </p>
          <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" id="alamat" placeholder="masukkan alamat">
          </p>
          <p >
            <label for="kode_pos">Kode Pos: </label>
            <input type="text" name="kode_pos" id="kode_pos" placeholder="Masukkan Kode Pos">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>