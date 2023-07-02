<?php

use function Composer\Autoload\includeFile;

$this->extend('layout'); ?>
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
    <div class="row mb-3 justify-content-center">
      <img class="rounded-circle" style="max-width: 150px;" src="https://dpm.stis.ac.id/assets/img/profile/dpm.png" />
    </div>

    <div class="accordion accordion-profile-dpm">
      <div class="card">
        <div class="card-header bg-white">
          <button class="btn bg-primary rounded-pill w-75" type="button" data-toggle="collapse" data-target="#definisi" aria-expanded="false" aria-controls="definisi">
            <div class="row justify-content-around align-items-center">
              <div class="col-sm-auto text-white">
                <i class="fas fa-md fa-users"></i>
              </div>
              <div class="col-sm-auto text-white h5 mb-0 p-0 ml-2 font-barlow">
                Dewan Perwakilan Mahasiswa
              </div>
              <div class="col-sm-auto ml-auto" style="color:#EFEFEF">
                <i class="fa fa-lg fa-chevron-circle-right"></i>
              </div>
            </div>
          </button>
        </div>

        <div class="collapse bg-white" id="definisi">
          <div class="card card-body text-dark py-2" style="background-color: #CDDAFF;">
            <div class="ml-5 mr-3 font-barlow">
              Merupakan organisasi internal kampus Politeknik Statistika
              STIS yang menjalankan fungsi legislatif
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header bg-white">
          <button class="btn bg-warning rounded-pill w-75" type="button" data-toggle="collapse" data-target="#visi" aria-expanded="false" aria-controls="visi">
            <div class="row justify-content-around align-items-center">
              <div class="col-sm-auto text-white">
                <i class="fas fa-lg fa-crosshairs"></i>
              </div>
              <div class="col-sm-auto text-white h5 mb-0 p-0 ml-2 mr-auto font-barlow">
                Visi dan Misi
              </div>
              <div class="col-sm-auto ml-auto" style="color: #FFE9CA;">
                <i class="fa fa-lg fa-chevron-circle-right"></i>
              </div>
            </div>
          </button>
        </div>

        <div class="collapse bg-white" id="visi">
          <div class="card card-body text-dark py-2" style="background-color: #FFE3BC;">
            <div class="ml-5 mr-3">
              <strong>Visi</strong>
              <p class="text-justify font-barlow">Menjadikan Dewan Perwakilan Mahasiswa Politeknik Statistika STIS sebagai
                organisasi /
                majelis permusyawaratan mahasiswa yang kredibel dalam mengemban tanggung jawab
                secara inspiratif, kontributif, komunikatif dan juga selaras
                dengan Spiritualitas.
              </p>
              <strong>Misi</strong>
              <ol class="text-justify font-barlow">
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

      <div class="card">
        <div class="card-header bg-white">
          <button class="btn rounded-pill w-75" type="button" data-toggle="collapse" data-target="#struktur" aria-expanded="false" aria-controls="struktur">
            <div class="row justify-content-around align-items-center">
              <div class="col-sm-auto ">
                <i class="fas fa-md fa-sitemap"></i>
              </div>
              <div class="col-sm-auto  h5 mb-0 p-0 ml-2 font-barlow">
                Struktur Organisasi
              </div>
              <div class="col-sm-auto ml-auto">
                <i class="fa fa-lg fa-chevron-circle-right"></i>
              </div>
            </div>
          </button>
        </div>

        <div class="collapse bg-white" id="struktur">
          <div class="card card-body text-dark py-2 overflow-scroll">
            <div class="mx-5" style="width: 682.15px;">
              <?php
              include '../app/Views/components/struktur-dpm.php';
              ?>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="modal-profil">
      <!-- Modal Ketua -->
      <div class="modal fade" id="modalKetua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Ketua DPM
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="card mx-auto" style="width: fit-content">
                <div class="card-body text-center">
                  <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/M. Riza Fakhrulrizqi.jpg" alt="foto ketua dpm" />
                </div>
                <div class="popup-footer">
                  <div class="mx-2">
                    <p class="nama">M. Riza Fakhrulrizqi</p>
                    <div>
                      <hr class="border-top border-light m-0" />
                    </div>
                    <p class="nim">211910867 - 4ST</p>
                  </div>
                </div>
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Wakil Ketua DPM
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="card mx-auto" style="width: fit-content">
                <div class="card-body text-center">
                  <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Alwan Rahmana Subian.jpg" alt="foto wakil ketua dpm" />
                </div>
                <div class="popup-footer">
                  <div class="mx-2">
                    <p class="nama">Alwan Rahmana Subian </p>
                    <div>
                      <hr class="border-top border-light m-0" />
                    </div>
                    <p class="nim">
                      222011374 - 4KS
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Sekretaris -->
      <div class="modal fade" id="modalSekretaris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Sekretaris
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="row justify-content-around">
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Wafi Aulia Tsabitah.jpg" alt="foto sekretaris dpm" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Wafi Aulia Tsabitah</p>
                      <div>
                        <hr class="border-top border-light m-0" />
                      </div>
                      <p class="nim">
                        222212910
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Aulia Azzahra.jpg" alt="foto sekretaris dpm" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Aulia Azzahra</p>
                      <hr class="border-top border-light m-0" />
                      <p class="nim">
                        222111933
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Bendahara -->
      <div class="modal fade" id="modalBendahara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Bendahara
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="row justify-content-around">
                <div class="card">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Faradilla Chairin Ninda.jpg" alt="foto bendahara dpm" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Faradilla Chairin Ninda</p>
                      <div>
                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222212924
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Adinda Batrisyibazla.jpg" alt="foto bendahara dpm" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Adinda Batrisyibazla</p>
                      <hr class="border-top border-light m-0" />
                      <p class="nim">
                        212212444
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Komisi 1 -->
      <div class="modal fade" id="modalKomisiSatu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Ketua Komisi I
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Guntur Ilham.jpg" alt="foto ketua komisi 1" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Muhammad Guntur Ilham</p>
                      <div>
                        <hr class="border-top border-light m-0" />
                      </div>
                      <p class="nim">
                        212011323
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Anggota Komisi I
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-around mx-5">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Farhan Ngkal Aslalsabil.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Farhan Ngkal Aslalsabil</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212597
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ilham Dwi Kuncoro.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ilham Dwi Kuncoro</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112212660
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/La Ode Farhan Rezka.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">La Ode Farhan Rezka</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222212695
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Afnan Alfian.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad Afnan Alfian</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222112201
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112200
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Chainur Ar Rasyid.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Chainur Ar Rasyid</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222111966
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Rafii Al Muflih.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad Rafii Al Muflih</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011535
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Gilang Wahyu Prasetyo.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Gilang Wahyu Prasetyo</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222011750
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Adham Malay Japany.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Adham Malay Japany</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011522
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Viery Zanki Kurniaffandi.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Viery Zanki Kurniaffandi</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112298
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Yusuf Naufal.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad Yusuf Naufal</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          211910994
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Albert Assidiq.jpg" alt="foto anggota komisi 1" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Albert Assidiq</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
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
      </div>

      <!-- Modal Komisi 2 -->
      <div class="modal fade" id="modalKomisiDua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Ketua Komisi 2
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="d-flex justify-content-center ">
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Abdul Azis Daffa Yanuar.jpg" alt="foto ketua komisi 2" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Abdul Azis Daffa Yanuar</p>
                      <hr class="border-top border-light m-0" />
                      <p class="nim">212011660</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Anggota Komisi 2
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-around mx-5">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muh. Nur Afrizal.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muh. Nur Afrizal</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222212738
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Yoga Regita Hamzah Ashari.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Yoga Regita Hamzah Ashari
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222212924
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Reynadi Wisnu Wardana.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Reynadi Wisnu Wardana
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212845
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Excell Ramadhan.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ahmad Excell Ramadhan
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212458
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Yoga Pratama.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Yoga Pratama</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222112419
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Maulana Kusuma Ramadhan.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Maulana Kusuma Ramadhan
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112181
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Angga Prayoga.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Angga Prayoga</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212111897
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad ‘Anil ‘Aziz.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad ‘Anil ‘Aziz
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112204
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ainul Baharuddin.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ainul Baharuddin
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112111866
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Steven Fitraeka Setiawan Sanjaya.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Steven Fitraeka Setiawan Sanjaya
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          221910702
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Aulia Rahman.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ahmad Aulia Rahman</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011590
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Akhir Mubarok.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Akhir Mubarok</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222011698
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rifki Arya Farezi.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rifki Arya Farezi</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          221911077
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rasya Khalil Gibran.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rasya Khalil Gibran
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
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
      </div>

      <!-- Modal Komisi 3 -->
      <div class="modal fade" id="modalKomisiDua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Ketua Komisi 2
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="d-flex justify-content-center ">
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Abdul Azis Daffa Yanuar.jpg" alt="foto ketua komisi 2" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Abdul Azis Daffa Yanuar</p>
                      <hr class="border-top border-light m-0" />
                      <p class="nim">212011660</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Anggota Komisi 2
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-around mx-5">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muh. Nur Afrizal.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muh. Nur Afrizal</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222212738
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Yoga Regita Hamzah Ashari.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Yoga Regita Hamzah Ashari
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222212924
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Reynadi Wisnu Wardana.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Reynadi Wisnu Wardana
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212845
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Excell Ramadhan.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ahmad Excell Ramadhan
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212458
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Yoga Pratama.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Yoga Pratama</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222112419
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Maulana Kusuma Ramadhan.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Maulana Kusuma Ramadhan
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112181
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Angga Prayoga.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Angga Prayoga</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212111897
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad ‘Anil ‘Aziz.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad ‘Anil ‘Aziz
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112204
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ainul Baharuddin.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ainul Baharuddin
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112111866
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Steven Fitraeka Setiawan Sanjaya.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Steven Fitraeka Setiawan Sanjaya
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          221910702
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Aulia Rahman.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ahmad Aulia Rahman</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011590
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Akhir Mubarok.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Akhir Mubarok</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222011698
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rifki Arya Farezi.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rifki Arya Farezi</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          221911077
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rasya Khalil Gibran.jpg" alt="foto anggota komisi 2" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rasya Khalil Gibran
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
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
      </div>

      <!-- Modal Komisi 3 -->
      <div class="modal fade" id="modalKomisiTiga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Ketua Komisi 3
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ade Rifqy Setyawan.jpg" alt="foto ketua komisi 3" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Ade Rifqy Setyawan</p>



                      <hr class="border-top border-light m-0" />
                      <p class="nim">
                        222011538
                      </p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Anggota Komisi 3
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-around mx-5">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rizky Alif Ichwanto.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rizky Alif Ichwanto</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222212857
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rizal Dwi Syahputra.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rizal Dwi Syahputra
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212855
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rahmat Hidayat.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rahmat Hidayat
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212829
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Revi.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Revi </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112112315
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rangga Amriz Sahputra.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rangga Amriz Sahputra
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112112307
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Yudika Haris Solihin.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Yudika Haris Solihin
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112112422
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Dhymas Adhyza Rayhan.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Dhymas Adhyza Rayhan
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222111988
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Halim Nur Jamaluddin.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Halim Nur Jamaluddin
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112084
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Wildhan Surya Putra.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Wildhan Surya Putra
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011268
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Geraldi Yosandri.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad Geraldi Yosandri
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011625
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Dicky Ferdiansya.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Dicky Ferdiansyah</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112011289
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Azhari.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad Azhari
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          211910756
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Syaikhul Ibad.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Syaikhul Ibad
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          211911004
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Farchany Achmad.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Farchany Achmad
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          211910762
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ilham Arya Dhuta Zain.jpg" alt="foto anggota komisi 3" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ilham Arya Dhuta Zain</p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
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
      </div>

      <!-- Modal Komisi 4 -->
      <div class="modal fade" id="modalKomisiEmpat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Ketua Komisi 4
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="card mb-1">
                  <div class="card-body text-center">
                    <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Saifullah Fatah.jpg" alt="foto ketua komisi 4" />
                  </div>
                  <div class="popup-footer">
                    <div class="mx-2">
                      <p class="nama">Saifullah Fatah</p>
                      <hr class="border-top border-light m-0" />
                      <p class="nim">
                        212011313
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Anggota Komisi 4
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-around mx-5">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Anggra Dwi Prasetya.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Anggra Dwi Prasetya
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112212503
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Ahmad Wahyu Febrian.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Ahmad Wahyu Febrian
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112212465
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Berniko Surya Wibawa.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Berniko Surya Wibawa
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212212536
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Fajar Malik Noor Ahmad.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Fajar Malik Noor Ahmad
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112112037
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Feza Raffa Arnanda.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Feza Raffa Arnanda
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          222112058
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rafael Agintha Tarigan.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rafael Agintha Tarigan
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212112298
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Mayrlan Rante Palalangan.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Mayrlan Rante Palalangan
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          112011440
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Aulia Rahman.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Aulia Rahman
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011541
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Reyhan Fadhilla.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad Reyhan Fadhilla
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          212011422
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Aldi Firmansyah.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Aldi Firmansyah
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          211911114
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Haryuningtyas Ramadhani Putri.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Haryuningtyas Ramadhani Putri
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
                          221910826
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Billy Aufa Alfarisy.jpg" alt="foto anggota komisi 4" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Billy Aufa Alfarisy
                        </p>
                        <div>
                          <hr class="border-top border-light m-0" />
                        </div>
                        <p class="nim">
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
      </div>

      <!-- Modal HPD -->
      <div class="modal fade" id="modalHpd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Koordinator Pubmedkraf
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="card mx-auto">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Zhafara Alfa Abdillah.jpg" alt="foto tim Content Writer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Zhafara Alfa Abdillah</p>
                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          212011450
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Content Writer
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-around mx-5">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Adinda Safira Santoso Ayuningrum.jpg" alt="foto tim Content Writer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Adinda Safira Santoso Ayuningrum</p>
                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          212212445
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Dimas Haafizh Rahman.jpg" alt="foto tim Content Writer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Dimas Haafizh Rahman</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222212569
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Sinta Nuriyah.jpg" alt="foto tim Content Writer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Sinta Nuriyah</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          212011472
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Graphic Designer
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Nisywa Zahra Indrasiwi.jpg" alt="foto tim Graphic Designer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Nisywa Zahra Indrasiwi</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222112265
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Erika Azizah Khoirunnisa.jpg" alt="foto tim Graphic Designer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Erika Azizah Khoirunnisa</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222112022
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Janet Amelia.jpg" alt="foto tim Graphic Designer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Janet Amelia</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          212212677
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Putri Safira Shalsabila.jpg" alt="foto tim Graphic Designer"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Putri Safira Shalsabila</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          212112293
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Video Editor
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Kharisma Pandu Utama.jpg" alt="foto tim Video Editor"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Kharisma Pandu Utama</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          2111910794
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Marcsha Hanifa Anugrah Pradhana.jpg" alt="foto tim Video Editor"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Marcsha Hanifa Anugrah Pradhana</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          212011629
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Aditya Widiyanto Nugroho.jpg" alt="foto tim Video Editor"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Aditya Widiyanto Nugroho</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222111845
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Admin
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Febrina Br Perangin-Angin.jpg" alt="foto tim Admin"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Febrina Br Perangin-Angin</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
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
      </div>

      <!-- Modal IT -->
      <div class="modal fade" id="modalIt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Koordinator IT
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-center">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Rio Manuppak Siahaan.jpg" alt="foto tim IT"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Rio Manuppak Siahaan</p>
                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222112324
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <hr />
                </div>
                <div class="modal-title" id="exampleModalLongTitle">
                  <h3>
                    Anggota IT
                  </h3>
                </div>
                <div class="col">
                  <hr />
                </div>
              </div>
              <div>
                <div class="row justify-content-around mx-5">
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Egi Nawwar Sukma.jpg" alt="foto anggota komisi 4"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Egi Nawwar Sukma</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222112004
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/Muhammad Nur Alfian Syarif.jpg" alt="foto anggota komisi 4"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">Muhammad Nur Alfian Syarif</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
                          222112218
                        </p>

                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="card-body text-center">
                      <!-- <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/M. Mahbubillah.jpg" alt="foto anggota komisi 4"> -->
                      <img class="photo-person" src="https://dpm.stis.ac.id/assets/img/struktur/default-img.png" alt="foto ketua dpm" />
                    </div>
                    <div class="popup-footer">
                      <div class="mx-2">
                        <p class="nama">M. Mahbubillah</p>



                        <hr class="border-top border-light m-0" />
                        <p class="nim">
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
      </div>

      <!-- /.container-fluid -->

    </div>
  </div><!-- End of container-fluid-->
</div>

<?php $this->endSection(); ?>