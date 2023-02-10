<?php
$id_pengaduan=$_GET['id_pengaduan'];
$q=mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
$data=mysqli_fetch_array($q);
?> 

<div class="row">
    <div class="col-lg-8">
        <img src="<?php echo "img/".$data['foto'] ?>"class="w-100" alt="">
        <div class="row">
            
            <div class="col-6">
                <?php
                    if($data['status']=='0'){
                        echo '<p class=" text-warning">Belum Di Proses</p>';
                    }elseif($data['status']=='proses'){
                        echo '<p class="small mt-3 text-info">Sedang Di Proses</p>';
                    }else{
                        echo'<p class="small mt-3 text-success"></p>';
                    }
                ?>
            </div>
        <div class="col-6-text-end">
        <p class=" mt-3 mb-0"><?php echo $data['tgl_pengaduan']?></p>
        </div>
        <p class="card-text">
            <?php
                echo $data['isi_laporan'];
            ?>
        </p>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card header">
                Tanggapan Petugas
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>