<?php
include 'connection.php';
$data_edit = mysqli_query($conn, "SELECT * FROM utscrud WHERE npsn = '".$_GET['npsn']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
    <title>Halaman Edit Data</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>
    <div class="container mt-5">
    <h2 class="mx-auto py-4 text-center">Input Data</h2>
    
    <?php
    if(isset($_POST['edit'])) {
        $update = mysqli_query($conn, "UPDATE utscrud SET status = '".$_POST['status']."', bentuk_pendidikan = '".$_POST['bentuk_pendidikan']."',
        nama_sekolah = '".$_POST['nama_sekolah']."', sk_pendirian = '".$_POST['sk_pendirian']."', tgl_pendirian = '".$_POST['tgl_pendirian']."', sk_izin_operasional = '".$_POST['sk_izin_operasional']."',
        tgl_izin_operasional = '".$_POST['tgl_izin_operasional']."', alamat = '".$_POST['alamat']."', rt = '".$_POST['rt']."', rw = '".$_POST['rw']."', dusun = '".$_POST['dusun']."',
        desa = '".$_POST['desa']."', kecamatan = '".$_POST['kecamatan']."', kabupaten = '".$_POST['kabupaten']."', provinsi = '".$_POST['provinsi']."', kode_pos = '".$_POST['kode_pos']."'
        WHERE npsn = '".$_GET['npsn']."'");
        if($update) {
            echo '<p class="text-success fw-bold">berhasil diupdate </p>';
        }else{
            echo '<p class ="text-danger fw-bold">gagal disimpan '.mysqli_error($conn) . '</p>';
        }
    }
    ?>
    <a href="index.php" class="btn btn-primary btn-sm mb-4">Kembali</a>
    <form action="" method="POST">
    <div class="form-group row">
    <label for="npsn" class="col-sm-2 col-form-label">NPSN</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="npsn" name="npsn" value="<?php echo $result['npsn'] ?>"> 
    </div>
  </div>
  <div class="form-group row">
      <label for="status" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
          <select class="custom-select" id="status" name="status">
              <option selected ><?php echo $result['status'] ?></option>
              <option>Negeri</option>
              <option>Swasta</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
      <label for="status" class="col-sm-2 col-form-label">Bentuk Pendidikan</label>
      <div class="col-sm-10">
        <select class="custom-select" id="bentuk_pendidikan" name="bentuk_pendidikan">
          <option selected><?php echo $result['bentuk_pendidikan'] ?></option>
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
      <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?php echo $result['nama_sekolah'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="sk_pendirian" class="col-sm-2 col-form-label">sk_pendirian</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sk_pendirian" name="sk_pendirian"value="<?php echo $result['sk_pendirian'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_pendirian" class="col-sm-2 col-form-label">tgl_pendirian</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_pendirian" name="tgl_pendirian"value="<?php echo $result['tgl_pendirian'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="sk_izin_operasional" class="col-sm-2 col-form-label">sk_izin_operasional</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sk_izin_operasional" name="sk_izin_operasional"value="<?php echo $result['sk_izin_operasional'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_izin_operasional" class="col-sm-2 col-form-label">tgl_izin_operasional</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tgl_izin_operasional" name="tgl_izin_operasional"value="<?php echo $result['tgl_izin_operasional'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat"value="<?php echo $result['alamat'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="rt" class="col-sm-2 col-form-label">rt</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rt" name="rt"value="<?php echo $result['rt'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="rw" class="col-sm-2 col-form-label">rw</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="rw" name="rw"value="<?php echo $result['rw'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="dusun" class="col-sm-2 col-form-label">dusun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dusun" name="dusun"value="<?php echo $result['dusun'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="desa" class="col-sm-2 col-form-label">desa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="desa" name="desa"value="<?php echo $result['desa'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kecamatan" class="col-sm-2 col-form-label">kecamatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kecamatan" name="kecamatan"value="<?php echo $result['kecamatan'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kabupaten" class="col-sm-2 col-form-label">kabupaten</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kabupaten" name="kabupaten"value="<?php echo $result['kabupaten'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="provinsi" class="col-sm-2 col-form-label">provinsi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $result['provinsi'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode_pos" class="col-sm-2 col-form-label">kode_pos</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?php echo $result['kode_pos'] ?>">
    </div>
    <button class="btn btn-success text-center float-end align-items-center justify-content-center mx-auto mt-3 mb-5" name="edit" >Update</button>
  </div>
  <hr>
</form>

    </div>
</body>
</html>