<?php

if(isset($_POST['simpan'])){

    $nama_file = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "img/".$nama_file;

    $date=date('Y-m-d');
    $isi_laporan=mysqli_real_escape_string($koneksi,"$_POST[isi_laporan]");

    $simpan=mysqli_query($koneksi,"INSERT INTO pengaduan VALUES('','$date','$nik','$isi_laporan','$nama_file','0')");
    echo '<meta http-equiv="refresh" content="1; url=index.php?page=pengaduan">';
 
    if($simpan){
        $alert='<div class="alert alert-success">Anda Berhasil Melakukan Pengaduan</div>';
        echo '<meta http-equiv-"refresh" content="2; url=?page=pengaduan">';
    }
    move_uploaded_file($tmp_file, $path);
    
} 
?>


<div class="row justify-content-center"> 
<div class="col-lg-5">
    <h5> tulis pengaduan anda</h5>
    <?php echo @$alert; ?>
    <form action="" method="POST" enctype='multipart/form-data'>
        <textarea name="isi_laporan" placeholder="isi_laporan" class="form-control mb-3" id="" cols="30" rows="6"></textarea>
        <input type="file" name="gambar" class="form-control mb-3" accept="image/*">
        <button name="simpan" class="btn btn-danger">simpan</button>
    </form>
    </div>
</div>