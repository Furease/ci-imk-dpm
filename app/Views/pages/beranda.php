<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<?php

// create dummy data json sambatan with variabel $data_complaint with atribuyt id, periode, kampus, website, ormawa, pengurus
$data_sambatan = '{"sambatan":[
                    {   "id":1,
                        "periode": "2022/2023",
                        "kampus": "40",
                        "website": "39",
                        "ormawa": "72",
                        "pengurus": "36"
                    },
                    {   "id":2,
                        "periode": "2021/2022",
                        "kampus": "49",
                        "website": "35",
                        "ormawa": "70",
                        "pengurus": "66"
                    },
                    {   "id":3,
                        "periode": "2020/2021",
                        "kampus": "48",
                        "website": "37",
                        "ormawa": "75",
                        "pengurus": "36"
                    }
                ]}';

// convert json to array
$sambatan = json_decode($data_sambatan, true);
// dd($sambatan);

// create dummy data json data with variable $data_news with atribut newsId, judul, link, deskripsi, image, tanggal
$data_news = '{"news":[
                    {   "newsId":1,
                        "judul": "SIDANG UMUM II DEWAN PERWAKILAN MAHASISWA POLSTAT STIS T.A. 2022/2023",
                        "penulis": "Pengurus DPM 2022/2023",
                        "deskripsi": "Dalam rangka Penetapan Anggaran Imapolstat dalam Sidang Umum II DPM 2022/2023, Kami mengundang rekan-rekan sekalian untuk hadir pada Sidang Umum II DPM 2022/2023 yang akan dilaksanakan pada:http://127.0.0.1:3000/aspirasi.html Hari,Tanggal: Senin, Selasa, dan Kamis, 27-28 Februari dan 2 Maret 2023 Waktu: 16.15 WIB - selesai Tempat : Auditorium Polstat STIS DC : PDA Diwajibkan kepada seluruh anggota DPM 2022/2023",
                        "image": "https://dpm.stis.ac.id/assets/img/pengumuman/Sidang_Umum_II1.png",
                        "tanggal": "2021-08-01"
                    },
                    {   "newsId":2,
                        "judul": "PERINGATAN ISRA\' MI\'RAJ NABI MUHAMMAD SAW 1444 H",
                        "penulis": "Pengurus DPM 2022/2023",
                        "deskripsi": "Assalamualaikum Warahmatullahi Wabarakatuh Halo rekan-rekan Aspician Malam 27 Rajab merupakan salah satu bukti dari kebesaran Allah SWT. Melalui kuasa-Nya, Rasullah menempuh perjalan spiritual dengan jarak ribuan kilometer dari Masjidil Haram ke Masjidil Aqsa dan dilanjutkan ke Sidratul Muntaha. Perjalanan yang menembus langit ketujuh itu hanya ditempuh dalam waktu satu malam atas kekuasaan Allah SWT. Persitiwa Isra Mi\'raj hendaknya menjadi pengingat dan motivasi untuk senantiasa memperbaiki ibadah, mempertebal keimanan, dan menyempurnakan ketakwaan kepada Allah SWT. Mari jadikan momentum ini sebagai sarana untuk memperbaiki diri ke arah yang lebih baik. Semoga hikmah dari peristiwa Isra Mi\'raj dapat menjadi bekal kita di dunia dan akhirat.",
                        "image": "https://dpm.stis.ac.id/assets/img/pengumuman/WhatsApp_Image_2023-02-18_at_14_18_44.jpeg",
                        "tanggal": "2021-09-01"
                    },
                    {  "newsId":3,
                        "judul": "SIDANG UMUM II DEWAN PERWAKILAN MAHASISWA POLSTAT STIS T.A. 2022/2023",
                        "penulis": "Pengurus DPM 2022/2023",
                        "deskripsi": "Dalam rangka Penetapan Anggaran Imapolstat dalam Sidang Umum II DPM 2022/2023, Kami mengundang rekan-rekan sekalian untuk hadir pada Sidang Umum II DPM 2022/2023 yang akan dilaksanakan pada:http://127.0.0.1:3000/aspirasi.html Hari,Tanggal: Senin, Selasa, dan Kamis, 27-28 Februari dan 2 Maret 2023 Waktu: 16.15 WIB - selesai Tempat : Auditorium Polstat STIS DC : PDA Diwajibkan kepada seluruh anggota DPM 2022/2023",
                        "image": "https://dpm.stis.ac.id/assets/img/pengumuman/Sidang_Umum_II1.png",
                        "tanggal": "2021-10-01"
                    }
                ]}';


