<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>


<div id="main-context">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row mb-4">
            <h1 class="align-self-center h3 mx-2 text-gray-800">SI ASPIMAN</h1>
            <div class="rounded-circle bg-navy mr-2"><img class="align-self-center" style="width: 40px; height: 40px;" src="img/content_canvas.png" alt="logo"></div>
            <div class="col align-self-center border-top border-primary d-none d-sm-block"></div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-birulaut mb-4">
                    <div class="card-body">
                        <p>Fitur Aspirasi merupakan wadah bagi mahasiswa untuk memberikan <span class="font-weight-bold">sambatan</span> terbaik mereka. Sambatan itu
                            sendiri merupakan kritik atau saran yang ditujukan kepada <span class="font-weight-bold">"Kampus, Ormawa, Pengurus
                                Tingkat, dan Lainnya"</span>.
                        </p>
                        <p>Silahkan mengisi <span class="font-weight-bold">"Form Sambatan"</span> dengan
                            harapan kritik yang diberikan dapat membangun atau memberikan dampak positif
                            bagi kita semua.
                        </p>
                        <img style="width: 200px;" class="align-self-center" src="img/asp 1.png" alt="logo2">
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <h4 class="align-self-center text-gray-800 mx-2">Form Sambatan</h4>
                            <div class="col align-self-center border-top mx-2 border-primary d-none d-sm-block">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group ">
                                <div class="col-sm-12">
                                    <label for="dari" class="col-form-label">Nama Pengirim</label>
                                    <input type="text" class="form-control" id="dari" name="dari" placeholder="Nama kamu, iya... kamu, boleh nama samaran">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="untuk" class="col-form-label">Di tujukan kepada</label>
                                    <select name="untuk" id="untuk" class="form-control">
                                        <option value="Kampus">Kampus</option>
                                        <option value="Ormawa">Ormawa</option>
                                        <option value="Pengurus Tingkat">Pengurus Tingkat</option>
                                        <option value='DPM'>Web DPM</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" id="untuk" name="untuk"> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="isi" class="col-form-label">Isi Sambatan</label>
                                    <textarea type="text" class="form-control" id="isi" name="isi"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="sambat" class="btn btn-primary float-left" onclick="return confirm('apakah anda yakin ingin sambat tentang hal tersebut?')">
                                        Yuk sambat
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php $this->endSection(); ?>