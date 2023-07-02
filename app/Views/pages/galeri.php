<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>
<?php
$data_galery = '{"foto":[
                    {   "fotoId":1,
                        "nama": "Foto Ldkm",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9724.jpg",
                        "deskripsi": "Foto dari anggota DPM",
                        "jenis": "lain"
                    },
                    {   "fotoId":2,
                        "nama": "Foto 2",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9828.jpg",
                        "deskripsi": "Foto Bersama Full Squad dari DPM",
                        "jenis": "lain"
                    },
                    {   "fotoId":3,
                        "nama": "Foto 3",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9732.jpg",
                        "deskripsi": "Foto Sidang Umum ke-2 dari Ketua DPM",
                        "jenis": "s2"
                    },
                    {   "fotoId":4,
                        "nama": "Foto 4",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/a/IMG_20221126_090555_1.jpg",
                        "deskripsi": "Foto LDKM dari DPM",
                        "jenis": "ldkm"
                    },
                    {   "fotoId":5,
                        "nama": "Foto 5",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/a/IMG20221119081825.jpg",
                        "deskripsi": "Foto Sambutan dari Pak Anang",
                        "jenis": "ldkm"
                    },
                    {   "fotoId":6,
                        "nama": "Foto 6",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/a/IMG20221120165027.jpg",
                        "deskripsi": "Diskusi Kepemimpinan DPM",
                        "jenis": "ldkm"
                    },
                    {   "fotoId":7,
                        "nama": "Foto 7",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/b/Copy_of_IMG_7021.jpg",
                        "deskripsi": "Sidang Umum 1 DPM",
                        "jenis": "s1"
                    },
                    {   "fotoId":8,
                        "nama": "Foto 8",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9717.jpg",
                        "deskripsi": "Sidang Umum 1 diskusi mengenai DPM",
                        "jenis": "s1"
                    },
                    {   "fotoId":9,
                        "nama": "Foto 9",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9719.jpg",
                        "deskripsi": "Sidang Umum 3 DPM",
                        "jenis": "s3"
                    },
                    {   "fotoId":10,
                        "nama": "Foto 10",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/b/Copy_of_IMG_0995.jpg",
                        "deskripsi": "Sidang Umum 3 DPM",
                        "jenis": "s3"
                    },
                    {   "fotoId":11,
                        "nama": "Foto 11",
                        "link": "https://dpm.stis.ac.id/assets/img/galeri/b/Copy_of_IMG_0969.jpg",
                        "deskripsi": "Sidang Umum 2 DPM",
                        "jenis": "s2"
                    }
                    ]}
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
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Galeri
                </button>
                <div class="dropdown-menu animated--fade-in" id="myBtnContainer" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item btn-galeri activ" role="button" onclick="filterSelection('galeri_semua')">Semua</a>
                    <a class="dropdown-item btn-galeri" role="button" onclick="filterSelection('galeri_ldkm')">LDKM</a>
                    <a class="dropdown-item btn-galeri" role="button" onclick="filterSelection('galeri_s1')">Sidang Umum
                        I</a>
                    <a class="dropdown-item btn-galeri" role="button" onclick="filterSelection('galeri_s2')">Sidang Umum
                        II</a>
                    <a class="dropdown-item btn-galeri" role="button" onclick="filterSelection('galeri_s3')">Sidang Umum
                        III</a>
                    <!-- <a class="dropdown-item btn-galeri" href="" onclick="filterSelection('galeri_s4')">Sidang Umum
                        IV</a> -->
                    <a class="dropdown-item btn-galeri" role="button" onclick="filterSelection('galeri_lain')">Lainnya</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card-columns spotlight-group filterDiv galeri_ldkm">
                <?php
                if (count($data_foto['foto']) != 0) {
                    foreach ($data_foto['foto'] as $data) {
                        if ($data['jenis'] == "ldkm") {
                ?>
                            <div class="card shadow mb-4 gallery-out bg-birulaut">
                                <a class="lightbox crop gallery-box spotlight" href="<?php echo $data['link']; ?>" data-description="<?php echo $data['deskripsi']; ?>">
                                    <img class="card-img" src="<?php echo $data['link']; ?>" alt="<?php echo $data['nama']; ?>">
                                </a>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
            <div class="card-columns spotlight-group filterDiv galeri_s1">
                <?php
                if (count($data_foto['foto']) != 0) {
                    foreach ($data_foto['foto'] as $data) {
                        if ($data['jenis'] == "s1") {
                ?>
                            <div class="card shadow mb-4 gallery-out bg-birulaut">
                                <a class="lightbox crop gallery-box spotlight" href="<?php echo $data['link']; ?>" data-description="<?php echo $data['deskripsi']; ?>">
                                    <img class="card-img" src="<?php echo $data['link']; ?>" alt="<?php echo $data['nama']; ?>">
                                </a>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
            <div class="card-columns spotlight-group filterDiv galeri_s2">
                <?php
                if (count($data_foto['foto']) != 0) {
                    foreach ($data_foto['foto'] as $data) {
                        if ($data['jenis'] == "s2") {
                ?>
                            <div class="card shadow mb-4 gallery-out bg-birulaut">
                                <a class="lightbox crop gallery-box spotlight" href="<?php echo $data['link']; ?>" data-description="<?php echo $data['deskripsi']; ?>">
                                    <img class="card-img" src="<?php echo $data['link']; ?>" alt="<?php echo $data['nama']; ?>">
                                </a>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
            <div class="card-columns spotlight-group filterDiv galeri_s3">
                <?php
                if (count($data_foto['foto']) != 0) {
                    foreach ($data_foto['foto'] as $data) {
                        if ($data['jenis'] == "s3") {
                ?>
                            <div class="card shadow mb-4 gallery-out bg-birulaut">
                                <a class="lightbox crop gallery-box spotlight" href="<?php echo $data['link']; ?>" data-description="<?php echo $data['deskripsi']; ?>">
                                    <img class="card-img" src="<?php echo $data['link']; ?>" alt="<?php echo $data['nama']; ?>">
                                </a>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
            <div class="card-columns spotlight-group filterDiv galeri_lain">
                <?php
                if (count($data_foto['foto']) != 0) {
                    foreach ($data_foto['foto'] as $data) {
                        if ($data['jenis'] == "lain") {
                ?>
                            <div class="card shadow mb-4 gallery-out bg-birulaut">
                                <a class="lightbox crop gallery-box spotlight" href="<?php echo $data['link']; ?>" data-description="<?php echo $data['deskripsi']; ?>">
                                    <img class="card-img" src="<?php echo $data['link']; ?>" alt="<?php echo $data['nama']; ?>">
                                </a>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>
        <!-- End of container-fluid -->
    </div>
</div>

<?php $this->endSection(); ?>