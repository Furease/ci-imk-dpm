<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<!-- Begin Main Content -->
<div id="main-context">
    <!-- Begin container-fluid -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-auto">
                <b class="h3 mb-0">Profil DPM</b>
            </div>
            <div class="col border-top border-primary d-none d-sm-block"></div>
        </div>

        <!-- visi misi dpm -->
        <div class="d-flex justify-content-center mb-4">
            <img class="img-profile rounded-circle w-25 p-3" src="https://dpm.stis.ac.id/assets/img/profile/dpm.png" />
        </div>
        <div class="d-flex justify-content-center mb-1">
            <div class="row bg-primary rounded-pill w-75 align-items-center py-1">
                <div class="col-sm-auto text-white mx-3">
                    <i class="fas fa-md fa-users"></i>
                </div>
                <div class="col-lg text-white h5 mb-0 p-0">
                    Dewan Perwakilan Mahasiswa
                </div>

                <a class="text-light collapse-button border-0 mr-3" href="#definisi" data-toggle="collapse" data-target="#definisi" aria-expanded="false">
                    <i class="fa fa-lg fa-chevron-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <div class="collapse w-75" id="definisi">
                <div class="card card-body text-dark mx-2 py-2" style="background-color: #CDDAFF;">
                    <div class="ml-5 mr-3">

                        Merupakan organisasi internal kampus Politeknik Statistika
                        STIS yang menjalankan fungsi legislatif
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mb-1">
            <div class="row bg-warning rounded-pill w-75 align-items-center py-1">
                <div class="col-sm-auto text-white mx-3">
                    <i class="fas fa-lg fa-crosshairs"></i>
                </div>
                <div class="col-lg text-white h5 mb-0 p-0">
                    Visi dan Misi
                </div>

                <a class="text-light collapse-button border-0 mr-3" href="#visi" data-toggle="collapse" data-target="#visi" aria-expanded="false" aria-controls="visi">
                    <i class="fas fa-lg fa-chevron-circle-right "></i>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <div class="collapse w-75" id="visi" aria-controls="visi">
                <div class="card card-body text-dark mx-2 py-2" style="background-color: #FFE3BC;">
                    <div class="ml-5 mr-3">
                        <strong>Visi</strong>
                        <p class="text-justify">Menjadikan Dewan Perwakilan Mahasiswa Politeknik Statistika STIS sebagai
                            organisasi /
                            majelis permusyawaratan mahasiswa yang kredibel dalam mengemban tanggung jawab
                            secara inspiratif, kontributif, komunikatif dan juga selaras
                            dengan Spiritualitas.
                        </p>
                        <strong>Misi</strong>
                        <ol class="text-justify">
                            <li>
                                Melaksanakan penyelenggaraan tugas legislasi secara efektif dan efisien.
                            </li>
                            <li>
                                Menjalin hubungan yang bersinergi dengan pihak internal maupun eksternal dilingkungan Politeknik
                                Statisika STIS
                            </li>
                            <li>
                                Memberikan kualitas pelayanan terbaik dalam menampung dan menyalurkan aspirasi mahasiswa
                                Politeknik Statistika STIS kepada pihak yang bersangkutan sesuai kebutuhan.
                            </li>
                            <li>
                                Melaksanakan fungsi pengawasan dan koordinasi serta berkolaborasi yang bersifat berkelanjutan
                                dengan Senat Mahasiswa Politeknik Statistika STIS
                            </li>
                            <li>
                                Mewujudkan keanggotaan Dewan Perwakilan Mahasiswa yang dinamis dan harmonis dengan berlandaskan
                                asas kekeluargaan
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-1">
            <div class="row bg-gray-400 rounded-pill w-75 align-items-center py-1">
                <div class="col-sm-auto text-dark mx-3">
                    <i class="fas fa-md fa-sitemap"></i>
                </div>
                <div class="col-lg text-dark h5 mb-0 p-0">
                    Struktur Organisasi
                </div>

                <a class="text-dark collapse-button border-0 mr-3" href="#struktur" data-toggle="collapse" data-target="#struktur" aria-expanded="false">
                    <i class="fas fa-lg fa-chevron-circle-right "></i>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="collapse w-75" id="struktur">
                <div class="card card-body mx-2 py-2">
                    <div class="mr-3 ml-5">

                        Merupakan organisasi internal kampus Politeknik Statistika
                        STIS yang menjalankan fungsi legislatif
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-lg-7 order-1 order-lg-2 hero-img d-flex flex-column align-items-center">
                                <h1 class="h3 text-gray-800"></h1>
                                <p></p>
                                

                            </div> -->
        <!-- <section>
                            <figure class="org-chart cf">
                                <ul class="administration struktur">
                                    <li>
                                        <ul class="director struktur">
                                            <li class="struktur"><a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalKetua"><span class="struktur">Ketua
                                                        DPM</span></a></li>
                                            <li class="struktur"><a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalWakilKetua"><span class="struktur">Wakil Ketua
                                                        DPM</span></a></li>
                                        </ul>
                                        <ul class="subdirector struktur">
                                            <li class="struktur"><a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalSekretaris"><span
                                                        class="struktur">Sekretaris</span></a></li>
                                        </ul>
                                        <ul class="departments cf struktur">
                                            <li class="struktur"><a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalBendahara"><span
                                                        class="struktur">Bendahara</span></a></li>

                                            <li class="department dep-a struktur">
                                                <a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalKomisiSatu">
                                                    <span class="struktur"><i class="fas fa-fw fa-gavel"></i><br>Komisi
                                                        I</span>
                                                </a>
                                            </li>
                                            <li class="department dep-b struktur">
                                                <a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalKomisiDua">
                                                    <span class="struktur"><i
                                                            class="fas fa-fw fa-balance-scale"></i><br>Komisi II</span>
                                                </a>
                                            </li>
                                            <li class="department dep-c struktur">
                                                <a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalKomisiTiga">
                                                    <span class="struktur"><i class="fas fa-fw fa-eye"></i><br>Komisi
                                                        III</span></a>
                                            </li>
                                            <li class="department dep-d struktur">
                                                <a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalKomisiEmpat">
                                                    <span class="struktur"><i
                                                            class="fas fa-fw fa-comments"></i><br>Komisi IV</span>
                                                </a>
                                            </li>
                                            <li class="department dep-e struktur">
                                                <a class="struktur" href="#" data-toggle="modal"
                                                    data-target="#modalHpd">
                                                    <span class="struktur"><i
                                                            class="fas fa-fw fa-camera"></i><br>Pubmedkraf</span>
                                                </a>
                                            </li>
                                            <li class="department dep-f struktur">
                                                <a class="struktur" href="#" data-toggle="modal" data-target="#modalIt">
                                                    <span class="struktur"><i
                                                            class="fas fa-fw fa-code"></i><br>IT</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                </li>
                                </ul>
                            </figure>
                        </section> -->

        <!-- Modal Ketua -->
        <div class="modal fade" id="modalKetua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Ketua DPM
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 text-center mb-3">
                            <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/M. Riza Fakhrulrizqi.jpg" alt="foto ketua dpm" />
                        </div>
                        <div class="col-12 text-center">
                            <div class="name-person">
                                <span>M. Riza Fakhrulrizqi</span>
                            </div>
                            <p class="mt-1 font-italic font-weight-bold">
                                211910867
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Wakil Ketua -->
        <div class="modal fade" id="modalWakilKetua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Wakil Ketua DPM
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 text-center mb-3">
                            <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Alwan Rahmana Subian.jpg" alt="foto wakil ketua dpm" />
                        </div>
                        <div class="col-12 text-center">
                            <div class="name-person">
                                <span>Alwan Rahmana Subian </span>
                            </div>
                            <p class="mt-1 font-italic font-weight-bold">
                                222011374
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Sekretaris -->
        <div class="modal fade" id="modalSekretaris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Sekretaris
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="col-12 text-center mb-3">
                                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Wafi Aulia Tsabitah.jpg" alt="foto sekretaris dpm" />
                                </div>
                                <div class="col-12 text-center">
                                    <div class="name-person">
                                        <span>Wafi Aulia Tsabitah</span>
                                    </div>
                                    <p class="mt-1 font-italic font-weight-bold">
                                        222212910
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 text-center mb-3">
                                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Aulia Azzahra.jpg" alt="foto sekretaris dpm" />
                                </div>
                                <div class="col-12 text-center">
                                    <div class="name-person">
                                        <span>Aulia Azzahra</span>
                                    </div>
                                    <p class="mt-1 font-italic font-weight-bold">
                                        222111933
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Bendahara -->
        <div class="modal fade" id="modalBendahara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Bendahara
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="col-12 text-center mb-3">
                                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Faradilla Chairin Ninda.jpg" alt="foto bendahara dpm" />
                                </div>
                                <div class="col-12 text-center">
                                    <div class="name-person">
                                        <span>Faradilla Chairin Ninda</span>
                                    </div>
                                    <p class="mt-1 font-italic font-weight-bold">
                                        222212924
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 text-center mb-3">
                                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Adinda Batrisyibazla.jpg" alt="foto bendahara dpm" />
                                </div>
                                <div class="col-12 text-center">
                                    <div class="name-person">
                                        <span>Adinda Batrisyibazla</span>
                                    </div>
                                    <p class="mt-1 font-italic font-weight-bold">
                                        212212444
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Komisi 1 -->
        <div class="modal fade" id="modalKomisiSatu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Komisi 1
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mb-3">Ketua Komisi 1</h4>
                        <div>
                            <div class="col-12 text-center mb-3">
                                <img class="photo-ketua-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Guntur Ilham.jpg" alt="foto ketua komisi 1" />
                            </div>
                            <div class="col-12 text-center">
                                <div class="name-person">
                                    <span>Muhammad Guntur Ilham</span>
                                </div>
                                <p class="mt-1 font-italic font-weight-bold">
                                    212011323
                                </p>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Anggota Komisi 1</h4>
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Farhan Ngkal Aslalsabil.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Farhan Ngkal Aslalsabil</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212597
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Ilham Dwi Kuncoro.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Ilham Dwi Kuncoro</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112212660
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/La Ode Farhan Rezka.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">La Ode Farhan Rezka</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222212695
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Afnan Alfian.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad Afnan Alfian</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112201
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212112200
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Chainur Ar Rasyid.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Chainur Ar Rasyid</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222111966
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Rafii Al Muflih.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad Rafii Al Muflih</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011535
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Gilang Wahyu Prasetyo.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Gilang Wahyu Prasetyo</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222011750
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Adham Malay Japany.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Adham Malay Japany</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011522
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Viery Zanki Kurniaffandi.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Viery Zanki Kurniaffandi</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212112298
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Yusuf Naufal.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad Yusuf Naufal</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            211910994
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Albert Assidiq.jpg" alt="foto anggota komisi 1" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Albert Assidiq</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            221910956
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Komisi 2 -->
        <div class="modal fade" id="modalKomisiDua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Komisi 2
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mb-3">Ketua Komisi 2</h4>
                        <div>
                            <div class="col-12 text-center mb-3">
                                <img class="photo-ketua-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Abdul Azis Daffa Yanuar.jpg" alt="foto ketua komisi 2" />
                            </div>
                            <div class="col-12 text-center">
                                <div class="name-person">
                                    <span>Abdul Azis Daffa Yanuar</span>
                                </div>
                                <p class="mt-1 font-italic font-weight-bold">
                                    212011660
                                </p>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Anggota Komisi 2</h4>
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muh. Nur Afrizal.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muh. Nur Afrizal</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222212738
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Yoga Regita Hamzah Ashari.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Yoga Regita Hamzah Ashari
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222212924
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Reynadi Wisnu Wardana.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Reynadi Wisnu Wardana
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212845
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Excell Ramadhan.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Ahmad Excell Ramadhan
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212458
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Yoga Pratama.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Yoga Pratama</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112419
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Maulana Kusuma Ramadhan.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Maulana Kusuma Ramadhan
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212112181
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Angga Prayoga.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Angga Prayoga</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212111897
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad ‘Anil ‘Aziz.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad ‘Anil ‘Aziz
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212112204
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Ainul Baharuddin.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Ainul Baharuddin
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112111866
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Steven Fitraeka Setiawan Sanjaya.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Steven Fitraeka Setiawan Sanjaya
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            221910702
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Aulia Rahman.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Ahmad Aulia Rahman</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011590
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Akhir Mubarok.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Akhir Mubarok</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222011698
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rifki Arya Farezi.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rifki Arya Farezi</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            221911077
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rasya Khalil Gibran.jpg" alt="foto anggota komisi 2" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rasya Khalil Gibran
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            211911020
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Komisi 3 -->
        <div class="modal fade" id="modalKomisiTiga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Komisi 3
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mb-3">Ketua Komisi 3</h4>
                        <div>
                            <div class="col-12 text-center mb-3">
                                <img class="photo-ketua-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Ade Rifqy Setyawan.jpg" alt="foto ketua komisi 3" />
                            </div>
                            <div class="col-12 text-center">
                                <div class="name-person">
                                    <span>Ade Rifqy Setyawan</span>
                                </div>
                                <p class="mt-1 font-italic font-weight-bold">
                                    222011538
                                </p>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Anggota Komisi 3</h4>
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rizky Alif Ichwanto.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rizky Alif Ichwanto</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222212857
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rizal Dwi Syahputra.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rizal Dwi Syahputra
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212855
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rahmat Hidayat.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rahmat Hidayat
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212829
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Revi.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Revi </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112112315
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rangga Amriz Sahputra.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rangga Amriz Sahputra
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112112307
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Yudika Haris Solihin.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Yudika Haris Solihin
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112112422
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Dhymas Adhyza Rayhan.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Dhymas Adhyza Rayhan
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222111988
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Halim Nur Jamaluddin.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Halim Nur Jamaluddin
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212112084
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Wildhan Surya Putra.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Wildhan Surya Putra
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011268
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Geraldi Yosandri.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad Geraldi Yosandri
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011625
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Dicky Ferdiansya.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Dicky Ferdiansyah</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112011289
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Azhari.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad Azhari
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            211910756
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Syaikhul Ibad.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Syaikhul Ibad
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            211911004
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Farchany Achmad.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Farchany Achmad
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            211910762
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Ilham Arya Dhuta Zain.jpg" alt="foto anggota komisi 3" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Ilham Arya Dhuta Zain</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212659
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Komisi 4 -->
        <div class="modal fade" id="modalKomisiEmpat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Komisi 4
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mb-3">Ketua Komisi 4</h4>
                        <div>
                            <div class="col-12 text-center mb-3">
                                <img class="photo-ketua-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Saifullah Fatah.jpg" alt="foto ketua komisi 4" />
                            </div>
                            <div class="col-12 text-center">
                                <div class="name-person">
                                    <span>Saifullah Fatah</span>
                                </div>
                                <p class="mt-1 font-italic font-weight-bold">
                                    212011313
                                </p>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Anggota Komisi 4</h4>
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Anggra Dwi Prasetya.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Anggra Dwi Prasetya
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112212503
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Wahyu Febrian.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Ahmad Wahyu Febrian
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112212465
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Berniko Surya Wibawa.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Berniko Surya Wibawa
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212536
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Fajar Malik Noor Ahmad.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Fajar Malik Noor Ahmad
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112112037
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Feza Raffa Arnanda.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Feza Raffa Arnanda
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112058
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rafael Agintha Tarigan.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rafael Agintha Tarigan
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212112298
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Mayrlan Rante Palalangan.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Mayrlan Rante Palalangan
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            112011440
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Aulia Rahman.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Aulia Rahman
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011541
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Reyhan Fadhilla.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad Reyhan Fadhilla
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011422
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Aldi Firmansyah.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Aldi Firmansyah
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            211911114
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Haryuningtyas Ramadhani Putri.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Haryuningtyas Ramadhani Putri
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            221910826
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Billy Aufa Alfarisy.jpg" alt="foto anggota komisi 4" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Billy Aufa Alfarisy
                                            </span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            221911058
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal HPD -->
        <div class="modal fade" id="modalHpd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Pubmedkraf
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mb-3">Koordinator Pubmedkraf</h4>
                        <div>
                            <div class="row">
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Zhafara Alfa Abdillah.jpg" alt="foto tim Content Writer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Zhafara Alfa Abdillah</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011450
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Content Writer</h4>
                        <div>
                            <div class="row">
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Adinda Safira Santoso Ayuningrum.jpg" alt="foto tim Content Writer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Adinda Safira Santoso Ayuningrum</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212445
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Dimas Haafizh Rahman.jpg" alt="foto tim Content Writer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Dimas Haafizh Rahman</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222212569
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Sinta Nuriyah.jpg" alt="foto tim Content Writer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Sinta Nuriyah</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011472
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Graphic Designer</h4>
                        <div>
                            <div class="row">
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Nisywa Zahra Indrasiwi.jpg" alt="foto tim Graphic Designer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Nisywa Zahra Indrasiwi</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112265
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Erika Azizah Khoirunnisa.jpg" alt="foto tim Graphic Designer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Erika Azizah Khoirunnisa</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112022
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Janet Amelia.jpg" alt="foto tim Graphic Designer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Janet Amelia</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212212677
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Putri Safira Shalsabila.jpg" alt="foto tim Graphic Designer"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Putri Safira Shalsabila</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212112293
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Video Editor</h4>
                        <div>
                            <div class="row">
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Kharisma Pandu Utama.jpg" alt="foto tim Video Editor"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Kharisma Pandu Utama</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            2111910794
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Marcsha Hanifa Anugrah Pradhana.jpg" alt="foto tim Video Editor"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Marcsha Hanifa Anugrah Pradhana</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            212011629
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Aditya Widiyanto Nugroho.jpg" alt="foto tim Video Editor"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Aditya Widiyanto Nugroho</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222111845
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <h4 class="text-center mb-3">Admin</h4>
                        <div>
                            <div class="row">
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Febrina Br Perangin-Angin.jpg" alt="foto tim Admin"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Febrina Br Perangin-Angin</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222212608
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal IT -->
        <div class="modal fade" id="modalIt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">IT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mb-3">Koordinator IT</h4>
                        <div>
                            <div class="row">
                                <div class="col-4 mx-auto">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Rio Manuppak Siahaan.jpg" alt="foto tim IT"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Rio Manuppak Siahaan</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112324
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />

                        <h4 class="text-center mb-3">Anggota IT</h4>
                        <div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Egi Nawwar Sukma.jpg" alt="foto anggota komisi 4"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Egi Nawwar Sukma</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112004
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Nur Alfian Syarif.jpg" alt="foto anggota komisi 4"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">Muhammad Nur Alfian Syarif</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222112218
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12 text-center mb-3">
                                        <!-- <img class="photo-anggota-komisi" src="https://dpm.stis.ac.id/assets/img/struktur/M. Mahbubillah.jpg" alt="foto anggota komisi 4"> -->
                                        <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="name-person">
                                            <span class="name-anggota-komisi">M. Mahbubillah</span>
                                        </div>
                                        <p class="mt-1 font-italic font-weight-bold">
                                            222011569
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of container-fluid-->
</div>

<?php $this->endSection(); ?>