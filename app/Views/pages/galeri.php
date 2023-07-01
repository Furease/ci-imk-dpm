<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>
<?php
$data_galery = '{"foto":[
                    {   "fotoId":1,
                        "nama": "Foto 1",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9724.jpg",
                        "deskripsi": "Foto Apel dari anggota DPM"
                    },
                    {   "fotoId":2,
                        "nama": "Foto 2",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9828.jpg",
                        "deskripsi": "Foto Bersama Full Squad dari DPM"
                    },
                    {   "fotoId":3,
                        "nama": "Foto 3",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9732.jpg",
                        "deskripsi": "Foto Apel dari Ketua DPM"
                    },
                    {   "fotoId":4,
                        "nama": "Foto 4",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9724.jpg",
                        "deskripsi": "Foto Apel dari DPM"
                    },
                    {   "fotoId":5,
                        "nama": "Foto 5",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/a/IMG20221119081825.jpg",
                        "deskripsi": "Foto Sambutan dari Pak Anang"
                    },
                    {   "fotoId":6,
                        "nama": "Foto 6",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/a/IMG20221120165027.jpg",
                        "deskripsi": "Diskusi Kepemimpinan DPM"
                    }]}
                    ';
                    $data_foto = json_decode($data_galery, true);
?>
<!-- Begin Page Content -->
<div id="main-context">
    <!-- Begin container-fluid -->
    <div class="container-fluid mb-5">
        <!-- Page Heading -->
        <div class="row mb-4">
            <h1 class="align-self-center h3 mx-2 text-gray-800">Galeri</h1>
            <div class="col align-self-center border-top border-primary d-none d-sm-block"></div>
            <div class="dropdown mx-2">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Galeri
                </button>
                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="">Semua</a>
                    <a class="dropdown-item" href="">LDKM</a>
                    <a class="dropdown-item" href="">Sidang Umum
                        I</a>
                    <a class="dropdown-item" href="">Sidang Umum
                        II</a>
                    <a class="dropdown-item" href="">Sidang Umum
                        III</a>
                    <a class="dropdown-item" href="">Sidang Umum
                        IV</a>
                    <a class="dropdown-item" href="">Lainnya</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card-columns spotlight-group">
                
<?php
if(count($data_foto['foto']) != 0){
    foreach ($data_foto['foto'] as $data) {
       ?>
                <div class="card shadow mb-4 gallery-out bg-birulaut">
                    <a class="lightbox crop gallery-box spotlight" href="<?php echo $data['link']; ?>"  data-description="<?php echo $data['deskripsi']; ?>">
                        <img class="card-img" src="<?php echo $data['link']; ?>" alt="<?php echo $data['nama']; ?>">
                    </a>
                </div>
                <?php
            }
         }
      ?>
            </div>
        </div>
        <!-- End of container-fluid -->
    </div>
</div>

<?php $this->endSection(); ?>