// convert json to array
$berita = json_decode($data_news, true);
// dd($news);
?>
<!-- Begin Page Content -->
<div class="container-fluid bg-white mb-5">

    <!-- Page Heading -->

    <h2 class="mx-0"><b>Selamat datang,</b> </h2>
    <h4 class="mb-4">Achmad Arfiandis Abdi Pradana</h4>


    <div class="row">
        <div class="col-sm-auto align-self-center"><b>Total Sambatan</b></div>
        <div class="col align-self-center border-top border-primary d-none d-sm-block"></div>
        <div class="col-sm-auto align-self-center dropdown">
            <button id="btn-periode" class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Periode
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item dropdown-periode font-barlow">2022/2023</a>
                <a class="dropdown-item dropdown-periode font-barlow">2021/2022</a>
                <a class="dropdown-item dropdown-periode font-barlow">2020/2021</a>
            </div>
        </div>
    </div>

    <p>
        <!-- total sambatan -->
        <b id="sambatan-total" class="font-barlow">
            <?php echo $sambatan["sambatan"][0]["kampus"] + $sambatan["sambatan"][0]["website"] + $sambatan["sambatan"][0]["ormawa"] + $sambatan["sambatan"][0]["pengurus"] ?> sambatan
        </b>
    </p>

    <!-- Card Content -->
    <div class="row mb-4">

        <!-- Kampus -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-abu border-0">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="card col-auto mr-3 bg-birulaut py-2 px-4">
                            <i class="fas fa-fw fa-building fa-2x text-primary"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="h6 font-weight-bold text-black mb-1 font-barlow">
                                Kampus
                            </div>
                            <div id="sambatan-kampus" class="mb-0 text-black font-barlow">
                                <?= $sambatan["sambatan"][0]["kampus"] ?> sambatan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Website DPM -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-abu border-0">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="card col-auto mr-3 bg-birulaut py-2 px-4">
                            <i class="fas fa-globe fa-2x text-primary"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="h6 font-weight-bold text-black mb-1 font-barlow">
                                Website DPM
                            </div>
                            <div id="sambatan-website" class="mb-0 text-black font-barlow">
                                <?= $sambatan["sambatan"][0]["website"] ?> sambatan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ormawa  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-abu border-0">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="card col-auto mr-3 bg-birulaut py-2 px-4">
                            <i class="fas fa-sitemap fa-2x text-primary"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="h6 font-weight-bold text-black mb-1 font-barlow">
                                Ormawa
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div id="sambatan-ormawa" class="mb-0 mr-3 text-black font-barlow">
                                        <?= $sambatan["sambatan"][0]["ormawa"] ?> sambatan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pengurus Tingkat -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2 bg-abu border-0">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="card col-auto mr-3 bg-birulaut py-2 px-4">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="h6 font-weight-bold text-black mb-1 font-barlow">
                                Pengurus Tingkat</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div id="sambatan-pengurus" class="mb-0 mr-3 text-black font-barlow">
                                        <?= $sambatan["sambatan"][0]["pengurus"] ?> sambatan
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Card Content -->

    <div class="row mb-4">

        <div class="col-sm-auto align-self-center"><b>Berita DPM</b></div>
        <div class="col align-self-center border-top border-primary d-none d-sm-block"></div>
        <div class="row mx-2">
            <div class="align-self-center dropdown my-2 mx-1">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bulan
                </button>
                <!-- dont close when clicked  width 100% -->
                <div style="width: 256px;" class="dropdown-menu animated--fade-in dropdown-menu-right" aria-labelledby="dropdownMenuButton" onclick="event.stopPropagation();">
                    <!-- checkbox in dropdown -->
                    <div class="row mx-2">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="januari" value="1">
                                <label class="custom-control-label" for="januari">Januari</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="februari" value="2">
                                <label class="custom-control-label" for="februari">Februari</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="maret" value="3">
                                <label class="custom-control-label" for="maret">Maret</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="april" value="4">
                                <label class="custom-control-label" for="april">April</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="mei" value="5">
                                <label class="custom-control-label" for="mei">Mei</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="juni" value="6">
                                <label class="custom-control-label" for="juni">Juni</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="juli" value="7">
                                <label class="custom-control-label" for="juli">Juli</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="agustus" value="8">
                                <label class="custom-control-label" for="agustus">Agustus</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="september" value="9">
                                <label class="custom-control-label" for="september">September</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="oktober" value="10">
                                <label class="custom-control-label" for="oktober">Oktober</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="november" value="11">
                                <label class="custom-control-label" for="november">November</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-month" id="desember" value="12">
                                <label class="custom-control-label" for="desember">Desember</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-self-center dropdown mx-1">

                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tahun
                </button>

                <div class="dropdown-menu animated--fade-in dropdown-menu-right" aria-labelledby="dropdownMenuButton" onclick="event.stopPropagation();">
                    <!-- checkbox in dropdown -->
                    <div class="row mx-2">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-year" id="2020" value="2020">
                                <label class="custom-control-label font-barlow" for="2020">2020</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-year" id="2021" value="2021">
                                <label class="custom-control-label font-barlow" for="2021">2021</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input filter-checkbox filter-checkbox-year" id="2022" value="2022">
                                <label class="custom-control-label font-barlow" for="2022">2022</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="news-container" class="row">
        <?php foreach ($berita['news'] as $b) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card bg-transparent border-0">
                    <div class="card bg-birulaut border-0 p-2">
                        <div class="text-center img-fluid crop">
                            <img class="card-img-top" src="<?= $b['image'] ?>" alt="<?= $b['judul'] ?>">
                        </div>
                        <div class="card-body">
                            <h6 id="news-title" class="text-center font-barlow font-weight-bold text-black">
                                <?= $b["judul"] ?>
                            </h6>
                            <!-- limit the paragraph so it doest take too much space -->
                            <p id="news-text" class="card-text limited-text font-barlow">
                                <?= $b["deskripsi"] ?>
                            </p>
                            <ul class="list-group list-group-flush">
                                <li class="bg-birulaut list-group-item align-self-center p-0">
                                    <button id="modal-btn" type="button" class="border-0 p-2 btn badge btn-primary view">Selengkapnya</button>
                                </li>
                            </ul>

                            <!-- hidden var  -->
                            <input type="hidden" id="news-tanggal" value="<?= $b["tanggal"] ?>">
                            <input type="hidden" id="news-penulis" value="<?= $b["penulis"] ?>">
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /.container-fluid -->

