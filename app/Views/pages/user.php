<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mb-2">
        <h4 class="col-sm-auto align-self-center"><b>Profil Saya</b></h4>
        <div class="col align-self-center border-top border-primary d-none d-sm-block"></div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4">
            <div class="card shadow mb-3 bg-birulaut">
                <div class="card-header bg-birulaut border-0">
                    <div class="text-center m-4">
                        <!-- <img src="img/default.png" class="card-img img-fluid rounded-circle border" style="background-image: cover; max-width: 5em;"> -->
                        <form>
                            <input type="image" src="img/default.png" class="card-img img-fluid rounded-circle border" style="background-image: cover; max-width: 100px;" />
                            <input type="file" id="my_file" style="display: none;" />
                        </form>
                    </div>

                </div>
                <div class="card-body">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-1 mx-2 align-self-center text-primary">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="col">
                                <p class="mb-0 font-barlow">
                                    <b>Email</b>
                                    <br>222011791@stis.ac.id
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-text">
                        <div class="row">
                            <div class="col-1 mx-2 align-self-center text-primary">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="col">
                                <p class="mb-0 font-barlow">
                                    <b>Nama</b>
                                    <br>Achmad Arfiandis Abdi Pradana
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-text">
                        <div class="row">
                            <div class="col-1 mx-2 align-self-center text-primary">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <div class="col">
                                <p class="mb-0">
                                    <b>NIM</b>
                                    <br>222011791
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-text">
                        <div class="row">
                            <div class="col-1 mx-2 align-self-center text-primary">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="col">
                                <p class="mb-0 font-barlow">
                                    <b>Kelas</b>
                                    <br>3SI1
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-7 col-xl-8">
            <div class="row mb-2">
                <h5 class="col-sm-auto align-self-center"><b>Edit Profile</b></h5>
                <div class="col align-self-center border-top border-primary d-none d-sm-block"></div>
            </div>
            <form id="profil-form" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="form-group ">
                    <label for="nohp" class=" col-form-label">Nomor Handphone</label>
                    <div class="">
                        <input type="text" class="form-control font-barlow" id="nohp" name="nohp" value="628999888777" required>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="provider" class=" col-form-label">Provider</label>
                    <div class="">
                        <select name="provider" id="provider" value="Tri" class="form-control selectpicker">
                            <option value="Axis">Axis</option>
                            <option value="Indosat">Indosat</option>
                            <option value="Telkomsel">Telkomsel</option>
                            <option value="Tri" selected="">Tri</option>
                            <option value="XL">XL</option>
                            <option value="By.U">By.U</option>
                            <option value="Smartfren">Smartfren</option>
                        </select>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="provider" class="col-form-label pb-0">Nomor Rekening</label>
                    <p class="p-0 mb-1 rounded text-danger" style="font-size: 15px;">
                        Pastikan rekening masih aktif
                    </p>
                    <div class="">
                        <input type="text" class="form-control font-barlow" id="norek" name="norek" value="111222333" required>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="bank" class=" col-form-label" aria-label=".form-select-lg example">Bank</label>
                    <div class="">
                        <select name="bank" id="bank" class="form-control selectpicker">
                            <option selected="" disabled="">Pilih bank</option>
                            <option value="BRI">BRI</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="BNI">BNI</option>
                            <option value="BCA" selected="">BCA</option>
                            <option value="BSI">BSI</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="form-group  d-none" id="bank-lain">
                    <label for="dari" class=" col-form-label">Nama Bank</label>
                    <div class="">
                        <input type="text" class="form-control font-barlow" name="banklain" id="bank-lain-form" value="">
                    </div>
                </div>

                <div class="form-group ">
                    <label for="provider" class="pb-0 col-form-label">Atas Nama Rekening</label>
                    <p class="p-0 m-0 rounded text-danger" style="font-size: 15px;">
                        Pastikan rekening atas nama pribadi
                    </p>
                    <div class="">
                        <input type="text" class="form-control font-barlow" id="atas_nama_bank" name="atas_nama_bank" value="ACHMAD ARFIANDIS ABDI PRADANA" required>
                    </div>
                </div>

                <div class="form-group row justify-content-end text-right">
                    <div class="">
                        <button type="submit" class="btn btn-primary"><span class="ml-4 mr-4">Simpan</span></button>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php $this->endSection(); ?>