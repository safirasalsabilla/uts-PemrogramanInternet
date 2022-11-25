
<!DOCTYPE html>
<html>
    <title>Halaman Input Data</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<body>
    <div class="container mt-5">
    <h2 class="mx-auto py-4 text-center">Tambah Data Data</h2>

    <a href="index.php" class="btn btn-primary btn-sm mb-4">Kembali</a>
    <?php
    include 'connection.php';
    if(isset($_POST['simpan'])) {
    $insert = mysqli_query($conn, "INSERT INTO utscrud VALUES ('".$_POST['npsn']."', '".$_POST['status']."', '".$_POST['bentuk_pendidikan']."',
        '".$_POST['nama_sekolah']."', '".$_POST['sk_pendirian']."', '".$_POST['tgl_pendirian']."',
        '".$_POST['sk_izin_operasional']."', '".$_POST['tgl_izin_operasional']."', '".$_POST['alamat']."',
        '".$_POST['rt']."', '".$_POST['rw']."', '".$_POST['dusun']."', '".$_POST['desa']."', '".$_POST['kecamatan']."',
        '".$_POST['kabupaten']."', '".$_POST['provinsi']."', '".$_POST['kode_pos']."')");

    if($insert){
        echo '<p class="text-success fw-bold">berhasil disimpan </p>';
    }else{
        echo '<p class ="text-danger fw-bold">gagal disimpan '.mysqli_error($conn) . '</p>';
    }    
    }
    ?>
    <form action="" method="POST">
  <div class="form-group row">
    <label for="npsn" class="col-sm-2 col-form-label">NPSN</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="npsn" name="npsn">
    </div>
  </div>
  <div class="form-group row">
      <label for="status" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
          <select class="custom-select" id="status" name="status">
              <option selected disabled value="">Pilih status</option>
              <option>Negeri</option>
              <option>Swasta</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
      <label for="status" class="col-sm-2 col-form-label">Bentuk Pendidikan</label>
      <div class="col-sm-10">
        <select class="custom-select" id="bentuk_pendidikan" name="bentuk_pendidikan">
          <option selected value="">Pilih Bentuk Pendidikan</option>
          <option>TK</option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
          <option>SMK</option>
        </select>
      </div>
    </div>
  <div class="form-group row">
    <label for="nama_sekolah" class="col-sm-2 col-form-label">nama_sekolah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah">
    </div>
  </div>
  <div class="form-group row">
    <label for="sk_pendirian" class="col-sm-2 col-form-label">sk_pendirian</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sk_pendirian" name="sk_pendirian">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_pendirian" class="col-sm-2 col-form-label">tgl_pendirian</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_pendirian" name="tgl_pendirian">
    </div>
  </div>
  <div class="form-group row">
    <label for="sk_izin_operasional" class="col-sm-2 col-form-label">sk_izin_operasional</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sk_izin_operasional" name="sk_izin_operasional">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_izin_operasional" class="col-sm-2 col-form-label">tgl_izin_operasional</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_izin_operasional" name="tgl_izin_operasional">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
  </div>
  <div class="form-group row">
    <label for="rt" class="col-sm-2 col-form-label">rt</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rt" name="rt">
    </div>
  </div>
  <div class="form-group row">
    <label for="rw" class="col-sm-2 col-form-label">rw</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rw" name="rw">
    </div>
  </div>
  <div class="form-group row">
    <label for="dusun" class="col-sm-2 col-form-label">dusun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dusun" name="dusun">
    </div>
  </div>
  <div class="form-group row">
    <label for="desa" class="col-sm-2 col-form-label">desa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="desa" name="desa">
    </div>
  </div>
  <div class="form-group row">
    <label for="kecamatan" class="col-sm-2 col-form-label">kecamatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kecamatan" name="kecamatan">
    </div>
  </div>
  <div class="form-group row">
    <label for="kabupaten" class="col-sm-2 col-form-label">kabupaten</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kabupaten" name="kabupaten">
    </div>
  </div>
  <div class="form-group row">
    <label for="provinsi" class="col-sm-2 col-form-label">provinsi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="provinsi" name="provinsi">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode_pos" class="col-sm-2 col-form-label">kode_pos</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kode_pos" name="kode_pos">
    </div>
    <button class="btn btn-success text-center float-end align-items-center justify-content-center mx-auto mt-3 mb-5" name="simpan" >Tambah</button>
  </div>
  <hr>
        <!-- <table>
            <tr>
             <td>NPSN</td>
             <td>:</td>
             <td><input type="text" name="npsn" placeholder="" required></td>
            </tr>
            <tr>
             <td>STATUS</td>
             <td>:</td>
             <td>
                <select name="status">
                    <option value="Negeri">Negeri</option>
                    <option value="Swasta">Swasta</option>
                </select>
            </td>
            </tr>
            <tr>
             <td>BENTUK PENDIDIKAN</td>
             <td>:</td>
             <td>
                <select name="bentuk_pendidikan">
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                </select>
            </td>
            </tr>
            <tr>
             <td>NAMA SEKOLAH</td>
             <td>:</td>
             <td><input type="text" name="nama_sekolah" placeholder="" required></td>
            </tr>
            <tr>
             <td>SK PENDIRIAN</td>
             <td>:</td>
             <td><input type="text" name="sk_pendirian" placeholder="" required></td>
            </tr>
            <tr>
             <td>TANGGAL PENDIRIAN</td>
             <td>:</td>
             <td><input type="date" name="tgl_pendirian" placeholder="" required></td>
            </tr>
            <tr>
             <td>SK IZIN OPERASIONAL</td>
             <td>:</td>
             <td><input type="text" name="sk_izin_operasional" placeholder="" required></td>
            </tr>
            <tr>
             <td>TANGGAL IZIN OPERASIONAL</td>
             <td>:</td>
             <td><input type="date" name="tgl_izin_operasional" placeholder="" required></td>
            </tr>
            <tr>
             <td>ALAMAT</td>
             <td>:</td>
             <td><input type="text" name="alamat" placeholder="" required></td>
            </tr>
            <tr>
             <td>RT</td>
             <td>:</td>
             <td><input type="text" name="rt" placeholder="" required></td>
            </tr>
            <tr>
             <td>RW</td>
             <td>:</td>
             <td><input type="text" name="rw" placeholder="" required></td>
            </tr>
            <tr>
             <td>DUSUN</td>
             <td>:</td>
             <td><input type="text" name="dusun" placeholder="" required></td>
            </tr>
            <tr>
             <td>DESA</td>
             <td>:</td>
             <td><input type="text" name="desa" placeholder="" required></td>
            </tr>
            <tr>
             <td>KECAMATAN</td>
             <td>:</td>
             <td><input type="text" name="kecamatan" placeholder="" required></td>
            </tr>
            <tr>
             <td>KABUPATEN</td>
             <td>:</td>
             <td><input type="text" name="kabupaten" placeholder="" required></td>
            </tr>
            <tr>
             <td>PROVINSI</td>
             <td>:</td>
             <td><input type="text" name="provinsi" placeholder="" required></td>
            </tr>
            <tr>
             <td>KODE POS</td>
             <td>:</td>
             <td><input type="text" name="kode_pos" placeholder="" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
</table> -->
</form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>