<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<!-- Begin Page Content -->
<div id="main-context">
    <!-- Begin container-fluid -->
    <div class="container-fluid">
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
                <div class="card shadow mb-4 gallery-out bg-birulaut">
                    <a class="lightbox crop gallery-box spotlight" href="https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9828.jpg ">
                        <img class="card-img" src="https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9828.jpg " alt="Card image 1">
                    </a>
                </div>
                <div class="card shadow mb-4 gallery-out bg-birulaut">
                    <a class="lightbox crop gallery-box spotlight" href="https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9732.jpg ">
                        <img class="card-img" src="https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9732.jpg " alt="Card image 2">
                    </a>
                </div>
                <div class="card shadow mb-4 gallery-out bg-birulaut">
                    <a class="lightbox crop gallery-box spotlight" href="https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9724.jpg " data-description="Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.">
                        <img class="card-img" src="https://dpm.stis.ac.id/assets/img/galeri/f/IMG_9724.jpg " alt="Card image 3">
                    </a>
                </div>
            </div>
        </div>
        <!-- End of container-fluid -->
    </div>
</div>

<?php $this->endSection(); ?>