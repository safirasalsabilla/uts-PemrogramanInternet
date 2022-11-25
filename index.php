<!DOCTYPE html>
<html>
    <head>
        <title>Data Sekolah</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<body>
    <div class="py-3 px-5">
    <h2 class="text-center mt-5">DATA SEKOLAH</h2>
    
    <a href="input.php" class="btn btn-primary mb-4 float-end">Tambah Data</a>
    <table class="table table-bordered table-sm">
        <tr style="text-align:center;font-weight:bold;">
            <th scope="col">NO</th>
            <td>NPSN</td>
            <td>STATUS</td>
            <td>BENTUK PENDIDIKAN</td>
            <td>NAMA SEKOLAH</td>
            <td>SK PENDIRIAN</td>
            <td>TANGGAL PENDIRIAN</td>
            <td>SK IZIN OPERASIONAL</td>
            <td>TANGGAL IZIN OPERASIONAL</td>
            <td>ALAMAT</td>
            <td>RT</td>
            <td>RW</td>
            <td>DUSUN</td>
            <td>DESA</td>
            <td>KECAMATAN</td>
            <td>KABUPATEN</td>
            <td>PROVINSI</td>
            <td>KODE POS</td>
            <td>OPSI</td>
        </tr>
        <?php
        include 'connection.php';
        $no = 1;
        $select = mysqli_query($conn, "SELECT * FROM utscrud");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align:center;">
            <th scope="row"><?php echo $no++ ?></th>
            <td><?php echo $hasil['npsn'] ?></td>
            <td><?php echo $hasil['status'] ?></td>
            <td><?php echo $hasil['bentuk_pendidikan'] ?></td>
            <td><?php echo $hasil['nama_sekolah'] ?></td>
            <td><?php echo $hasil['sk_pendirian'] ?></td>
            <td><?php echo $hasil['tgl_pendirian'] ?></td>
            <td><?php echo $hasil['sk_izin_operasional'] ?></td>
            <td><?php echo $hasil['tgl_izin_operasional'] ?></td>
            <td><?php echo $hasil['alamat'] ?></td>
            <td><?php echo $hasil['rt'] ?></td>
            <td><?php echo $hasil['rw'] ?></td>
            <td><?php echo $hasil['dusun'] ?></td>
            <td><?php echo $hasil['desa'] ?></td>
            <td><?php echo $hasil['kecamatan'] ?></td>
            <td><?php echo $hasil['kabupaten'] ?></td>
            <td><?php echo $hasil['provinsi'] ?></td>
            <td><?php echo $hasil['kode_pos'] ?></td>
            <td>
                <a href="edit.php?npsn=<?php echo $hasil['npsn'] ?>" class="btn btn-success btn-sm">Edit</a> 
                <a href="delete.php?npsn=<?php echo $hasil['npsn'] ?>" class="btn btn-danger btn-sm mt-3">Hapus</a>
            </td>
        </tr>
        <?php }}else{ ?>
            <tr>
                <td colspan="19" align="center">Data Kosong</td>
        </tr>
    <?php } mysqli_error($conn);?>
    </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>