<div class="modal fade" id="tampilPengumumanAdminModal" tabindex="-1" role="dialog" aria-labelledby="tampilPengumumanAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card shadow">

                <div class="card-header border-0 pt-3 pb-1 d-flex flex-row align-items-center justify-content-between" style="background-color: #fff;">
                    <div class="text-center mx-auto">
                        <h6 id="modal-title" class="m-0 font-weight-bold text-center text-gray-900 font-barlow"></h6>
                    </div>
                    <div class="text-right">
                        <a class="close btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="row m-0 p-0">
                        <div class="col-6 pl-0">
                            <i class="fas fa-calendar-alt fa-sm mr-1 m-0 "></i>
                            <small>
                                <span id="modal-date" class="text-left m-0 p-0 font-barlow">
                                    25 Juli 2023
                                </span>
                            </small>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fas fa-pen-nib fa-sm mr-1 m-0"></i>
                            <small>
                                <span id="modal-writer" class=" m-0 p-0 font-barlow">
                                    Pengurus DPM
                                </span>
                            </small>
                        </div>
                    </div>
                    <!-- hr thicker -->
                    <hr class="sidebar-divider mt-1 mb-2">
                    <!-- text justify -->
                    <div id="modal-text" class="text-justify font-barlow">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // hover mouse clickable in dropdown periode
    $('.dropdown-periode').hover(function() {
        $(this).css('cursor', 'pointer');
    });

    // hover mouse clickable in dropdown news
    $('.custom-control-label').hover(function() {
        $(this).css('cursor', 'pointer');
    });


    $('.dropdown-periode').click(function() {
        var periode = $(this).text();
        // active class
        $('.dropdown-periode').removeClass('active');
        $(this).addClass('active');
        $('#btn-periode').text(periode);

        var data = <?php echo json_encode($sambatan); ?>;

        var filteredData = data.sambatan.filter(function(item) {
            return item.periode === periode;
        });

        // console.log(filteredData);
        var sambatan_kampus = filteredData[0].kampus;
        var sambatan_website = filteredData[0].website;
        var sambatan_ormawa = filteredData[0].ormawa;
        var sambatan_pengurus = filteredData[0].pengurus;
        var sambatan_total = Number(sambatan_kampus) + Number(sambatan_website) + Number(sambatan_ormawa) + Number(sambatan_pengurus);

        $('#sambatan-total').text(sambatan_total + " sambatan");
        $('#sambatan-kampus').text(sambatan_kampus + " sambatan");
        $('#sambatan-website').text(sambatan_website + " sambatan");
        $('#sambatan-ormawa').text(sambatan_ormawa + " sambatan");
        $('#sambatan-pengurus').text(sambatan_pengurus + " sambatan");

    });

    var selectedDateMonth = [];
    var selectedDateYear = [];
    $('.filter-checkbox-month').change(function() {
        selectedDateMonth = [];
        // console.log(selectedDateMonth);
        $('.filter-checkbox-month:checked').each(function() {
            selectedDateMonth.push($(this).val());
        });
        selectedDateMonth.forEach(function(month, index) {
            if (month < 10) {
                selectedDateMonth[index] = "0" + month;
            }
        });
    });

    $('.filter-checkbox-year').change(function() {
        selectedDateYear = [];
        $('.filter-checkbox-year:checked').each(function() {
            selectedDateYear.push($(this).val());
        });
        // console.log(selectedDateYear);
    });

    function filterData(data) {
        // if month selected and year is not selected filter only month
        if (selectedDateMonth.length > 0 && selectedDateYear.length == 0) {
            selectedDateMonth.forEach(function(month) {
                selectedDate.push(month);
            });

            var filteredData = data.news.filter(function(item) {
                return selectedDate.includes(item.tanggal.substring(5, 7));
            });
        }

        // if year selected and month is not selected filter only year
        if (selectedDateMonth.length == 0 && selectedDateYear.length > 0) {
            selectedDateYear.forEach(function(year) {
                selectedDate.push(year);
            });

            var filteredData = data.news.filter(function(item) {
                return selectedDate.includes(item.tanggal.substring(0, 4));
            });
        }

        // if month and year selected filter both

        if (selectedDateMonth.length > 0 && selectedDateYear.length > 0) {
            selectedDateMonth.forEach(function(month) {
                selectedDateYear.forEach(function(year) {
                    selectedDate.push(year + "-" + month);
                });
            });

            var filteredData = data.news.filter(function(item) {
                return selectedDate.includes(item.tanggal.substring(0, 7));
            });
        }

        // if no data then show all data
        if (selectedDateMonth.length == 0 && selectedDateYear.length == 0) {
            var filteredData = data.news;
        }

        return filteredData;
    }

    var selectedDate = [];
    $('.filter-checkbox').change(function() {
        selectedDate = [];


        // console.log(selectedDate);
        var data = <?php echo json_encode($berita); ?>;
        // console.log(data);

        var filteredData = filterData(data);

        // console.log(filteredData);

        var html = '';
        filteredData.forEach(function(item) {
            html += '<div class="col-lg-4 col-md-6 mb-4">';
            html += '<div class="card bg-transparent border-0">';
            html += '<div class="card bg-birulaut border-0 p-2">';
            html += '<div class="text-center img-fluid crop">';
            html += '<img class="card-img-top" src="' + item.image + '" alt="">';
            html += '</div>';
            html += '<div class="card-body">';
            html += '<h6 id="news-title" class="text-center">' + item.judul + '</h6>';
            html += '<p id="news-text" class="card-text limited-text">' + item.deskripsi + '</p>';
            html += '<ul class="list-group list-group-flush">';
            html += '<li class="bg-birulaut list-group-item align-self-center p-0">';
            html += '<button id="modal-btn" type="button" class="border-0 p-2 badge badge-primary view">Selengkapnya</button>';
            html += '</li>';
            html += '</ul>';
            html += '<input type="hidden" id="news-tanggal" value="' + item.tanggal + '">';
            html += '<input type="hidden" id="news-penulis" value="' + item.penulis + '">';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
        });
        $('#news-container').html(html);
    });
</script>

<?php $this->endSection(); ?>